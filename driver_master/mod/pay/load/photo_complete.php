 
  <style>
   .div-all-photo{
	 padding:5px;   border-radius: 10px; border: 1px solid #ddd;background-color:#FFFFFF;     margin-bottom: 5px; box-shadow: 0px  0px 0px #DADADA  ;
	 
 }
 
 
 </style> 
 <table width="100%" border="0" align="center" cellpadding="2" cellspacing="2" >
  <tbody>
    <tr>
      <td> 
 
 <? //=$_GET[checkin]?>
 <? //=$_GET[checkin]?>       
<?
 
 for($i=1;$i<3;$i++){ ?>
 <div class="div-all-photo">
        
 <table width="100%" border="0" cellspacing="2" cellpadding="2" >
  <tbody>
    <tr>
      <td width="10" class="font_20"><?=$i?>.</td>
      <td width="100">
        <label class="input-group-btn" > <span class="btn btn-primary" style="width:100px; z-index:0" id="btn_camera_check_<?=$i?>"> <i class="fa  fa-camera"></i>&nbsp;ถ่ายภาพ
          <input type="text" class="form-control" name="icon_camera_check_<?=$i?>" id="icon_camera_check_<?=$i?>"   style="display: none;"/>
        </span></label></td>
      <td><span class="input-group" style="margin-top:5px;">
        <input type="text"  value="ไม่มีภาพถ่าย" class="photo-no-active" readonly  style="padding-left:5px; margin-top:-5px; padding-right:0px; width:100%; height:35px;" id="url_photo_check_<?=$i?>">
      </span></td>
      <td width="30">        
      
      <button type="button" class="btn btn-default " data-toggle="modal"   style="padding-left:5px; padding-right:5px; width:30px" id="del_photo_check_<?=$i?>"><i class="fa  fa-trash" style="font-size:20px; "></i></button>
 
      
      </td>
    </tr>
  </tbody>
</table>

<div class="progress" style="width:100%;;border-radius:8px; height:20px; margin: 0; padding:0px; margin-left:-0px;border:none " id="area_album_load_check_<?=$i?>">
  <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="40"
  aria-valuemin="0" aria-valuemax="100" id="percent_load_pic_check_<?=$i?>" style="width:0%;border-radius:5px;border:none; color:#FFF; font-size:14px;">
      </div>
  </div>
 


<img  id="image_check_<?=$i?>" name="image_check_<?=$i?>"  style="width:100%; padding:5px; margin-top:0px;border-radius:15px; display:none " />     

    </div>            
           
           
           
<script>
 
    /////////  id driving
 $("#del_photo_check_<?=$i?>").click(function(){  
 
 
 
 if(document.getElementById('check_photo_check_<?=$i?>').value=='1'){
	 
	 
	 
var url_pic = "go.php?name=load/show/photo_upload&file=upload_pic_check&id=<?=$arr[project][id];?>&folder=<?=$arr[project][invoice];?>&number=<?=$i?>&type=checkcar&action=del";
 

  
  $('#upload_photo_action').load(url_pic); 
	 
	 
	   
	 
 
  
  $("#image_check_<?=$i?>").hide(); 
    document.getElementById('url_photo_check_<?=$i?>').value='ไม่มีภาพถ่าย';
 
$("#del_photo_check_<?=$i?>").removeClass('btn-danger');
$("#del_photo_check_<?=$i?>").addClass('btn-default');



$("#btn_camera_check_<?=$i?>").removeClass('btn-success');
$("#btn_camera_check_<?=$i?>").addClass('btn-primary');



 $("#percent_load_pic_check_<?=$i?>").css({'width': '0%'});
 
 $("#area_album_load_check_<?=$i?>").show();
 
 

  document.getElementById('check_photo_check_<?=$i?>').value=0;
 
 sum_photo();
 
 

	
 }
 
 
  
  });
  
  
  
  
 
  /////////  id driving
 $("#icon_camera_check_<?=$i?>").click(function(){  
  $("#percent_load_pic_check_<?=$i?>").css({'width': '0%'});
  
  ///alert(0);
  
  document.getElementById('upload_pic_check_number').value='<?=$i?>';
 
 
  $("#load_checkin_camera_finish").click(); 
  
  

  
  });
  
 
 
  
  </script>
           
           
 <input class="form-control" type="hidden" name="check_photo_check_<?=$i?>" id="check_photo_check_<?=$i?>"    value="0" >
       
                
         <? } ?>  </td>
    </tr>
  </tbody>
</table>
<div style="color:#FF0000"><center>กรุณาถ่ายภาพอย่างน้อย 1 ภาพ</div>
   <input class="form-control" type="hidden" name="upload_pic_check_type" id="upload_pic_check_type"    value="checkcar" >
   
      <input class="form-control" type="hidden" name="upload_pic_check_number" id="upload_pic_check_number"    value="0" >
      
 <input class="form-control" type="hidden" name="check_photo_check_all" id="check_photo_check_all"    value="0" >
      
      
<table width="100%" border="0" cellspacing="2" cellpadding="2" style="display:none">
  <tbody>
    <tr>
      <td><?  include ("mod/load/show/photo_upload/check_finish.php");?></td>
    </tr>
  </tbody>
</table>

 