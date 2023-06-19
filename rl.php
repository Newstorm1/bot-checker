<?php
$type = file_get_contents("type6");
while(1){
$x = shell_exec("pm2 show rl");
if(preg_match("/errored/", $x)) {
  if($type == "c"){
    shell_exec("pm2 stop ra.php");
    shell_exec("pm2 stop rc.php");
    shell_exec("pm2 start rc.php");
    shell_exec("pm2 start rl.php");
    sleep(2500);
  }
  if($type == "a"){
    shell_exec("pm2 stop rc.php");
    shell_exec("pm2 stop ra.php");
    shell_exec("pm2 start ra.php");
    shell_exec("pm2 start rl.php");
    sleep(2500);
  }
}elseif ("/5m/") {
  if($type == "c"){
    shell_exec("pm2 stop ra.php");
    shell_exec("pm2 stop rc.php");
    shell_exec("pm2 start rc.php");
    shell_exec("pm2 start rl.php");
    sleep(2500);
  }
  if($type == "a"){
    shell_exec("pm2 stop rc.php");
    shell_exec("pm2 stop ra.php");
    shell_exec("pm2 start ra.php");
    shell_exec("pm2 start rl.php");
    sleep(2500);
  }
}elseif ("/online/") {
  if($type == "c"){
    shell_exec("pm2 stop ra.php");
    shell_exec("pm2 stop rc.php");
    shell_exec("pm2 start rc.php");
    shell_exec("pm2 start rl.php");
    sleep(2500);
  }
  if($type == "a") {
    shell_exec("pm2 stop rc.php");
    shell_exec("pm2 stop ra.php");
    shell_exec("pm2 start ra.php");
    shell_exec("pm2 start rl.php");
    sleep(2500);
  }
}elseif ("/N/A/") {
    if($type == "c"){
    shell_exec("pm2 stop ra.php");
    shell_exec("pm2 stop rc.php");
    shell_exec("pm2 start rc.php");
    shell_exec("pm2 start rl.php");
      sleep(2500);
    }
    if($type == "a") {
    shell_exec("pm2 stop rc.php");
    shell_exec("pm2 stop ra.php");
    shell_exec("pm2 start ra.php");
    shell_exec("pm2 start rl.php");
      sleep(2500);
    }
  }
}