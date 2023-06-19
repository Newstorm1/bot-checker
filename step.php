<?php
shell_exec("pm2 stop bot.php");
shell_exec("pm2 start bot.php");
system('screen -S MD -X quit');
echo "Done\n\n\n\n";