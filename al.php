<?php
$type = file_get_contents("type");
while(1){
$x = shell_exec("pm2 show al");
if(preg_match("/errored/", $x)) {
  if($type == "c"){
    shell_exec("pm2 stop aa.php");
    shell_exec("pm2 stop ac.php");
    shell_exec("pm2 start ac.php");
    shell_exec("pm2 start al.php");
    sleep(2500);
  }
  if($type == "a"){
    shell_exec("pm2 stop ac.php");
    shell_exec("pm2 stop aa.php");
    shell_exec("pm2 start aa.php");
    shell_exec("pm2 start al.php");
    sleep(2500);
  }
}elseif ("/5m/") {
  if($type == "c"){
    shell_exec("pm2 stop aa.php");
    shell_exec("pm2 stop ac.php");
    shell_exec("pm2 start ac.php");
    shell_exec("pm2 start al.php");
    sleep(2500);
  }
  if($type == "a"){
    shell_exec("pm2 stop ac.php");
    shell_exec("pm2 stop aa.php");
    shell_exec("pm2 start aa.php");
    shell_exec("pm2 start al.php");
    sleep(2500);
  }
}elseif ("/online/") {
  if($type == "c"){
    shell_exec("pm2 stop aa.php");
    shell_exec("pm2 stop ac.php");
    shell_exec("pm2 start ac.php");
    shell_exec("pm2 start al.php");
    sleep(2500);
  }
  if($type == "a") {
    shell_exec("pm2 stop ac.php");
    shell_exec("pm2 stop aa.php");
    shell_exec("pm2 start aa.php");
    shell_exec("pm2 start al.php");
    sleep(2500);
  }
}elseif ("/N/A/") {
    if($type == "c"){
      shell_exec("pm2 stop aa.php");
      shell_exec("pm2 stop ac.php");
      shell_exec("pm2 start ac.php");
      shell_exec("pm2 start al.php");
      sleep(2500);
    }
    if($type == "a") {
      shell_exec("pm2 stop ac.php");
      shell_exec("pm2 stop aa.php");
      shell_exec("pm2 start aa.php");
      shell_exec("pm2 start al.php");
      sleep(2500);
    }
  }
}