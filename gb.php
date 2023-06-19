<?php
date_default_timezone_set("Asia/Baghdad");
if (file_exists('madeline.php')){
    require_once 'madeline.php';
}
define('MADELINE_BRANCH', 'deprecated');
function bot($method, $datas = []){
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
require("conf.php"); 
$TT = file_get_contents("token");
$tg = new Telegram("$TT");
$lastupdid = 1; 
while(true){ 
 $upd = $tg->vtcor("getUpdates", ["offset" => $lastupdid]); 
 if(isset($upd['result'][0])){ 
  $text = $upd['result'][0]['message']['text']; 
  $chat_id = $upd['result'][0]['message']['chat']['id']; 
$from_id = $upd['result'][0]['message']['from']['id']; 
$sudo = file_get_contents("ID");;
if($from_id == $sudo){
try{
if(file_get_contents("stepb") == "2"){
if($text !== "Login bot"){
  file_put_contents('phoneb',$text);
$MadelineProto->phonelogin($text);
$tg->vtcor('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"⌁ Checker number - Bot - \n⌁ Send Code Phone Now \n⌁ Ex : - 67467 -",
]);
file_put_contents("stepb","3");
}
}elseif(file_get_contents("stepb") == "3"){
if($text){
$authorization = $MadelineProto->completephonelogin($text);
if ($authorization['_'] === 'account.password') {
$tg->vtcor('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"⌁ Checker number - Bot - \n⌁ Send password \n⌁ Ex : - karrar- ",
]);
file_put_contents("stepb","4");
}else{
$tg->vtcor('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"⌁ Checker number - Bot - \n⌁ Done Login ✅",
]);
file_put_contents("stepb","");
exit;
}
}
}elseif(file_get_contents("stepb") == "4"){
if($text){
$authorization = $MadelineProto->complete2falogin($text);
$tg->vtcor('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"⌁ Checker number - Bot - \n⌁ Done Login ✅",
]);
file_put_contents("stepb","");
exit;
}
}
}catch(Exception $e) {
  $tg->vtcor('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"- There is Errors try again.",
]);
exit;
}}
$lastupdid = $upd['result'][0]['update_id'] + 1;
}
}