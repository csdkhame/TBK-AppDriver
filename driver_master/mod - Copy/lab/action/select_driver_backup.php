
<?php 

/// echo  $_GET[admin_com];


if($_GET[query]=="driver"){ ?>
<select name="drivername" id="drivername<?=$_GET[id];?>"  class="form-control mobileSelect" data-animation="zoom" data-title="<table width='100%'><tr><td width='110'><span style='font-size:20px;'>รายชื่อคนขับ</span></td><td><input type='text' class='form-control filter_brand' style='height:35px;margin-top:-7px;' onkeyup='filterDv()' /></td></tr></table>" data-theme="white"  >

 <option value="0">-- กรุณาเลือกคนขับรถ --</option>
 
 <?
    $db->connectdb(DB_NAME,DB_USERNAME,DB_PASSWORD);
    $res[category] = $db->select_query("SELECT * FROM ".TB_driver." where  status=1 and  id<>".$_GET[drivername]." and company = ".$_GET[com]." ORDER BY abs(company) asc, convert(nickname using tis620)  desc  ");
while ($arr[category] = $db->fetch($res[category])){

	$res[company] = $db->select_query("SELECT id,company FROM web_admin where id ='".$arr[category][company]."'   ");
    $arr[company] = $db->fetch($res[company]); 
     if($arr[company][company]!=""){
		$company = $arr[company][company];
	}
	$json = '{ "name":"'.$arr[category][nickname].'", "username":" ('.substr($arr[category][username],7).') " , "company":"'.$company.'" ,"phone":"'.$arr[category][phone].'"}';
    ?>
 
<!-- <option value="<?=$arr[category][id];?>"><?=$arr[category][nickname]." (".$arr[category][username].") ".$company." :".$arr[category][phone];?></option>-->
<option value="<?=$arr[category][id];?>" ><? echo "json:".$json;?></option>
 
	   
	   <? }
                      $db->closedb ();
                      ?>
  </select>
  <script type="text/javascript">
            $(function () {
					$('#drivername<?=$_GET[id];?>').mobileSelect({
				    onClose: function(){        
				        console.log('onClose: '+this.val());
				        if($('#check_select_dv').val()==this.val()){
							return;
						}else{
							var txt = $('#drivername<?=$_GET[id];?> option[value="'+this.val()+'"]').text();
							var ob_txt = txt.split("json:");
                 			var obj = JSON.parse(ob_txt[1]);
                 			var full_txt_show = obj.name +obj.username+obj.company
                 			$('#txt_show_dv').text(full_txt_show);
							console.log(obj);
							ShowDriver();
						}
				    },
				    onOpen: function(){
				        console.log('onOpen: '+this.val());
				         $('.mobileSelect-container:visible').find('.mobileSelect-control').each (function() {
									 			if($(this).text()=='-- กรุณาเลือกคนขับรถ --'){
													$(this).hide();
												}else{
													$(this).show();
												}
						}); 
				    },
				     buttonSave: 'ตกลง',
				     buttonCancel: 'ยกเลิก'
				});
				
            });
        </script>

<? }

if($_GET[query]=="company"){
	if($_GET[admin_com]!=""){
		$admin_com = 'and admin_company = "'.$_GET[admin_com].'" ';
		$control_changework = 'and control_changework = 1';
	}
	 $db->connectdb(DB_NAME,DB_USERNAME,DB_PASSWORD);
	 $control_transfer = 'and control_transfer=1';
	 $res[ours] = $db->select_query("SELECT company FROM ".TB_driver." where  id=".$_GET[drivername]." ");
  	  $arr[ours] = $db->fetch($res[ours]);
	 if($arr[ours][company]=='276' or $arr[ours][company]=='283' or $arr[ours][company]=='284'){
	 	$where_com_dv = 'and (id = 276 or id=283 or id=284)';
	 }

    $res[com] = $db->select_query("SELECT company,id FROM web_admin where level=4 ".$control_transfer."  ".$admin_com." ".$where_com_dv);
//    echo "SELECT company,id FROM web_admin where level=4 ".$control_transfer."  ".$admin_com." ".$where_com_dv;
while ($arr[com] = $db->fetch($res[com])){ 
//	$maincom = 'and  main_company=1';
	$num_dv = $db->num_rows(TB_driver,"id","status=1     and  id<>".$_GET[drivername]." and company = ".$arr[com][id]); 
	if($num_dv<=0){
		$hidden = 'display:none;';
	}else{
		$hidden = '';
	}
//		echo $where_com_dv;
	?>
    <table id="tb_list_com_<?=$arr[com][id];?>" width="100%" border="0" cellspacing="2" cellpadding="2" style="<?=$hidden;?>">
  <tbody>
    <tr>
      <td class="font_14"><a role="<?=$arr[com][id];?>" href="#" class="mobileSelect-control" id="com_a_<?=$arr[com][id];?>"  data-value="0" onclick="SelectCompany('<?=$arr[com][id];?>');"> <?=$arr[com][company]?> </a></td>
      <td width="60" >(<?=$num_dv?> คน)</td>
    </tr>
  </tbody>
</table>

 
    
<?
//echo $admin_com." +++";
 }

}

if($_GET[query]=="driver_select"){ ?>

 <?
  
 	if($_GET[com]!=0){
		$company_where = " and company = ".$_GET[com]." ";
	}else{
		$res[ours] = $db->select_query("SELECT company FROM ".TB_driver." where  id=".$_GET[drivername]." ");
  		$arr[ours] = $db->fetch($res[ours]);
//		$company_where = " and company = ".$arr[ours][company]." ";
		$company_where = " and (company = 276 or company=283 or company=284) ";
	}
    $db->connectdb(DB_NAME,DB_USERNAME,DB_PASSWORD);
    $res[category] = $db->select_query("SELECT * FROM ".TB_driver." where  status=1 and  id<>".$_GET[drivername]." ".$company_where." ORDER BY abs(company) asc, convert(nickname using tis620)  desc  ");
while ($arr[category] = $db->fetch($res[category])){
	
//	$url = "http://t-booking.com/admin/file/driver/pic/small/" . $arr[category][post_date] . ".jpg";
	$url = "../data/pic/driver/main/" . $arr[category][post_date] . ".jpg";
//	$url = "../data/pic/driver/small/".$arr[category][post_date].".jpg";
	
	$res[company] = $db->select_query("SELECT id,company FROM web_admin where id ='".$arr[category][company]."'   ");
    $arr[company] = $db->fetch($res[company]); 
    if($arr[company][company]!=""){
		$company = " <br/>".$arr[company][company];
	}

	$phone = explode("/",$arr[category][phone]);
	if($phone[1]!="" and $phone[1]!=NULL){
		
		$tag_phone = '<span onclick="TelDriver(\''.$phone[0].'\'); ">โทร : '.$phone[0].'</span><br/><span onclick="TelDriver('.$phone[1].');">โทร : '.$phone[1]."</span>";
	}else{
		$tag_phone = '<span onclick="TelDriver(\''.$arr[category][phone].'\') ;">โทร : '.$arr[category][phone].'</span>';
	}
    ?>
 <a href="#" class="mobileSelect-control" id="dv_a_<?=$arr[category][id];?>"  data-value="0" style="" onclick="SelectDriver('<?=$arr[category][id];?>');">
 <input type="hidden" value="<?=substr($arr[category][username],9);?>" id="user_<?=$arr[category][id];?>" class="user" />
 <input type="hidden" value="<?=$arr[category][nickname];?>" id="name_<?=$arr[category][id];?>" class="name" />

 	<table width="100%">
 	<tr>
 		
 		<td width="70"> <img src="<?=$url;?>"  width="65"   border="0"  class="IMGSHOP"  style="border-radius: 15px;"  /></td>
 		<td   class="td-color other" id="td_<?=$arr[category][id];?>">
 		 
     <?=$arr[category][nickname]." (".substr($arr[category][username],9).") ";?>       
          <table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin-top:-10px;">
  <tbody>
 
    <tr>
      <td height="20" valign="top"><?=$company;?></td>
    </tr>
    <tr>
      <td height="30" ><b><?=$tag_phone;?></td>
    </tr>
  </tbody>
</table></td>
 		
 	</tr>
 	</table>
 </a>

 
	   
	   <? }
                      $db->closedb ();
                      ?>
 
<? }

?>