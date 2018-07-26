 
<?
 
 
 $url='https://lh3.googleusercontent.com/p/AF1QipOJArg9RHKNZ1SYDn4RK55MKixRgPWJqF1i9X_q=s1600-w400?.jpg';
 /*
 
 @mkdir("pic/map/".$_GET[data_vc]."", 0777);      
@chmod("pic/map/".$_GET[data_vc]."", 0777);
 
 file_put_contents('pic/map/'.$_GET[data_vc].'/'.$_GET[point].'_'.$_GET[data_report_id].'.png',file_get_contents($url));
file_put_contents('pic/map/'.$_GET[data_vc].'/'.$_GET[point].'.png',file_get_contents($url));
*/

// @file_put_contents('pic/new.png',$url);

@copy ("https://lh3.googleusercontent.com/p/AF1QipOJArg9RHKNZ1SYDn4RK55MKixRgPWJqF1i9X_q=s1600-w300?.jpg" , "pic/pic.png" ); 

?>

<img src="<?= $url?>"   alt=""/>

 