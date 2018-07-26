<?
 shell_exec("./convert --width 600 --quality 90 https://www.welovetaxi.com/app/driver_master/today_loadwork_driver".$_GET[driver]."_day".$_GET[day].".html  /home/admin/domains/welovetaxi.com/private_html/app/driver_master/data/filework/".$_GET[driver].".jpg > /dev/null & echo $!");





///  echo "./home/admin/domains/welovetaxi.com/private_html/app/driver_master/data/convert --width 600 --quality 90 https://www.welovetaxi.com/app/driver_master/today_loadwork_driver".$_GET[driver]."_day".$_GET[day].".html  /home/admin/domains/welovetaxi.com/private_html/app/driver_master/data/filework/".$_GET[driver].".jpg";


//echo shell_exec("ls");

/// cp /usr/src/wkhtmltox/bin/wkhtmltoimage /home/admin/domains/welovetaxi.com/private_html/app/driver_master/data/convert

?>
