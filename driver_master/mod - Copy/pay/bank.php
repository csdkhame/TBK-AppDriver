
<style type="text/css">
.mainpic_index {

   padding:10px;   
   
           -moz-border-radius:50%;
        -webkit-border-radius:50%;
        border-radius:50%;

   border:1px solid #FFFFFF; background-color:#FFFFFF; 
   box-shadow: 2px 1px 5px #333333; margin-right:5px; margin-bottom:5PX;max-width:400px;
    
}
.mainpic {
   border:8px solid #FFFFFF; background-color:#FFFFFF; 
   box-shadow: 2px 1px 10px #333333; 
		
		 height:300px; width:300px;
       border-radius: 50%;
       background:url(http://t-booking.com/admin/file/driver/pic/<?=$arr[web_driver][post_date];?>.jpg);
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



 <div class="box box-default">
 
   <div class="box-header with-border">
          <h2 class="box-title"><span class="font_24"><b>บัญชีธนาคาร</b></span></h2>

 
   </div>
 
  
<form method="post" action="" id="edit_form" name="edit_form"  enctype="multipart/form-data" >
  <div class="box-body" style="margin-left:-15px;"  >
         <div class="row" style="padding-right:10px; ">
		            <div class="col-md-6">
			      
<div>
                    <div class="topicname"><i class="fa  fa-user"></i>&nbsp;ชื่อบัญชี</div>
                    <input class="form-control" type="text" name="pay_bank_name" id="pay_bank_name"   required="true"  onkeypress="UserEnter(this,event)" value="<?=$arr[web_driver][pay_bank_name];?>"    >
              </div>
                
				
				 
		      <div> 
                     <div class="topicname"><i class="fa  fa-bank "></i>&nbsp;ธนาคาร </div>
                     <select name="pay_bank_name" size="0"    id="pay_bank_name"  class="form-control"  >
					 <? if($arr[web_driver][pay_bank]<>""){ ?>
					  <option selected="selected" value="<?=$arr[driver][pay_bank_name]?>" ><?=$arr[driver][pay_bank_name]?></option>
					 <? } ?>
					 
                       <option value="" >-- กรุณาเลือกธนาคาร --</option>
					   
					   
					   
                       <option value="กรุงไทย" >กรุงไทย</option>
                       <option value="กสิกรไทย" >กสิกรไทย</option>
                       <option value="ไทยพาณิชย์" >ไทยพาณิชย์</option>
                       <option value="กรุงเทพ" >กรุงเทพ</option>
                       <option value="ทหารไทย" >ทหารไทย</option>
                       <option value="กรุงศรีอยุธยา" >กรุงศรีอยุธยา</option>
                       <option value="เกียรตินาคิน" >เกียรตินาคิน</option>
                       <option value="ซิติแบงก์" >ซิติแบงก์</option>
                       <option value="ทิสโก้" >ทิสโก้</option>
                       <option value="ซีไอเอ็มบี ไทย" >ซีไอเอ็มบี ไทย</option>
                       <option value="ธนชาต" >ธนชาต</option>
                       <option value="นครหลวงไทย" >นครหลวงไทย</option>
                       <option value="ยูโอบี" >ยูโอบี</option>
                       <option value="สแตนดาร์ดชาร์เตอร์ดไทย" >สแตนดาร์ดชาร์เตอร์ดไทย</option>
                       <option value="เมกะสากลพาณิชย์" >เมกะสากลพาณิชย์</option>
                       <option value="ไอซีบีซี" >ไอซีบีซี</option>
                       <option value="แลนด์ แอนด์ เฮ้าส์ เพื่อรายย่อย" >แลนด์ แอนด์ เฮ้าส์ เพื่อรายย่อย</option>
                       <option value="ไทยเครดิต เพื่อรายย่อย" >ไทยเครดิต เพื่อรายย่อย</option>
                       <option value="พัฒนาวิสาหกิจขนาดกลางและขนาดย่อม" >พัฒนาวิสาหกิจขนาดกลางและขนาดย่อม</option>
                       <option value="เพื่อการเกษตรและสหกรณ์การเกษตร" >เพื่อการเกษตรและสหกรณ์การเกษตร</option>
                       <option value="เพื่อการส่งออกและนำเข้าแห่งประเทศไทย" >เพื่อการส่งออกและนำเข้าแห่งประเทศไทย</option>
                       <option value="อิสลามแห่งประเทศไทย" >อิสลามแห่งประเทศไทย</option>
                     </select>
			  </div>
		      <!----- ปิด col--> </div> <!---->
		  
		  
		  <div class="col-md-6">
			      
       <div>
                     <div class="topicname"><i class="fa fa-bank "></i>&nbsp;สาขาธนาคาร</div>
                    <input class="form-control" type="text" name="pay_bank_sub" id="pay_bank_sub"  required="true" onkeypress="PasswordEnter(this,event)"   value="<?=$arr[web_driver][pay_bank_sub];?>" >
            </div>
					
					
					
                    <div>
                     <div class="topicname"><i class="fa fa-building-o"></i>&nbsp;เลขที่บัญชี</div>
               <input type="text" name="pay_bank_number" id="pay_bank_number"  required="true"   value="<?=$arr[web_driver][pay_bank_number];?>" class="form-control"  >
    </div>
	    
			        </div>
					
   
		  <!----- ปิด col--> </div> <!---->
		
		 
 
		 
 
 
 
 

  
  <div  id="send_user_data" style="margin-left:10px;"></div>
  
  
    <div style="margin-top:10px; margin-left:10px;" >
 <table width="100%"  border="0" cellspacing="2" cellpadding="2" >
  <tr>
    <td width="50%" style="padding:5 px;"><button id="submit_user_network" type="button" class="btn btn-block btn-primary" >บันทึกข้อมูล</button></td>
    <td width="50%" style="padding:5px;"><button type="reset" class="btn btn-block btn-default"   >รีเซ็ต</button></td>
  </tr>
</table>
 
    </div>
        
  </div>
  
    <!----- ปิด row-->
  </div>
  </div>
  
  	
  
 <script>
 /// check login

$("#submit_user_network").click(function(){ 
//$('#file_upload_line').click();
 
if(document.getElementById('pay_bank_name').value=="") {
swal('กรุณากรอกชื่อบัญชีธนาคาร'); 
document.getElementById('pay_bank_name').focus() ; 
return false ;
}
if(document.getElementById('pay_bank').value=="") {
swal('กรุณาเลือกธนาคาร'); 
document.getElementById('pay_bank').focus() ; 
return false ;
}
if(document.getElementById('pay_bank_sub').value=="") {
swal('กรุณากรอกสาขาธนาคาร'); 
document.getElementById('pay_bank_sub').focus() ; 
return false ;
}
if(document.getElementById('pay_bank_number').value=="") {
swal('กรุณากรอกเลขที่บัญชีธนาคาร'); 
document.getElementById('pay_bank_number').focus() ; 
return false ;
}
 
 $.post('popup.php?name=user&file=savedata&type=bank&id=<?=$arr[web_driver][id]?>',$('#edit_form').serialize(),function(response){
   $('#send_user_data').html(response);
  });
  
  
 });
 </script> 
 </form> 
    </div>
    
 