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
$MadelineProto = new \danog\MadelineProto\API('bot.madeline',$settings);
$MadelineProto->start();
$MadelineProto->messages->sendMessage(['peer' => "@botfather", 'message' => "/newbot"]);
$MadelineProto->messages->sendMessage(['peer' => "@botfather", 'message' => file_get_contents("nbot"),]);
$x= file_get_contents('xm');
do{
	file_put_contents('xm',$x++);
$info = json_decode(file_get_contents('in.json'),true);
$info["loop6"] = $x;
file_put_contents('in.json', json_encode($info));
$users = explode("\n",file_get_contents("bot"));
foreach($users as $user){
if($user != ""){
try{
$MadelineProto->messages->getPeerDialogs(['peers' => [$user], ]);
$x++;
}catch(\danog\MadelineProto\Exception | \danog\MadelineProto\RPCErrorException $e) {
try{
$MadelineProto->messages->sendMessage(['peer' => "@botfather", 'message' => $user]);
bot('sendvideo', ['video' =>'https://t.me/gg98vc/2', 'chat_id' => file_get_contents("ID"), 'caption' => "Hey ⌯ The Done Take 🔔\n— — — — — — — — \n⌯ User : ❲ @$user ❳ . \n⌯ ClickS :  ❲ $x ❳ .  \n⌯ Time : ❲ ". date("d/n/y" )."  ❳ . \n⌯ Catch : ❲ BoT ❳\n— — — —— — — —\n⌯ Channel : @B_r_0 ."]);
bot('sendvideo', ['video' =>'https://t.me/gg98vc/2', 'chat_id' => file_get_contents("ID"), 'caption' => "⌯ Catch ❲ BoT ❳ New Take 🦅'",]);
$data = str_replace("\n".$user,"", file_get_contents("bot"));
file_put_contents("bot", $data);
}catch(Exception $e){
echo $e->getMessage();
	if($e->getMessage() == "USERNAME_INVALID"){
                        	bot('sendvideo', ['video' =>'https://t.me/gg98vc/2', 'chat_id' => file_get_contents("ID"), 'caption' => "╭ checker ❲ Bot ❳  \n | username is Band\n╰ Done Delet on list ↣ @$user",]);
                            $data = str_replace("\n".$user,"", file_get_contents("bot"));
                            file_put_contents("bot", $data);
}elseif($e->getMessage() == "USERNAME_OCCUPIED"){
	bot('sendvideo', ['video' =>'https://t.me/gg98vc/2', 'chat_id' => file_get_contents("ID"), 'caption' => "╭ checker ❲ Bot ❳ 🛎 \n | username not save\n╰ FLood 1500 ↣ @$user",]);
$data = str_replace("\n".$user,"", file_get_contents("bot"));
file_put_contents("bot", $data);
}else{
}}}}
}}while(1);