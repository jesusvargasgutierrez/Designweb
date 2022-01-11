<?php
    // Include the SDK using the Composer autoloader
     require 'src/vendor/autoload.php';
     require_once('conexion.php');
     require_once('model/awsimages.php');

     use Aws\S3\S3Client;
     use Aws\S3\Exception\S3Exception;

     ini_set('display_errors', 1);

     ini_set('display_startup_errors', 1);

     error_reporting(E_ALL);

    $directorio = 'imgs';

    record_result(find_all_files($directorio));

    function find_all_files($dir)
    {
        $root = scandir($dir);
        foreach($root as $value)
        {
            if($value === '.' || $value === '..') {continue;}
            if(is_file("$dir/$value")) {$result[]="$dir/$value";continue;}
            foreach(find_all_files("$dir/$value") as $value)
            {
                $result[] = $value;
            }
        }
        return $result;
    }


    function record_result($dir)
    {
        include('image_validation.php');

        $message='';

        foreach($dir as $value)
        {
            $info = pathinfo($value);

            $name =  basename($value,'.'.$info['extension']);

            $ext = $info['extension'];

            if(strlen($name) > 0)
            {
                // File format validation
                if(in_array($ext,$valid_formats))
                {
                    include('config_s3.php');
                    $image_name_actual = time().".".$ext;

                     try {
                            $client->putObject(array(
                                 'Bucket'=>$bucket,
                                 'Key' =>  $image_name_actual,
                                 'SourceFile' => $value,
                                 'StorageClass' => 'REDUCED_REDUNDANCY',
                                 'ACL' => 'public-read'
                            ));

                            $message = "S3 Upload Successful.";

                            $s3file='http://'.$bucket.'.s3.amazonaws.com/'.'test';

                            awsimages::create([
                                'name_old' => $value,
                                'name_new' => $image_name_actual,
                                'path_file' => $info['dirname'].$name,
                                'folder_file' => $info['dirname']
                            ]);

                            echo "<img src='$s3file'/>";
                            echo 'S3 File URL:'.$s3file;
                        } catch (S3Exception $e) {
                             // Catch an S3 specific exception.
                            echo $e->getMessage();
                        }
                }
                else
                {
                    $message = "Please select image file.";
                }
            }
        }
    }
?>