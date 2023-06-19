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
$MadelineProto = new \danog\MadelineProto\API('Band.madeline',$settings);
$MadelineProto->start();
$x= file_get_contents('xba');
do{
    $info = json_decode(file_get_contents('in.json'),true);
    $info["loopb"] = $x;
    file_put_contents('in.json', json_encode($info));
$users = explode("\n",file_get_contents("Band"));
foreach($users as $user){
    $kd = strlen($user);
    if($user != ""){
        try{$MadelineProto->messages->getPeerDialogs(['peers' => [$user]]);
            $x++;
        }catch (\danog\MadelineProto\Exception | \danog\MadelineProto\RPCErrorException $e) {
                    try{$MadelineProto->account->updateUsername(['username'=>$user]);
                        bot('sendMessage', ['chat_id' => file_get_contents("ID"), 'text' => "𓆩 We are the strongest @iii8i !'\n⎱UserName Band: ❲ @$user ❳\n⎱ClickS: ❲ $x ❳\n⎱Save: ❲ Account ❳"]);
                        bot('sendMessage', ['chat_id' => file_get_contents("ID"), 'text' => "𓆩 - Checker #Band New Caught ! 🐊'",]);
                        $data = str_replace("\n".$user,"", file_get_contents("Band"));
                        file_put_contents("Band", $data);
                    }catch(Exception $e){
                        echo $e->getMessage();
                        if($e->getMessage() == "USERNAME_INVALID"){
                            file_put_contents('xba',$x++);
                        }elseif($e->getMessage() == "The provided username is not valid"){
                            file_put_contents('xba',$x++);
                        }elseif($e->getMessage() == "USERNAME_OCCUPIED"){
                            bot('sendMessage', ['chat_id' => file_get_contents("ID"), 'text' => "╭ checker ❲ Band ❳ 🛎 \n | username not save\n╰ FLood 1500 ↣ @$user",]);
                            $data = str_replace("\n".$user,"", file_get_contents("Band"));
                            file_put_contents("Band", $data);
                        }else{
                            bot('sendMessage', ['chat_id' => file_get_contents("ID"), 'text' =>  "band • Error @$user ".$e->getMessage()]);
                            $info = json_decode(file_get_contents('info.json'),true);
                        }     
                    }
                }
            } 
        }
      }while(1);