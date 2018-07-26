// QRCODE reader Copyright 2011 Lazar Laszlo
// http://www.webqr.com

var gCtx = null;
var gCanvas = null;
var c=0;
var stype=0;
var gUM=false;
var webkit=false;
var moz=false;
var v=null;

// var imghtml="<div id='qrfile' style='width:100%;height: 100%;'><center><canvas id='out-canvas'  style='width:300;height: 100%;border: 2px solid #ddd;'></canvas></div>" ;

 var vidhtml = '<video id="v" autoplay   width="40" height="240" style="width:100%;height: 100%;border: 0px solid #ddd;"></video>';
 
 

 
 

function dragenter(e) {
  e.stopPropagation();
  e.preventDefault();
}

function dragover(e) {
  e.stopPropagation();
  e.preventDefault();
}
function drop(e) {
  e.stopPropagation();
  e.preventDefault();

  var dt = e.dataTransfer;
  var files = dt.files;
  if(files.length>0)
  {
	handleFiles(files);
  }
  else
  if(dt.getData('URL'))
  {
	qrcode.decode(dt.getData('URL'));
  }
}

function handleFiles(f)
{
	
 
	var o=[];
	
	for(var i =0;i<f.length;i++)
	{
        var reader = new FileReader();
        reader.onload = (function(theFile) {
        return function(e) {
            gCtx.clearRect(0, 0, gCanvas.width, gCanvas.height);
			
/// var file='mod/load/show/qrcode/55.jpg' ;

///qrcode.decode(file);

 qrcode.decode(e.target.result);
			
/// alert(e.target.result);
			
        };
        })(f[i]);
        reader.readAsDataURL(f[i]);	
    }
}

function initCanvas(w,h)
{
	
	 
	 
 
 
	
    gCanvas = document.getElementById("qr-canvas");
	
 
    gCanvas.style.width = "300px";
    gCanvas.style.height = "400px";
    gCanvas.width = w;
    gCanvas.height = h;
    gCtx = gCanvas.getContext("2d");
    gCtx.clearRect(0, 0, 300, 400);
	
	
 
	
	
 
}


function captureToCanvas() {
    if(stype!=1)
        return;
    if(gUM)
    {
        try{
            gCtx.drawImage(v,0,0);
            try{
                qrcode.decode();
            }
            catch(e){       
                console.log(e);
                setTimeout(captureToCanvas, 500);
            };
        }
        catch(e){       
                console.log(e);
                setTimeout(captureToCanvas, 500);
        };
    }
}

function htmlEntities(str) {
    return String(str).replace(/&/g, '&amp;').replace(/</g, '&lt;').replace(/>/g, '&gt;').replace(/"/g, '&quot;');
}

function read(a)
{
	
 
 
    if(a.indexOf("http://") === 0 || a.indexOf("https://") === 0)
 
 
 
    var html=a;
	
	//alert(a);
 
    document.getElementById("result").innerHTML=html;
	var 	data=document.getElementById("data_id").value;
 
 
 
    var regex=/^[0-9]+$/;
    if (!a.match(regex))
    {
		
		
 alert('QR CODE ไม่ถูกต้อง');
	
	//$( "#load_data_checkin_popup" ).toggle();
	
	//$( "#load_data_checkin_popup" ).html('');
    }
	
	
 
 
 
 
 
	
	 else {
		 
 ion.sound.play("scan"); 
 
 
 $("#area_scan_qr").removeClass('scan-alert');
 
 $("#area_scan_qr").addClass('scan-alert-ok');

///$("#popup_work_main_control_scan").removeClass('modal-scan-back');
 
//  $("#popup_work_main_control_scan").addClass('modal-scan-back-ok');
 

 
		 
 ///$("#play_scan").click();
		 
////alert('โหลดข้อมูลรถ');
		  
		  
/// alert('QR CODE');
		  
 /// load_qr_<?=$_GET[id]?>  
		  
///	alert('ข้อมูลถูกต้อง');  

 var url="go.php?name=load/show/qrcode&file=car_data&action=change_work&id="+data+"&car="+a;
 
 ///alert(url);
 
 //  $("#load_qr_popup").load(url); 
 
 setTimeout($("#load_qr_popup").load(url), 3000);

 //document.getElementById("load_work_main_control_scan").innerHTML= ''; 
	
		  }
 
	///
	
	///captureToCanvas();
 
//	setTimeout(captureToCanvas, 2000);
}	

 
 
 
 

function isCanvasSupported(){
  var elem = document.createElement('canvas');
  return !!(elem.getContext && elem.getContext('2d'));
}
function success(stream) {
    if(webkit)
        v.src = window.URL.createObjectURL(stream);
    else
    if(moz)
    {
        v.mozSrcObject = stream;
        v.play();
    }
    else
        v.src = stream;
    gUM=true;
    setTimeout(captureToCanvas, 500);
}
		
function error(error) {
    gUM=false;
    return;
}

function load()
{
	if(isCanvasSupported() && window.File && window.FileReader)
	{
		initCanvas(800, 600);
		qrcode.callback = read;
		document.getElementById("mainbody").style.display="inline";
		
		
setwebcam();
 ///setimg();
  
  
      document.getElementById("webcamimg").style.opacity=1.0;
	
	}
	else
	{
		document.getElementById("mainbody").style.display="inline";
		document.getElementById("mainbody").innerHTML='<p id="mp1">QR code scanner for HTML5 capable browsers</p><br>'+
        '<br><p id="mp2">sorry your browser is not supported</p><br><br>'+
        '<p id="mp1">try <a href="http://www.mozilla.com/firefox"><img src="firefox.png"/></a> or <a href="http://chrome.google.com"><img src="chrome_logo.gif"/></a> or <a href="http://www.opera.com"><img src="Opera-logo.png"/></a></p>';
	}
}

function setwebcam()
{
	
	
 alert('เปิดกล้องเพื่อสแกน QR CODE');
    $( "#popup_work_main_control_scan" ).show();
	var options = true;
	if(navigator.mediaDevices && navigator.mediaDevices.enumerateDevices)
	{
		try{
			navigator.mediaDevices.enumerateDevices()
			.then(function(devices) {
			  devices.forEach(function(device) {
				if (device.kind === 'videoinput') {
				  if(device.label.toLowerCase().search("back") >-1)
					options={'deviceId': {'exact':device.deviceId}, 'facingMode':'environment'} ;
				}
				console.log(device.kind + ": " + device.label +" id = " + device.deviceId);
			  });
			  setwebcam2(options);
			  
			 /// localMediaStream.stop();
			});
		}
		catch(e)
		{
			console.log(e);
		}
	}
	else{
		console.log("no navigator.mediaDevices.enumerateDevices" );
		///setwebcam2(options);
	}
	
}



function setwebcam2(options)
{
	console.log(options);
	document.getElementById("result").innerHTML="สแกน QR CODE";
    if(stype==1)
    {
        setTimeout(captureToCanvas, 500);    
        return;
    }
    var n=navigator;
	
	
	/// alert(0);
	
	/// เล่น vdo
///document.getElementById("outdiv").innerHTML = vidhtml;



document.getElementById("load_work_main_control_scan").innerHTML = vidhtml;
    v=document.getElementById("v");


    if(n.getUserMedia)
	{
		webkit=true;
		
		

		
		
 
		
 n.getUserMedia({video: options, audio: false}, success, error);
 
 
 
	}
    else
    if(n.webkitGetUserMedia)
    {
        webkit=true;
        n.webkitGetUserMedia({video:options, audio: false}, success, error);
    }
    else
    if(n.mozGetUserMedia)
    {
        moz=true;
        n.mozGetUserMedia({video: options, audio: false}, success, error);
    }

    document.getElementById("qrimg").style.opacity=0.2;
    document.getElementById("webcamimg").style.opacity=1.0;

    stype=1;
    setTimeout(captureToCanvas, 500);
		//	alert(988);
///n.getUserMedia({video: false, audio: false}, success, error);
}


//// STOP VDO


 




//// เลือกรูป

function setimg()
{
	
// document.getElementById("outdiv").innerHTML = imghtml;
 
 
	
///alert('ใช้งานกล้องถ่ายภาพ QR CODE');

 
 
	
	document.getElementById("result").innerHTML="";
	
	
//	alert(stype);
	
    if(stype==2)
	
	
  ///return;
		
		
   
	 	///  document.getElementById("picfile").click();

	

 
	
    //document.getElementById("qrimg").src="qrimg.png";
    //document.getElementById("webcamimg").src="webcam2.png";
    document.getElementById("qrimg").style.opacity=1.0;
    document.getElementById("webcamimg").style.opacity=0.2;
    var qrfile = document.getElementById("qrfile");


	 
    stype=2;
 	///  alert(imghtml);
	 

	
}
 
 
  $('.back-full-popup-main-control-scan').click(function(){   
 
   $( "#popup_work_main_control_scan" ).toggle();
 
  //  $( "#popup_work_main_control_scan" ).html('');

     	});
 
  