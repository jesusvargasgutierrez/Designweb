var test = null;
var myVal = ""; // Drop down selected value of reader 
var currentFormat = Fingerprint.SampleFormat.PngImage;

var FingerprintSdkTest = (function () {
    function FingerprintSdkTest() {
        var _instance = this;
        this.operationToRestart = null;
        this.acquisitionStarted = false;
        this.sdk = new Fingerprint.WebApi;
        this.sdk.onDeviceConnected = function (e) {
            // Detects if the deveice is connected for which acquisition started
            ////showMessage(error.message);("Scan your finger");
        };
        this.sdk.onDeviceDisconnected = function (e) {
            // Detects if device gets disconnected - provides deviceUid of disconnected device
            //showMessage("Device disconnected");
        };
        this.sdk.onCommunicationFailed = function (e) {
            // Detects if there is a failure in communicating with U.R.U web SDK
            //showMessage("Communinication Failed")
        };
        this.sdk.onSamplesAcquired = function (s) {
            // Sample acquired event triggers this function
                sampleAcquired(s);
        };
        this.sdk.onQualityReported = function (e) {
            // Quality of sample aquired - Function triggered on every sample acquired
                //document.getElementById("qualityInputBox").value = Fingerprint.QualityCode[(e.quality)];
        }

    }

    FingerprintSdkTest.prototype.startCapture = function () {
        if (this.acquisitionStarted) // Monitoring if already started capturing
            return;
        var _instance = this;
        //showMessage("");
        this.operationToRestart = this.startCapture;
        this.sdk.startAcquisition(currentFormat, myVal).then(function () {
            _instance.acquisitionStarted = true;

            //Disabling start once started
            //disableEnableStartStop();

        }, function (error) {
            ////showMessage(error.message);
        });
    };
    FingerprintSdkTest.prototype.stopCapture = function () {
        if (!this.acquisitionStarted) //Monitor if already stopped capturing
            return;
        var _instance = this;
        //showMessage("");
        this.sdk.stopAcquisition().then(function () {
            _instance.acquisitionStarted = false;

            //Disabling stop once stoped
            //disableEnableStartStop();

        }, function (error) {
            //showMessage(error.message);
        });
    };

    FingerprintSdkTest.prototype.getInfo = function () {
        var _instance = this;
        return this.sdk.enumerateDevices();
    };

    FingerprintSdkTest.prototype.getDeviceInfoWithID = function (uid) {
        var _instance = this;
        return  this.sdk.getDeviceInfo(uid);
    };

    
    return FingerprintSdkTest;
})();

window.onload = function () {
    localStorage.clear();
    //localStorage.setItem("raw", "");
    test = new FingerprintSdkTest();
};

function onStart() {
    test.startCapture();
}

/*$("#start").on("click",function(){
    test.startCapture();

    //downloadURI("data:application/octet-stream;base64,"+localStorage.getItem("raw"), "rawImage.raw", "application/octet-stream");
});*/

function sampleAcquired(s){   
    // localStorage.setItem("raw", "");
    // var samples = JSON.parse(s.samples);
    // var sampleData = Fingerprint.b64UrlTo64(samples[0].Data);
    // var decodedData = JSON.parse(Fingerprint.b64UrlToUtf8(sampleData));
    // localStorage.setItem("raw", Fingerprint.b64UrlTo64(decodedData.Data));

    localStorage.setItem("imageSrc", "");                
    var samples = JSON.parse(s.samples);            
    localStorage.setItem("imageSrc", "data:image/png;base64," + Fingerprint.b64UrlTo64(samples[0]));

    // $.get('convertimage.php',{'image':localStorage.getItem("imageSrc")},function(e){
    // });
    //data = getDataObjectByForm(localStorage.getItem("imageSrc"));

    var blob = dataURItoBlob(localStorage.getItem("imageSrc"),'image/png');
   
    // let a = document.createElement('a');
    // a.href = "data:application/octet-stream,"+encodeURIComponent(localStorage.getItem("imageSrc"));
    // a.download = 'abc.txt';
    // a.click();

    //window.navigator.msSaveOrOpenBlob(blob, 'test.png');
    // $.ajax({
    //     type:"GET",
    //     url:"converimage.php?image="+localStorage.getItem("imageSrc"),
    //     data:FormData,
    //     datatype:"json",
    //     success:function(data){
    //         for(var i in data){
    //             var entry = data[i];
    //             var success = entry.results.success;
    //             var message = entry.results.message;
    //         }
    //     }
    // })

    //  axios
    //     .get('convertimage.php',{params:{
    //         'image':samples[0]
    //     }})
    //     .then((response)=>{
            
    //     }).catch(response=>alert(response))

    var save = document.createElement('a');
    save.href = localStorage.getItem("imageSrc");
    save.download = 'test';
    var event = document.createEvent("MouseEvents");
        event.initMouseEvent(
                "click", true, false, window, 0, 0, 0, 0, 0
                , false, false, false, false, 0, null
        );
    save.dispatchEvent(event);

    //$("#archivo").attr("value",localStorage.getItem("imageSrc"));

    // var vDiv = document.getElementById('imagediv');
    // var image = document.createElement("img");
    // image.id = "galleryImage";
    // image.className = "img-thumbnail";
    // image.src = localStorage.getItem("imageSrc");
    // vDiv.appendChild(image);
}

dataURItoBlob = function(dataURI, dataURIType) {
    var binary = atob(dataURI.split(',')[1]);
    var array = [];
    for(var i = 0; i < binary.length; i++) {
        array.push(binary.charCodeAt(i));
    }
    return new Blob([new Uint8Array(array)], {type: dataURIType});
}

function IeVersionInfo() {
    var sAgent = window.navigator.userAgent;
    var IEVersion = sAgent.indexOf("MSIE");
  
    // If IE, return version number.
    if (IEVersion > 0) 
      return parseInt(sAgent.substring(IEVersion+ 5, sAgent.indexOf(".", IEVersion)));
  
    // If IE 11 then look for Updated user agent string.
    else if (!!navigator.userAgent.match(/Trident\/7\./)) 
      return 11;
  
    // Quick and dirty test for Microsoft Edge
    else if (document.documentMode || /Edge/.test(navigator.userAgent))
      return 12;
  
    else
      return 0; //If not IE return 0
  }

function downloadURI(uri, name, dataURIType) {

}

$("#save").on("click",function(){

});