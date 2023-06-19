<?php
while(1){
$x = shell_exec("pm2 show ba");
if(preg_match("/errored/", $x)) {
    shell_exec("pm2 stop Band.php");
    shell_exec("pm2 start Band.php");
    shell_exec("pm2 start ba.php");
    sleep(500);
}elseif ("/online/") {
    shell_exec("pm2 stop Band.php");
    shell_exec("pm2 start Band.php");
    shell_exec("pm2 start ba.php");
    sleep(500);
}elseif ("/N/A/") {
    shell_exec("pm2 stop Band.php");
    shell_exec("pm2 start Band.php");
    shell_exec("pm2 start ba.php");
      sleep(500);
  }
}