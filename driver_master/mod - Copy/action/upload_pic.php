 

<?
 
 
if($_GET[photo]<>''){  ?>
 
<?

 @mkdir("../car/pic/guest/".$_GET[photo]."/".$_GET[folder]."", 0777);      
@chmod("../car/pic/guest/".$_GET[photo]."/".$_GET[folder]."", 0777);      


 for($i=1;$i<4;$i++){ 

@copy ("../data/fileupload/store/driver_checkin/".$_POST[data_id]."_".$i."_".$_GET[photo].".jpg" , "../car/pic/guest/".$_GET[photo]."/".$_GET[folder]."/".$i.".png" ); 

///// del
@unlink ("../data/fileupload/store/driver_checkin/".$_POST[data_id]."_".$i."_".$_GET[photo].".jpg" ); 





/////// crontab

//$transferlurl="https://goldenbeachgroup.com/";	
			
//shell_exec('/usr/local/bin/curl --silent --compressed '.$transferlurl.'/app/crontab/update/realtime_update_all.php?report='.$_POST[data_id].$_POST[data_sv].' 2>&1 1> /dev/null');
  
 
///////
 

 }
 
include "mod/action/send_mail.php";
 

}

 

?>
 