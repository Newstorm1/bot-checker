<?php
$type = file_get_contents("type2");
while(1){
$x = shell_exec("pm2 show bl");
if(preg_match("/errored/", $x)) {
  if($type == "c"){
    shell_exec("pm2 stop bu.php");
    shell_exec("pm2 stop bc.php");
    shell_exec("pm2 start bc.php");
    shell_exec("pm2 start bl.php");
    sleep(2500);
  }
  if($type == "a"){
    shell_exec("pm2 stop bc.php");
    shell_exec("pm2 stop bu.php");
    shell_exec("pm2 start bu.php");
    shell_exec("pm2 start bl.php");
    sleep(2500);
  }
}elseif ("/5m/") {
  if($type == "c"){
    shell_exec("pm2 stop bu.php");
    shell_exec("pm2 stop bc.php");
    shell_exec("pm2 start bc.php");
    shell_exec("pm2 start bl.php");
    sleep(2500);
  }
  if($type == "a"){
    shell_exec("pm2 stop bc.php");
    shell_exec("pm2 stop bu.php");
    shell_exec("pm2 start bu.php");
    shell_exec("pm2 start bl.php");
    sleep(2500);
  }
}elseif ("/online/") {
  if($type == "c"){
    shell_exec("pm2 stop bu.php");
    shell_exec("pm2 stop bc.php");
    shell_exec("pm2 start bc.php");
    shell_exec("pm2 start bl.php");
    sleep(2500);
  }
  if($type == "a") {
    shell_exec("pm2 stop bc.php");
    shell_exec("pm2 stop bu.php");
    shell_exec("pm2 start bu.php");
    shell_exec("pm2 start bl.php");
    sleep(2500);
  }
}elseif ("/N/A/") {
    if($type == "c"){
      shell_exec("pm2 stop bu.php");
      shell_exec("pm2 stop bc.php");
      shell_exec("pm2 start bc.php");
      shell_exec("pm2 start bl.php");
      sleep(2500);
    }
    if($type == "a") {
     shell_exec("pm2 stop bc.php");
     shell_exec("pm2 stop bu.php");
     shell_exec("pm2 start bu.php");
     shell_exec("pm2 start bl.php");
      sleep(2500);
    }
  }
}