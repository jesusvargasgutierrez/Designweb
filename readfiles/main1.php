<?php
    // Include the SDK using the Composer autoloader
     require 'vendor/autoload.php';
     use Aws\S3\S3Client;
     use Aws\S3\Exception\S3Exception;

     ini_set('display_errors', 1);

     ini_set('display_startup_errors', 1);

     error_reporting(E_ALL);

    include('image_validation.php'); // getExtension Method

    $message='';

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $name = $_FILES['file']['name'];
        $size = $_FILES['file']['size'];
        $tmp = $_FILES['file']['tmp_name'];
        $ext = getExtension($name);

        if(strlen($name) > 0)
        {
            // File format validation
            if(in_array($ext,$valid_formats))
            {
            // File size validation
                if($size<(1024*1024))
                {
                    include('config_s3.php');
                //Rename image name.
                    $image_name_actual = time().".".$ext;

                     try {
                            $client->putObject(array(
                                 'Bucket'=>$bucket,
                                 'Key' =>  $image_name_actual,
                                 'SourceFile' => $tmp,
                                 'StorageClass' => 'REDUCED_REDUNDANCY'
                            ));
                            $message = "S3 Upload Successful.";
                            $s3file='http://'.$bucket.'.s3.amazonaws.com/'.'test';
                            echo "<img src='$s3file'/>";
                            echo 'S3 File URL:'.$s3file;

                        } catch (S3Exception $e) {
                             // Catch an S3 specific exception.
                            echo $e->getMessage();
                        }

                }
                else
                {
                    $message = "Invalid file, please upload image file.";
                }

            }
            else
            {
                $message = "Please select image file.";
            }
        }
    }
?>

//HTML Code
<form action="" method='post' enctype="multipart/form-data">
    Upload image file here <br/><br/>
    <input type='file' name='file'/> <br/> <br/>
    <input type='submit' value='Upload Image'/> <br/><br/>
    <?php echo $message; ?>
</form>