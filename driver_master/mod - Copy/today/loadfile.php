 <?php
 $file =  "https://www.welovetaxi.com/app/driver_master/data/filework/".$_GET['filename'].".jpg";
copy("https://www.welovetaxi.com/app/driver_master/data/filework/".$_GET['filename'].".jpg" , "../../data/loadwork/".$_GET['filename'].".jpg" ); 
 
?>




<a href="../../data/loadwork/<?=$_GET['filename']?>.jpg"
   download="Monthly Report for March 2014.pdf" id="auto">Download March 2014 Report</a>
   
 