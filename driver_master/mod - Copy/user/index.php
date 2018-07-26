 

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

<? $coldata="col-md-6";?>


 <div class="box box-default">

<form method="post"  id="edit_form" name="edit_form">
 <br>

   
 <?
 $filename = "../../admin/file/driver/pic/" . $arr[web_driver][post_date] . ".jpg";
if(file_exists($filename)) {

$file_exists = 1;  
}else{
	$url = "http://t-booking.com/admin/file/driver/pic/" . $arr[web_driver][post_date] . ".jpg";

$response = get_headers($url, 1);
$file_exists = (strpos($response[0], "404") === false);  
}	
                      
                       // if(file_exists($file_exists)) {
                        if($file_exists) {
                          // Ǩͺ
                          ?>              
                          
    <img src="http://t-booking.com/admin/file/driver/pic/<?=$arr[web_driver][post_date];?>.jpg"  width="94%"   border="0"  class="IMGSHOP"   />
                          <?
                        }
                        else {
                          ?>              
                          <img src="admin/file/driver/pic/no.jpg"  width="94%" border="0"  class="IMGSHOP"   />
    <?
                        } ?>         	
        
					
					
					
              <!-- /.box-header -->
        <div class="box-body" >
          <div class="row">
		  
            <div class="<?= $coldata?>">
			            <div>
                    <div class="topicname">ชื่อผู้ใช้งาน</div>
                    <input class="form-control" type="text" name="username" id="username" maxlength="50" required="true" style="width:97%" onkeypress="UserEnter(this,event)" value="<?=$arr[web_driver][username];?>"  readonly="readonly">
           		    </div> <!----end box -->
					 </div> <!----end col -->
					 <?  if($arr[web_driver][username]==""){ ?> <script type="text/javascript"> $('#username').addClass("tab_alert");</script> <? } ;?> 
					
					
					
					<div class="<?= $coldata?>">
					 <div> <!----start box -->
                     <div class="topicname">รหัสผ่าน</div>
                    <input class="form-control" type="text" name="password" id="password"  required="true" onkeypress="PasswordEnter(this,event)" style="padding:4px 2px;width:97%;" value="<?=$arr[web_driver][password];?>" >
                      </div> <!----end box -->
					 </div> <!----end col -->
					 <?  if($arr[web_driver][password]==""){ ?> <script type="text/javascript"> $('#password').addClass("tab_alert");</script> <? } ;?> 
					
					<div class="<?= $coldata?>">
					 <div> <!----start box -->
                     <div class="topicname">ชื่อ - นามสกุล (ไทย)</div>
                    <input class="form-control" type="text" name="name" id="name"  required="true" onkeypress="PasswordEnter(this,event)" style="padding:4px 2px;width:97%;" value="<?=$arr[web_driver][name];?>" >
                     </div> <!----end box -->
					 </div> <!----end col -->
					  <?  if($arr[web_driver][name]==""){ ?> <script type="text/javascript"> $('#name').addClass("tab_alert");</script> <? } ;?> 
					 
					
                    <div class="<?= $coldata?>">
					<div> <!----start box --> 
                     <div class="topicname">ชื่อ - นามสกุล (อังกฤษ)</div>
                    <input class="form-control" type="text" name="name_en" id="name_en"  required="true" onkeypress="PasswordEnter(this,event)" style="padding:4px 2px;width:97%;" value="<?=$arr[web_driver][name_en];?>" >
                     </div> <!----end box -->
					 </div> <!----end col -->
					   <?  if($arr[web_driver][name_en]==""){ ?> <script type="text/javascript"> $('#name_en').addClass("tab_alert");</script> <? } ;?> 
					 
					                     <div class="<?= $coldata?>">
					<div> <!----start box --> 
                     <div class="topicname">ชื่อเล่น</div>
                    <input class="form-control" type="text" name="nickname" id="nickname"  required="true" onkeypress="PasswordEnter(this,event)" style="padding:4px 2px;width:97%;" value="<?=$arr[web_driver][nickname];?>"  readonly="readonly">
                     </div> <!----end box -->
					 </div> <!----end col -->
					    <?  if($arr[web_driver][nickname]==""){ ?> <script type="text/javascript"> $('#nickname').addClass("tab_alert");</script> <? } ;?> 
					 
					 
                    <div class="<?= $coldata?>">
					<div> <!----start box --> 
                     <div class="topicname">เลขบัตรประจำตัวประชาชน</div>
                    <input class="form-control" type="text" name="idcard" id="idcard"  required="true" onkeypress="PasswordEnter(this,event)" style="padding:4px 2px;width:97%;" value="<?=$arr[web_driver][idcard];?>" >
                     </div> <!----end box -->
					 </div> <!----end col -->
					     <?  if($arr[web_driver][idcard]==""){ ?> <script type="text/javascript"> $('#idcard').addClass("tab_alert");</script> <? } ;?> 
						 
						 
						 
					 <div class="<?= $coldata?>">
					<div> <!----start box --> 
                     <div class="topicname">หมายเลขใบขับขี่</div>
                    <input class="form-control" type="text" name="iddriving" id="iddriving"  required="true" onkeypress="PasswordEnter(this,event)" style="padding:4px 2px;width:97%;" value="<?=$arr[web_driver][iddriving];?>" >
                     </div> <!----end box -->
					 </div> <!----end col -->
  <?  if($arr[web_driver][iddriving]==""){ ?> <script type="text/javascript"> $('#iddriving').addClass("tab_alert");</script> <? } ;?> 
					 
	 
	 
                    <div class="<?= $coldata?>">
					<div> <!----start box --> 
                     <div class="topicname">ที่อยู่</div>
                    <input class="form-control" type="text" name="address" id="address"  required="true" onkeypress="PasswordEnter(this,event)" style="padding:4px 2px;width:97%;" value="<?=$arr[web_driver][address];?>" >
                     </div> <!----end box -->
					 </div> <!----end col -->
					<!---->
					  <?  if($arr[web_driver][address]==""){ ?> <script type="text/javascript"> $('#address').addClass("tab_alert");</script> <? } ;?> 
					
                    <div class="<?= $coldata?>">
					<div> <!----start box -->
                     <div class="topicname">เบอร์โทรศัพท์</div>
                    <input class="form-control" type="text" name="phone" id="phone"  required="true" onkeypress="PasswordEnter(this,event)" style="padding:4px 2px;width:97%;" value="<?=$arr[web_driver][phone];?>" >
                     </div> <!----end box -->
					 </div> <!----end col -->
					  <?  if($arr[web_driver][phone]==""){ ?> <script type="text/javascript"> $('#phone').addClass("tab_alert");</script> <? } ;?> 
					
                    <div class="<?= $coldata?>">
					<div> <!----start box -->
                     <div class="topicname">เบอร์โทรฉุกเฉิน</div>
                    <input class="form-control" type="text" name="contact" id="contact"  required="true" onkeypress="PasswordEnter(this,event)" style="padding:4px 2px;width:97%;" value="<?=$arr[web_driver][contact];?>"  >
					<?  if($arr[web_driver][contact]==""){ ?> <script type="text/javascript"> $('#contact').addClass("tab_alert");</script> <? } ;?> 


                     </div> <!----end box -->
					</div> <!----end box -->
					
					 
 
 
 

                   
 

                    </div>
					</div>
					
      

   <div  id="send_user_data"></div>
   
         <div style="  margin-left:16px; margin-right:10px; padding:2px;">


 <table width="100%"  border="0" cellspacing="2" cellpadding="2">
  <tr>
    <td width="150"><button id="submit_user_data" type="button" class="btn btn-block btn-primary" style="width:140px ">บันทึกข้อมูล</button></td>
    <td><button type="reset" class="btn btn-block btn-default"  style="width:140px ">รีเซ็ต</button></td>
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