<?
CheckAdmin($_SESSION['admin_user'], $_SESSION['admin_pwd']);
include("FCKeditor/fckeditor.php") ;

 


?><script type="text/javascript">
function sum(){
var alphaExp = /[\@\#\%\/\\\^\&\*\(\)\_\+\.]/;
if (document.getElementById("paysms").value.match(alphaExp))
{
alert("??????");
document.getElementById('paysms').value="";
return false ;
}
if(document.getElementById('paysms').value == "") {
document.getElementById('result').value = parseInt(document.getElementById('allsms').value)  ;
return false ;
}

else if(document.getElementById('paysms').value > 0) {
document.getElementById('result').value = parseInt(document.getElementById('allsms').value) + parseInt(document.getElementById('paysms').value)   ;
return false ;
}

}
function  number() {
		if(document.getElementById('result').value < 0) {
		alert("?? SMS ?? ?????") ;
document.getElementById('paysms').value="";
return false ;

}
		}
		var iCountDown=setInterval("sum()",1000); 
				var iCountDown=setInterval("number()",1000); 
</script>
<script type="text/javascript" src="datepic.js"></script>
				        <table width="100%" border="0" cellpadding="0" bgcolor="#FFFFFF">
                          <tr>
                            <td  class="topic_h"><img src="imagesmenu/KoolTabs.png" width="16" height="16" align="absmiddle" />&nbsp;
                            <?=menutopic_driver;?></td>
                          </tr>
     </table>
				        <br />
				        <a href="?name=admin/car/driver&file=driver_report"><img src="images/admin/open.gif"  border="0" align="absmiddle" /> รายงานการขับรถวันนี้ </a>&nbsp;&nbsp;&nbsp;<a href="?name=admin&amp;file=transfer&amp;op=transfer_add"></a><br />
				        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td width="50%"><form id="form1" name="form1" method="post" action="">
                              <table width="100%" border="0" cellspacing="1" cellpadding="1">
                                <tr>
                                  <td>Search by date :
                                    <input name="day" id="day" style="width:120px; FONT-SIZE:13px; " value="<?
if($_POST[find]){

echo $day=$_POST[day];}
?>" readonly="readonly" />
                                      <img src="images/admin/dateselect.gif" border="0"  onclick="displayDatePicker('day', false, 'ymd', '-');" align="absmiddle" />
                                      <input name="find" type="submit" class="myButton" id="find"  value="Search" /></td>
                                </tr>
                              </table>
                            </form></td>
                            <td><form action="export.php?name=admin/car/driver&file=driver_export" method="post" name="form1" target="_blank" id="form1">
                              <table width="100%" border="0" cellspacing="1" cellpadding="1">
                                <tr>
                                  <td>Export :
                                    <input name="dayall" id="dayall" style="width:120px; FONT-SIZE:13px; " value="<?
if($_POST[find]){

echo $day=$_POST[day];}
?>" readonly="readonly" />                                      
                                    <img src="images/admin/dateselect.gif" border="0"  onclick="displayDatePicker('dayall', false, 'ymd', '-');" align="absmiddle" />
                                      <input name="find2" type="submit" class="myButton" id="find2"  value="Search" /></td>
                                </tr>
                              </table>
                           
                            </form></td>
                          </tr>
                        </table>
			          <BR>
					  <?
if($_POST[find]){

 $today=$_POST[day];}
else {
$today = date('Y-m-d',strtotime("now"));
}
?>
				      <table width="100%" border="0" cellspacing="1" cellpadding="1" style="border:dotted 1px; border-color:#006699">
                        <tr>
                          <td><font size="+2">รายงานการขับรถวันที่ :: <?
if($_POST[find]){

echo $today=$_POST[day];}
else {
echo $today = date('Y-m-d',strtotime("now"));
}
?></b></td>
                        </tr>
                        <tr>
                          <td><table cellspacing="0" cellpadding="0" width="100%" border="0">
                            <tbody>
                              <tr>
                                <td width="100%" valign="top"><!-- Admin -->
                                    <table width="100%" align="center" cellspacing="0" cellpadding="0" border="0">
                                      <tr> </tr>
                                      <tr>
                                        <td valign="top"><br />
                                              <?



//////////////////////////////////////////// ʴ¡ Project   

if($_GET[op] == ""){

	$db->connectdb(DB_NAME,DB_USERNAME,DB_PASSWORD);

	$limit = 200 ;

	$SUMPAGE = $db->num_rows(TB_driver,"id","");

	$page=$_GET[page];

	if (empty($page)){

		$page=1;

	}

	$rt = $SUMPAGE%$limit ;

	$totalpage = ($rt!=0) ? floor($SUMPAGE/$limit)+1 : floor($SUMPAGE/$limit); 

	$goto = ($page-1)*$limit ;

?>
                                              <form action="?name=admin/car/driver&amp;file=driver&amp;op=useragent_del&amp;action=multidel" method="post" name="myform" id="myform">
                                                <table width="100%" cellspacing="2" cellpadding="1" >
                                                  <tr bgcolor="#990000" height="25">
                                                    
                                                    <td width="60" align="center" bgcolor="#999999"><font color="#FFFFFF">ภาพถ่าย</font></td>
                                                    <td align="center" bgcolor="#999999"><font color="#FFFFFF">ชื่อ-นามสกุุล</font></td>
                                                    <td width="80" align="center" bgcolor="#999999"><font color="#FFFFFF">ชื่อเล่น</font></td>
                                                    <td width="120" align="center" bgcolor="#999999"><font color="#FFFFFF">บริษัท</font></td>
                                                    
                                                    <td width="100" align="center" bgcolor="#999999"><font color="#FFFFFF">เบอร์โทรศัพท์</font></td>
                                                    <td width="100" align="center" bgcolor="#999999"><font color="#FFFFFF">จำนวนเที่ยว</font></td>
                                                    <td width="100" align="center" bgcolor="#999999"><font color="#FFFFFF">ค่าเที่ยว</font></td>
                                                    <td width="60" align="center" bgcolor="#999999"><center>
                                                        <font color="#FFFFFF">ดู</font>
                                                    </center></td>
                                                  </tr>
                                                  <?

//echo $star;

//echo $data_agent;

$res[project] = $db->select_query("SELECT * FROM ".TB_driver."  where id = '".$adminid."'  ORDER BY  company desc  LIMIT $goto, $limit ");

while($arr[project] = $db->fetch($res[project])){

 

	

	$res[car] = $db->select_query("SELECT * FROM ".TB_carall." WHERE id='".$arr[project][car_num]."' ");

	$arr[car] = $db->fetch($res[car]);
	
	
	$res[service] = $db->select_query("SELECT * FROM ".TB_admin." WHERE id='".$arr[car][company]."' ");

	$arr[service] = $db->fetch($res[service]);
	
	
	
			$db->update_db(TB_driver,array(

			"service"=>$arr[service][service],

			"company"=>$arr[car][company]

		)," id=".$arr[project][id]." ");
	
	
	
	
	
	$res[cartype] = $db->select_query("SELECT * FROM ".TB_carall_type." WHERE id='".$arr[car][car_type]."' ");

	$arr[cartype] = $db->fetch($res[cartype]);
	
	
		$res[com] = $db->select_query("SELECT * FROM ".TB_admin." WHERE id='".$arr[car][company]."' ");

	$arr[com] = $db->fetch($res[com]);
 



			///////////////

$round = $db->num_rows(TB_order,"id"," drivername=".$arr[project][id]." and ondate='$today' and type='transfer' and status='CONFIRM'  ");

//////////////////

/*
$query = "SELECT SUM(car_price) FROM ".TB_order." where drivername=".$arr[project][id]." and ondate='$today' and type='transfer' and status='CONFIRM'   "; 

$result = mysql_query($query) or die(mysql_error());

// Print out result

while($row = mysql_fetch_array($result)){

$row['SUM(car_price)'];

	

$car_price= $row['SUM(total_charge)'];

}


*/


	//Comment Icon

	if($arr[project][enable_comment]){

		$CommentIcon = " <IMG SRC=\"images/icon/suggest.gif\" WIDTH=\"13\" HEIGHT=\"9\" BORDER=\"0\" ALIGN=\"absmiddle\">";

	}else{

		$CommentIcon = "";

	}

			$bgcolor = ($i++ & 1) ? $bg1 : $bg2; 

 echo "<tr bgcolor='$bgcolor'>\n";

?>

 <td align="center"><?
$filename = "admin/file/driver/pic/".$arr[project][post_date].".jpg";

if (file_exists($filename)) { // Ǩͺ


?>
                                                        <a href="admin/file/driver/pic/<?=$arr[project][post_date];?>.jpg"  class="lightbox"  rel="group1"> <img src="admin/file/driver/pic/<?=$arr[project][post_date];?>.jpg" name="view01" width="45" height="60" border="0" id="view01" class="IMGSHOP" /></a>
                                                        <? }else { ?>
                                                        <img src="admin/file/driver/pic/no.jpg" name="view01" width="45" height="60" border="0" id="view01" class="IMGSHOP" />
                                                        <?

}

 

?></td>
                                                    <td align="center" valign="middle"><?echo $arr[project][name];?></td>
                                                    <td align="center" valign="middle"><?echo $arr[project][nickname];?></td>
                                                    <td align="center" valign="middle"><? echo $arr[com][company];?><br />
                                                        <font color="#009999">( <? echo $arr[cartype][topic_en];?> <? echo $arr[car][car_num];?> )</td>
                                                    <td align="center" ><? echo $arr[project][phone];?></td>
                                                    <td align="center"><B><font size="+1"><? echo $round;?></td>
                                                    <td align="center"><font size="+1"><? echo number_format( $round*50 , 2 );?></td>
                                                    <td align="center"><a href="?name=admin&amp;file=transfer&amp;op=transfer_edit&amp;view=view&amp;id=<? echo $arr[projectlist][id];?>">&nbsp;</a><a href="print.php?name=admin&amp;file=drivertoday&amp;driver=<? echo $arr[project][id];?>&amp;date=<?=$today;?>" target="_blank"><img src="iconstatus/all/search.png" border="0" alt="Edit" /></a> <a href="javascript:Confirm('?name=admin&amp;file=transfer&amp;op=transfer_del&amp;id=<? echo $arr[book][id];?>&amp;prefix=<? echo $arr[projectlist][post_date];?>','You are sure to be deleted!');"></a> </td>
                                                  </tr>
                                                  <tr>
                                                    <td colspan="21" height="1" class="dotline"></td>
                                                  </tr>
                                                  <?

 } 

?>
                                                </table>
                                                <div align="right"> </div>
                                              </form>
                                            <span class="page">
                                              <?=button_page;?>
                                              : </span>
                                              <?

	SplitPage($page,$totalpage,"?name=admin/car/driver&file=driver");	echo $ShowSumPages ;

	echo $ShowPages ;

}

else if($_GET[op] == "useragent_add" AND $_GET[action] == "add"){

	//////////////////////////////////////////// ó Database

	if(CheckLevel($_SESSION['admin_user'],$_GET[op])){

 		//////////// เพิ่มรูปภาพ
		
		///// คนขับ
		@copy ($_FILES['pic']['tmp_name'] , "admin/file/driver/pic/".TIMESTAMP.".jpg" );
		
		///// บัตรประชาชน
		@copy ($_FILES['id_card']['tmp_name'] , "admin/file/driver/id_card/".TIMESTAMP.".jpg" );
		
		///// ใบขับขี่
		@copy ($_FILES['id_driver']['tmp_name'] , "admin/file/driver/id_driver/".TIMESTAMP.".jpg" );
		
		///// ทะเบียนบ้าน
		@copy ($_FILES['id_home']['tmp_name'] , "admin/file/driver/id_home/".TIMESTAMP.".jpg" );
		
		//// ใบสมัครงาน
		@copy ($_FILES['id_job']['tmp_name'] , "admin/file/driver/id_job/".TIMESTAMP.".jpg" );

		 

			

		//ӡŧҵ

		$db->connectdb(DB_NAME,DB_USERNAME,DB_PASSWORD);



////////////////

		$db->add_db(TB_driver,array(

		

		

			"name"=>"$_POST[name]",	
			"nickname"=>"$_POST[nickname]",		
			
			"idcard"=>"$_POST[idcard]",	
			"iddriving"=>"$_POST[iddriving]",

				"email"=>"$_POST[email]",

				"phone"=>"$_POST[phone]",
				"contact"=>"$_POST[contact]",
				
				"car_num"=>"$_POST[car_num]",

				"start_work"=>"$_POST[start_work]",
				
				"address"=>"$_POST[address]",
 

				"posted"=>"$_SESSION[admin_user]",

			"post_date"=>"".TIMESTAMP."",

			"update_date"=>"".TIMESTAMP."",				


		));

		$db->closedb ();



		//ӡҧ text ͧ Project 





		$ProcessOutput .= "<BR><BR>";

		$ProcessOutput .= "<CENTER><A HREF=\"?name=admin/user&file=main\"><IMG SRC=\"images/icon/admin.png\" BORDER=\"0\"></A><BR><BR>";

		$ProcessOutput .= "<FONT COLOR=\"#336600\"><B>Add Driver</B></FONT><BR><BR>";

		$ProcessOutput .= "<A HREF=\"?name=admin/car/driver&file=driver\"><B>Back to Driver </B></A>";
		echo "<meta http-equiv=refresh content=0;URL=?name=admin/car/driver&file=driver>";

		$ProcessOutput .= "</CENTER>";

		$ProcessOutput .= "<BR><BR>";

	}else{

		//óҹ

		$ProcessOutput = $PermissionFalse ;

	}

	echo $ProcessOutput ;

}

else if($_GET[op] == "useragent_add"){

	//////////////////////////////////////////// ó Form

	if(CheckLevel($_SESSION['admin_user'],$_GET[op])){

?>
                                              <form action="?name=admin/car/driver&amp;file=driver&amp;op=useragent_add&amp;action=add" method="post" enctype="multipart/form-data" name="myform" id="myform" onsubmit="return check3()">
                                                <script language="JavaScript" type="text/javascript">



function check3() {

var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

if (document.myform.company.value=="") {

alert("please insert company") ;

document.myform.company.focus() ;

return false ;

}

else if (document.myform.phone.value=="") {

alert("please insert Telephone number") ;

document.myform.phone.focus() ;

return false ;

}





else if(document.myform.email.value=="") {

alert("please insert email ") ;

document.myform.email.focus() ;

return false ;

}

else if (!filter.test(document.myform.email.value)){

 alert("email incorrect") ;

document.myform.email.focus() ;

return false ;

 }

 if(document.myform.mail.value > 0) {

alert("Email Already in use") ;

document.myform.email.focus() ;

return false ;

}







else 

return true ;

}



                              </script>
                                                <table width="100%" border="0" cellspacing="0" cellpadding="3">
                                                  <tr>
                                                    <td width="100%"><table width="100%" border="0" cellpadding="3" cellspacing="3">
                                                        <tr>
                                                          <td width="20%" align="right"><strong>ชื่อ - นามสกุล :</strong></td>
                                                          <td><input name="name" type="text" class="inputform" id="name" style="width:300px; background:#FFFFFF" value="<?=$arr[member][name];?>" /></td>
                                                        </tr>
                                                        <tr>
                                                          <td align="right"><strong>ชื่อเล่น:</strong></td>
                                                          <td><input name="nickname" type="text"  id="nickname" style="width:300px; background-color:#FFFFFF"  onkeyup="checkeng(),Changeemail(this.value)" maxlength="150" /></td>
                                                        </tr>
                                                        <tr>
                                                          <td align="right"><strong>หมายเลขบัตรประชาชน  :</strong></td>
                                                          <td><input name="idcard" type="text"  id="idcard" style="width:300px; background-color:#FFFFFF"  onkeyup="checkeng(),Changeemail(this.value)" maxlength="150" /></td>
                                                        </tr>
                                                        <tr>
                                                          <td align="right"><strong>หมายเลขใบขับขี่  :</strong></td>
                                                          <td><input name="iddriving" type="text"  id="iddriving" style="width:300px; background-color:#FFFFFF"  onkeyup="checkeng(),Changeemail(this.value)" maxlength="150" /></td>
                                                        </tr>
                                                        <tr>
                                                          <td align="right"><strong>เบอร์โทรศัพท์ :</strong></td>
                                                          <td><input name="phone" type="text" class="inputform" id="phone" style="width:300px; background:#FFFFFF" value="<?=$arr[member][phone];?>" /></td>
                                                        </tr>
                                                        <tr>
                                                          <td align="right"><strong>เบอร์โทรติดต่อฉุกเฉิน : </strong></td>
                                                          <td><input name="contact" type="text" class="inputform" id="contact" style="width:300px; background:#FFFFFF" value="<?=$arr[member][name];?>" />
                                                            &nbsp;</td>
                                                        </tr>
                                                        <tr>
                                                          <td align="right"><strong>ที่อยู่ :</strong></td>
                                                          <td><textarea name="address" class="inputform" id="address" style="width:300px; background:#FFFFFF"><?=$arr[member][website];?>
                              </textarea>
                                                            &nbsp;</td>
                                                        </tr>
                                                        <tr>
                                                          <td align="right"><strong>วันที่เริ่มทำงาน : </strong></td>
                                                          <td><font size="2" face="MS Sans Serif, Tahoma, sans-serif">
                                                            <input name="start_work" id="start_work" style="width:120px; FONT-SIZE:13px; " value="<?=$arr[newsvc][ondate];?>" />
                                                            <img src="images/admin/dateselect.gif" alt="ondate" border="0" align="absmiddle" onclick="return popUpCalendarSE(this, 'start_work', 'yyyy-mm-dd', '','','',1);" />&nbsp;<span class="date-input">
                                                            <label></label>
                                                          </font></td>
                                                        </tr>
                                                        <tr>
                                                          <td align="right"><strong>ประจำรถ :</strong></td>
                                                          <td><select name="car_num" id="car_num" style="width:300px; font-size:13px" onchange="return find_transfer_status_check();" >
                                                              <option value="" selected="selected">-- กรุณาเลือก --</option>
                                                              <?

$db->connectdb(DB_NAME,DB_USERNAME,DB_PASSWORD);

$res[category] = $db->select_query("SELECT * FROM ".TB_carall."  order by car_num asc");;

while ($arr[category] = $db->fetch($res[category])){


	$res[aum] = $db->select_query("SELECT * FROM ".TB_carall_type." WHERE id='".$arr[category][car_type]."' ");
	$arr[aum] = $db->fetch($res[aum]);
	
//$res[cartype] = $db->select_query("SELECT * FROM ".TB_carall." WHERE id='".$arr[category][car_type]."' ");

//$arr[cartype] = $db->fetch($res[cartype);



	   echo "<option value=\"".$arr[category][id]."\"";

	   if($arr[category][id] == $_GET["car_number"]){echo " Selected";}

	    echo ">( ".$arr[aum][topic_en]." ) ".$arr[category][car_num]."  </option>"; 
 

}

$db->closedb ();

?>
                                                          </select></td>
                                                        </tr>
                                                        <tr>
                                                          <td align="right">&nbsp;</td>
                                                          <td>&nbsp;</td>
                                                        </tr>
                                                        <tr>
                                                          <td align="right"><strong>ภาพถ่ายคนขับรถ :</strong></td>
                                                          <td><input name="pic" type="file" id="pic" style="width=250;" onpropertychange="view01.src=FILE.value;" /></td>
                                                        </tr>
                                                        <tr>
                                                          <td align="right"><strong>บัตรประชาชน :</strong></td>
                                                          <td><input name="id_card" type="file" id="id_card" style="width=250;" onpropertychange="view01.src=FILE.value;" /></td>
                                                        </tr>
                                                        <tr>
                                                          <td align="right"><strong>ทะเบียนบ้าน :</strong></td>
                                                          <td><input name="id_home" type="file" id="id_home" style="width=250;" onpropertychange="view01.src=FILE.value;" /></td>
                                                        </tr>
                                                        <tr>
                                                          <td align="right"><strong>ใบขับขี่ :</strong></td>
                                                          <td><input name="id_driver" type="file" id="id_driver" style="width=250;" onpropertychange="view01.src=FILE.value;" /></td>
                                                        </tr>
                                                        <tr>
                                                          <td align="right">&nbsp;</td>
                                                          <td><input name="submit" type="submit" class="myButton" id="submit" value=" Add Driver" />
                                                              <input name="Submit2" type="reset"  class="myreset" id="Submit2"   value="Reset" /></td>
                                                        </tr>
                                                    </table></td>
                                                  </tr>
                                                  <tr>
                                                    <td><table width="100%" border="0" cellspacing="3" cellpadding="3">
                                                        <tr> </tr>
                                                    </table></td>
                                                  </tr>
                                                </table>
                                              </form>
                                            <?

	}else{

		//óҹ

		echo  $PermissionFalse ;

	}

}

else if($_GET[op] == "useragent_edit" AND $_GET[action] == "edit"){

	//////////////////////////////////////////// ó Database Edit

	if(CheckLevel($_SESSION['admin_user'],$_GET[op]) ){

	//useragent_edit($_SESSION['admin_user'],$_GET[id]);

		//֧

		$db->connectdb(DB_NAME,DB_USERNAME,DB_PASSWORD);

		$res[project] = $db->select_query("SELECT * FROM ".TB_driver." WHERE id='".$_GET[id]."' ");

		$arr[project] = $db->fetch($res[project]);

		$db->closedb ();

		//////////// เพิ่มรูปภาพ
		
		///// คนขับ
		@copy ($_FILES['pic']['tmp_name'] , "admin/file/driver/pic/".$arr[project][post_date].".jpg" );
		
		///// บัตรประชาชน
		@copy ($_FILES['id_card']['tmp_name'] , "admin/file/driver/id_card/".$arr[project][post_date].".jpg" );
		
		///// ใบขับขี่
		@copy ($_FILES['id_driver']['tmp_name'] , "admin/file/driver/id_driver/".$arr[project][post_date].".jpg" );
		
		///// ทะเบียนบ้าน
		@copy ($_FILES['id_home']['tmp_name'] , "admin/file/driver/id_home/".$arr[project][post_date].".jpg" );
		
		//// ใบสมัครงาน
		@copy ($_FILES['id_job']['tmp_name'] , "admin/file/driver/id_job/".$arr[project][post_date].".jpg" );
		
		
		
		
		

		$db->connectdb(DB_NAME,DB_USERNAME,DB_PASSWORD);

		$db->update_db(TB_driver,array(

		

			"name"=>"$_POST[name]",	
			"nickname"=>"$_POST[nickname]",		
			
			"idcard"=>"$_POST[idcard]",	
			"iddriving"=>"$_POST[iddriving]",

				"email"=>"$_POST[email]",

				"phone"=>"$_POST[phone]",
				"contact"=>"$_POST[contact]",
				"address"=>"$_POST[address]",
				
				

				"start_work"=>"$_POST[start_work]",
				
				"car_num"=>"$_POST[car_num]",
 
 

				"posted"=>"$_SESSION[admin_user]",

				"update_date"=>"".TIMESTAMP.""
 

		)," id=$_GET[id] ");

		$db->closedb ();



		//ӡҧ text ͧ Project 

	



		$ProcessOutput .= "<BR><BR>";

		$ProcessOutput .= "<CENTER><A HREF=\"?name=admin/user&file=main\"><IMG SRC=\"images/icon/admin.png\" BORDER=\"0\"></A><BR><BR>";

		$ProcessOutput .= "<FONT COLOR=\"#336600\"><B>Edit Driver</B></FONT><BR><BR>";

		$ProcessOutput .= "<A HREF=\"?name=admin/car/driver&file=driver\"><B>Back to Driver</B></A>";
		
		echo "<meta http-equiv=refresh content=0;URL=?name=admin/car/driver&file=driver>";

		$ProcessOutput .= "</CENTER>";

		$ProcessOutput .= "<BR><BR>";

	}else{

		//óҹ

		$ProcessOutput = $PermissionFalse ;

	}

	echo $ProcessOutput ;

}

else if($_GET[op] == "useragent_edit"){

	//////////////////////////////////////////// ó Form

	if(CheckLevel($_SESSION['admin_user'],$_GET[op])){

//useragent_edit($_SESSION['admin_user'],$_GET[id]);

	

		//֧

		$db->connectdb(DB_NAME,DB_USERNAME,DB_PASSWORD);

		$res[project] = $db->select_query("SELECT * FROM ".TB_driver." WHERE id='".$_GET[id]."' ");

		$arr[member] = $db->fetch($res[project]);

		$db->closedb ();



		//ҹҨҡ Text 

		$FileprojectTopic = "data/projectdata/".$arr[project][post_date].".txt";

		$file_open = @fopen($FileprojectTopic, "r");

		$TextContent = @fread ($file_open, @filesize($FileprojectTopic));

		@fclose ($file_open);

		$TextContent = stripslashes($TextContent);

?>
                                              <form action="?name=admin/car/driver&amp;file=driver&amp;op=useragent_edit&amp;action=edit&amp;id=<?=$_GET[id];?>" method="post" enctype="multipart/form-data" name="myformedit" id="myformedit" onsubmit="return checkedit()">
                                                <script language="JavaScript" type="text/javascript">



function checkedit() {

var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

if (document.myformedit.company.value=="") {

alert("please insert company") ;

document.myformedit.company.focus() ;

return false ;

}

else if (document.myformedit.phone.value=="") {

alert("please insert Telephone number") ;

document.myformedit.phone.focus() ;

return false ;

}





else if(document.myformedit.email.value=="") {

alert("please insert email ") ;

document.myformedit.email.focus() ;

return false ;

}

else if (!filter.test(document.myformedit.email.value)){

 alert("email incorrect") ;

document.myformedit.email.focus() ;

return false ;

 }

 if(document.myformedit.mail.value > 0) {

alert("Email Already in use") ;

document.myformedit.email.focus() ;

return false ;

}



else 

return true ;

}



                              </script>
                                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                  <tr>
                                                    <td><table width="100%" border="0" cellpadding="3" cellspacing="3">
                                                        <tr>
                                                          <td width="20%" align="right"><strong>ชื่อ - นามสกุล :</strong></td>
                                                          <td><input name="name" type="text" class="inputform" id="name" style="width:300px; background:#FFFFFF" value="<?=$arr[member][name];?>" /></td>
                                                        </tr>
                                                        <tr>
                                                          <td align="right"><strong>ชื่อเล่น:</strong></td>
                                                          <td><input name="nickname" type="text"  id="nickname" style="width:300px; background-color:#FFFFFF"  onkeyup="checkeng(),Changeemail(this.value)" value="<?=$arr[member][nickname];?>" maxlength="150" /></td>
                                                        </tr>
                                                        <tr>
                                                          <td align="right"><strong>หมายเลขบัตรประชาชน  :</strong></td>
                                                          <td><input name="idcard" type="text"  id="idcard" style="width:300px; background-color:#FFFFFF"  onkeyup="checkeng(),Changeemail(this.value)" value="<?=$arr[member][idcard];?>" maxlength="150" /></td>
                                                        </tr>
                                                        <tr>
                                                          <td align="right"><strong>หมายเลขใบขับขี่  :</strong></td>
                                                          <td><input name="iddriving" type="text"  id="iddriving" style="width:300px; background-color:#FFFFFF"  onkeyup="checkeng(),Changeemail(this.value)" value="<?=$arr[member][iddriving];?>" maxlength="150" /></td>
                                                        </tr>
                                                        <tr>
                                                          <td align="right"><strong>เบอร์โทรศัพท์ :</strong></td>
                                                          <td><input name="phone" type="text" class="inputform" id="phone" style="width:300px; background:#FFFFFF" value="<?=$arr[member][phone];?>" /></td>
                                                        </tr>
                                                        <tr>
                                                          <td align="right"><strong>เบอร์โทรติดต่อฉุกเฉิน :</strong></td>
                                                          <td><input name="contact" type="text" class="inputform" id="contact" style="width:300px; background:#FFFFFF" value="<?=$arr[member][contact];?>" />
                                                            &nbsp;</td>
                                                        </tr>
                                                        <tr>
                                                          <td align="right"><strong>ที่อยู่ :</strong></td>
                                                          <td><textarea name="address" class="inputform" id="address" style="width:300px; background:#FFFFFF"><?=$arr[member][address];?>
                              </textarea>
                                                            &nbsp;</td>
                                                        </tr>
                                                        <tr>
                                                          <td align="right"><strong>วันที่เริ่มทำงาน : </strong></td>
                                                          <td><font size="2" face="MS Sans Serif, Tahoma, sans-serif">
                                                            <input name="start_work" id="start_work" style="width:120px; FONT-SIZE:13px; " value="<?=$arr[member][start_work];?>" />
                                                            <img src="images/admin/dateselect.gif" alt="ondate" border="0" align="absmiddle" onclick="return popUpCalendarSE(this, 'start_work', 'yyyy-mm-dd', '','','',1);" />&nbsp;<span class="date-input">
                                                            <label></label>
                                                          </font></td>
                                                        </tr>
                                                        <tr>
                                                          <td align="right"><strong>ประจำรถ :</strong></td>
                                                          <td><select name="car_num" id="car_num" style="width:300px; font-size:13px" onchange="return find_transfer_status_check();" >
                                                              <option value="" selected="selected">-- กรุณาเลือก --</option>
                                                              <?

$db->connectdb(DB_NAME,DB_USERNAME,DB_PASSWORD);

$res[category] = $db->select_query("SELECT * FROM ".TB_carall."  order by car_num asc");;

while ($arr[category] = $db->fetch($res[category])){


	$res[aum] = $db->select_query("SELECT * FROM ".TB_carall_type." WHERE id='".$arr[category][car_type]."' ");
	$arr[aum] = $db->fetch($res[aum]);
	
	
	$res[aum] = $db->select_query("SELECT * FROM ".TB_carall_type." WHERE id='".$arr[category][car_type]."' ");
	$arr[aum] = $db->fetch($res[aum]);
	

//$res[cartype] = $db->select_query("SELECT * FROM ".TB_carall." WHERE id='".$arr[category][car_type]."' ");
//$arr[cartype] = $db->fetch($res[cartype);

	$res[admin] = $db->select_query("SELECT * FROM ".TB_admin." WHERE id='".$arr[category][company]."' ");
	$arr[admin] = $db->fetch($res[admin]);

	   echo "<option value=\"".$arr[category][id]."\"";

	   if($arr[category][id] ==$arr[member][car_num]){echo " Selected";}

	    echo ">( ".$arr[aum][topic_en]." ) ".$arr[category][car_num]." -  ".$arr[admin][company]."   </option>"; 
 

}

$db->closedb ();

?>
                                                          </select></td>
                                                        </tr>
                                                        <tr>
                                                          <td align="right">&nbsp;</td>
                                                          <td>&nbsp;</td>
                                                        </tr>
                                                        <tr>
                                                          <td align="right"><strong>ภาพถ่ายคนขับรถ : </strong></td>
                                                          <td><input name="pic" type="file" id="pic" style="width=250;" onpropertychange="view01.src=FILE.value;" /></td>
                                                        </tr>
                                                        <tr>
                                                          <td align="right"><strong>บัตรประชาชน :</strong></td>
                                                          <td><input name="id_card" type="file" id="id_card" style="width=250;" onpropertychange="view01.src=FILE.value;" /></td>
                                                        </tr>
                                                        <tr>
                                                          <td align="right"><strong>ทะเบียนบ้าน :</strong></td>
                                                          <td><input name="id_home" type="file" id="id_home" style="width=250;" onpropertychange="view01.src=FILE.value;" /></td>
                                                        </tr>
                                                        <tr>
                                                          <td align="right"><strong>ใบขับขี่ :</strong></td>
                                                          <td><input name="id_driver" type="file" id="id_driver" style="width=250;" onpropertychange="view01.src=FILE.value;" /></td>
                                                        </tr>
                                                        <tr>
                                                          <td align="right"><strong>ใบสนมัครงาน :</strong></td>
                                                          <td><input name="id_job" type="file" id="id_job" style="width=250;" onpropertychange="view01.src=FILE.value;" /></td>
                                                        </tr>
                                                        <tr>
                                                          <td align="right">&nbsp;</td>
                                                          <td><input name="submit2" type="submit" class="myButton" id="submit2" value="Edit Driver" />
                                                              <input name="Submit22" type="reset"  class="myreset" id="Submit22"   value="Reset" /></td>
                                                        </tr>
                                                    </table></td>
                                                  </tr>
                                                </table>
                                              </form>
                                        <?

	}else{

		//óҹ

		$ProcessOutput = $PermissionFalse ;

	}

	echo $ProcessOutput ;

}

else if($_GET[op] == "useragent_del" AND $_GET[action] == "multidel"){

	//////////////////////////////////////////// óź Multi

	if(CheckLevel($_SESSION['admin_user'],$_GET[op])){

		while(list($key, $value) = each ($_POST['list'])){

			$db->connectdb(DB_NAME,DB_USERNAME,DB_PASSWORD);

			$res[project] = $db->select_query("SELECT * FROM ".TB_project." WHERE id='".$value."' ");

			$arr[project] = $db->fetch($res[project]);

			$db->del(TB_driver," id='".$value."' "); 

			$db->del(TB_gallery," category='".$value."' "); 

			$db->closedb ();

		@unlink("pic/galleryicon/icon/".$_GET[prefix]."_icon.jpg");

		@unlink("pic/galleryicon/icon/".$_GET[prefix]."_icon2.jpg");

		@unlink("pic/galleryicon/pic/".$_GET[prefix]."full.jpg");

		}

		$ProcessOutput .= "<BR><BR>";

		$ProcessOutput .= "<CENTER><A HREF=\"?name=admin/user&file=main\"><IMG SRC=\"images/icon/admin.png\" BORDER=\"0\"></A><BR><BR>";

		$ProcessOutput .= "<FONT COLOR=\"#336600\"><B>Delete Driver</B></FONT><BR><BR>";

		$ProcessOutput .= "<A HREF=\"?name=admin/car/driver&file=driver\"><B>Back to Driver </B></A>";

		$ProcessOutput .= "</CENTER>";

		$ProcessOutput .= "<BR><BR>";

	}else{

		//óҹ

		$ProcessOutput = $PermissionFalse ;

	}

	echo $ProcessOutput ;

}

else if($_GET[op] == "useragent_del"){

	//////////////////////////////////////////// óź Form

	if(CheckLevel($_SESSION['admin_user'],$_GET[op])){

		$db->connectdb(DB_NAME,DB_USERNAME,DB_PASSWORD);

		$db->del(TB_driver," id='".$_GET[id]."' "); 

		$db->del(TB_gallery," category='".$_GET[id]."' "); 

		$db->closedb ();



		$ProcessOutput .= "<BR><BR>";

		$ProcessOutput .= "<CENTER><A HREF=\"?name=admin/user&file=main\"><IMG SRC=\"images/icon/admin.png\" BORDER=\"0\"></A><BR><BR>";

		$ProcessOutput .= "<FONT COLOR=\"#336600\"><B>Delete Driver</B></FONT><BR><BR>";

		$ProcessOutput .= "<A HREF=\"?name=admin/car/driver&file=driver\"><B>Back to Driver </B></A>";

		$ProcessOutput .= "</CENTER>";

		$ProcessOutput .= "<BR><BR>";

	}else{

		//óҹ

		$ProcessOutput = $PermissionFalse ;

	}

	echo $ProcessOutput ;

}



if($_GET[op] == "status"){

	//////////////////////////////////////////// óź Multi

	if(1==1){

		



	

		$db->connectdb(DB_NAME,DB_USERNAME,DB_PASSWORD);

		$db->update_db(TB_driver,array(



			"status"=>"$_GET[status]"

		)," id=$_GET[id] ");

	$db->closedb ();

			$ProcessOutput .= "<BR><BR>";
 
		$ProcessOutput .= "</CENTER>";

		$ProcessOutput .= "<BR><BR>";

		echo "<meta http-equiv=refresh content=0;URL=?name=admin/car/driver&file=driver>";

	}else{

		//óҹ

		$ProcessOutput = $PermissionFalse ;

	}

	echo $ProcessOutput ;

} 


?>                                        </td></tr>
                                    </table>
                                  <!-- Admin -->                                </td>
                              </tr>
                            </tbody>
                          </table></td>
                        </tr>
                      </table>
				      <br />
                  <?
//////////////////////////////////////////// ?? Project   
if($_POST[find]){

$day=$_POST[day];
?>
                      <br />
				      <?
//////////////////////////////////////////// ?? Project   
}
	
?>
