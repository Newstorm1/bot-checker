<?php
$type = file_get_contents("type4");
while(1){
$x = shell_exec("pm2 show dl");
if(preg_match("/errored/", $x)) {
  if($type == "c"){
    shell_exec("pm2 stop da.php");
    shell_exec("pm2 stop dc.php");
    shell_exec("pm2 start dc.php");
    shell_exec("pm2 start dl.php");
    sleep(2500);
  }
  if($type == "a"){
    shell_exec("pm2 stop dc.php");
    shell_exec("pm2 stop da.php");
    shell_exec("pm2 start da.php");
    shell_exec("pm2 start dl.php");
    sleep(2500);
  }
}elseif ("/5m/") {
  if($type == "c"){
    shell_exec("pm2 stop da.php");
    shell_exec("pm2 stop dc.php");
    shell_exec("pm2 start dc.php");
    shell_exec("pm2 start dl.php");
    sleep(2500);
  }
  if($type == "a"){
    shell_exec("pm2 stop dc.php");
    shell_exec("pm2 stop da.php");
    shell_exec("pm2 start da.php");
    shell_exec("pm2 start dl.php");
    sleep(2500);
  }
}elseif ("/online/") {
  if($type == "c"){
    shell_exec("pm2 stop da.php");
    shell_exec("pm2 stop dc.php");
    shell_exec("pm2 start dc.php");
    shell_exec("pm2 start dl.php");
    sleep(2500);
  }
  if($type == "a") {
    shell_exec("pm2 stop dc.php");
    shell_exec("pm2 stop da.php");
    shell_exec("pm2 start da.php");
    shell_exec("pm2 start dl.php");
    sleep(2500);
  }
}elseif ("/N/A/") {
    if($type == "c"){
    shell_exec("pm2 stop da.php");
    shell_exec("pm2 stop dc.php");
    shell_exec("pm2 start dc.php");
    shell_exec("pm2 start dl.php");
      sleep(2500);
    }
    if($type == "a") {
    shell_exec("pm2 stop dc.php");
    shell_exec("pm2 stop da.php");
    shell_exec("pm2 start da.php");
    shell_exec("pm2 start dl.php");
      sleep(2500);
    }
  }
}