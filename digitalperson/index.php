<?php
    header('Access-Control-Allow-Origin: http://localhost:80');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    hello world    
</body>
<script src="es6-shim.js"></script>
<script src="websdk.client.bundle.min.js"></script>
<script src="fingerprint.sdk.min.js"></script>
<script>
    //https://127.0.0.1:9001/connect
    this.sdk = new Fingerprint.WebApi;
    var FingerprintSdkTest = (function () {
    function FingerprintSdkTest() {
        this.sdk = new Fingerprint.WebApi;
    }
    FingerprintSdkTest.prototype.getDeviceList = function () {
            return this.sdk.enumerateDevices();
        };
        return FingerprintSdkTest;
    })();
    window.onload = function () {
        test = new FingerprintSdkTest();
        var allReaders = test.getDeviceList();    
        allReaders.then(function (sucessObj) {
            for (i=0;i<sucessObj.length;i++){
                console.log(sucessObj[i]);
            }
        }, function (error){
            console.log(error.message);
        });
    }
</script>
</html>