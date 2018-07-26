 <script>
 
 $('#head_full_popup_checkin_step').html("ยืนยันการใช้รถในงานนี้"); 
 
 
</script>


<style type="text/css">
body{
    width:100%; margin:0; 
    text-align:center;
}
img{
    border:0;
}
#main{
 
    background:white; margin:0; top:0;
    overflow: auto;
	width: 100%;
}
#header{
    background:white;
 
}
#mainbody{
    background: white;
    width:100%;
	display:none;
}
#footer{
    background:white;
}
#v{
     width:100%;
   height: 100%;
    border: 2px solid #ddd;
}
#qr-canvas{
    display:none;
}
#qrfile{
    width:100%;
    height: 100%;
}
#mp1{
    text-align:center;
    font-size:35px;
}
#imghelp{
    
}
.selector{
    margin:0;
    padding:0;
    cursor:pointer;
   
}
#outdiv
{
    width:300px;
    height: 100%;
     border: 0px solid #ddd; vertical-align:top;
 
}
#result{
    border: solid;
 
 
	 width:100%;
	  height: 100%;
}

ul{
    margin-bottom:0;
 
}
li{
   
}
li a{
    text-decoration: none;
    color: black;
}

#footer a{
	color: black;
}
 

</style>
 
 
 
 
<script type="text/javascript" src="mod/load/show/qrcode/llqrcode.js?v=<?=time();?>"></script>
<script type="text/javascript" src="mod/load/show/qrcode/plusone.js?v=<?=time();?>" gapi_processed="true"></script>
<script type="text/javascript" src="mod/load/show/qrcode/webqr.js?v=<?=time();?>"></script>

<script type="text/javascript">
 
/*

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-24451557-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
  
*/

 


</script>

<br>
 
  <?
 
 $db->connectdb(DB_NAME_DATA,DB_USERNAME,DB_PASSWORD);
 
 $res[project] = $db->select_query("SELECT id,report_id,server,invoice,guest_name,guest_phone FROM ".TB_transfer_report_all."  where id='".$_GET[id]."'");
 $arr[project] = $db->fetch($res[project]);
 
 
 ?>



<table class="tsel" border="0" width="100%" style="margin-left:- 0px">
<tbody><tr>
<td valign="top" align="center" width="100%">


<script>



$('#btn_setimg').click(function(){  





 $("#picfile")[0].click();


});
 $("#picfile")[0].click();
 
 
 
  
 $('#btn_confirm_usecar_<? echo $arr[project][id];?>').click(function(){  
 
 
 var car=document.getElementById("work_car_use").value;
 
var  data=<?=$_GET[id]?>;

 
 var url="go.php?name=load/show/qrcode&file=car_data&action=change_work&id="+data+"&car="+car;
 
 $("#load_qr_popup").load(url); 
 

});
 

</script>



<br>
 
 



<table width="100%" border="0" cellspacing="5" cellpadding="5" style="margin-left:-5px">
  <tbody>
    <tr style="display:nones">
    
    
      <td style="font-size:22px; font-weight:bold; height:45px;border-radius: 30px ; padding:10px; background-color:#FFF ;  border:5px solid #dadada; color:#3C8DBC" >
      
    <div >  <center>
    เลือกรถที่กำลังใช้งาน
      
      
      <select name="work_car_use" id="work_car_use"  class="form-control"  style="font-size:18px; font-weight:bold; height:45px;border-radius: 30px ; padding:5px; background-color:#FFF ;  border:2px solid #dadada;" >
                     <option value="" selected="selected">-- กรุณาเลือก --</option>
                     <?
                        $db->connectdb(DB_NAME, DB_USERNAME, DB_PASSWORD);
                        $res[category] = $db->select_query("SELECT id,car_type,car_num,company FROM " . TB_carall . "  where company=276 or company=283 or company=284 order by car_num asc");
                        ;
                        while ($arr[category] = $db->fetch($res[category])) {
                            $res[aum]   = $db->select_query("SELECT * FROM " . TB_carall_type . " WHERE id='" . $arr[category][car_type] . "' ");
                            $arr[aum]   = $db->fetch($res[aum]);
                            $res[aum]   = $db->select_query("SELECT * FROM " . TB_carall_type . " WHERE id='" . $arr[category][car_type] . "' ");
                            $arr[aum]   = $db->fetch($res[aum]);
                        if($arr[aum][topic_en]=='Car'){
                        $arr[aum][topic_en]='รถเก๋ง';
                        }
                        if($arr[aum][topic_en]=='Van'){
                        $arr[aum][topic_en]='รถตู้';
                        }
                            //$res[cartype] = $db->select_query("SELECT * FROM ".TB_carall." WHERE id='".$arr[category][car_type]."' ");
                            //$arr[cartype] = $db->fetch($res[cartype);
                            $res[admin] = $db->select_query("SELECT * FROM " . TB_admin . " WHERE id='" . $arr[category][company] . "' ");
                            $arr[admin] = $db->fetch($res[admin]);
                            echo "<option value=\"" . $arr[category][id] . "\"";
                            if ($arr[category][id] == $arr[web_driver][car_num]) {
                                echo " Selected";
                            }
                            echo ">" . $arr[category][car_num] . "  ( " . $arr[aum][topic_en] . " )  -  " . $arr[admin][company] . "</option>";
                        }
                        $db->closedb();
                        ?>
                  </select>
 
      <div style="margin-top:10px;">
      
      <button type="button" class="btn btn-modal-ok"   data-dismiss="modal" data-backdrop="static" id="btn_confirm_usecar_<? echo $arr[project][id];?>"  style="width:100%" >ยืนยันการใช้รถ</button> 
      
      
      </div>
      
        </div>
      
      </td>
    </tr>
    <tr>
    
 
    
      <td style=" border:0px solid #dadada; margin-top:0px; color:#3C8DBC"><table width="100%" border="0" cellspacing="2" cellpadding="2" style="margin-left:-5px">
        <tbody>
          <tr>
            <td width="50%"><table width="100%" border="0" cellspacing="2" cellpadding="2"    class="btn btn-default"  onClick="setwebcam()" style="border-radius: 25px; padding:0px;  background-color:#FFF; border:2px solid #dadada;">
    <tbody>
      <tr>
        <td width="50"><img   id="webcamimg" src="mod/load/show/qrcode/v.png"   align="left" style="opacity: 1.0;"></td>
        <td align="left" style="font-size:18px;"><strong>สแกน</strong><br>
QR CODE</td>
      </tr>
    </tbody>
  </table></td>
            <td width="50%"><table width="100%" border="0" cellspacing="2" cellpadding="2"  class="btn btn-default" style="border-radius: 25px ; padding:0px; background-color:#FFF ;  border:2px solid #dadada; " id="btn_setimg"  onClick="setimgs()">
    <tbody>
      <tr>
        <td width="50"><img  id="qrimg" src="mod/load/show/qrcode/c.png"   align="right" style="opacity: 1;"></td>
        <td align="left" style="font-size:18px;"><strong>ถ่ายภาพ</strong><br>
 QR CODE 
</td>
      </tr>
    </tbody>
  </table></td>
          </tr>
        </tbody>
      </table>
      
       </td>
    </tr>
  </tbody>
</table>


  
  
  

<table width="100%" border="0"   style="display:none">
<tbody>
  <tr style="display:nones">
<td width="50%" valign="bottom"  style="display:none"><table width="100%" border="0" cellspacing="2" cellpadding="2"    class="btn btn-default"  onClick="setwebcam()" style="border-radius: 25px; padding:0px;  background-color:#FFF">
    <tbody>
      <tr>
        <td width="50"><img   id="webcamimg" src="mod/load/show/qrcode/v.png"   align="left" style="opacity: 1.0;"></td>
        <td align="left"><strong>สแกน</strong><br>
QR CODE</td>
      </tr>
    </tbody>
  </table></td>
<td width="100%" align="right" valign="bottom" style="padding:10px;"> </div></td></tr>
<tr><td colspan="2" align="center">
</td></tr>
</tbody></table></td>
</tr>
<tr style="display:none"><td colspan="3" align="center"><textarea cols="" rows="" id="result"></textarea>

 <input type='file'  id='picfile'  name='picfile' onchange='handleFiles(this.files)' accept="image/*"  capture="camera"/ >
 <div id="load_qr_<?=$_GET[id]?>">load....<?=$_GET[id]?></div>

<div id="load_save_car_<?=$_GET[id]?>">load....car....</div>


 <input type="text"   value="<? echo $arr[project][id];?>" id="data_id" name="data_id">

</td></tr>
</tbody></table><center> 

<table width="300" height="300" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td valign="top"  style='width:100%;height: 100%;'>
    
    
    
    
<div id="outdiv"  style='width:300;height: 410px;border: 0px solid #ddd; background-color:#FFF'>
    
    
    <div id='qrfile' style='width:100%;height: 100%;'><center><canvas id='out-canvas'  style='width:300;height: 410px;border: 0px solid #ddd;'></canvas></center></div></div>
    
    
 
    
    
    </td>
  </tr>
</table>

 
 
<div id="main" style=" display:nones">
  <div id="mainbodys"  > 

 
 
<canvas id="qr-canvas" style="width:150px;"  ></canvas>
<script type="text/javascript">load();</script>

 



 <div id="load_qr_popup"></div>


<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
  
  <style>
	.modal-scan-back {
	position: fixed;  
	left: 0px;
	top: 0px;
	width: 100%;
	height: 100%;
	 overflow:hidden; text-align:center;  background-color:#000000;
	/*background: url('images/loader.gif') 50% 50% no-repeat rgb(249,249,249); */ 
}


	.modal-scan-back-ok {
	position: fixed;  
	left: 0px;
	top: 0px;
	width: 100%;
	height: 100%;
	 overflow:hidden; text-align:center;  background-color:#3C8DBC;
	/*background: url('images/loader.gif') 50% 50% no-repeat rgb(249,249,249); */ 
}

 .modal-scan {
 
  text-align: center; height:100%; background:none;
  vertical-align: middle;  width:100%; height:100%; overflow:hidden; border: 0px solid #FF0000;  position:absolute;  
  
 
    vertical-align: middle;
    text-align: center; 
  }
 
 
 
 
 @-webkit-keyframes DIV-SCAN {
    0%   { border-color: #FF0000 }
    50%  { border-color: white }
 /*      100% { border-color: #FF0000 }*/
 
}

 @-moz-keyframes DIV-SCAN {
 
    0%   { border-color: #FF0000 }
    50%  { border-color: white }
 /*   100% { border-color: #7FF0000 }*/
	
 
	
}




.scan-alert {
     
   
	  border: 5px solid #FF0000; width:100%; height:70%;border-radius: 25px;
	  
	 	  -webkit-transition: all 1s;
	   -moz-animation: DIV-SCAN 1s infinite;
	  
      -webkit-transition: all 1s;
    -webkit-animation: DIV-SCAN 1s infinite;
}



.scan-alert-ok {
     
   
	  border: 5px solid #8DC63F; width:250px; height:70%;border-radius: 25px;
	  
 
}


</style>
  
  <div id="popup_work_main_control_scan"     style="width:100%; height:100%; padding:0px;  left:0px;  top:0px;   z-index:99999;  position:fixed;  display:nones; margin-top:0px; overflow:hidden; text-align: center;" class="modal-scan-back"> 
  
   
   <div class="modal-scan"><div style="padding:50px; color:#FFF "><center> <div class="scan-alert" id="area_scan_qr"> </div></div></div>
  
   <div class="back-full-popup" style="background-color:#000">
    <table width="100%"  border="0" cellspacing="0" cellpadding="0" style="background-color:#000">
  <tr>
    <td width="40"   ><div   id="btn_close_popup_main_control_scan" class="back-full-popup-main-control-scan"><i class="fa fa-arrow-circle-left" style="font-size:22px; color:#FFFFFF "> </i></div></td>
  <td   ><div style="font-size:18px; color:#FFFFFF " id="head_full_popup_main_control_scan">สแกน QR CODE</div></td>
    <td width="80" align="right"   >
 </td>
  </tr>
</table>
</div>

 
 
 
 <div      style="margin-top: 0px; height:100%; overflow:auto; padding-bottom:50px;   "  ><center>
 
 

 
 
 
 
 <div id="load_work_main_control_scan"></div>
		 
  
</div> 
 

              
				                </div>
 