<?php
$type = file_get_contents("type5");
while(1){
$x = shell_exec("pm2 show el");
if(preg_match("/errored/", $x)) {
  if($type == "c"){
    shell_exec("pm2 stop ea.php");
    shell_exec("pm2 stop ec.php");
    shell_exec("pm2 start ec.php");
    shell_exec("pm2 start el.php");
    sleep(2500);
  }
  if($type == "a"){
    shell_exec("pm2 stop ec.php");
    shell_exec("pm2 stop ea.php");
    shell_exec("pm2 start ea.php");
    shell_exec("pm2 start el.php");
    sleep(2500);
  }
}elseif ("/5m/") {
  if($type == "c"){
    shell_exec("pm2 stop ea.php");
    shell_exec("pm2 stop ec.php");
    shell_exec("pm2 start ec.php");
    shell_exec("pm2 start el.php");
    sleep(2500);
  }
  if($type == "a"){
    shell_exec("pm2 stop ec.php");
    shell_exec("pm2 stop ea.php");
    shell_exec("pm2 start ea.php");
    shell_exec("pm2 start el.php");
    sleep(2500);
  }
}elseif ("/online/") {
  if($type == "c"){
    shell_exec("pm2 stop ea.php");
    shell_exec("pm2 stop ec.php");
    shell_exec("pm2 start ec.php");
    shell_exec("pm2 start el.php");
    sleep(2500);
  }
  if($type == "a") {
    shell_exec("pm2 stop ec.php");
    shell_exec("pm2 stop ea.php");
    shell_exec("pm2 start ea.php");
    shell_exec("pm2 start el.php");
    sleep(2500);
  }
}elseif ("/N/A/") {
    if($type == "c"){
     shell_exec("pm2 stop ea.php");
    shell_exec("pm2 stop ec.php");
    shell_exec("pm2 start ec.php");
    shell_exec("pm2 start el.php");
      sleep(2500);
    }
    if($type == "a") {
    shell_exec("pm2 stop ec.php");
    shell_exec("pm2 stop ea.php");
    shell_exec("pm2 start ea.php");
    shell_exec("pm2 start el.php");
      sleep(2500);
    }
  }
}