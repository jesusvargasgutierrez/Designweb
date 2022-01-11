<?php
// Bucket Name
  require 'src/vendor/autoload.php';
  use Aws\S3\S3Client;
  use Aws\S3\Exception\S3Exception;
  $bucket = "presimap-test";

  //AWS access info
    if (!defined('awsAccessKey')) define('awsAccessKey', 'AKIA5ZJH55RX63EZR7IZ');
    if (!defined('awsSecretKey')) define('awsSecretKey', "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");

    // Set Amazon s3 credentials
      // $client = S3Client::factory(
      // array(
      //   'version' => 'latest',
      //   'key'    => awsAccessKey,
      //   'secret' => awsSecretKey,
      //   'region' => 'us-west-1'
      //  )
      // );

      $client = new S3Client([
          'region' => 'us-west-1',
          'version' => 'latest',
          'ACL' => 'public-read',
          'credentials' => [
              'key'    => awsAccessKey,
              'secret' => awsSecretKey,
          ],
      ]);
?>