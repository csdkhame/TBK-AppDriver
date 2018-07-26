<?

shell_exec("nohup /usr/bin/wget -O /dev/null https://www.goldenbeachgroup.com/app/crontab/realtime_update.php?driver='".$_GET[]."'&day='".$_GET."' >/dev/null 2>&1");

?>