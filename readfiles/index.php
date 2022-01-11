<?php
	
	require('src/vendor/autoload.php');

	use Aws\S3\S3Client;
	use Aws\Exception\AwsException;

	$directorio = 'imgs';
	$ficheros1  = scandir($directorio);
	$ficheros2  = scandir($directorio, 1);

	 ini_set('display_errors', 1);

     ini_set('display_startup_errors', 1);

     error_reporting(E_ALL);
	
	//list_files();
	//print_r(find_all_files($directorio));

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

	function list_files(){
		$client = S3Client::factory(
		  array(
		    'key'    => "AKIA5ZJH55RX63EZR7IZ",
		    'secret' => "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"
		  )
		);

		try {
		  $client->putObject(array(
		    'Bucket'=>'presimap-storage',
		    'Key' =>  's3://presimap-storage/requests/',
		    'SourceFile' => 'imgs/54751.png',
		    'StorageClass' => 'REDUCED_REDUNDANCY'
		  ));

		  echo "success";

		} catch (S3Exception $e) {
		  // Catch an S3 specific exception.
		  echo $e->getMessage();
		}
	}

	function record_result($dir)
	{
		$directorio = 'imgs';

	    foreach($dir as $value)
	    {
	    	$info = pathinfo($value);

	    	$file_name =  basename($value,'.'.$info['extension']);

			print_r($info);

			// El código de muestra siguiente indica cómo funcionan las API de recursos

			// $aws = new Aws(
			// 	aws_access_key_id     => 'AKIA5ZJH55RX63EZR7IZ',
	  //           aws_secret_access_key => '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',
	  //           retry                 => 1
			// );

			// $s3options = [
			// 	'version' => 'latest',
			// 	'region' => '',
			// 	'credentials' => [
			// 		'key' => 'AKIA5ZJH55RX63EZR7IZ',
			// 		'secret' => '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'
			// 	]
			// ];

			// $s3 = new S3Client($s3options);



			// $bucket = $aws->s3->bucket('my-bucket');

			// $object = $bucket->object('image/bird.jpg');

			// echo $object['LastModified'];
			// $object->delete();

			// $bucket->delete();
	    }
	} 

?>