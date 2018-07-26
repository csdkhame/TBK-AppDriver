 
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
<?

 


$arr[project][id]=1;



$rand = substr(str_shuffle('123456789012345678901234567890123456789012345678901234567890123456789012345678901234567890123456789012345678901234567890123456789012345678901234567890'),0, 30);



$arr[project][invoice]=$rand;

 
 for($i=1;$i<3;$i++){ ?>
 <div class="div-all-photo">
        
 <table width="100%" border="0" cellspacing="2" cellpadding="2" >
  <tbody>
    <tr>
      <td width="10" class="font_20"><?=$i?>.</td>
      <td width="100">
        <label class="input-group-btn" > <span class="btn btn-primary" style="width:100px; z-index:0; border-radius: 15px;" id="btn_camera_<?=$i?>"> <i class="fa  fa-camera"></i>&nbsp;ถ่ายภาพ
          <input type="text" class="form-control" name="icon_camera_<?=$i?>" id="icon_camera_<?=$i?>"   style="display: none;"/>
        </span></label></td>
      <td><span class="input-group" style="margin-top:5px;">
        <input type="text"  value="ไม่มีภาพถ่าย" class="photo-no-active" readonly  style="padding-left:5px; margin-top:-5px; padding-right:0px; width:100%; height:35px;" id="url_photo_<?=$i?>">
      </span></td>
      <td width="30">        
      
      <button type="button" class="btn btn-default " data-toggle="modal"   style="padding-left:5px; padding-right:5px; width:30px" id="del_photo_<?=$i?>"><i class="fa  fa-trash" style="font-size:20px; "></i></button>
 
      
      </td>
    </tr>
  </tbody>
</table>

<div class="progress" style="width:100%;;border-radius:8px; height:20px; margin: 0; padding:0px; margin-left:-0px;border:none; display:none " id="area_album_load_<?=$i?>">
  <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="40"
  aria-valuemin="0" aria-valuemax="100" id="percent_load_pic_<?=$i?>" style="width:0%;border-radius:5px;border:none; color:#FFF; font-size:14px;">
      </div>
  </div>

 


<img  id="image_<?=$i?>" name="image_<?=$i?>"  style="width:100%; padding:5px; margin-top:0px;border-radius:15px; display:none " />     

    </div>            
           
           
           
<script>
 
    /////////  id driving
 $("#del_photo_<?=$i?>").click(function(){  
 
 
 

 
 if(document.getElementById('check_photo_<?=$i?>').value=='1'){
	 
	 
	 
var url_pic = "go.php?name=pay/photo_upload&file=upload_pic&id=<?=$arr[project][id];?>&folder=<?=$arr[project][invoice];?>&number=<?=$i?>&type=<?=$_GET[checkin]?>&action=del";
 

  
  $('#upload_photo_action').load(url_pic); 
	 
	 
	   
	 
 
  
  $("#image_<?=$i?>").hide(); 
    document.getElementById('url_photo_<?=$i?>').value='ไม่มีภาพถ่าย';
 
$("#del_photo_<?=$i?>").removeClass('btn-danger');
$("#del_photo_<?=$i?>").addClass('btn-default');



$("#btn_camera_<?=$i?>").removeClass('btn-success');
$("#btn_camera_<?=$i?>").addClass('btn-primary');


 
 

  document.getElementById('check_photo_<?=$i?>').value=0;
 
 
	
 }
 
 sum_photo();
  
  });
  
  
  
  
 
  /////////  id driving
 $("#icon_camera_<?=$i?>").click(function(){  
  $("#percent_load_pic_<?=$i?>").css({'width': '0%'});
  
  ///alert(0);
  
  document.getElementById('upload_pic_number').value='<?=$i?>';
 
 
  $("#load_checkin_camera").click(); 
  
  

  
  });
  
 
 
  
  </script>
           
           
 <input class="form-control" type="hidden" name="check_photo_<?=$i?>" id="check_photo_<?=$i?>"    value="0" >
       
                
         <? } ?>  </td>
    </tr>
  </tbody>
</table>
 
   <input class="form-control" type="hidden" name="upload_pic_type" id="upload_pic_type"    value="<?=$_GET[checkin]?>" >
   
      <input class="form-control" type="hidden" name="upload_pic_number" id="upload_pic_number"    value="0" >
      
 <input class="form-control" type="hidden" name="check_photo_all" id="check_photo_all"    value="0" >
 
      
<table width="100%" border="0" cellspacing="2" cellpadding="2" style="display:none">
  <tbody>
    <tr>
      <td><?  include ("mod/pay/photo_upload/check.php");?></td>
    </tr>
  </tbody>
</table>




<? if($_GET[checkin]=='finishpoint'){?>


<script language="JavaScript" type="text/javascript">
 
 



 
function sum_photo(){
	
 
 ///// complete
 document.getElementById('check_photo_all').value = parseInt(document.getElementById('check_photo_1').value)  + parseInt(document.getElementById('check_photo_2').value) ;
 
 
document.getElementById('check_photo_check_all').value = parseInt(document.getElementById('check_photo_check_1').value)  + parseInt(document.getElementById('check_photo_check_2').value)  ;
 

 
 
	
	if(document.getElementById('check_photo_all').value>0 && document.getElementById('check_photo_check_all').value>0){ 
	
	
	
	$("#td_confirm_checkpoint_<? echo $arr[project][id];?>").fadeIn(); 
 
	}
	
 if(document.getElementById('check_photo_all').value<1){ 
 
 
 
 
 $("#td_confirm_checkpoint_<? echo $arr[project][id];?>").fadeOut(); 
 
	}
	
	
	 if(document.getElementById('check_photo_check_all').value<1){ 
 
 
 
 $("#td_confirm_checkpoint_<? echo $arr[project][id];?>").fadeOut(); 
 
	}
	
	
	
 

}
 
			
$(".btn-modal-no").click(function(){  
///alert(0);
 $( "#load_data_checkin_popup" ).toggle();

});
			








 
 
</script>

<? } ?>





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
 $( "#load_data_main_popup" ).toggle();

});
			

 
</script>

<? } ?>
 
 
 
 
       

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
 
 
 
 