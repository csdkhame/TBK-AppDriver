 
 <? 
$part='D:/AppServ/www/booking/admin/file/driver/id_driver/1484462093.jpg';

 
/// /home/admin/domains/t-booking.com/admin/file/driver/id_card/1484462093.jpg


//$part='/home/admin/domains/t-booking.com/admin/file/driver/id_card/';

$a='driving';

 ?>
 
 
 
  <style>
   .div-all-photo{
	 padding:5px;   border-radius: 25px; border: 1px solid #ddd;background-color:#FFFFFF;     margin-bottom: 5px; box-shadow: 0px  0px 0px #DADADA  ;
	 
 }
 
 
 </style><div id="upload_photo_action"></div>
 <table width="100%" border="0" align="center" cellpadding="2" cellspacing="2" >
  <tbody>
    <tr>
      <td> 
 
 <? //=$_GET[checkin]?>
 <? //=$_GET[checkin]?>       
 
 <div class="div-all-photo">
        
 <table width="100%" border="0" cellspacing="2" cellpadding="2" >
  <tbody>
    <tr>
       
      <td width="50%">
        <label class="input-group-btn" > <span class="btn btn-primary" style="width:100%; z-index:0; border-radius: 15px;" id="btn_camera_<?=$a?>"> <i class="fa  fa-camera"></i>&nbsp;ถ่ายภาพ
          <input type="text" class="form-control" name="icon_camera_<?=$a?>" id="icon_camera_<?=$a?>"   style="display: none;"/>
        </span></label></td>
        
      <td width="50%">      <button type="button" class="btn btn-default " data-toggle="modal"   style="padding-left:5px; padding-right:5px; width:100%; border-radius: 15px; background-color:#FFFFFF" id="refresh_photo_<?=$a?>"><i class="fa  fa-refresh" style="font-size:20px; "></i> ใช้ภาพเดิม</button></td>
      </tr>
  </tbody>
</table>

<div class="progress" style="width:100%;;border-radius:8px; height:20px; margin: 0; padding:0px; margin-left:-0px;border:none; display:none " id="area_album_load_<?=$a?>">
  <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="40"
  aria-valuemin="0" aria-valuemax="100" id="percent_load_pic_<?=$a?>" style="width:0%;border-radius:5px;border:none; color:#FFF; font-size:14px;">
      </div>
  </div>

 
 

<img  id="image_<?=$a?>" name="image_<?=$a?>"  style="width:100%; padding:5px; margin-top:0px;border-radius:15px; display:nones " />     

    </div>            
           
           
           
<script>


$("#image_<?=$a?>").attr('src', '../data/pic/driver/id_driving/<?=$driver_id?>.jpg?v=<?=time()?>');

 
 
    /////////  id driving
 $("#refresh_photo_<?=$a?>").click(function(){  
 
 
 

 
 if(document.getElementById('check_photo_<?=$a?>').value > 0){
	 
 
	 
var url_pic = "go.php?name=user/photo&file=upload_pic&id=<?=$arr[project][id];?>&folder=<?=$arr[project][invoice];?>&number=<?=$a?>&type=<?=$_GET[checkin]?>&action=del";
 



  
  $('#upload_photo_action').load(url_pic); 
	 
	 
	 

 
  
 ///  $("#image_<?=$a?>").hide(); 
 
 $("#image_<?=$a?>").attr('src', '../data/pic/driver/id_driving/<?=$driver_id?>.jpg?v=<?=time()?>');
 
 
$("#del_photo_<?=$a?>").removeClass('btn-danger');
$("#del_photo_<?=$a?>").addClass('btn-default');



$("#btn_camera_<?=$a?>").removeClass('btn-success');
$("#btn_camera_<?=$a?>").addClass('btn-primary');


 
 
 
  document.getElementById('check_photo_<?=$a?>').value=0;
 
 sum_photo();
	
 }
 
 
  
  });
  
  
  
  
 
  /////////  id driving
 $("#icon_camera_<?=$a?>").click(function(){  
 
     document.getElementById('upload_pic_type').value='id_driving';
  
  
  
  
  ///alert(0);
  
  document.getElementById('upload_pic_number').value='<?=$a?>';
 
 
  $("#load_checkin_camera").click(); 
  
  

  
  });
  
 
 
  
  </script>
           
           
 <input class="form-control" type="hidden" name="check_photo_<?=$a?>" id="check_photo_<?=$a?>" value="<?=$arr[web_driver][pic_driver];?>" >
       
                
  </td>
    </tr>
  </tbody>
</table>

   
      <input class="form-control" type="hidden" name="upload_pic_number" id="upload_pic_number"    value="0" >
      
 <input class="form-control" type="hidden" name="check_photo_all" id="check_photo_all"    value="0" >
      
      
<table width="100%" border="0" cellspacing="2" cellpadding="2" style="display:none">
  <tbody>
    <tr>
      <td></td>
    </tr>
  </tbody>
</table>



 




<? if($_GET[checkin]<>'finishpoint'){?>


<script language="JavaScript" type="text/javascript">
 



function sum_photo(){
	
 
document.getElementById('check_photo_all').value = parseInt(document.getElementById('check_photo_1').value)  + parseInt(document.getElementById('check_photo_2').value) ;
 	////alert(document.getElementById('check_photo_all').value);
	
	if(document.getElementById('check_photo_all').value>0){ 
	
	
	
	$("#td_confirm_checkpoint_<? echo $arr[project][id];?>").fadeIn(); 
 
	}
	
		if(document.getElementById('check_photo_all').value<1){ 
 
	
	$("#td_confirm_checkpoint_<? echo $arr[project][id];?>").fadeOut(); 
 
	}
 

}


			
$(".btn-modal-no").click(function(){  
///alert(0);
 $( "#load_data_checkin_popup" ).toggle();

});
			

 
</script>

<? } ?>
 