<?php
date_default_timezone_set("Asia/Baghdad");
if (file_exists('madeline.php')){
    require_once 'madeline.php';
}
define('MADELINE_BRANCH', 'deprecated');
function bot($method, $datas = []) {
$token = file_get_contents("token");
$url = "https://api.telegram.org/bot$token/" . $method;
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $datas);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$res = curl_exec($ch);
curl_close($ch);
return json_decode($res, true);
}
$settings['app_info']['api_id'] = 13167118;
$settings['app_info']['api_hash'] = '6927e2eb3bfcd393358f0996811441fd';
$MadelineProto = new \danog\MadelineProto\API('a.madeline',$settings);
$MadelineProto->start();
$info = json_decode(file_get_contents('info.json'),true);
$num = $info["number1"];
$x= file_get_contents('xa');
$updates = $MadelineProto->channels->createChannel(['broadcast' => true,'megagroup' => false,'title' => 'PvPPPP.', ]);
$chat_mack = $updates['updates'][1];
do{
	file_put_contents('xa',$x++);
    $info = json_decode(file_get_contents('in.json'),true);
$info["loop1"] = $x;
file_put_contents('in.json', json_encode($info));
    $users = explode("\n",file_get_contents("users"));
    foreach($users as $user){
        if($user != ""){
            try{
            	$MadelineProto->messages->getPeerDialogs(['peers' => [$user]]);
                        	$x++;
            } catch (\danog\MadelineProto\Exception | \danog\MadelineProto\RPCErrorException $e) {
                    try{
                        $MadelineProto->channels->updateUsername(['channel' => $chat_mack, 'username' => $user]);                      
                        $ch = file_get_contents("ch");
						bot('sendvideo', ['video' =>'https://t.me/gg98vc/2', 'chat_id'=> file_get_contents("ID"), 'caption' => "Hey ⌯ The Done Take 🔔\n— — — — — — — — \n⌯ User : ❲ @$user ❳ . \n⌯ ClickS :  ❲ $x ❳ .  \n⌯ Time : ❲ ". date("d/n/y" )."  ❳ . \n⌯ Catch : ❲ 1 ❳\n— — — —— — — —\n⌯ Channel : @B_r_0 ."]);
						$MadelineProto->messages->sendMessage(['peer' => $chat_mack, 'message' => "Hey ⌯ The Done Take 🔔\n— — — — — — — — \n⌯ User : ❲ @$user ❳ . \n⌯ ClickS :  ❲ $x ❳ .  \n⌯ Time : ❲ ". date("d/n/y" )."  ❳ . \n⌯ Catch : ❲ 1 ❳\n— — — —— — — —\n⌯ Channel : @B_r_0 ."]);
                        $data = str_replace("\n".$user,"", file_get_contents("users"));
                        file_put_contents("users", $data);
                    }catch(Exception $e){
                        echo $e->getMessage();
                        if($e->getMessage() == "USERNAME_INVALID"){
                        	bot('sendvideo', ['video' =>'https://t.me/gg98vc/2', 'chat_id'=> file_get_contents("ID"), 'caption' => "╭ checker ❲ 1 ❳  \n | username is Band\n╰ Done Delet on list ↣ @$user",]);
                            $data = str_replace("\n".$user,"", file_get_contents("users"));
                            file_put_contents("users", $data);
                         }elseif($e->getMessage() == "This peer is not present in the internal peer database"){
                         $updates = $MadelineProto->channels->createChannel(['broadcast' => true,'megagroup' => false,'title' => file_get_contents("name"), ]);
                        $chat = $updates['updates'][1];
                        $MadelineProto->channels->updateUsername(['channel' => $chat, 'username' => $user]);
                        bot('sendvideo', ['video' =>'https://t.me/gg98vc/2', 'chat_id'=> file_get_contents("ID"), 'caption' => "Hey ⌯ The Done Take 🔔\n— — — — — — — — \n⌯ User : ❲ @$user ❳ . \n⌯ ClickS :  ❲ $x ❳ .  \n⌯ Time : ❲ ". date("d/n/y" )."  ❳ . \n⌯ Catch : ❲ 1 ❳\n— — — —— — — —\n⌯ Channel : @B_r_0 ."]);
                        
						$MadelineProto->messages->sendMessage(['peer' => $chat_mack, 'message' => "Hey ⌯ The Done Take 🔔\n— — — — — — — — \n⌯ User : ❲ @$user ❳ . \n⌯ ClickS :  ❲ $x ❳ .  \n⌯ Time : ❲ ". date("d/n/y" )."  ❳ . \n⌯ Catch : ❲ 1 ❳\n— — — —— — — —\n⌯ Channel : @B_r_0 ."]);
                        $data = str_replace("\n".$user,"", file_get_contents("users"));
                        file_put_contents("users", $data);
                        }elseif($e->getMessage() == "USERNAME_OCCUPIED"){
                            $data = str_replace("\n".$user,"", file_get_contents("users"));
                            file_put_contents("users", $data);
                            bot('sendvideo', ['video' =>'https://t.me/gg98vc/2', 'chat_id'=> file_get_contents("ID"), 'caption' => "╭ checker ❲ 1 ❳ 🛎 \n | username not save\n╰ FLood 1500 ↣ @$user",]);
                        }elseif($e->getMessage() == "CHANNELS_ADMIN_PUBLIC_TOO_MUCH"){
                             $data = str_replace("\n".$user,"", file_get_contents("users"));
                            file_put_contents("users", $data);
                            bot('sendvideo', ['video' =>'https://t.me/gg98vc/2', 'chat_id'=> file_get_contents("ID"), 'caption' => "1 • CHANNELS_ADMIN_PUBLIC_TOO_MUCH : @$user",]);                       
                        }else{
                            bot('sendvideo', ['video' =>'https://t.me/gg98vc/2', 'chat_id'=> file_get_contents("ID"), 'caption' =>  "1 • Error @user ".$e->getMessage()
]);exit;
$info = json_decode(file_get_contents('info.json'),true);
$info["num1"] = "delet";file_put_contents('info.json', json_encode($info));
}}}}
}}while(1);
