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
<div class="box box-default">
   <div class="box-header with-border">
      <h2 class="box-title"><span class="font_28"><b>แจ้งซ่อมรถ</b></span></h2>
   </div>
   <!-- iCheck -->
   <form id="edit_form"  name="edit_form" action="popup.php?name=checkcar/file&file=upload_pic&type=repair" method="post" enctype="multipart/form-data" >
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
      <div id="car_data" style="padding: 15px 5px;">
         <div class="topicname"><i class="fa  fa-automobile"></i>&nbsp;ข้อมูลรถ</div>
         <table width="100%"  border="0" cellspacing="2" cellpadding="2">
            <tr>
               <td>
                  <select name="car" id="car"  class="form-control"  style="font-size:20px; font-weight:bold; height:45px;" >
                     <option value="" selected="selected">-- กรุณาเลือก --</option>
                     <?
                        $db->connectdb(DB_NAME, DB_USERNAME, DB_PASSWORD);
                        $res[category] = $db->select_query("SELECT * FROM " . TB_carall . "  where company=276 or company=283 or company=284 order by company,car_num asc");
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
               </td>
            </tr>
         </table>
      </div>
      <div id="car_broken_car" style="padding: 15px 5px;margin-top: -25px;">
         <div class="topicname" style="display:nones; "><i class="fa  fa-wrench"></i>&nbsp;รายการตรวจเช็ค</div>
         <div style="margin-top:5px;margin-bottom: 10px;">&nbsp;<strong>อาการเสีย</strong> </div>
         <!-- <select class="form-control" name="topic_repair" id="topic_repair" style="display: none;">
            <option value="">- เลือกอาการเสีย -</option>
            <?php 
               $db->connectdb(DB_NAME_DATA, DB_USERNAME, DB_PASSWORD);
                  $res[type_repair] = $db->select_query("SELECT * FROM car_repair_type  where id>0 and status = 1");
                  while ($arr[type_repair] = $db->fetch($res[type_repair])) {	?>
            <option value="<?=$arr[type_repair][id];?>"><?=$arr[type_repair][topic_th];?></option>
            <? } ?>
            <option value="0">อื่นๆ</option>
            </select>-->
         <button id="open_popup_brokencar" type="button" style="padding: 10px;border-radius:25px;background-color: #3c8dbc;width: 100%;"  class="btn-repair btn-primary waves-effect waves-light font-btn"><strong>เลือกอาการเสีย</strong></button>
         <div style="margin-top: 5px;display: none;" id="box_text_broken">
            <textarea class="form-control" rows="5" name="detail_all" id="detail_all">
            </textarea>
         </div>
         <div id="box_value_select"></div>
         <!--<div style="margin-top:5px;margin-bottom: 10px;">&nbsp;<strong>รายละเอียด</strong></div>
            <table width="100%"  border="0" cellspacing="0" cellpadding="0" >
               <tr>
                  <td style="padding-right:0px; "><textarea name="detail" rows="5" class="form-control" id="detail" required="true"></textarea></td>
               </tr>
            </table>  -->
      </div>
      <div id="img_car" style="padding: 15px 5px;">
         <div class="input-group">
            <label class="input-group-btn">
               <span class="btn btn-primary btn-img-1">
   <form  method="post" enctype="multipart/form-data" id="photo1">
   <i class="fa  fa-camera"></i>&nbsp;ถ่ายภาพ<input type="file" class="form-control" name="photo_checkguest_1" id="photo_checkguest_1" accept="image/*"  capture="camera"  style="display: none;"/> </form>
   </span>
   </label>
   <input type="text" class="form-control" value="ยังไม่มีภาพถ่าย" readonly  style="padding-left:5px; padding-right:5px; width:160px" id="url_photo_checkguest_1">&nbsp;<button type="button" class="btn btn-default" data-toggle="modal"   style="padding-left:5px; padding-right:5px; width:30px" id="del_photo_checkguest_1" onclick="deletePhoto(1);"><i class="fa  fa-trash" style="font-size:20px; "></i></button>
   <script>
      $("#photo_checkguest_1").change(function (){
            var filename = $(this).val();
            var id = 1;
            console.log(filename);
            var input = this;
      //	   uploadPhoto(id,input,filename);		
           readURL(input,id);
          });				
   </script> 
   </div> 
   <div class="progress" style="margin: 10px;height: 17px;display: none;">
   <div class="progress-bar progress-bar-warning progress-bar-striped active" role="progressbar" id="progress_1"
      aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:0%">
   0%
   </div>
   </div>
   <div id="show_img_1" style="display: none;margin: 5px 50px;" ></div>
   <div class="input-group" style="margin-top:10px; ">
   <label class="input-group-btn">
   <span class="btn btn-primary btn-img-2">
   <form  method="post" enctype="multipart/form-data" id="photo2">
   <i class="fa  fa-camera"></i>&nbsp;ถ่ายภาพ<input type="file" class="form-control" name="photo_checkguest_2" id="photo_checkguest_2" accept="image/*"  capture="camera"  style="display: none;"/> 
   </form>
   </span>
   </label>
   <input type="text" class="form-control" value="ยังไม่มีภาพถ่าย" readonly  style="padding-left:5px; padding-right:5px; width:160px" id="url_photo_checkguest_2">&nbsp;<button type="button" class="btn btn-default" data-toggle="modal"   style="padding-left:5px; padding-right:5px; width:30px" id="del_photo_checkguest_2" onclick="deletePhoto(2);"><i class="fa  fa-trash" style="font-size:20px; "></i></button>
   <script>
      $("#photo_checkguest_2").change(function (){
             var filename = $(this).val();
            var id = 2;
            console.log(filename);
            var input = this;
            readURL(input,id);
      //		uploadPhoto(id,input,filename);
          });	
   </script> 
   </div>
   <div class="progress" style="margin: 10px;height: 17px;display: none;">
   <div class="progress-bar progress-bar-warning progress-bar-striped" role="progressbar" id="progress_2"
      aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:0%">
   0%
   </div>
   </div>
   <div id="show_img_2" style="display: none;margin: 5px 50px;" ></div>
   <div class="topicname"><i class="fa  fa-automobile"></i>&nbsp;ภาพถ่ายรถ</div>
   <div class="input-group">
   <label class="input-group-btn">
   <span class="btn btn-primary btn-img-3">
   <form  method="post" enctype="multipart/form-data" id="photo1">
   <i class="fa  fa-camera"></i>&nbsp;ถ่ายภาพ<input type="file" class="form-control" name="photo_checkguest_3" id="photo_checkguest_3" accept="image/*"  capture="camera"  style="display: none;"/> 
   </form>
   </span>
   </label>
   <input type="text" class="form-control" value="ยังไม่มีภาพถ่าย" readonly  style="padding-left:5px; padding-right:5px; width:160px" id="url_photo_checkguest_3">&nbsp;<button type="button" class="btn btn-default" data-toggle="modal"   style="padding-left:5px; padding-right:5px; width:30px" id="del_photo_checkguest_3" onclick="deletePhoto(3);"><i class="fa  fa-trash" style="font-size:20px; "></i></button>
   <script>
      $("#photo_checkguest_3").change(function (){
            var filename = $(this).val();
            var id = 3;
            console.log(filename);
            var input = this;
      //	   uploadPhoto(id,input,filename);		
           readURL(input,id);
          });				
   </script> 
   </div>
   <div class="progress" style="margin: 10px;height: 17px;display: none;">
   <div class="progress-bar progress-bar-warning progress-bar-striped active" role="progressbar" id="progress_3"
      aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:0%">
   0%
   </div>
   </div>
   <div id="show_img_3" style="display: none;margin: 5px 50px;" ></div>
   </div> 
   <div id="send_user_data"></div>
   <div style="margin-top:10px;"  >
      <table width="100%"  border="0" cellspacing="2" cellpadding="2" >
         <tr>
            <td width="150"  style="padding:5px;"><button type="reset" class="btn btn-block btn-default"  style="width:140px " id="reset_data">รีเซ็ต</button>
               <input name="file_upload_submit"  id="file_upload_submit" type="submit" style="display:none">
            </td>
            <td style="padding:5 px;"><button id="submit_data" type="button" class="btn btn-block btn-primary" style="width:140px ">ส่งข้อมูล</button></td>
         </tr>
      </table>
   </div>
   </form>
</div>
<script>
   /// check login
   $('#reset_data').click(function(){
   	
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
<div id="popup_confirm_repair" style="position : fixed; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.80);display: none;top: 0px;z-index: 1000000000;left: 0px;
   padding:15px;overflow-y: auto;">
   <div style="margin-top: 0px;padding: 15px 10px;background-color: #fff;border-radius:15px;animation: showSweetAlert 0.3s;" id="body_popup_confirm">
   </div>
</div>