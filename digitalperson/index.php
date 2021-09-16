<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FingerPrint</title>
    <link href='https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="style.css" type="text/css" />
    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
</head>
<body>
    <div class="container mt-3">
        <div class="row">
            <div class="col">
                <div id="imagediv"></div>
            </div>
            <div class="col-6">
                <div id="status"></div>
                <button class="btn btn-primary" id="start" onclick="Javascript:onStart()">start</button>
                <button class="btn btn-success" id="save">save</button>
            </div>
        </div>
    </div>     
</body>
<script src="es6-shim.js"></script>
<script src="websdk.client.bundle.min.js"></script>
<script src="fingerprint.sdk.min.js"></script>
<script src="app.js"></script>
<script>
    //https://127.0.0.1:9001/connect
    // this.sdk = new Fingerprint.WebApi;
    // var FingerprintSdkTest = (function () {
    // function FingerprintSdkTest() {
    //     this.sdk = new Fingerprint.WebApi;
    // }
    // FingerprintSdkTest.prototype.getDeviceList = function () {
    //         return this.sdk.enumerateDevices();
    //     };
    //     return FingerprintSdkTest;
    // })();
    // window.onload = function () {
    //     test = new FingerprintSdkTest();
    //     var allReaders = test.getDeviceList();    
    //     allReaders.then(function (sucessObj) {
    //         for (i=0;i<sucessObj.length;i++){
    //             console.log(sucessObj[i]);
    //         }
    //     }, function (error){
    //         console.log(error.message);
    //     });
    // }
</script>
</html>