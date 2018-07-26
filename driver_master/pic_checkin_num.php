<?php 
    // integer starts at 0 before counting
	
	/// http://localhost/app/
    $i = 0; 
    $dir = "../car/pic/guest/".$_GET[type]."/".$_GET[vc]."";
    if ($handle = opendir($dir)) {
        while (($file = readdir($handle)) !== false){
            if (!in_array($file, array('.', '..')) && !is_dir($dir.$file)) 
                $i++;
        }
    }
    // prints out how many were in the directory
 
 /*
 
$dir =  "../car/pic/guest/".$photo_type."/".$arr[to][invoice]."/*";
$extension = '.png';

 
 // Open a known directory, and proceed to read its contents
foreach(glob($dir) as $file)
{
     echo '<img src='.$file.' height=50 width=50 />';
}
 
 */
 //echo $i;
 
?>


<div  style="border-radius:50%;padding:2px; height:12px; width:14px; padding-top: 5px; margin-left: 25px; margin-top:-10px; font-size:10px;border:1px solid #FFFFFF; display:nones; background-color:#FF0000; color:#FFF;  position:absolute " ><center><b><?=$i?></b></div>






