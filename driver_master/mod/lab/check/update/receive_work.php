<?
// echo $_GET[driver];
/////  
$driver_chat_load = new DOMDocument(); 
$driver_chat_load->load( '../data/xml/driver/work_change/receive/'.$_GET[driver].'.xml' ); 
//echo $xml_load_driver;
$driver_chat_xml = $driver_chat_load->getElementsByTagName("online" ); 
foreach( $driver_chat_xml as $load) 
{ 


$day=$load->getElementsByTagName('day')->item(0)->nodeValue;
$status=$load->getElementsByTagName('status')->item(0)->nodeValue;
$type=$load->getElementsByTagName('type')->item(0)->nodeValue;
$from=$load->getElementsByTagName('from')->item(0)->nodeValue;
$to=$load->getElementsByTagName('to')->item(0)->nodeValue; 
$time=$load->getElementsByTagName('time')->item(0)->nodeValue; 
$id=$load->getElementsByTagName('id')->item(0)->nodeValue;

$_GET[day]=$day;
  
 
	  }
 ?>
 
 
 
 
 <?
 
 
 
$now=time();

$time_reply=$now-$time;

 $time_limit= 300-$time_reply;

$time_limit_per=$time_limit/3;
 
$time_open_h= date('i:s',$time_limit);
 
 
 
 
 
 
 
 
 /*

 $db->connectdb(DB_NAME,DB_USERNAME,DB_PASSWORD); 

$res[from] = $db->select_query("SELECT id,nickname,post_date,company FROM ".TB_driver." WHERE id='".$from."' ");
$arr[from] = $db->fetch($res[from]);
 $arr[from][nickname];
 
 
 
$res[to] = $db->select_query("SELECT id,nickname,post_date,company FROM ".TB_driver." WHERE id='".$to."' ");
$arr[to] = $db->fetch($res[to]);
$arr[to][nickname];

*/
 
 
 
  if($status=='new' and $time_limit>0){ ?> 
  
  <?  //  include "load/popup_change_work.php" ;?>
  
  
  <script>

  
   $("#check_data_status_change_new_work" ).val(1);
   
   $("#load_change_work_time_countdown").html('เหลือเวลารับงาน&nbsp;<b><?=$time_open_h?>');
   
   
   
   
if(document.getElementById('check_data_status_change_new_work_id').value==0){
 
 var url_check_data_time_new = "go.php?name=lab/check/load/to&file=work_new&id=<?=$id?>&from=<?=$from?>&to=<?=$to?>&day=<?=$_GET[day]?>";
  
 $('#check_work_change_popup').load(url_check_data_time_new);
 
 //// sms
 
 
 
}
   
 
  </script>
 

 
 <? }   ?>
 
 
 
 
 
 
 <?
 
  if($status=='new' and $time_limit<1){  
  
  
  $db->connectdb(DB_NAME,DB_USERNAME,DB_PASSWORD); 

$res[name] = $db->select_query("SELECT id,nickname,post_date,company FROM ".TB_driver." WHERE id='".$from."' ");
$arr[name] = $db->fetch($res[name]);
$arr[name][nickname];

$res[company] = $db->select_query("SELECT company FROM ".TB_admin." WHERE id='".$arr[name][company]."' ");
$arr[company] = $db->fetch($res[company]);
 
 
 ?>
 
   <script>
   
   
   
	   swal({
		title: "<font style='font-size:28px'>คุณไม่ได้รับงานจาก<b> ",
		text: "<font style='font-size:18px; color:#FF0000'><?=$arr[name][nickname]?> (<?=$arr[company][company];?>)</font ><br>ภายในระยะเวลาที่กำหนด",
		type: "error",
		showCancelButton: true,
		confirmButtonColor: '#DD6B55',
		confirmButtonText: 'รับทราบ',
		cancelButtonText: "ปิด",
		closeOnConfirm: true,
		closeOnCancel: true,
		html: true
	},
	function(isConfirm){
    if (isConfirm){
 
 
 
       $("#check_data_status_change_new_work" ).val(0);
	  $("#check_data_status_change_new_work_id" ).val(0);
    $( "#load_data_change_work_show" ).hide();
    
  
 /////
  var urlaction="go.php?name=lab/action&file=xml&action=cancel&type=receive&driver=<?=$_GET[driver]?>";
  $("#check_update_work" ).load(urlaction);
  
  
  
  //// ลบไฟล์ทั้ง
 
 
 
  var url_place_load = "go.php?name=load/today&daytype=all&file=timeline&server=th&find=day&day=<?=$day?>";
 $('#load_th').show();
  $('#load_th').load(url_place_load); 
  
 
 
	//  alert('dd');
    } else {
		
		
       $("#check_data_status_change_new_work" ).val(0);
	  $("#check_data_status_change_new_work_id" ).val(0);
    $( "#load_data_change_work_show" ).hide();
    
  
 /////
  var urlaction="go.php?name=lab/action&file=xml&action=cancel&type=receive&driver=<?=$_GET[driver]?>";
  $("#check_update_work" ).load(urlaction);
	  
	  
    }
	});
	   
 
	
 
  </script>
 <?
 
  } ?>