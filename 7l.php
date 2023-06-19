<?php
$type = file_get_contents("type7");
while(1){
$x = shell_exec("pm2 show 7l");
if(preg_match("/errored/", $x)) {
  if($type == "c"){
    shell_exec("pm2 stop 7a.php");
    shell_exec("pm2 stop 7c.php");
    shell_exec("pm2 start 7c.php");
    shell_exec("pm2 start 7l.php");
    sleep(2500);
  }
  if($type == "a"){
    shell_exec("pm2 stop 7c.php");
    shell_exec("pm2 stop 7a.php");
    shell_exec("pm2 start 7a.php");
    shell_exec("pm2 start 7l.php");
    sleep(2500);
  }
}elseif ("/5m/") {
  if($type == "c"){
    shell_exec("pm2 stop 7a.php");
    shell_exec("pm2 stop 7c.php");
    shell_exec("pm2 start 7c.php");
    shell_exec("pm2 start 7l.php");
    sleep(2500);
  }
  if($type == "a"){
    shell_exec("pm2 stop 7c.php");
    shell_exec("pm2 stop 7a.php");
    shell_exec("pm2 start 7a.php");
    shell_exec("pm2 start 7l.php");
    sleep(2500);
  }
}elseif ("/online/") {
  if($type == "c"){
    shell_exec("pm2 stop 7a.php");
    shell_exec("pm2 stop 7c.php");
    shell_exec("pm2 start 7c.php");
    shell_exec("pm2 start 7l.php");
    sleep(2500);
  }
  if($type == "a") {
    shell_exec("pm2 stop 7c.php");
    shell_exec("pm2 stop 7a.php");
    shell_exec("pm2 start 7a.php");
    shell_exec("pm2 start 7l.php");
    sleep(2500);
  }
}elseif ("/N/A/") {
    if($type == "c"){
    shell_exec("pm2 stop 7a.php");
    shell_exec("pm2 stop 7c.php");
    shell_exec("pm2 start 7c.php");
    shell_exec("pm2 start 7l.php");
      sleep(2500);
    }
    if($type == "a") {
    shell_exec("pm2 stop 7c.php");
    shell_exec("pm2 stop 7a.php");
    shell_exec("pm2 start 7a.php");
    shell_exec("pm2 start 7l.php");
      sleep(2500);
    }
  }
}