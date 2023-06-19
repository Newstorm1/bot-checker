<?php
$type = file_get_contents("type3");
while(1){
$x = shell_exec("pm2 show cl");
if(preg_match("/errored/", $x)) {
  if($type == "c"){
    shell_exec("pm2 stop ca.php");
    shell_exec("pm2 stop cc.php");
    shell_exec("pm2 start cc.php");
    shell_exec("pm2 start cl.php");
    sleep(2500);
  }
  if($type == "a"){
    shell_exec("pm2 stop cc.php");
    shell_exec("pm2 stop ca.php");
    shell_exec("pm2 start ca.php");
    shell_exec("pm2 start cl.php");
    sleep(2500);
  }
}elseif ("/5m/") {
  if($type == "c"){
    shell_exec("pm2 stop ca.php");
    shell_exec("pm2 stop cc.php");
    shell_exec("pm2 start cc.php");
    shell_exec("pm2 start cl.php");
    sleep(2500);
  }
  if($type == "a"){
    shell_exec("pm2 stop cc.php");
    shell_exec("pm2 stop ca.php");
    shell_exec("pm2 start ca.php");
    shell_exec("pm2 start cl.php");
    sleep(2500);
  }
}elseif ("/online/") {
  if($type == "c"){
    shell_exec("pm2 stop ca.php");
    shell_exec("pm2 stop cc.php");
    shell_exec("pm2 start cc.php");
    shell_exec("pm2 start cl.php");
    sleep(2500);
  }
  if($type == "a") {
    shell_exec("pm2 stop cc.php");
    shell_exec("pm2 stop ca.php");
    shell_exec("pm2 start ca.php");
    shell_exec("pm2 start cl.php");
    sleep(2500);
  }
}elseif ("/N/A/") {
    if($type == "c"){
    shell_exec("pm2 stop ca.php");
    shell_exec("pm2 stop cc.php");
    shell_exec("pm2 start cc.php");
    shell_exec("pm2 start cl.php");
      sleep(2500);
    }
    if($type == "a") {
    shell_exec("pm2 stop cc.php");
    shell_exec("pm2 stop ca.php");
    shell_exec("pm2 start ca.php");
    shell_exec("pm2 start cl.php");
      sleep(2500);
    }
  }
}