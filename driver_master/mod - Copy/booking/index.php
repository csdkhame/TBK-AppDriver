 
<style type="text/css">
.mainpic_index {

  padding:10px;   
  
           -moz-border-radius:50%;
        -webkit-border-radius:50%;
        border-radius:50%;

   border:1px solid #FFFFFF; background-color:#FFFFFF; 
   box-shadow: 2px 1px 5px #333333; margin-right:5px; margin-bottom:5PX;max-width:400px;
    
}

 

.mainpic_dv {

   padding:10px;   
 

   border:1px solid #FFFFFF; background-color:#FFFFFF; 
   box-shadow: 2px 1px 5px #333333; margin-right:5px; margin-bottom:5PX;max-width:400px;
    
}

.mainpic {
   border:8px solid #FFFFFF; background-color:#FFFFFF; 
   box-shadow: 2px 1px 10px #333333; 
		
		 height:300px; width:300px;
       border-radius: 50%;
       background:url(../../admin/file/driver/pic/<?=$arr[web_driver][post_date];?>.jpg);
	       background-size: 450px ;
    background-repeat: no-repeat; background-position:center;
        }

<!--
.topicname { padding-top:10px; padding-left:10px; padding-bottom:5px; font-size:18px; font-weight:bold; color: #333333 ; text-align:left;  
 
}
.form-control { margin-left:10px; padding-left:10px; }


}
-->
</style>
 
      <script>
			 
			 
			 $( document ).ready(function() {
			 
	
			 $('#btn_chk_booking_place').click(function(){  
			 
			 
			 		alert(0); 
			 
 
 //     var driver= $('#drivername<?=$i;?>').val();
	  
	  
	  /*
 	  
      var url_map = "empty_style.php<?=$load_transfer_action?>/form/load/data&file=map&driver="+driver; 
	  
	  $('#load_data_driver_<?=$arr[product][id].$i;?>').html('<?=$part_img_load_small?>'); 
	  
	     $('#load_data_driver_<?=$arr[product][id].$i;?>').load(url_map); 
		 
		 
		 */
		 
		 
	    });	 
		 


	
	
		 $('#btn_chk_booking_place_gps').click(function(){  
		 
 	 
		 
 
 //     var driver= $('#drivername<?=$i;?>').val();
	  
   
	  /*
   
      var url_map = "empty_style.php<?=$load_transfer_action?>/form/load/data&file=map&driver="+driver; 
	  
	  $('#load_data_driver_<?=$arr[product][id].$i;?>').html('<?=$part_img_load_small?>'); 
	  
	     $('#load_data_driver_<?=$arr[product][id].$i;?>').load(url_map); 
 	 
		 */
		 
 

    });


			 
			     });
			 
			 </script>       
                    
 
 
 

<? $coldata="col-md-6";?>
<? $coldata3="col-md-6";?>


 

<div class="box box-default">

<form method="post"  id="edit_form" name="edit_form">
 <br>
   
   
  
					
					
              <!-- /.box-header -->
        <div class="box-body" >
          <div class="row">
		  
            <div class="<?= $coldata?>">
              <div>
                <div class="topicname">สถานที่รับ&nbsp;&nbsp;</div>
                
                <div>
                
                <ul class="nav nav-tabs" style="padding-top:0px; height:40px; margin-left:10px; border:none">
 
 
       <li    id="btn_chk_booking_place"  class="active" ><a data-toggle="tab" href="#tab_chk_name"><i class="fa  fa-bank"  fa-spin 6x style="color:#666666;font-size:18px;"></i><strong>เลือกสถานที่รับ</strong></a ></li>
 
 
 
 
      <li    id="btn_chk_booking_place_gps" ><a data-toggle="tab" href="#tab_chk_name"><i class="fa  fa-map-marker"  fa-spin 6x style="color:#666666;font-size:20px;"></i><strong>&nbsp;ตำแหน่งในแผนที่</strong></a ></li>
      
 
  
    

 
   

	
 
  </ul>
  
            </div>      
            
 
            <div id="load_select_place">         
                
                
  <input name="name" type="text"  required="true" class="form-control" id="name" style="padding:4px 2px;width:97%;" onkeypress="PasswordEnter(this,event)" value="Holiday Inn Express Phuket Patong Beach Central" >
       
                </div>
                
                
   		      </div> 
                
  </div>  
                     
                     
					
              <!-- /.box-header -->

 <div class="<?= $coldata?>">
 <div>


<table width="100%" border="0" cellspacing="1" cellpadding="1">
  <tbody>
    <tr>
      <td width="60%"> 
             <div class="topicname">วันที่</div>
        <div class="input-group date">
          <input type="text" class="form-control" value="<?=date('Y-m-d');?>"  name="date_report" id="date_report"    style="background-color:#FFFFFF; height:40px; font-size:24px ">
          <div class="input-group-addon"  id="btn_calendar" style="cursor:pointer "> <i class="fa fa-calendar" style="font-size:24px; "></i> </div>
        </div>
 </td>
      <td width="40%">
      
      
         <div class="topicname">เวลาถึง</div>
      
      
      
      <table width="100%" border="0" cellspacing="1" cellpadding="1">
        <tbody>
          <tr>
            <td width="50%">
            
            
 
            
 
            <select name="work_<?=$arr[driver1][id]?>2" id="work_<?=$arr[driver1][id]?>2" style="width:100%; font-size:20px; padding:5px" >
              <?
				   for($ii=0;$ii<32;$ii++){
				  
				  ?>
              <option value="<?=$ii;?>" <?  if($d== $ii){ echo "selected=selected";} ?> >
               0<?=$ii;?>
                </option>
              <?  } ?>
            </select></td>
            <td width="50%"><select name="work_<?=$arr[driver1][id]?>3" id="work_<?=$arr[driver1][id]?>3" style="width:100%; font-size:20px; padding:5px" >
              <?
				   for($ii=0;$ii<32;$ii++){
				  
				  ?>
              <option value="<?=$ii;?>" <?  if($d== $ii){ echo "selected=selected";} ?> >
                0<?=$ii;?>
                </option>
              <?  } ?>
            </select></td>
          </tr>
        </tbody>
      </table></td>
    </tr>
  </tbody>
</table>
 
 
 
 

    </div> 
  </div>  
                     
                     
                     
                     
                     
                     
                          <div class="<?= $coldata?>">
			            <div>
                    <div class="topicname">สถานที่ส่ง</div>
                    <input name="name" type="text"  required="true" class="form-control" id="name" style="padding:4px 2px;width:97%;" onkeypress="PasswordEnter(this,event)" value="King Power Phuket Complex" >
           		    </div> 
					 </div>  
                     
                     
                      
                          <div class="<?= $coldata?>">
			            <div style="padding:5px;">        
                     
                     
                     <table width="100%" border="0" cellspacing="1" cellpadding="1">
  <tbody>
    <tr>
      <td width="25%" align="center">                   
                  <div class="topicname">ผู้ใหญ่</div>
                    <select name="work_<?=$arr[driver1][id]?>" id="work_<?=$arr[driver1][id]?>" style="width:100%; font-size:20px; padding:5px" >
                      <?
				   for($ii=0;$ii<32;$ii++){
				  
				  ?>
                      <option value="<?=$ii;?>" <?  if($d== $ii){ echo "selected=selected";} ?> >
                        <?=$ii;?>
                      </option>
                      <?  } ?>
                    </select>
		         </td>
      <td width="25%" align="center"> 
          <div class="topicname">เด็ก</div>
          <select name="work_<?=$arr[driver1][id]?>" id="work_<?=$arr[driver1][id]?>" style="width:100%; font-size:20px; padding:5px" >
            <?
				   for($ii=0;$ii<32;$ii++){
				  
				  ?>
            <option value="<?=$ii;?>" <?  if($d== $ii){ echo "selected=selected";} ?> >
              <?=$ii;?>
              </option>
            <?  } ?>
            </select>
  </td>
      <td width="25%" align="center"> 
          <div class="topicname">ทารก</div>
          <select name="work_<?=$arr[driver1][id]?>" id="work_<?=$arr[driver1][id]?>" style="width:100%; font-size:20px; padding:5px" >
            <?
				   for($ii=0;$ii<32;$ii++){
				  
				  ?>
            <option value="<?=$ii;?>" <?  if($d== $ii){ echo "selected=selected";} ?> >
              <?=$ii;?>
              </option>
            <?  } ?>
          </select>
  </td>
  
  
        <td width="25%"> 
          <div class="topicname">สัญชาติ</div>
<div style="height:35px;"><img src="images/flag/China Flag.png" width="40" height="40" alt="" style="margin-top:-5px;"/> จีน</div>

  </td>
      </tr>
  </tbody>
</table>

                     
                     

                     
                   
 
 
 

                   
 

          </div>
					</div>
					
                    
                   <div class="<?= $coldata?>" style="display:none">
              <div>
                <div class="topicname">เส้นทางและเวลาเดินทาง</div>


 
   		      <img src="king.jpg"   alt="" style="width:98%"/>
              
              
              </div> 
                
  </div> 
                    
                    
        
        
        <?       ?>      
                    
                    
                    
                    
                    
                    
                               <div class="<?= $coldata?>">
              <div>
                <div class="topicname">หมายเหตุ</div>
                <input class="form-control" type="text" name="name" id="name"  required="true" onkeypress="PasswordEnter(this,event)" style="padding:4px 2px;width:97%; height:60px; " >
   		      </div> 
                
  </div>    
                    
                    
                    
                    
                    
                    <br>

      

   <div  id="send_user_data"></div>
   
         <div style="  margin-left:16px; margin-right:10px; padding:2px;">


 <table width="100%"  border="0" cellspacing="2" cellpadding="2">
  <tr>
    <td width="50%"><button id="submit_user_data" type="button" class="btn btn-block btn-primary" style="width:100% ">บันทึกข้อมูล</button></td>
    <td width="50%"><button type="reset" class="btn btn-block btn-default"  style="width:100%px ">รีเซ็ต</button></td>
  </tr>
</table><br>

</div>
</form>






<script>
/// check login

$("#submit_user_data").click(function(){ 
 
 
if(document.getElementById('password').value=="") {
swal('กรุณากรอกรหัสผ่าน'); 
document.getElementById('password').focus() ; 
return false ;
}
if(document.getElementById('name').value=="") {
swal('กรุณากรอกชื่อ - นามสกุล(ภาษาไทย)'); 
document.getElementById('name').focus() ; 
return false ;
}

if(document.getElementById('name_en').value=="") {
swal('กรุณากรอกชื่อ - นามสกุล(ภาษาอังกฤษ)'); 
document.getElementById('name_en').focus() ; 
return false ;
}

if(document.getElementById('nickname').value=="") {
swal('กรุณากรอกชื่อเล่น'); 
document.getElementById('nickname').focus() ; 
return false ;
}

if(document.getElementById('idcard').value=="") {
swal('กรุณากรอกเลขบัตรประจำตัวประชาชน'); 
document.getElementById('idcard').focus() ; 
return false ;
}
if(document.getElementById('iddriving').value=="") {
swal('กรุณากรอกหมายเลขใบขับขี่'); 
document.getElementById('iddriving').focus() ; 
return false ;
}

if(document.getElementById('address').value=="") {
swal('กรุณากรอกที่อยู่'); 
document.getElementById('address').focus() ; 
return false ;
}
if(document.getElementById('phone').value=="") {
swal('กรุณากรอกเบอร์โทรศัพท์'); 
document.getElementById('phone').focus() ; 
return false ;
}
if(document.getElementById('contact').value=="") {
swal('กรุณากรอกเบอร์โทรฉุกเฉิน'); 
document.getElementById('contact').focus() ; 
return false ;
}


 
 $.post('popup.php?name=user&file=savedata&type=user&id=<?=$arr[web_driver][id]?>',$('#edit_form').serialize(),function(response){
   $('#send_user_data').html(response);
  });
  
  
 });
 
</script>  
