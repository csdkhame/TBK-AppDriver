<script src="mod/checkcar/isFileInputSupported.js"></script>
<link rel="stylesheet" href="mod/checkcar/styles.css" />
<script>
   // Add 'fileinput' class to html if supported
   if (isFileInputSupported) {
     document.documentElement.className += " fileinput";
   }
    var load_main_mod_table='<br><center><span  class="navload"><i class="fa fa-circle-o-notch fa-spin 4x" style="font-size:40px;   margin-top:10px " ></i></center></span><div style="font-size:14px; color:#333333; font-weight:normal;  margin-top:10px " ><center><span id="navload_topic"> โหลดข้อมูล</span></center></div';
</script>
<style>
   .speech {border: 1px solid #DDD; width: 300px; padding: 0; margin: 0}
   .speech input {border: 0; width: 240px; }
   .speech img {float: right; width: 40px }
   #testel {
   width: 100px;
   height: 100px;
   background: red;
   }
   .fileinput #testel {
   background: green;
   }
   .font-btn{
   font-size: 16px !important;
   font-family: 'Arial', sans-serif;
   }
   .font-btn-18{
   font-size : 18px !important;
   font-family: 'Arial', sans-serif;
   font-weight: 500;
   }
   @media screen and (max-width: 320px) {
   .font-btn{
   font-size : 14px !important;
   font-family: 'Arial', sans-serif;
   } 
   .font-btn-18{
   font-size : 16px !important;
   font-family: 'Arial', sans-serif;
   font-weight: 500;
   }	   
   }
   .btn-repair{
   padding: .84rem 2.14rem;
   font-size: .81rem;
   -webkit-transition: all .2s ease-in-out;
   transition: all .2s ease-in-out;
   margin: .375rem;
   border: 0;
   border-radius: .125rem;
   cursor: pointer;
   text-transform: uppercase;
   white-space: normal;
   word-wrap: break-word;
   color: #fff!important;
   box-shadow: 0 2px 5px 0 rgba(0,0,0,.16), 0 2px 10px 0 rgba(0,0,0,.12);
   }
   .waves-effect {
   position: relative;
   cursor: pointer;
   overflow: hidden;
   -webkit-user-select: none;
   -moz-user-select: none;
   -ms-user-select: none;
   user-select: none;
   -webkit-tap-highlight-color: transparent;
   z-index: 1;
   }
   .btn-default {
   background-color: #2bbbad!important;
   color: #fff!important;
   }
   .topicname { padding-top:10px; padding-left:0px; padding-bottom:5px; font-size:18px; font-weight:bold; color: #666666 ; text-align:left;  
   }
.cirnumbershow-car {    border-radius: 50%; background-color: #FF0000;
 
    padding: 0px; padding-top: 0px; 
    width: 60px;
    height: 60px; 
	text-align: justify; color:#FFFFFF; margin-left: 0px;   font-size:30px; font-weight:bold;  
	border: solid 3px #FFFFFF;
	 box-shadow: 0 0 0px 0px #DADADA; 
    border-radius: 50%; background-color: #DD4B39; 
  color: #fff;
}
.select-car-now { 
	  border: 2px solid #dadada; width:100%; border-radius: 40px; margin-bottom:10px;
}
</style>
<!-- Search Form -->
<!-- HTML5 Speech Recognition API -->
<script>
   function startDictation() {
     if (window.hasOwnProperty('webkitSpeechRecognition')) {
       var recognition = new webkitSpeechRecognition();
       recognition.continuous = false;
       recognition.interimResults = false;
       recognition.lang = "th-TH";
       recognition.start();
       recognition.onresult = function(e) {
         document.getElementById('transcript').value
                                  = e.results[0][0].transcript;
         recognition.stop();
     //    document.getElementById('labnol').submit();
       };
       recognition.onerror = function(e) {
         recognition.stop();
       }
     }
   }
</script>
<div class="box box-default" style="padding: 5px">
   <div class="box-header with-border">
      <h2 class="box-title with-border"><span class="font_22"><b>แจ้งซ่อมบำรุงรักษารถ</b></span></h2>
   </div>
   <!-- iCheck -->
 <table width="100%"  border="0" cellspacing="2" cellpadding="2"  style="display:none; ">
         <tr>
            <td style="width:150px; height:50px; "> 
               <input name="GroupedSwitches"  type="checkbox" id="TheCheckBox1" value="1" data-off-text="ชำรุด" data-on-text="สมบูรณ์"   >
            </td>
            <td style="padding-bottom:10px; font-size:16px; font-weight:bold; padding-left:10px; "><label for="TheCheckBox1">หม้อน้ำ</label></td>
         </tr>
         <tr>
            <td style="width:150px; height:50px; "> 
               <input name="GroupedSwitches"  type="checkbox" id="TheCheckBox2" value="1" data-off-text="ชำรุด" data-on-text="สมบูรณ์"   >
            </td>
            <td style="padding-bottom:10px; font-size:16px; font-weight:bold;padding-left:10px;"><label for="TheCheckBox2">น้ำมันเครื่อง</label></td>
         </tr>
         <tr>
            <td style="width:150px; height:50px; "> 
               <input name="GroupedSwitches"  type="checkbox" id="TheCheckBox3" value="1" data-off-text="ชำรุด" data-on-text="สมบูรณ์"   >
            </td>
            <td style="padding-bottom:10px; font-size:16px; font-weight:bold;padding-left:10px; "><label for="TheCheckBox3">ลมยาง</label></td>
         </tr>
         <tr>
            <td style="width:150px; height:50px; "> 
               <input name="GroupedSwitches"  type="checkbox" id="TheCheckBox4" value="1" data-off-text="ชำรุด" data-on-text="สมบูรณ์"   >
            </td>
            <td style="padding-bottom:10px; font-size:16px; font-weight:bold;padding-left:10px; "><label for="TheCheckBox4">ที่ปัดน้ำฝน</label></td>
         </tr>
      </table>
      
      
 
        <table width="100%"  border="0" cellspacing="2" cellpadding="2">
            <tr>
             
      <td style="font-size:22px; font-weight:bold; height:45px;border-radius: 30px ; padding:10px; background-color:#FFF ;  border:1px solid #dadada; padding:10px;box-shadow: 0px 0px 10px  #dadada;" >
      
    <div >  <center>
    
      
      
      
      <input type="hidden" name="check_data_car_work" id="check_data_car_work" value="<?=$driver_carnumber?>"  style="width:100px " />
      
      
      
      
      
    
      <a id="btn_select_car" style="font-size:20px;">เลือกรถที่เข้ารับการบริการ
      
    
      
    <div id="load_select_car"></div>
 </a>
 
 
 
  
        </div>
        
      
      </td>
            </tr>
         </table>
 
     
     
     
     
     
     
     
     <br>

     
     
 
        <table width="100%"  border="0" cellspacing="2" cellpadding="2">
            <tr>
             
      <td style="font-size:22px; font-weight:bold; height:45px;border-radius: 30px ; padding:10px; background-color:#FFF ;  border:1px solid #dadada; padding:10px;box-shadow: 0px 0px 10px  #dadada;" >
      
    <div >  <center>
    
      
      
      
      <input type="hidden" name="check_data_car_work" id="check_data_car_work" value="<?=$driver_carnumber?>"  style="width:100px " />
      
      
      
      
      
    
      <a   style="font-size:20px;">สาเหตุที่เข้ารับการบริการ</a>
      <div class="select-car-now" id="open_popup_brokencar">
        <table width="100%" border="0" cellspacing="0" cellpadding="2">
          <tbody>
            <tr>
              <td width="55" rowspan="2"><table width="100%" border="0" cellspacing="2" cellpadding="2" class="cirnumbershow-car" style="background-color:<?=$color?>">
                <tbody>
                  <tr>
                    <td align="center" valign="middle" style="color:<?=$text?>; font-size:26px"><i class="car-icon-uniF116" style="color:#FFFFFF"></i></td>
                  </tr>
                </tbody>
              </table></td>
              <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tbody>
                  <tr>
                    <td  style=" font-size:14px; padding-right:10px;">แจ้งสาเหตุ อาการเสีย ชำรุดที่ต้องการซ่อม แก้ไข หรือข้อมูลการเข้ารับบริการอื่นๆ</td>
                    </tr>
                </tbody>
              </table></td>
            </tr>
            <tr>
              <td valign="top" class="font_14"> 
                
              </b></td>
            </tr>
          </tbody>
        </table>
      </div>
 
 
         <div style="margin-top: 5px;display: none;" id="box_text_broken">
           <textarea class="form-control" rows="5" name="detail_all" id="detail_all" style="border-radius: 25px; font-style:16px;">
            </textarea>
         </div>
 
  
        </div>
        
      
      </td>
            </tr>
         </table>
         
      <div id="box_value_select"></div>
         
 
     
     
     <br>

     
     <table width="100%"  border="0" cellspacing="2" cellpadding="2">
            <tr>
             
      <td style="font-size:22px; font-weight:bold; height:45px;border-radius: 30px ; padding:10px; background-color:#FFF ;  border:1px solid #dadada; padding:10px;box-shadow: 0px 0px 10px  #dadada;" >
      
    <div >  <center>
    
      
      
      
      <input type="hidden" name="check_data_car_work" id="check_data_car_work" value="<?=$driver_carnumber?>"  style="width:100px " />
      
      
      
      
      
    
      <a id="btn_select_car" style="font-size:20px;">ถ่ายภาพรถ </a>
      
    
      
 <?  include ("mod/checkcar/photo_upload/photo.php");?> 

 
 
 
  
        </div>
        
      
      </td>
            </tr>
         </table>
     
     
     
     
     
     
     
     
     
     
       
    
   <div id="send_user_data"></div>
   <div style="margin-top:10px;"  >
      <table width="100%"  border="0" cellspacing="2" cellpadding="2" >
         <tr>
            <td width="50%"  style="padding:5px;"><button type="reset" class="btn btn-block btn-modal-no"  style="width:100%" id="reset_data">รีเซ็ต</button>
               <input name="file_upload_submit"  id="file_upload_submit" type="submit" style="display:none">
            </td>
           <td width="50%" style="padding:5 px;"><button id="submit_data" type="button" class="btn btn-block btn-modal-ok" style="width:100% ">ส่งข้อมูล</button></td>
         </tr>
      </table>
   </div>
 
</div>
<script>
   /// check login
   $('#reset_data').click(function(){
	   
	  
	   	$('#box_text_broken').hide();
   	
   		$('#detail_all').val('');
		
		
   		$('#box_value_select').html('');
   		
   		for(var i=1;i<=3;i++){

			deletePhoto(i);
		}
   	
   });
   $("#submit_data").click(function(){ 
   if($('#box_value_select input').length<=0){
   swal("ไม่ได้เลือกอาการเสีย", "กรุณาเลือกอาการเสียของรถ", "error");
   return;
   }
   $('#file_upload_submit').click();
   //  					console.log($('#detail').val());
    					var data_form = $('#edit_form').serialize();
   				var data = new FormData($('#edit_form')[0]);
      				data.append('photo_checkguest_1', $('#photo_checkguest_1')[0].files[0]);
      				data.append('photo_checkguest_2', $('#photo_checkguest_2')[0].files[0]);
      				data.append('photo_checkguest_3', $('#photo_checkguest_3')[0].files[0]);
      				data.append('detail', $('#detail_all').val());
   //    				console.log(data_form);
   //    				return;
      				var id = '<?=$arr[web_user][id]?>';
   				   $.ajax({
   				                url: 'popup.php?name=checkcar&file=savedata&type=repair&id=<?=$arr[web_driver][id]?>', // point to server-side PHP script 
   				                dataType: 'text',  // what to expect back from the PHP script, if anything
   				                cache: false,
   				                contentType: false,
   				                processData: false,
   				                data: data,                         
   				                type: 'post',
   				                success: function(php_script_response){
   									console.log(php_script_response);
   //										return;
   //										 $('#send_user_data').html(php_script_response);
   									swal("แจ้งซ่อมสำเร็จ!", "กรุณาตรวจสอบที่ประวัติแจ้งซ่อมรถ", "success");
   									window.location = "index.php?name=checkcar&file=repair_his";
   				                }
   				     });
   });
   function deletePhoto(id){
   document.getElementById('photo_checkguest_'+id).value='';
   document.getElementById('url_photo_checkguest_'+id).value='ยังไม่มีภาพถ่าย';
   $('#url_photo_checkguest_'+id).css({"color": "#333333", });
   $('.btn-img-'+id).css('background-color','#3c8dbc');
   $('#show_img_'+id+' img').remove();
   $('#show_img_'+id).hide();
   $('#del_photo_checkguest_'+id).removeClass('btn-danger');
         $('#del_photo_checkguest_'+id).addClass('btn-default');
   }
   function readURL(input,id) {
    if (input.files && input.files[0]) {
      var reader = new FileReader();
      reader.onload = function(e) {
         $('#show_img_'+id).html('<img src="'+e.target.result+'" style="width: 200px;border:5px solid #ddd;" />');
         $('#show_img_'+id).show();
         $('.btn-img-'+id).css('background-color','#00a65a');
         $('#url_photo_checkguest_'+id).val('มีภาพถ่ายแล้ว');
         $('#del_photo_checkguest_'+id).addClass('btn-danger');
         $('#del_photo_checkguest_'+id).removeClass('btn-default');
      }
      reader.readAsDataURL(input.files[0]);
    }
   }
   function uploadPhoto(id,input,filename){
   var formData = new FormData();
                      formData.append('photo_checkguest_'+id, $('#photo_checkguest_'+id)[0].files[0]);
   //                    formData.append('filename', filename);
                      $.ajax({
                          url: 'popup.php?name=checkcar&file=savedata&type=uploadfile&id='+id,
                          data: formData,
                          processData: false,
                          contentType: false,
                          type: 'POST',
                          // this part is progress bar
                          xhr: function () {
                              var xhr = new window.XMLHttpRequest();
                              xhr.upload.addEventListener("progress", function (evt) {
                                  if (evt.lengthComputable) {
                                      var percentComplete = evt.loaded / evt.total;
                                      percentComplete = parseInt(percentComplete * 100);
                                      if (input.files && input.files[0]) {
   								    var reader = new FileReader();
   								    reader.onload = function(e) {
   								      $('#show_img_'+id).html('<img src="'+e.target.result+'" style="width: 200px;border:5px solid #ddd;" />');
   								    }
   								    reader.readAsDataURL(input.files[0]);
   								  }
                                      $('#progress_'+id).text(percentComplete + '%');
                                      $('#progress_'+id).css('width', percentComplete + '%');
                                  }
                              }, false);
                              return xhr;
                          },
                          success: function (data) {
   						console.log(data);
   						$.ajax({
   						    url: '../data/fileupload/repair/'+id+'.jpg',
   						    type:'HEAD',
   						    error: function()
   						    {
   						        console.log('Park : Error file');
   						        swal("ไม่สามารถอัพโหลดได้!", "", "error");
   						    },
   						    success: function()
   						    {
   						    	$('#show_img_'+id).fadeIn(500);
   								$('#url_photo_checkguest_'+id).val('มีภาพแล้ว');
   								$('.btn-img-'+id).css('background-color','#00a65a');
   								 $('#progress_'+id).removeClass('progress-bar-warning');
   								 $('#progress_'+id).addClass('progress-bar-success');
   						    	console.log('Park : Success file');
   						    }
   						});
                          }
                      });
   }
</script> 
<script>
   $('#open_popup_brokencar').click(function(){
   	$('#popup_confirm_repair').show();
   	var url = 'go.php?name=checkcar/load&file=component_popup&action=select_broken_car';
   	$('#body_popup_confirm').html(load_main_mod_table);
   $('#body_popup_confirm').load(url);
   console.log('load');
   });
</script>


<iframe id="uploadtarget" name="uploadtarget" src="" style="width:200px;height:50px;border:0"></iframe>
<div id="popup_confirm_repair" style="position : fixed; width: 100%; height: 100%; background-color: #fff;display: none;top: 0px;z-index: 999999999999;left: 0px;
   padding:0px;overflow-y: auto;">
   <div style="margin-top: 0px;padding: 10px;background-color: #fff;border-radius:15px;animation: showSweetAlert 0s;" id="body_popup_confirm">
   </div>
</div>



  <script>
	  
	  var car=<?=$driver_carnumber?>;
	  
	  
	  
	  
 var url_car="go.php?name=checkcar/qrcode&file=car_now&car="+car;
	  

  $("#load_select_car").load(url_car);
  
  
  
  
	  
		
 $("#btn_select_car").click(function(){
	 
 
	 
  var car=document.getElementById("check_data_car_work").value;
			 
$("#head_full_popup_main_control_select" ).html('รถทั้งหมด');			 
 
 $("#popup_main_control_select" ).toggle();
 
  var url_car="go.php?name=checkcar/qrcode&file=car_select&id=<?=$_GET[id]?>&car="+car;
 
  $("#load_main_control_select").load(url_car);
 
 
		 });
		
		</script>
        
        
        
        
        
        
        
        
        
        
        
        
        

<style>
 

.outer-loadwait {
    position: fixed; margin-left: 0px; margin-top: 0px; display:table; top:0; left:0;  
    width: 100%; /* This could be ANY width */
    height: 100%; /* This could be ANY height */
   z-index:9999999999;  
	background: url('images/bg-popup.png');  
}

.inner-loadwait {
    display: table-cell;
    vertical-align: middle;
    text-align: center;
}

.div-loadwait {
    display: inline-block;
    text-align: left; width:130px;
   
 
    border : 0px solid <?=$maincolor?>;  
	z-index:999999999999999; background-color:#F6F6F6;   -moz-border-radius:10px;
  -webkit-border-radius:3px;

 border-radius: 30px; height: 100px; padding:10px; width:150px;  
}

</style>

 
<div id="popup_show_upload_pic" style="display:none;z-index:99999;  ">
<div class="outer-loadwait" >
   <div class="inner-loadwait">
     <div class="div-loadwait">
 

<div   style="border:none; color:#000000; font-size:16px; "><center> <i class="fa  fa-camera faa-flash animated" style="font-size:36px;   margin-top:10px;color: #3C8DBC" ></i></center></font></b>  </div> 

 <div    style="color:#000000; font-size:16px; text-transform:capitalize;z-index:99999; margin-top: 5px; "><center>  <div style="margin-top: 10px; "> 
 อัพโหลดรูปภาพ</b></font> </span></font></b></div></div>
 
 

</div>
     
<br>
 
     </div>
   </div>
</div>
 
 </div>
 
 
 
 
 
 
 
 
 
 <?php
 
 /*

$name = 'ตุ๊ดตู่จัง';
$email = '';
$phone = '';
$lineid = $_POST['lineid'];
$mesg = 'ส่งข้อความเรียบร้อยแล้ว';

$message = $mesg."\n".'จาก: '.$name."\n".'อีเมล์: '.$email."\n".'Phone: '.$phone."\n".'Line ID: '.$lineid;

if(1==1) {
	
	///sendlinemesg();

	header('Content-Type: text/html; charset=utf-8');
	$res = notify_message($message);
	echo "<center>l;ส่งข้อความเรียบร้อยแล้ว</center>";
} else {
	echo "<center>Error: กรุณากรอกข้อมูลให้ครบถ้วน</center>";
}

function sendlinemesg() {
	
    define('LINE_API',"https://notify-api.line.me/api/notify");
	define('LINE_TOKEN','A887bIJvxJYUEZt3vaokq1o3jwAbOD6exb9Ky3gjRp6');

	function notify_message($message){

		$queryData = array('message' => $message);
		$queryData = http_build_query($queryData,'','&');
		
		
		
		
		
		
		
		
		$headerOptions = array(
			'http'=>array(
				'method'=>'POST',
				'header'=> "Content-Type: application/x-www-form-urlencoded\r\n"
						."Authorization: Bearer ".LINE_TOKEN."\r\n"
						."Content-Length: ".strlen($queryData)."\r\n",
				'content' => $queryData
			)
		);
		$context = stream_context_create($headerOptions);
		$result = file_get_contents(LINE_API,FALSE,$context);
		$res = json_decode($result);
		return $res;

	}

}

*/

?>
 
 
 