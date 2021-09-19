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
    localStorage.setItem("imageSrc", "");                
    var samples = JSON.parse(s.samples);            
    localStorage.setItem("imageSrc", "data:image/png;base64," + Fingerprint.b64UrlTo64(samples[0]));

    //var blob = dataURItoBlob(localStorage.getItem("imageSrc"),'image/png');

    //window.navigator.msSaveOrOpenBlob(blob, 'test.png');
    // var save = document.createElement('a');
    // save.href = localStorage.getItem("imageSrc");
    // save.download = 'test';
    // var event = document.createEvent("MouseEvents");
    //     event.initMouseEvent(
    //             "click", true, false, window, 0, 0, 0, 0, 0
    //             , false, false, false, false, 0, null
    //     );
    // save.dispatchEvent(event);

    var start = $(".start");
    start.addClass("disabled");

    if(!$(".trace1").attr("href")){
        $(".trace1").attr("href", localStorage.getItem("imageSrc"));
        $(".badge1").addClass("bg-success");
        $(".count").html("1");
    }else if(!$(".trace2").attr("href")){
        $(".trace2").attr("href", localStorage.getItem("imageSrc"));
        $(".badge2").addClass("bg-success");
        $(".count").html("2");
    }else if(!$(".trace3").attr("href")){
        $(".trace3").attr("href", localStorage.getItem("imageSrc"));
        $(".badge3").addClass("bg-success");
        $(".count").html("3");
    }

    if($(".trace3").attr("href")){
        var download = $(".download");
        download.removeClass("disabled");
    }

    var capture = $(".capture");
    capture.attr("src", localStorage.getItem("imageSrc"));
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

$(".download").on("click",function(e){
    e.preventDefault();

    var blob = dataURItoBlob(localStorage.getItem("imageSrc"),'image/png');

    console.log(blob);

    var fd = new FormData();
    fd.append('fname', 'imagen.png');
    fd.append('blobImage', blob);
    $.ajax({
        type: 'POST',
        url: 'recibe3.php',
        data: fd,
        cache: false,
        processData: false,
        contentType: false
    }).done(function(data) {
        console.log(data);
    });

    // axios
    // .get('recibe3.php',{params:{
    //     'imagen':fd
    // }})
    // .then((response)=>{
        
    // }).catch(response=>alert(response))

    // var zip = new JSZip();

    // zip.file("Hola.txt", "Hola Mundo\n");

    // var img = zip.folder("imagenes"); 

    // img.file("test.png", blob, {base64: true});

    // zip.generateAsync({type:"blob"}).then(function(contenido) {
    //     saveAs(contenido, "archivo.zip");
    // });
});
  