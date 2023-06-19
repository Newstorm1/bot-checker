<?php
date_default_timezone_set("Asia/Baghdad");
error_reporting(0);
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

$up_id = $up_id;
function getupdates($up_id) {
$get = bot('getupdates', ['offset' => $up_id]);
return end($get['result']);
}
$botuser = "@" . bot('getme', ['bot']) ["result"]["username"];
file_put_contents("_ad.txt", $botuser);
function stats($nn) {
	$st = "";
	$x = shell_exec("pm2 show $nn");
	if (preg_match("/online/", $x)) {
		$st = "run";
	}
	else {
		$st = "stop";
	}
	return $st;
}
function states($g) {
$st = "";
$x = shell_exec("pm2 show $g");
if(preg_match("/online/", $x)) {
$st = "run";
}else{
$st = "stop";
}
return $st;
}
function countUsers($u = "2", $t = "2") {
if ($t == "2") {
$users = explode("\n", file_get_contents("users"));
$list = "";
$i = 1;
foreach ($users as $user) {
if ($user != "") {
$list = $list . "\n$i  ➧ @$user";
$i++;
}
}
if ($list == "") {
return "There is no username in the list";
}
else {
return $list;
}
}
if ($t == "1") {
$users = explode("\n", $u);
$list = "";
$i = 1;
foreach ($users as $user) {
if ($user != "") {
$list = $list . "\n$i  ➧ @$user";
$i++;
}
}
if ($list == "") {
return "There is no username in the list";
}
else {
return $list;
}
}
}
 $last_up = $last_up;
function ph($ph, $group) {
	global $last_up;
	$step = 0;
		bot('sendMessage', ['chat_id' => $group, 'text' => "-Wait ...."]);
		if (file_exists('madeline.php')){
			require_once 'madeline.php';
		}
    define('MADELINE_BRANCH', 'deprecated');
	unlink("a.madeline");
	unlink("a.madeline.lock");
	$settings['app_info']['api_id'] = 13167118;
	$settings['app_info']['api_hash'] = '6927e2eb3bfcd393358f0996811441fd';
	$MadelineProto = new \danog\MadelineProto\API('a.madeline',$settings);
	try {
		$vv = $MadelineProto->phone_login($ph);
$info = json_decode(file_get_contents('info.json'),true);
$info["number1"] = "$ph";
file_put_contents('info.json', json_encode($info));
		echo json_encode($vv);
		bot('sendMessage', ['chat_id' => $group, 'text' => "-> Checker number - 1 - \n-> Send Code Phone Now \n-> Ex : - 67467 -"]);
		$step = 1;
	}
	catch(Exception $e) {
		bot('sendMessage', ['chat_id' => $group, 'text' => "-> Checker number - 1 - ،\n-> I can't Login"]);
		return false;
shell_exec("php step.php");	}
	
	while (1) {
$get_up = getupdates($last_up + 1);
$last_up = $get_up['update_id'];
if ($get_up) {
	$message = $get_up['message'];
	$userID = $message['from']['id'];
	$chat_id = $message['chat']['id'];
	$text = $message['text'];
	if ($chat_id == $group) {
	if ($text) {
	if ($step == 2) {
try {
$authorization = $MadelineProto->complete2falogin($text);
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "-> Checker number - 1 - \n-> Done Login ✅"]);
break;
}
catch(Exception $e) {
echo $e->getMessage();
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "Error" . $e->getMessage() ]);
break;
}
$authorization = $MadelineProto->complete2falogin($text);
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "-> Checker number - 1 - \n-> Done Login ✅"]);
break;
}
if ($step == 1) {
try {
$authorization = $MadelineProto->completePhoneLogin($text);
if ($authorization['_'] === 'account.password') {
bot('sendmessage', ['chat_id' => $chat_id, 'text' => "-> Checker number - 1 - \n-> Send password \n-> Ex : - Bero- ", ]);
$step = 2;
}
else {
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "-> Checker number - 1 - \n-> Done Login ✅"]);
break;
}
}
catch(Exception $e) {
echo $e->getMessage();
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "Error" . $e->getMessage() ]);
break;
}
}
}
}
}
sleep(0.001);
}
}
$step = "";
$last_up = $last_up;
function p2($ph, $group) {
	global $last_up;
	$step = 0;
		bot('sendMessage', ['chat_id' => $group, 'text' => "-Wait ...."]);
		if (file_exists('madeline.php')){
			require_once 'madeline.php';
		}
    define('MADELINE_BRANCH', 'deprecated');
	unlink("b.madeline");
	unlink("b.madeline.lock");
	$settings['app_info']['api_id'] = 13167118;
	$settings['app_info']['api_hash'] = '6927e2eb3bfcd393358f0996811441fd';
	$MadelineProto = new \danog\MadelineProto\API('b.madeline',$settings);
	try {
		$vv = $MadelineProto->phone_login($ph);
$info = json_decode(file_get_contents('info.json'),true);
$info["number2"] = "$ph";
file_put_contents('info.json', json_encode($info));
		echo json_encode($vv);
		bot('sendMessage', ['chat_id' => $group, 'text' => "-> Checker number - 2 - \n-> Send Code Phone Now \n-> Ex : - 67467 -"]);
		$step = 1;
	}
	catch(Exception $e) {
		bot('sendMessage', ['chat_id' => $group, 'text' => "-> Checker number - 2 - ،\n-> I can't Login"]);
		return false;
	}
	while (1) {
$get_up = getupdates($last_up + 1);
$last_up = $get_up['update_id'];
if ($get_up) {
	$message = $get_up['message'];
	$userID = $message['from']['id'];
	$chat_id = $message['chat']['id'];
	$text = $message['text'];
	if ($chat_id == $group) {
	if ($text) {
	if ($step == 2) {
try {
$authorization = $MadelineProto->complete2falogin($text);
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "-> Checker number - 2 - \n-> Done Login  ✅"]);
break;
}
catch(Exception $e) {
echo $e->getMessage();
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "Error" . $e->getMessage() ]);
break;
}
$authorization = $MadelineProto->complete2falogin($text);
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "-> Checker number - 2 - \n-> Done Login  ✅"]);
break;
	}
if ($step == 1) {
try {
$authorization = $MadelineProto->completePhoneLogin($text);
if ($authorization['_'] === 'account.password') {
bot('sendmessage', ['chat_id' => $chat_id, 'text' => "-> Checker number - 2 - \n-> Send password \n-> Ex : - Bero- ", ]);
$step = 2;
}
else {
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "-> Checker number - 2 - \n-> Done Login  ✅"]);
break;
}
}
catch(Exception $e) {
echo $e->getMessage();
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "Error" . $e->getMessage() ]);
break;
}
}
}
}
}
sleep(0.001);
}
}
$step = "";
 $last_up = $last_up;
function DH($ph, $group) {
	global $last_up;
	$step = 0;
		bot('sendMessage', ['chat_id' => $group, 'text' => "-Wait ...."]);
		if (file_exists('madeline.php')){
			require_once 'madeline.php';
		}
    define('MADELINE_BRANCH', 'deprecated');
	unlink("c.madeline");
	unlink("c.madeline.lock");
	$settings['app_info']['api_id'] = 13167118;
	$settings['app_info']['api_hash'] = '6927e2eb3bfcd393358f0996811441fd';
	$MadelineProto = new \danog\MadelineProto\API('c.madeline', $settings);
	try {
		$vv = $MadelineProto->phone_login($ph);
$info = json_decode(file_get_contents('info.json'),true);
$info["number3"] = "$ph";
file_put_contents('info.json', json_encode($info));
		echo json_encode($vv);
		bot('sendMessage', ['chat_id' => $group, 'text' => "-> Checker number - 3 - \n-> Send Code Phone Now \n-> Ex : - 67467 -"]);
		$step = 1;
	}
	catch(Exception $e) {
		bot('sendMessage', ['chat_id' => $group, 'text' => "-> Checker number - 3 - ،\n-> I can't Login"]);
		return false;
	}
	while (1) {
$get_up = getupdates($last_up + 1);
$last_up = $get_up['update_id'];
if ($get_up) {
	$message = $get_up['message'];
	$userID = $message['from']['id'];
	$chat_id = $message['chat']['id'];
	$text = $message['text'];
	if ($chat_id == $group) {
	if ($text) {
	if ($step == 2) {
try {
$authorization = $MadelineProto->complete2falogin($text);
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "-> Checker number - 3 - \n-> Done Login  ✅"]);
break;
}
catch(Exception $e) {
echo $e->getMessage();
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "Error" . $e->getMessage() ]);
break;
}
$authorization = $MadelineProto->complete2falogin($text);
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "-> Checker number - 3 - \n-> Done Login  ✅"]);
break;
	}
if ($step == 1) {
try {
$authorization = $MadelineProto->completePhoneLogin($text);
if ($authorization['_'] === 'account.password') {
bot('sendmessage', ['chat_id' => $chat_id, 'text' => "-> Checker number - 3 - \n-> Send password \n-> Ex : - Bero- ", ]);
$step = 2;
}
else {
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "-> Checker number - 3 - \n-> Done Login  ✅"]);
break;
}
}
catch(Exception $e) {
echo $e->getMessage();
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "Error" . $e->getMessage() ]);
break;
}
}
}
}
}
sleep(0.001);
}
}
$step = "";
 $last_up = $last_up;
function p4($ph, $group) {
	global $last_up;
	$step = 0;
		bot('sendMessage', ['chat_id' => $group, 'text' => "-Wait ...."]);
		if (file_exists('madeline.php')){
			require_once 'madeline.php';
		}
    define('MADELINE_BRANCH', 'deprecated');
	unlink("d.madeline");
	unlink("d.madeline.lock");
	$settings['app_info']['api_id'] = 13167118;
	$settings['app_info']['api_hash'] = '6927e2eb3bfcd393358f0996811441fd';
	$MadelineProto = new \danog\MadelineProto\API('d.madeline', $settings);
	try {
		$vv = $MadelineProto->phone_login($ph);
$info = json_decode(file_get_contents('info.json'),true);
$info["number4"] = "$ph";
file_put_contents('info.json', json_encode($info));
		echo json_encode($vv);
		bot('sendMessage', ['chat_id' => $group, 'text' => "-> Checker number - 4 - \n-> Send Code Phone Now \n-> Ex : - 67467 -"]);
		$step = 1;
	}
	catch(Exception $e) {
		bot('sendMessage', ['chat_id' => $group, 'text' => "-> Checker number - 4 - ،\n-> I can't Login"]);
		return false;
	}
	while (1) {
$get_up = getupdates($last_up + 1);
$last_up = $get_up['update_id'];
if ($get_up) {
	$message = $get_up['message'];
	$userID = $message['from']['id'];
	$chat_id = $message['chat']['id'];
	$text = $message['text'];
	if ($chat_id == $group) {
	if ($text) {
	if ($step == 2) {
try {
$authorization = $MadelineProto->complete2falogin($text);
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "-> Checker number - 4 - \n-> Done Login  ✅"]);
break;
}
catch(Exception $e) {
echo $e->getMessage();
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "Error" . $e->getMessage() ]);
break;
}
$authorization = $MadelineProto->complete2falogin($text);
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "-> Checker number - 4 - \n-> Done Login  ✅"]);
break;
	}
if ($step == 1) {
try {
$authorization = $MadelineProto->completePhoneLogin($text);
if ($authorization['_'] === 'account.password') {
bot('sendmessage', ['chat_id' => $chat_id, 'text' => "-> Checker number - 4 - \n-> Send password \n-> Ex : - Bero-", ]);
$step = 2;
}
else {
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "-> Checker number - 4 - \n-> Done Login  ✅"]);
break;
}
}
catch(Exception $e) {
echo $e->getMessage();
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "Error" . $e->getMessage() ]);
break;
}
}
}
}
}
sleep(0.001);
}
}
$step = "";
 $last_up = $last_up;
function p9($ph, $group) {
	global $last_up;
	$step = 0;
		bot('sendMessage', ['chat_id' => $group, 'text' => "-Wait ...."]);
		if (file_exists('madeline.php')){
			require_once 'madeline.php';
		}
	define('MADELINE_BRANCH', 'deprecated');
	unlink("7.madeline");
	unlink("7.madeline.lock");
	$settings['app_info']['api_id'] = 13167118;
	$settings['app_info']['api_hash'] = '6927e2eb3bfcd393358f0996811441fd';
	$MadelineProto = new \danog\MadelineProto\API('7.madeline', $settings);
	try {
		$vv = $MadelineProto->phone_login($ph);
$info = json_decode(file_get_contents('info.json'),true);
$info["number7"] = "$ph";
file_put_contents('info.json', json_encode($info));
		echo json_encode($vv);
		bot('sendMessage', ['chat_id' => $group, 'text' => "-> Checker number - 7 - \n-> Send Code Phone Now \n-> Ex : - 67467 -"]);
		$step = 1;
	}
	catch(Exception $e) {
		bot('sendMessage', ['chat_id' => $group, 'text' => "-> Checker number - 7 - ،\n-> I can't Login"]);
		return false;
	}
	while (1) {
$get_up = getupdates($last_up + 1);
$last_up = $get_up['update_id'];
if ($get_up) {
	$message = $get_up['message'];
	$userID = $message['from']['id'];
	$chat_id = $message['chat']['id'];
	$text = $message['text'];
	if ($chat_id == $group) {
	if ($text) {
	if ($step == 2) {
try {
$authorization = $MadelineProto->complete2falogin($text);
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "-> Checker number - 7 - \n-> Done Login  ✅"]);
break;
}
catch(Exception $e) {
echo $e->getMessage();
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "Error" . $e->getMessage() ]);
break;
}
$authorization = $MadelineProto->complete2falogin($text);
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "-> Checker number - 7 - \n-> Done Login  ✅"]);
break;
	}
if ($step == 1) {
try {
$authorization = $MadelineProto->completePhoneLogin($text);
if ($authorization['_'] === 'account.password') {
bot('sendmessage', ['chat_id' => $chat_id, 'text' => "-> Checker number - 7 - \n-> Send password \n-> Ex : - Bero-", ]);
$step = 2;
}
else {
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "-> Checker number - 7 - \n-> Done Login  ✅"]);
break;
}
}
catch(Exception $e) {
echo $e->getMessage();
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "Error" . $e->getMessage() ]);
break;
}
}
}
}
}
sleep(0.001);
}
}
$step = "";
 $last_up = $last_up;
function p5($ph, $group) {
	global $last_up;
	$step = 0;
		bot('sendMessage', ['chat_id' => $group, 'text' => "-Wait ...."]);
		if (file_exists('madeline.php')){
			require_once 'madeline.php';
		}
    define('MADELINE_BRANCH', 'deprecated');
	unlink("e.madeline");
	unlink("e.madeline.lock");
	$settings['app_info']['api_id'] = 13167118;
	$settings['app_info']['api_hash'] = '6927e2eb3bfcd393358f0996811441fd';
	$MadelineProto = new \danog\MadelineProto\API('e.madeline', $settings);
	try {
		$vv = $MadelineProto->phone_login($ph);
$info = json_decode(file_get_contents('info.json'),true);
$info["number5"] = "$ph";
file_put_contents('info.json', json_encode($info));
		echo json_encode($vv);
		bot('sendMessage', ['chat_id' => $group, 'text' => "-> Checker number - 5 - \n-> Send Code Phone Now \n-> Ex : - 67467 -"]);
		$step = 1;
	}
	catch(Exception $e) {
		bot('sendMessage', ['chat_id' => $group, 'text' => "-> Checker number - 5 - ،\n-> I can't Login"]);
		return false;
	}
	while (1) {
$get_up = getupdates($last_up + 1);
$last_up = $get_up['update_id'];
if ($get_up) {
	$message = $get_up['message'];
	$userID = $message['from']['id'];
	$chat_id = $message['chat']['id'];
	$text = $message['text'];
	if ($chat_id == $group) {
	if ($text) {
	if ($step == 2) {
try {
$authorization = $MadelineProto->complete2falogin($text);
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "-> Checker number - 5 - \n-> Done Login  ✅"]);
break;
}
catch(Exception $e) {
echo $e->getMessage();
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "Error" . $e->getMessage() ]);
break;
}
$authorization = $MadelineProto->complete2falogin($text);
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "-> Checker number - 5 - \n-> Done Login  ✅"]);
break;
	}
if ($step == 1) {
try {
$authorization = $MadelineProto->completePhoneLogin($text);
if ($authorization['_'] === 'account.password') {
bot('sendmessage', ['chat_id' => $chat_id, 'text' => "-> Checker number - 5 - \n-> Send password \n-> Ex : - Bero-", ]);
$step = 2;
}
else {
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "-> Checker number - 5 - \n-> Done Login  ✅"]);
break;
}
}
catch(Exception $e) {
echo $e->getMessage();
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "Error" . $e->getMessage() ]);
break;
}
}
}
}
}
sleep(0.001);
}
}
$step = "";
 $last_up = $last_up;
function p8($ph, $group) {
	global $last_up;
	$step = 0;
		bot('sendMessage', ['chat_id' => $group, 'text' => "-Wait ...."]);
		if (file_exists('madeline.php')){
			require_once 'madeline.php';
		}
    define('MADELINE_BRANCH', 'deprecated');
	unlink("r.madeline");
	unlink("r.madeline.lock");
	$settings['app_info']['api_id'] = 13167118;
	$settings['app_info']['api_hash'] = '6927e2eb3bfcd393358f0996811441fd';
	$MadelineProto = new \danog\MadelineProto\API('r.madeline', $settings);
	try {
		$vv = $MadelineProto->phone_login($ph);
$info = json_decode(file_get_contents('info.json'),true);
$info["number6"] = "$ph";
file_put_contents('info.json', json_encode($info));
		echo json_encode($vv);
		bot('sendMessage', ['chat_id' => $group, 'text' => "-> Checker number - 6 - \n-> Send Code Phone Now \n-> Ex : - 67467 -"]);
		$step = 1;
	}
	catch(Exception $e) {
		bot('sendMessage', ['chat_id' => $group, 'text' => "-> Checker number - 6 - ،\n-> I can't Login"]);
		return false;
	}
	while (1) {
$get_up = getupdates($last_up + 1);
$last_up = $get_up['update_id'];
if ($get_up) {
	$message = $get_up['message'];
	$userID = $message['from']['id'];
	$chat_id = $message['chat']['id'];
	$text = $message['text'];
	if ($chat_id == $group) {
	if ($text) {
	if ($step == 2) {
try {
$authorization = $MadelineProto->complete2falogin($text);
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "-> Checker number - 6 - \n-> Done Login  ✅"]);
break;
}
catch(Exception $e) {
echo $e->getMessage();
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "Error" . $e->getMessage() ]);
break;
}
$authorization = $MadelineProto->complete2falogin($text);
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "-> Checker number - 6 - \n-> Done Login  ✅"]);
break;
	}
if ($step == 1) {
try {
$authorization = $MadelineProto->completePhoneLogin($text);
if ($authorization['_'] === 'account.password') {
bot('sendmessage', ['chat_id' => $chat_id, 'text' => "-> Checker number - 6 - \n-> Send password \n-> Ex : - Bero-", ]);
$step = 2;
}
else {
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "-> Checker number - 6 - \n-> Done Login  ✅"]);
break;
}
}
catch(Exception $e) {
echo $e->getMessage();
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "Error" . $e->getMessage() ]);
break;
}
}
}
}
}
sleep(0.001);
}
}
$step = "";
 $last_up = $last_up;
function p10($ph, $group) {
	global $last_up;
	$step = 0;
		bot('sendMessage', ['chat_id' => $group, 'text' => "-Wait ...."]);
		if (file_exists('madeline.php')){
			require_once 'madeline.php';
		}
    define('MADELINE_BRANCH', 'deprecated');
	unlink("8.madeline");
	unlink("8.madeline.lock");
	$settings['app_info']['api_id'] = 13167118;
	$settings['app_info']['api_hash'] = '6927e2eb3bfcd393358f0996811441fd';
	$MadelineProto = new \danog\MadelineProto\API('8.madeline', $settings);
	try {
		$vv = $MadelineProto->phone_login($ph);
$info = json_decode(file_get_contents('info.json'),true);
$info["number8"] = "$ph";
file_put_contents('info.json', json_encode($info));
		echo json_encode($vv);
		bot('sendMessage', ['chat_id' => $group, 'text' => "-> Checker number - 8 - \n-> Send Code Phone Now \n-> Ex : - 67467 -"]);
		$step = 1;
	}
	catch(Exception $e) {
		bot('sendMessage', ['chat_id' => $group, 'text' => "-> Checker number - 8 - ،\n-> I can't Login"]);
		return false;
	}
	while (1) {
$get_up = getupdates($last_up + 1);
$last_up = $get_up['update_id'];
if ($get_up) {
	$message = $get_up['message'];
	$userID = $message['from']['id'];
	$chat_id = $message['chat']['id'];
	$text = $message['text'];
	if ($chat_id == $group) {
	if ($text) {
	if ($step == 2) {
try {
$authorization = $MadelineProto->complete2falogin($text);
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "-> Checker number - 8 - \n-> Done Login  ✅"]);
break;
}
catch(Exception $e) {
echo $e->getMessage();
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "Error" . $e->getMessage() ]);
break;
}
$authorization = $MadelineProto->complete2falogin($text);
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "-> Checker number - 8 - \n-> Done Login  ✅"]);
break;
	}
if ($step == 1) {
try {
$authorization = $MadelineProto->completePhoneLogin($text);
if ($authorization['_'] === 'account.password') {
bot('sendmessage', ['chat_id' => $chat_id, 'text' => "-> Checker number - 8 - \n-> Send password \n-> Ex : - Bero-", ]);
$step = 2;
}
else {
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "-> Checker number - 8 - \n-> Done Login  ✅"]);
break;
}
}
catch(Exception $e) {
echo $e->getMessage();
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "Error" . $e->getMessage() ]);
break;
}
}
}
}
}
sleep(0.001);
}
}
$step = "";
 $last_up = $last_up;
function p7($ph, $group) {
	global $last_up;
	$step = 0;
		bot('sendMessage', ['chat_id' => $group, 'text' => "-Wait ...."]);
		if (file_exists('madeline.php')){
			require_once 'madeline.php';
		}
    define('MADELINE_BRANCH', 'deprecated');
	unlink("bot.madeline");
	unlink("bot.madeline.lock");
	$settings['app_info']['api_id'] = 13167118;
	$settings['app_info']['api_hash'] = '6927e2eb3bfcd393358f0996811441fd';
	$MadelineProto = new \danog\MadelineProto\API('bot.madeline', $settings);
	try {
		$vv = $MadelineProto->phone_login($ph);
$info = json_decode(file_get_contents('info.json'),true);
$info["bot1"] = "$ph";
file_put_contents('info.json', json_encode($info));
		echo json_encode($vv);
		bot('sendMessage', ['chat_id' => $group, 'text' => "-> Checker number - Bot - \n-> Send Code Phone Now \n-> Ex : - 67467 -"]);
		$step = 1;
	}
	catch(Exception $e) {
		bot('sendMessage', ['chat_id' => $group, 'text' => "-> Checker number - Bot - ،\n-> I can't Login"]);
		return false;
	}
	while (1) {
$get_up = getupdates($last_up + 1);
$last_up = $get_up['update_id'];
if ($get_up) {
	$message = $get_up['message'];
	$userID = $message['from']['id'];
	$chat_id = $message['chat']['id'];
	$text = $message['text'];
	if ($chat_id == $group) {
	if ($text) {
	if ($step == 2) {
try {
$authorization = $MadelineProto->complete2falogin($text);
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "-> Checker number - Bot - \n-> Done Login  ✅"]);
break;
}
catch(Exception $e) {
echo $e->getMessage();
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "Error" . $e->getMessage() ]);
break;
}
$authorization = $MadelineProto->complete2falogin($text);
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "-> Checker number - Bot - \n-> Done Login  ✅"]);
break;
	}
if ($step == 1) {
try {
$authorization = $MadelineProto->completePhoneLogin($text);
if ($authorization['_'] === 'account.password') {
bot('sendmessage', ['chat_id' => $chat_id, 'text' => "-> Checker number - Bot - \n-> Send password \n-> Ex : - Bero- ", ]);
$step = 2;
}
else {
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "-> Checker number - Bot - \n-> Done Login  ✅"]);
break;
}
}
catch(Exception $e) {
echo $e->getMessage();
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "Error" . $e->getMessage() ]);
break;
}
}
}
}
}
sleep(0.001);
}
}
$step = "";
 $last_up = $last_up;
function p6($ph, $group) {
	global $last_up;
	$step = 0;
		bot('sendMessage', ['chat_id' => $group, 'text' => "-Wait ...."]);
		if (file_exists('madeline.php')){
			require_once 'madeline.php';
		}
    define('MADELINE_BRANCH', 'deprecated');
	unlink("Band.madeline");
	unlink("Band.madeline.lock");
	$settings['app_info']['api_id'] = 13167118;
	$settings['app_info']['api_hash'] = '6927e2eb3bfcd393358f0996811441fd';
	$MadelineProto = new \danog\MadelineProto\API('Band.madeline', $settings);
	try {
		$vv = $MadelineProto->phone_login($ph);
$info = json_decode(file_get_contents('info.json'),true);
$info["band1"] = "$ph";
file_put_contents('info.json', json_encode($info));
		echo json_encode($vv);
		bot('sendMessage', ['chat_id' => $group, 'text' => "-> Checker number - Band - \n-> Send Code Phone Now \n-> Ex : - 67467 - "]);
		$step = 1;
	}
	catch(Exception $e) {
		Band('sendMessage', ['chat_id' => $group, 'text' => "-> Checker number - Band - ،\n-> I can't Login"]);
		return false;
	}
	while (1) {
$get_up = getupdates($last_up + 1);
$last_up = $get_up['update_id'];
if ($get_up) {
	$message = $get_up['message'];
	$userID = $message['from']['id'];
	$chat_id = $message['chat']['id'];
	$text = $message['text'];
	if ($chat_id == $group) {
	if ($text) {
	if ($step == 2) {
try {
$authorization = $MadelineProto->complete2falogin($text);
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "-> Checker number - Band - \n-> Done Login  ✅"]);
break;
}
catch(Exception $e) {
echo $e->getMessage();
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "Error" . $e->getMessage() ]);
break;
}
$authorization = $MadelineProto->complete2falogin($text);
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "-> Checker number - Band - \n-> Done Login  ✅"]);
break;
	}
if ($step == 1) {
try {
$authorization = $MadelineProto->completePhoneLogin($text);
if ($authorization['_'] === 'account.password') {
bot('sendmessage', ['chat_id' => $chat_id, 'text' => "-> Checker number - Band - \n-> Send password \n-> Ex : - Bero- ", ]);
$step = 2;
}
else {
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "-> Checker number - Band - \n-> Done Login  ✅"]);
break;
}
}
catch(Exception $e) {
echo $e->getMessage();
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "Error" . $e->getMessage() ]);
break;
}
}
}
}
}
sleep(0.001);
}
}
$step = "";
function run($update) {
global $step;
$nn = bot('getme', ['bot']) ["result"]["username"];
$message = $update['message'];
$userID = $message['from']['id'];
$chat_id = $message['chat']['id'];
$name = $message['from']['first_name'];
$text = $message['text'];
$date = $update['callback_query']['data'];
$cq = $update['callback_query'];
$data = $cq['data'];
$message_id = $cq['message']['message_id'];
$chat_id2 = $cq['message']['chat']['id'];
$group = file_get_contents("ID");
$url = "";
$g = file_get_contents($url);
$js = json_decode($g);
$da = $js->date;
$time = $js->time;
$day = $js->day;
$month = $js->month;
$ad = array("$group");
if($text == "/start" and !in_array($chat_id,$ad) and $chat_id != $group = null){
bot('sendmessage',[ 
'chat_id'=>$chat_id,  
'text'=>" 
ᴡᴇʟᴄᴏᴍᴇ ᴛᴏ ᴛʜᴇ ʜᴇʟʟ
[ᴛᴏ ʙᴜʏ :](t.me/PvPPPP) 
",'parse_mode' => "MarkDown", 'disable_web_page_preview' => true,
'reply_markup' => json_encode(['inline_keyboard' => [
[['text' => "❲ Channel ❳'", 'url' => "https://t.me/B_r_0"]],
]]) 
]);
}

if ($chat_id == $group) {
if ($text) {
if ($text == "/start") {
bot('sendMessage',[
'chat_id'=>$chat_id,
'text' => "Hi , [$name](tg://user?id=$chat_id)",
'parse_mode' => "MarkDown", 
'disable_web_page_preview' => true,
'reply_markup' => json_encode(['resize_keyboard' => true, 'keyboard' => [
[["text" =>"‌の Numbers"],["text" =>"‌の Requests"]],
[["text" =>"‌の Run"],["text" =>"‌の Stop"]],
[["text" =>"‌の Add Users"],["text" =>"‌の Delet User"]],
[["text" =>"‌の Type Checker"]],
[["text" =>"‌の Clear list"],["text" =>"‌の Show list"]],
[["text" =>"‌の Delet Number"],["text" =>"‌の Add Number"]],
[["text" =>"‌の Pin All"]],
[["text" =>"‌の Run All"],["text" =>"‌の Stop All"]]], ]) 
])->result->message_id;
sleep(0.001);
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id + 1,
]);
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "❲ Hi To @B_r_0 CheckEr ❳",
]);
}

if ($text == "の Type Checker") {
bot('sendMessage',[
'chat_id'=>$chat_id,
'text' => "Choose Type Checker In Accounts",
'parse_mode' => "MarkDown", 
'disable_web_page_preview' => true,
'reply_markup' => json_encode(['resize_keyboard' => true, 'keyboard' => [
[["text" => "‌の To Account"], ["text" => "‌の To Channel"]],
], ]) 
])->result->message_id;
}

if($text == "sstates") {
$a = states("a");
$b = states("b");
$c = states("c");
$d = states("d");
$e = states("e");
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"- CHEKERS states All . 
1 ➧ ch states : $a .
2 ➧ ch states : $b .
3 ➧ ch states : $c .
4 ➧ ch states : $d .
5 ➧ ch states : $e .",
]);}
if ($text == "Checker order") {
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "❲ Hi To @B_r_0 CheckEr ❳",
'reply_markup' => json_encode(['resize_keyboard' => true, 'keyboard' => [
[["text" =>"‌の Numbers"],["text" =>"‌の Requests"]],
[["text" =>"‌の Run"],["text" =>"‌の Stop"]],
[["text" => "‌の To Account"], ["text" => "‌の To Channel"]],
[["text" => "‌"],["text" =>"‌"]],
[["text" =>"‌の Clear list"],["text" =>"‌の Show list"]],
[["text" =>"‌の Delet Number"],["text" =>"‌の Add Number"]],
[["text" =>"‌の Pin All"]],
[["text" =>"‌の Add Users"],["text" =>"‌の Delet User"]],
[["text" =>"‌"]],
[["text" =>"‌の Run All"],["text" =>"‌の Stop All"]]], ]) ]);
}
if ($text == "❲ Back ❳") {
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "❲ Hi To @B_r_0 CheckEr ❳", 'reply_markup' => json_encode(['resize_keyboard' => true, 'keyboard' => [
[["text" =>"‌の Numbers"],["text" =>"‌の Requests"]],
[["text" =>"‌の Run"],["text" =>"‌の Stop"]],
[["text" =>"‌の Add Users"],["text" =>"‌の Delet User"]],

[["text" => "‌の To Account"], ["text" => "‌の To Channel"]],

[["text" =>"‌の Clear list"],["text" =>"‌の Show list"]],
[["text" =>"‌の Delet Number"],["text" =>"‌の Add Number"]],
[["text" =>"‌の Pin All"]],

[["text" =>"‌の Run All"],["text" =>"‌の Stop All"]]], ]) ]);
}
if ($step == "n") {
file_put_contents("name", $text);
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "Channel Save name ✅ ",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"❲ Back ❳",'callback_data'=>"#Back"]],]])]);
$step = "";
}
if ($step == "bot") {
file_put_contents("nbot", $text);
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "Bot Save name ✅",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"❲ Back ❳",'callback_data'=>"#bot"]],]])]);
$step = "";
}
if ($step == "a") {
file_put_contents("about", $text);
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "Channel Save about ✅",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"❲ Back ❳",'callback_data'=>"#Back"]],]])]);
$step = "";
}
if ($step == "r") {
file_put_contents("ch", $text);
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "Channel Save rights ✅",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"❲ Back ❳",'callback_data'=>"#Back"]],]])]);
$step = "";
}
if ($step == "o1") {
file_put_contents("o1", $text);
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "Channel Save Username ✅",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"❲ Back ❳",'callback_data'=>"#Back"]],]])]);
$step = "";
}
if ($step == "o2") {
file_put_contents("o2", $text);
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "Channel Save Username ✅",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"❲ Back ❳",'callback_data'=>"#Back"]],]])]);
$step = "";
}
if ($step == "o3") {
file_put_contents("o3", $text);
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "Channel Save Username ✅",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"❲ Back ❳",'callback_data'=>"#Back"]],]])]);
$step = "";
}
if ($step == "o4") {
file_put_contents("o4", $text);
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "Channel Save Username ✅",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"❲ Back ❳",'callback_data'=>"#Back"]],]])]);
$step = "";
}
if ($step == "o5") {
file_put_contents("o5", $text);
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "Channel Save Username ✅",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"❲ Back ❳",'callback_data'=>"#Back"]],]])]);
$step = "";
}
if ($step == "o6") {
file_put_contents("o6", $text);
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "Channel Save Username ✅",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"❲ Back ❳",'callback_data'=>"#Back"]],]])]);
$step = "";
}
if ($step == "o7") {
file_put_contents("o7", $text);
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "Channel Save Username ✅",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"❲ Back ❳",'callback_data'=>"#Back"]],]])]);
$step = "";
}
if ($step == "o8") {
file_put_contents("o8", $text);
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "Channel Save Username ✅",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"❲ Back ❳",'callback_data'=>"#Back"]],]])]);
$step = "";
}

if(preg_match("/の Channel/", $text)) {
	$type = str_replace("の Channel ",null, $text) ;
	if($type > 0 and $type < 9){
		unlink("o$type");
$step = "o$type";
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "のChecker $type \nAdd Old Username Channel ,",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"❲ Back ❳",'callback_data'=>"#Back"]],]])]);
		}
		} 

if ($text == "Login1") {
	bot('sendMessage', ['chat_id' => $chat_id, 'text' => "-> Checker number - 1 - \n-> Send You Number Phone\n-> Ex : +9647705789900 ,",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"❲ Back ❳",'callback_data'=>"#Back"]],]])]);
shell_exec("pm2 stop aa.php");
shell_exec("pm2 stop ac.php");
shell_exec("pm2 stop al.php");
unlink("a.madeline");
unlink("a.madeline.lock");
file_put_contents("step","2");
  system('php g1.php');
	}
	if ($text == "Login2") {
	bot('sendMessage', ['chat_id' => $chat_id, 'text' => "-> Checker number - 2 - \n-> Send You Number Phone\n-> Ex : +9647705789900 ,",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"❲ Back ❳",'callback_data'=>"#Back"]],]])]);
	shell_exec("pm2 stop bu.php");
	shell_exec("pm2 stop bc.php");
	shell_exec("pm2 stop bl.php");
	unlink("b.madeline");
	unlink("b.madeline.lock");
	file_put_contents("step2","2");
  system('php g2.php');
	}
	if ($text == "Login3") {
	bot('sendMessage', ['chat_id' => $chat_id, 'text' => "-> Checker number - 3 - \n-> Send You Number Phone\n-> Ex : +9647705789900  ,",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"❲ Back ❳",'callback_data'=>"#Back"]],]])]);
	shell_exec("pm2 stop cc.php");
	shell_exec("pm2 stop cl.php");
	shell_exec("pm2 stop ca.php");
	unlink("c.madeline");
	unlink("c.madeline.lock");
	file_put_contents("step3","2");
	system('php g3.php');
	}
	if ($text == "Login4") {
	bot('sendMessage', ['chat_id' => $chat_id, 'text' => "-> Checker number - 4 - \n-> Send You Number Phone\n-> Ex : +9647705789900  ,",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"❲ Back ❳",'callback_data'=>"#Back"]],]])]);
	shell_exec("pm2 stop dl.php");
	shell_exec("pm2 stop da.php");
	shell_exec("pm2 stop dc.php");
	unlink("d.madeline");
	unlink("d.madeline.lock");
	file_put_contents("step4","2");
	system('php g4.php');
	}
	if ($text == "Login5") {
	bot('sendMessage', ['chat_id' => $chat_id, 'text' => "-> Checker number - 5 - \n-> Send You Number Phone\n-> Ex : +9647705789900 ,",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"❲ Back ❳",'callback_data'=>"#Back"]],]])]);
	shell_exec("pm2 stop el.php");
	shell_exec("pm2 stop ea.php");
	shell_exec("pm2 stop ec.php");
	unlink("e.madeline");
	unlink("e.madeline.lock");
	file_put_contents("step5","2");
	system('php g5.php');
	}
	if ($text == "Login6") {
	bot('sendMessage', ['chat_id' => $chat_id, 'text' => "-> Checker number - 6 - \n-> Send You Number Phone\n-> Ex : +9647705789900  ,",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"❲ Back ❳",'callback_data'=>"#Back"]],]])]);
	shell_exec("pm2 stop rl.php");
	shell_exec("pm2 stop ra.php");
	shell_exec("pm2 stop rc.php");
	unlink("r.madeline");
	unlink("r.madeline.lock");
	file_put_contents("step6","2");
	system('php g6.php');
	}
	if ($text == "Login7") {
	bot('sendMessage', ['chat_id' => $chat_id, 'text' => "-> Checker number - 7 - \n-> Send You Number Phone\n-> Ex : +9647705789900  ,",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"❲ Back ❳",'callback_data'=>"#Back"]],]])]);
	shell_exec("pm2 stop 7l.php");
	shell_exec("pm2 stop 7a.php");
	shell_exec("pm2 stop 7c.php");
	unlink("7.madeline");
	unlink("7.madeline.lock");
	file_put_contents("step7","2");
	system('php g7.php');
	}
	if ($text == "Login8") {
	bot('sendMessage', ['chat_id' => $chat_id, 'text' => "-> Checker number - 8 - \n-> Send You Number Phone\n-> Ex : +9647705789900  ,",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"❲ Back ❳",'callback_data'=>"#Back"]],]])]);
	shell_exec("pm2 stop 8l.php");
	shell_exec("pm2 stop 8a.php");
	shell_exec("pm2 stop 8c.php");
	unlink("8.madeline");
	unlink("8.madeline.lock");
	file_put_contents("step8","2");
	system('php g8.php');
	}
	if ($text == "Login band") {
	bot('sendMessage', ['chat_id' => $chat_id, 'text' => "-> Checker number - Band - \n-> Send You Number Phone\n-> Ex : +9647705789900  ,",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"❲ Back ❳",'callback_data'=>"#Back"]],]])]);
	shell_exec("pm2 stop Band.php");
	shell_exec("pm2 stop ba.php");
	unlink("Band.madeline");
	unlink("Band.madeline.lock");
	file_put_contents("stepn","2");
	system('php gn.php');
	}
	if ($text == "Login bot") {
	bot('sendMessage', ['chat_id' => $chat_id, 'text' => "-> Checker number - bot - \n-> Send You Number Phone\n-> Ex : +9647705789900  ,",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"❲ Back ❳",'callback_data'=>"#Back"]],]])]);
	shell_exec("pm2 stop m.php");
	shell_exec("pm2 stop ml.php");
	unlink("bot.madeline");
	unlink("bot.madeline.lock");
	file_put_contents("stepb","2");
	system('php gb.php');
	}
if ($text == "▫️Name") {
$step = "n";
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "Add Channel Name",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"❲ Back ❳",'callback_data'=>"#Back"]],]])]);
}
if ($text == "▫️about") {
$step = "a";
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "Add channel about",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"❲ Back ❳",'callback_data'=>"#Back"]],]])]);
}
if ($text == "▫️Rights") {
$step = "r";
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "Add rights",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"❲ Back ❳",'callback_data'=>"#Back"]],]])]);
}
if ($text == "‌") {
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "‌の Select button",
'reply_markup' => json_encode(['resize_keyboard' => true, 'keyboard' => [

[["text" =>"▫️Name"]],
[["text" =>"▫️User Old Channel"]],
[["text" =>"▫️about"],["text" =>"▫️Rights"]]
[["text" =>"❲ Back ❳"]], 
], ]) ]);
}
if ($text == "▫️User Old Channel") {
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "‌の Select button",
'reply_markup' => json_encode(['resize_keyboard' => true, 'keyboard' => [
[["text" =>"❲ Back ❳"]],
[["text" =>"‌の Channel 1"],["text" =>"‌の Channel 2"]],
[["text" =>"‌の Channel 3"],["text" =>"‌の Channel 4"]],
[["text" =>"‌の Channel 5"],["text" =>"‌の Channel 6"]],
[["text" =>"‌の Channel 7"],["text" =>"‌の Channel 8"]]], ]) ]);
} 
if ($text == "‌の Add Number") {
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "‌の Select button",
'reply_markup' => json_encode(['resize_keyboard' => true, 'keyboard' => [
[["text" =>"❲ Back ❳"]],
[["text" =>"Login1"],["text" =>"Login2"]],
[["text" =>"Login3"],["text" =>"Login4"]],
[["text" =>"Login5"],["text" =>"Login6"]],
[["text" =>"Login7"],["text" =>"Login8"]],
[["text" =>"Login bot"],["text" =>"Login band"]]], ]) ]);
}
if ($text == "‌の Pin All") {
bot('sendMessage',['chat_id'=>$chat_id,'message_id'=>$message_id,'text'=>"➧ Send Username ➧ pin user ",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"❲ Back ❳",'callback_data'=>"#Back"]],]])]);
file_put_contents('mode', 'pinall');
shell_exec("pm2 stop aa.php");
shell_exec("pm2 stop ac.php");
shell_exec("pm2 stop bu.php");
shell_exec("pm2 stop bc.php");
shell_exec("pm2 stop cc.php");
shell_exec("pm2 stop ca.php");
shell_exec("pm2 stop da.php");
shell_exec("pm2 stop dc.php");
shell_exec("pm2 stop ea.php");
shell_exec("pm2 stop ec.php");
shell_exec("pm2 stop ra.php");
shell_exec("pm2 stop rc.php");
shell_exec("pm2 stop 7a.php");
shell_exec("pm2 stop 7c.php");
shell_exec("pm2 stop 8a.php");
shell_exec("pm2 stop 8c.php");

unlink('users');
unlink('u2');
unlink('u3');
unlink('u4');
unlink('u5');
unlink('u6');
unlink('u7');
unlink('u8');
}
if ($text == "‌") {
$type = file_get_contents("type");
if($type == "c"){
shell_exec("pm2 stop ac.php");
shell_exec("pm2 start ac.php");
}
if($type == "a"){
shell_exec("pm2 stop aa.php");
shell_exec("pm2 start aa.php");
}
$type = file_get_contents("type2");
if($type == "c"){
shell_exec("pm2 stop bc.php");
shell_exec("pm2 start bc.php");
}
if($type == "a"){
shell_exec("pm2 stop bu.php");
shell_exec("pm2 start bu.php");
}
$type = file_get_contents("type3");
if($type == "c"){
shell_exec("pm2 stop cc.php");
shell_exec("pm2 start cc.php");
}
if($type == "a"){
shell_exec("pm2 stop ca.php");
shell_exec("pm2 start ca.php");
}
$type = file_get_contents("type4");
if($type == "c"){
shell_exec("pm2 stop dc.php");
shell_exec("pm2 start dc.php");
}
if($type == "a"){
shell_exec("pm2 stop da.php");
shell_exec("pm2 start da.php");
}
$type = file_get_contents("type5");
if($type == "c"){
shell_exec("pm2 stop ec.php");
shell_exec("pm2 start ec.php");
}
if($type == "a"){
shell_exec("pm2 stop ea.php");
shell_exec("pm2 start ea.php");
}
$type = file_get_contents("type6");
if($type == "c"){
shell_exec("pm2 stop rc.php");
shell_exec("pm2 start rc.php");
}
if($type == "a"){
shell_exec("pm2 stop ra.php");
shell_exec("pm2 start ra.php");
}
$type = file_get_contents("type7");
if($type == "c"){
shell_exec("pm2 stop 7c.php");
shell_exec("pm2 start 7c.php");
}
if($type == "a"){
shell_exec("pm2 stop 7a.php");
shell_exec("pm2 start 7a.php");
}
$type = file_get_contents("type8");
if($type == "c"){
shell_exec("pm2 stop 8c.php");
shell_exec("pm2 start 8c.php");
}
if($type == "a"){
shell_exec("pm2 stop 8a.php");
shell_exec("pm2 start 8a.php");
}
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "-> Done Rest all checkers 🐊",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"❲ Back ❳",'callback_data'=>"#Back"]],]])]);

}
if ($text == "‌の Run All") {
$type = file_get_contents("type");
if($type == "c"){
shell_exec("pm2 stop ac.php");
shell_exec("pm2 start ac.php");
}
if($type == "a"){
shell_exec("pm2 stop aa.php");
shell_exec("pm2 start aa.php");
}
$type = file_get_contents("type2");
if($type == "c"){
shell_exec("pm2 stop bc.php");
shell_exec("pm2 start bc.php");
}
if($type == "a"){
shell_exec("pm2 stop bu.php");
shell_exec("pm2 start bu.php");
}
$type = file_get_contents("type3");
if($type == "c"){
shell_exec("pm2 stop cc.php");
shell_exec("pm2 start cc.php");
}
if($type == "a"){
shell_exec("pm2 stop ca.php");
shell_exec("pm2 start ca.php");
}
$type = file_get_contents("type4");
if($type == "c"){
shell_exec("pm2 stop dc.php");
shell_exec("pm2 start dc.php");
}
if($type == "a"){
shell_exec("pm2 stop da.php");
shell_exec("pm2 start da.php");
}
$type = file_get_contents("type5");
if($type == "c"){
shell_exec("pm2 stop ec.php");
shell_exec("pm2 start ec.php");
}
if($type == "a"){
shell_exec("pm2 stop ea.php");
shell_exec("pm2 start ea.php");
}
$type = file_get_contents("type6");
if($type == "c"){
shell_exec("pm2 stop rc.php");
shell_exec("pm2 start rc.php");
}
if($type == "a"){
shell_exec("pm2 stop ra.php");
shell_exec("pm2 start ra.php");
}
$type = file_get_contents("type7");
if($type == "c"){
shell_exec("pm2 stop 7c.php");
shell_exec("pm2 start 7c.php");
}
if($type == "a"){
shell_exec("pm2 stop 7a.php");
shell_exec("pm2 start 7a.php");
}
$type = file_get_contents("type8");
if($type == "c"){
shell_exec("pm2 stop 8c.php");
shell_exec("pm2 start 8c.php");
}
if($type == "a"){
shell_exec("pm2 stop 8a.php");
shell_exec("pm2 start 8a.php");
}
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "-> Done Run all checkers 🐊",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"❲ Back ❳",'callback_data'=>"#Back"]],]])]);
$info = json_decode(file_get_contents('info.json'),true);
$info["num1"] = "on";
file_put_contents('info.json', json_encode($info));
$info["num2"] = "on";
file_put_contents('info.json', json_encode($info));
$info["num3"] = "on";
file_put_contents('info.json', json_encode($info));
$info["num4"] = "on";
file_put_contents('info.json', json_encode($info));
$info["num5"] = "on";
file_put_contents('info.json', json_encode($info));
$info["num6"] = "on";
file_put_contents('info.json', json_encode($info));
$info["num7"] = "on";
file_put_contents('info.json', json_encode($info));
$info["num8"] = "on";
file_put_contents('info.json', json_encode($info));
}
if ($text == "‌の Stop All") {
shell_exec("pm2 stop al.php");
shell_exec("pm2 stop bl.php");
shell_exec("pm2 stop cl.php");
shell_exec("pm2 stop dl.php");
shell_exec("pm2 stop el.php");
shell_exec("pm2 stop rl.php");
shell_exec("pm2 stop 7l.php");
shell_exec("pm2 stop 8l.php");
shell_exec("pm2 stop aa.php");
shell_exec("pm2 stop ac.php");
shell_exec("pm2 stop bu.php");
shell_exec("pm2 stop bc.php");
shell_exec("pm2 stop cc.php");
shell_exec("pm2 stop ca.php");
shell_exec("pm2 stop da.php");
shell_exec("pm2 stop dc.php");
shell_exec("pm2 stop ea.php");
shell_exec("pm2 stop ec.php");
shell_exec("pm2 stop ra.php");
shell_exec("pm2 stop rc.php");
shell_exec("pm2 stop 7a.php");
shell_exec("pm2 stop 7c.php");
shell_exec("pm2 stop 8a.php");
shell_exec("pm2 stop 8c.php");
bot('sendMessage', ['chat_id' => $chat_id, 'text' => "-> Done stop all checkers ⚓",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"❲ Back ❳",'callback_data'=>"#Back"]],]])]);
$info = json_decode(file_get_contents('info.json'),true);
$info["num1"] = "off";
file_put_contents('info.json', json_encode($info));
$info["num2"] = "off";
file_put_contents('info.json', json_encode($info));
$info["num3"] = "off";
file_put_contents('info.json', json_encode($info));
$info["num4"] = "off";
file_put_contents('info.json', json_encode($info));
$info["num5"] = "off";
file_put_contents('info.json', json_encode($info));
$info["num6"] = "off";
file_put_contents('info.json', json_encode($info));
$info["num7"] = "off";
file_put_contents('info.json', json_encode($info));
$info["num8"] = "off";
file_put_contents('info.json', json_encode($info));
}
if(file_exists('mode')){
$mode = file_get_contents('mode');
$users = explode("\n", file_get_contents('users'));
if(preg_match("/@+/", $text)){
if($mode == 'pinall'){
$user = explode("@", $text) [1];
if (!in_array($user, $users)) {
file_put_contents("users", "\n" . $user, FILE_APPEND);
file_put_contents("u2", "\n" . $user, FILE_APPEND);
file_put_contents("u3", "\n" . $user, FILE_APPEND);
file_put_contents("u4", "\n" . $user, FILE_APPEND);
file_put_contents("u5", "\n" . $user, FILE_APPEND);
file_put_contents("u6", "\n" . $user, FILE_APPEND);
file_put_contents("u7", "\n" . $user, FILE_APPEND);
file_put_contents("u8", "\n" . $user, FILE_APPEND);
bot('sendMessage', ['chat_id' => $chat_id, 'text'=>"@$user :→Done Pin All.🚀",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"❲ Back ❳",'callback_data'=>"#Back"]],]])]);
shell_exec("pm2 start aa.php");
shell_exec("pm2 start ac.php");
shell_exec("pm2 start bu.php");
shell_exec("pm2 start bc.php");
shell_exec("pm2 start cc.php");
shell_exec("pm2 start ca.php");
shell_exec("pm2 start da.php");
shell_exec("pm2 start dc.php");
shell_exec("pm2 start ea.php");
shell_exec("pm2 start ec.php");
shell_exec("pm2 start ra.php");
shell_exec("pm2 start rc.php");
shell_exec("pm2 start 7a.php");
shell_exec("pm2 start 7c.php");
shell_exec("pm2 start 8a.php");
shell_exec("pm2 start 8c.php");

} else {
bot('sendMessage', ['chat_id' => $chat_id, 'text'=>"@$user : Already Exists.",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"❲ Back ❳",'callback_data'=>"#Back"]],]])]);
}
unlink('mode');
} elseif($mode == 'Unpin'){
echo 'unpin';
$user = explode("@", $text) [1];
$data = str_replace("\n" . $user, "", file_get_contents("users"));
file_put_contents("users", $data);
file_put_contents("users",preg_replace('~[\r\n]+~',"\n",trim(file_get_contents("users"))));
bot('sendMessage', ['chat_id' => $chat_id,  'text' => "-> Done Delet User List 1 :@$user",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"❲ Back ❳",'callback_data'=>"#Back"]],]])]);
unlink('mode');
} elseif($mode == 'addL'){
echo $mode;
$ex = explode("\n", $text);
$userT = "";
$userN = "";
foreach ($ex as $u) {
$users = explode("\n", file_get_contents("users"));
 $user = explode("@", $u) [1];
if (!in_array($user, $users)) {
$userT = $userT . "\n" . $user;
}
else {
$userN = $userN . "\n" . $user;
}
}
file_put_contents("users", $userT, FILE_APPEND);
bot('sendMessage', ['chat_id' => $chat_id,  'text' => "-> Done Added Users To List 1 :\n" . countUsers($userT, "1") ,'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"❲ Back ❳",'callback_data'=>"#Back"]],]])]);
unlink('mode');
}
}}
if(file_exists('mode')){
$mode = file_get_contents('mode');
$users = explode("\n", file_get_contents('u2'));
if(preg_match("/@+/", $text)){
if($mode == 'Pi0n'){
$user = explode("@", $text) [1];
if (!in_array($user, $users)) {
file_put_contents("u2", "\n" . $user, FILE_APPEND);
$EzTG->sendMessage(['chat_id'=>$cha,'text'=>"-> Done Delet User List 2 : @$user",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"❲ Back ❳",'callback_data'=>"#Back"]],]])]);
} else {
bot('sendMessage', ['chat_id' => $chat_id, 'text'=>"@$user : Already Exists.",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"❲ Back ❳",'callback_data'=>"#Back"]],]])]);
}
unlink('mode');
} elseif($mode == 'Unpin2'){
echo 'Unpin2';
$user = explode("@", $text) [1];
$data = str_replace("\n" . $user, "", file_get_contents("u2"));
file_put_contents("u2", $data);
file_put_contents("u2",preg_replace('~[\r\n]+~',"\n",trim(file_get_contents("u2"))));
bot('sendMessage', ['chat_id' => $chat_id,  'text' => "-> Done Delet User List 2 : @$user",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"❲ Back ❳",'callback_data'=>"#Back"]],]])]);
unlink('mode');
}elseif($mode == 'ad2'){
echo $mode;
$ex = explode("\n", $text);
$userT = "";
$userN = "";
foreach ($ex as $u) {
$addL = explode("\n", file_get_contents("u2"));
$user = explode("@", $u) [1];
if (!in_array($user, $users)) {
$userT = $userT . "\n" . $user;
}
else {
$userN = $userN . "\n" . $user;
}
}
file_put_contents("u2", $userT, FILE_APPEND);
bot('sendMessage', ['chat_id' => $chat_id,  'text' => "-> Done Added Users To List 2 :\n" . countUsers($userT, "1") ,'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"❲ Back ❳",'callback_data'=>"#Back"]],]])]);
unlink('mode');
}
}}
if(file_exists('mode')){
$mode = file_get_contents('mode');
$users = explode("\n", file_get_contents('u3'));
if(preg_match("/@+/", $text)){
if($mode == 'P0in'){
$user = explode("@", $text) [1];
if (!in_array($user, $users)) {
file_put_contents("u3", "\n" . $user, FILE_APPEND);
$EzTG->sendMessage(['chat_id'=>$cha,'text'=>"@$user :→Done Pin.",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"❲ Back ❳",'callback_data'=>"#Back"]],]])]);
} else {
bot('sendMessage', ['chat_id' => $chat_id, 'text'=>"@$user : Already Exists.",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"❲ Back ❳",'callback_data'=>"#Back"]],]])]);}
unlink('mode');
}elseif($mode == 'Unpin3'){
echo 'Unpin3';
$user = explode("@", $text) [1];
$data = str_replace("\n" . $user, "", file_get_contents("u3"));
file_put_contents("u3", $data);
file_put_contents("u3",preg_replace('~[\r\n]+~',"\n",trim(file_get_contents("u3"))));
bot('sendMessage', ['chat_id' => $chat_id,  'text' => "-> Done Delet User List 3 : @$user",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"❲ Back ❳",'callback_data'=>"#Back"]],]])]);
unlink('mode');
}elseif($mode == 'ad3'){
echo $mode;
$ex = explode("\n", $text);
$userT = "";
$userN = "";
foreach ($ex as $u) {
$addL = explode("\n", file_get_contents("u3"));
$user = explode("@", $u) [1];
if (!in_array($user, $users)) {
$userT = $userT . "\n" . $user;
}
else {
$userN = $userN . "\n" . $user;
}
}
file_put_contents("u3", $userT, FILE_APPEND);
bot('sendMessage', ['chat_id' => $chat_id,  'text' => "-> Done Added Users To List 3 :\n" . countUsers($userT, "1") ,'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"❲ Back ❳",'callback_data'=>"#Back"]],]])]);
unlink('mode');
}
}}
if(file_exists('mode')){
$mode = file_get_contents('mode');
$users = explode("\n", file_get_contents('u6'));
if(preg_match("/@+/", $text)){
if($mode == 'P0in'){
$user = explode("@", $text) [1];
if (!in_array($user, $users)) {
file_put_contents("u6", "\n" . $user, FILE_APPEND);
$EzTG->sendMessage(['chat_id'=>$cha,'text'=>"@$user :→Done Pin.",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"❲ Back ❳",'callback_data'=>"#Back"]],]])]);
} else {
bot('sendMessage', ['chat_id' => $chat_id, 'text'=>"@$user : Already Exists.",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"❲ Back ❳",'callback_data'=>"#Back"]],]])]);}
unlink('mode');
}elseif($mode == 'Unpin6'){
echo 'Unpin6';
$user = explode("@", $text) [1];
$data = str_replace("\n" . $user, "", file_get_contents("u6"));
file_put_contents("u6", $data);
file_put_contents("u6",preg_replace('~[\r\n]+~',"\n",trim(file_get_contents("u6"))));
bot('sendMessage', ['chat_id' => $chat_id,  'text' => "-> Done Delet User List 6 : @$user",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"❲ Back ❳",'callback_data'=>"#Back"]],]])]);
unlink('mode');
}elseif($mode == 'ad6'){
echo $mode;
$ex = explode("\n", $text);
$userT = "";
$userN = "";
foreach ($ex as $u) {
$addL = explode("\n", file_get_contents("u6"));
$user = explode("@", $u) [1];
if (!in_array($user, $users)) {
$userT = $userT . "\n" . $user;
}
else {
$userN = $userN . "\n" . $user;
}
}
file_put_contents("u6", $userT, FILE_APPEND);
bot('sendMessage', ['chat_id' => $chat_id,  'text' => "-> Done Added Users To List 6 :\n" . countUsers($userT, "1") ,'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"❲ Back ❳",'callback_data'=>"#Back"]],]])]);
unlink('mode');
}
}}
if(file_exists('mode')){
$mode = file_get_contents('mode');
$users = explode("\n", file_get_contents('u7'));
if(preg_match("/@+/", $text)){
if($mode == 'P0in'){
$user = explode("@", $text) [1];
if (!in_array($user, $users)) {
file_put_contents("u7", "\n" . $user, FILE_APPEND);
$EzTG->sendMessage(['chat_id'=>$cha,'text'=>"@$user :→Done Pin.",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"❲ Back ❳",'callback_data'=>"#Back"]],]])]);
} else {
bot('sendMessage', ['chat_id' => $chat_id, 'text'=>"@$user : Already Exists.",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"❲ Back ❳",'callback_data'=>"#Back"]],]])]);}
unlink('mode');
}elseif($mode == 'Unpin7'){
echo 'Unpin7';
$user = explode("@", $text) [1];
$data = str_replace("\n" . $user, "", file_get_contents("u7"));
file_put_contents("u7", $data);
file_put_contents("u7",preg_replace('~[\r\n]+~',"\n",trim(file_get_contents("u7"))));
bot('sendMessage', ['chat_id' => $chat_id,  'text' => "-> Done Delet User List 7 : @$user",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"❲ Back ❳",'callback_data'=>"#Back"]],]])]);
unlink('mode');
}elseif($mode == 'ad7'){
echo $mode;
$ex = explode("\n", $text);
$userT = "";
$userN = "";
foreach ($ex as $u) {
$addL = explode("\n", file_get_contents("u7"));
$user = explode("@", $u) [1];
if (!in_array($user, $users)) {
$userT = $userT . "\n" . $user;
}
else {
$userN = $userN . "\n" . $user;
}
}
file_put_contents("u7", $userT, FILE_APPEND);
bot('sendMessage', ['chat_id' => $chat_id,  'text' => "-> Done Added Users To List 7 :\n" . countUsers($userT, "1") ,'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"❲ Back ❳",'callback_data'=>"#Back"]],]])]);
unlink('mode');
}
}}
if(file_exists('mode')){
$mode = file_get_contents('mode');
$users = explode("\n", file_get_contents('u8'));
if(preg_match("/@+/", $text)){
if($mode == 'P0in'){
$user = explode("@", $text) [1];
if (!in_array($user, $users)) {
file_put_contents("u8", "\n" . $user, FILE_APPEND);
$EzTG->sendMessage(['chat_id'=>$cha,'text'=>"@$user :→Done Pin.",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"❲ Back ❳",'callback_data'=>"#Back"]],]])]);
} else {
bot('sendMessage', ['chat_id' => $chat_id, 'text'=>"@$user : Already Exists.",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"❲ Back ❳",'callback_data'=>"#Back"]],]])]);}
unlink('mode');
}elseif($mode == 'Unpin8'){
echo 'Unpin8';
$user = explode("@", $text) [1];
$data = str_replace("\n" . $user, "", file_get_contents("u8"));
file_put_contents("u8", $data);
file_put_contents("u8",preg_replace('~[\r\n]+~',"\n",trim(file_get_contents("u8"))));
bot('sendMessage', ['chat_id' => $chat_id,  'text' => "-> Done Delet User List 8 : @$user",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"❲ Back ❳",'callback_data'=>"#Back"]],]])]);
unlink('mode');
}elseif($mode == 'ad8'){
echo $mode;
$ex = explode("\n", $text);
$userT = "";
$userN = "";
foreach ($ex as $u) {
$addL = explode("\n", file_get_contents("u8"));
$user = explode("@", $u) [1];
if (!in_array($user, $users)) {
$userT = $userT . "\n" . $user;
}
else {
$userN = $userN . "\n" . $user;
}
}
file_put_contents("u8", $userT, FILE_APPEND);
bot('sendMessage', ['chat_id' => $chat_id,  'text' => "-> Done Added Users To List 8 :\n" . countUsers($userT, "1") ,'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"❲ Back ❳",'callback_data'=>"#Back"]],]])]);
unlink('mode');
}
}}
if(file_exists('mode')){
$mode = file_get_contents('mode');
$users = explode("\n", file_get_contents('u4'));
if(preg_match("/@+/", $text)){
if($mode == 'P0in'){
$user = explode("@", $text) [1];
if (!in_array($user, $users)) {
file_put_contents("u4", "\n" . $user, FILE_APPEND);
$EzTG->sendMessage(['chat_id'=>$cha,'text'=>"@$user :→Done Pin.",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"❲ Back ❳",'callback_data'=>"#Back"]],]])]);
} else {
bot('sendMessage', ['chat_id' => $chat_id, 'text'=>"@$user : Already Exists.",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"❲ Back ❳",'callback_data'=>"#Back"]],]])]);
}
unlink('mode');
} elseif($mode == 'Unpin4'){
echo 'Unpin4';
$user = explode("@", $text) [1];
$data = str_replace("\n" . $user, "", file_get_contents("u4"));
file_put_contents("u4", $data);
file_put_contents("u4",preg_replace('~[\r\n]+~',"\n",trim(file_get_contents("u4"))));
bot('sendMessage', ['chat_id' => $chat_id,  'text' => "-> Done Delet User List 4 : @$user",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"❲ Back ❳",'callback_data'=>"#Back"]],]])]);
unlink('mode');
}elseif($mode == 'ad4'){
echo $mode;
$ex = explode("\n", $text);
$userT = "";
$userN = "";
foreach ($ex as $u) {
$addL = explode("\n", file_get_contents("u4"));
$user = explode("@", $u) [1];
if (!in_array($user, $users)) {
$userT = $userT . "\n" . $user;
}
else {
$userN = $userN . "\n" . $user;
}
}
file_put_contents("u4", $userT, FILE_APPEND);
bot('sendMessage', ['chat_id' => $chat_id,  'text' => "-> Done Added Users To List 4 :\n" . countUsers($userT, "1") ,'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"❲ Back ❳",'callback_data'=>"#Back"]],]])]);
unlink('mode');
}
}}
if(file_exists('mode')){
$mode = file_get_contents('mode');
$users = explode("\n", file_get_contents('u5'));
if(preg_match("/@+/", $text)){
if($mode == 'P0in'){
$user = explode("@", $text) [1];
if (!in_array($user, $users)) {
file_put_contents("u5", "\n" . $user, FILE_APPEND);
$EzTG->sendMessage(['chat_id'=>$cha,'text'=>"@$user :→Done Pin ",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"❲ Back ❳",'callback_data'=>"#Back"]],]])]);
} else {
bot('sendMessage', ['chat_id' => $chat_id, 'text'=>"@$user : Already Exists.",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"❲ Back ❳",'callback_data'=>"#Back"]],]])]);
}
unlink('mode');
} elseif($mode == 'Unpin5'){
echo 'Unpin5';
$user = explode("@", $text) [1];
$data = str_replace("\n" . $user, "", file_get_contents("u5"));
file_put_contents("u5", $data);
file_put_contents("u5",preg_replace('~[\r\n]+~',"\n",trim(file_get_contents("u5"))));
bot('sendMessage', ['chat_id' => $chat_id,  'text' => "-> Done Delet User List 5 : @$user",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"❲ Back ❳",'callback_data'=>"#Back"]],]])]);
unlink('mode');
}elseif($mode == 'ad5'){
echo $mode;
$ex = explode("\n", $text);
$userT = "";
$userN = "";
foreach ($ex as $u) {
$addL = explode("\n", file_get_contents("u5"));
$user = explode("@", $u) [1];
if (!in_array($user, $users)) {
$userT = $userT . "\n" . $user;
}
else {
$userN = $userN . "\n" . $user;
}
}
file_put_contents("u5", $userT, FILE_APPEND);
bot('sendMessage', ['chat_id' => $chat_id,  'text' => "-> Done Added Users To List 5 :\n" . countUsers($userT, "1") ,'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"❲ Back ❳",'callback_data'=>"#Back"]],]])]);
unlink('mode');
}
}}
}
if(file_exists('mode')){
$mode = file_get_contents('mode');
$users = explode("\n", file_get_contents('Band'));
if(preg_match("/@+/", $text)){
if($mode == 'p'){
$user = explode("@", $text) [1];
if (!in_array($user, $users)) {
file_put_contents("Band", "\n" . $user, FILE_APPEND);
bot('sendMessage', ['chat_id' => $chat_id, 'text'=>"@$user :→Done Pin All.",]);
} else {
bot('sendMessage', ['chat_id' => $chat_id, 'text'=>"@$user : Already Exists.",]);
}
unlink('mode');
} elseif($mode == 'Unband'){
echo 'unpin';
$user = explode("@", $text) [1];
$data = str_replace("\n" . $user, "", file_get_contents("Band"));
file_put_contents("Band", $data);
file_put_contents("Band",preg_replace('~[\r\n]+~',"\n",trim(file_get_contents("Band"))));
bot('sendMessage',['chat_id'=>$chat_id,'message_id'=>$message_id,  'text' => "-> Done deleted user from List Band : @$user",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"❲ Back ❳",'callback_data'=>"#Bc"]],]]) ]);
unlink('mode');
} elseif($mode == 'adband'){
echo $mode;
$ex = explode("\n", $text);
$userT = "";
$userN = "";
foreach ($ex as $u) {
$users = explode("\n", file_get_contents("Band"));
 $user = explode("@", $u) [1];
if (!in_array($user, $users)) {
$userT = $userT . "\n" . $user;
}
else {
$userN = $userN . "\n" . $user;
}
}
file_put_contents("Band", $userT, FILE_APPEND);
bot('sendMessage',['chat_id'=>$chat_id,'message_id'=>$message_id, 'text' => "-> Done added users to List band \n" . countUsers($userT, "1") ,'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"❲ Back ❳",'callback_data'=>"#Bc"]],]]) ]);
unlink('mode');
}
}}
////
if(file_exists('mode')){
$mode = file_get_contents('mode');
$users = explode("\n", file_get_contents('bot'));
if(preg_match("/@+/", $text)){
if($mode == 'p'){
$user = explode("@", $text) [1];
if (!in_array($user, $users)) {
file_put_contents("bot", "\n" . $user, FILE_APPEND);
bot('sendMessage', ['chat_id' => $chat_id, 'text'=>"@$user :→Done Pin All.",]);
} else {
bot('sendMessage', ['chat_id' => $chat_id, 'text'=>"@$user : Already Exists.",]);
}
unlink('mode');
} elseif($mode == 'Unbot'){
echo 'unpin';
$user = explode("@", $text) [1];
$data = str_replace("\n" . $user, "", file_get_contents("bot"));
file_put_contents("bot", $data);
file_put_contents("bot",preg_replace('~[\r\n]+~',"\n",trim(file_get_contents("bot"))));
bot('sendMessage',['chat_id'=>$chat_id,'message_id'=>$message_id,  'text' => "-> Done deleted user List bot : @$user",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"❲ Back ❳",'callback_data'=>"#Bc"]],]]) ]);
unlink('mode');
} elseif($mode == 'adbot'){
echo $mode;
$ex = explode("\n", $text);
$userT = "";
$userN = "";
foreach ($ex as $u) {
$users = explode("\n", file_get_contents("bot"));
 $user = explode("@", $u) [1];
if (!in_array($user, $users)) {
$userT = $userT . "\n" . $user;
}
else {
$userN = $userN . "\n" . $user;
}
}
file_put_contents("bot", $userT, FILE_APPEND);
bot('sendMessage',['chat_id'=>$chat_id,'message_id'=>$message_id, 'text' => "-> Done added users to List bot \n" . countUsers($userT, "1") ,'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"❲ Back ❳",'callback_data'=>"#Bc"]],]]) ]);
unlink('mode');
}
}}}
if ($chat_id == $group) {
if($text == "‌の Clear list"){
bot('sendMessage', ['chat_id' => $chat_id,
'text'=>"-> Choose button ",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text' => "-> List 📋 1",'callback_data' => "1|CLEAR"]],
[['text' => "-> List 📋 2",'callback_data' => "2|CLEAR"]],
[['text' => "-> List 📋 3",'callback_data' => "3|CLEAR"]],
[['text' => "-> List 📋 4",'callback_data' => "4|CLEAR"]],
[['text' => "-> List 📋 5",'callback_data' => "5|CLEAR"]],
[['text' => "-> List 📋 6",'callback_data' => "6|CLEAR"]],
[['text' => "-> List 📋 7",'callback_data' => "7|CLEAR"]],
[['text' => "-> List 📋 8",'callback_data' => "8|CLEAR"]],
[['text'=>"❲ Back ❳",'callback_data'=>"#Back"]],
]])]);
}}
$info = json_decode(file_get_contents('info.json'),true);
$number1 = file_get_contents('phone1');
$number2 = file_get_contents('phone2');
$number3 = file_get_contents('phone3');
$number4 = file_get_contents('phone4');
$number5 = file_get_contents('phone5');
$number6 = file_get_contents('phone6');
$number7 = file_get_contents('phone7');
$number8 = file_get_contents('phone8');
$number9 = file_get_contents('phoneb');
$number10 = file_get_contents('phonen');
$num1 = $info["num1"];
$num2 = $info["num2"];
$num3 = $info["num3"];
$num4 = $info["num4"];
$num5 = $info["num5"];
$num6 = $info["num6"];
$num7 = $info["num7"];
$num8 = $info["num8"];
$num9 = $info["bot1"];
$num10 = $info["band1"];
if ($chat_id == $group) {
if($text == "‌の Numbers"){
bot('sendMessage', ['chat_id' => $chat_id,
'text'=>"-> info Numbers ♦️",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text' => "$number1",'callback_data' => "#Back"]],
[['text' => "$number2",'callback_data' => "#Back"]],
[['text' => "$number3",'callback_data' => "#Back"]],
[['text' => "$number4",'callback_data' => "#Back"]],
[['text' => "$number5",'callback_data' => "#Back"]],
[['text' => "$number6",'callback_data' => "#Back"]],
[['text' => "$number7",'callback_data' => "#Back"]],
[['text' => "$number8",'callback_data' => "#Back"]],
[['text' => "‌のBot : $number9",'callback_data' => "#Back"]],
[['text' => "‌のBand : $number10",'callback_data' => "#Back"]],
[['text'=>"❲ Back ❳",'callback_data'=>"#Back"]],
]])]);
}}
if($data == "#Bc"){
bot('deleteMessage',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id
]);
bot('sendMessage',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text' => "❲ Hi To @B_r_0 CheckEr ❳",
'reply_markup' => json_encode(['inline_keyboard' => [
[['text'=>"❲ Developer ❳", 'url' => "https://t.me/PvPPPP"],['text'=>"❲ Channel ❳", 'url' => "https://t.me/B_r_0"]],
]]) 
]);
unlink('mode');
}

///////////////////////////////////////////



$fg=explode("|", $data) ;
if($fg[1]=="CLEAR") {
if($fg[0]=="1"){$ssb="users";}else{$ssb="u$fg[0]";}
 bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"- Done Delete all Usernames List $fg[1] ",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"❲ Back ❳",'callback_data'=>"#Back"]],]])]);
file_put_contents($ssb, null);
	}

if ($chat_id == $group) {
if($text == "‌の Show list"){
bot('sendMessage', ['chat_id' => $chat_id,
'text'=>"-> Select button ",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text' => " Show All→1",'callback_data' => "1#Show"]],
[['text' => " Show All→2",'callback_data' => "2#Show"]],
[['text' => " Show All→3",'callback_data' => "3#Show"]],
[['text' => " Show All→4",'callback_data' => "4#Show"]],
[['text' => " Show All→5",'callback_data' => "5#Show"]],
[['text' => " Show All→6",'callback_data' => "6#Show"]],
[['text' => " Show All→7",'callback_data' => "7#Show"]],
[['text' => " Show All→8",'callback_data' => "8#Show"]],
[['text'=>"❲ Back ❳",'callback_data'=>"#Back"]],
]])]);
 
}}

$fg=explode("#", $data) ;
if($fg[1] == "Show"){
	if($fg[0]=="1"){$ssb="users";}else{$ssb="u$fg[0]";}
	if(file_exists($ssb)){
$users = explode("\n", file_get_contents($ssb));
$list = "";
$i = 1;
foreach ($users as $user) {
if ($user != "") {
$list = $list . "\n$i  ➧ @$user";
$i++;}}
bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"→The All Users List $fg[0] !  \n".$list,'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"Back",'callback_data'=>"#Back"]],
]])]);
$list = "";
}else{
bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"→No users in list $fg[0]",'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"Back",'callback_data'=>"#Back"]],
]])]);
}}



if ($step == "ph") {
ph($text, $group);
$step = "";
system('screen -dmS MD php step.php');
}
if ($step == "p2") {
p2($text, $group);
$step = "";
system('screen -dmS MD php step.php');
}
if ($step == "DH") {
DH($text, $group);
$step = "";
system('screen -dmS MD php step.php');
}
if ($step == "p4") {
p4($text, $group);
$step = "";
system('screen -dmS MD php step.php');
}
if ($step == "p5") {
p5($text, $group);
$step = "";
system('screen -dmS MD php step.php');
}
if ($step == "p6") {
p6($text, $group);
$step = "";
system('screen -dmS MD php step.php');
}
if ($step == "p9") {
p9($text, $group);
$step = "";
system('screen -dmS MD php step.php');
}
if ($step == "p7") {
p7($text, $group);
$step = "";
system('screen -dmS MD php step.php');
}
if ($step == "p10") {
p10($text, $group);
$step = "";
system('screen -dmS MD php step.php');
}
if ($step == "p8") {
p8($text, $group);
$step = "";
system('screen -dmS MD php step.php');
}

if ($chat_id == $group) {
if($text == "‌の Delet Number"){
bot('sendMessage', ['chat_id' => $chat_id,
'text'=>"->Select button",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text' => "-> Delet Number 1",'callback_data' => "1|DL"]],
[['text' => "-> Delet Number 2",'callback_data' => "2|DL"]],
[['text' => "-> Delet Number 3",'callback_data' => "3|DL"]],
[['text' => "-> Delet Number 4",'callback_data' => "4|DL"]],
[['text' => "-> Delet Number 5",'callback_data' => "5|DL"]],
[['text' => "-> Delet Number 6",'callback_data' => "6|DL"]],
[['text' => "-> Delet Number 7",'callback_data' => "7|DL"]],
[['text' => "-> Delet Number 8",'callback_data' => "8|DL"]],
[['text'=>"❲ Back ❳",'callback_data'=>"#Back"]],
]])]);
 
}}

$fg=explode("|", $data) ;
if($fg[1]=="DL") {
	if($fg[0]=="1"){$ac="ac.php"; $aa="aa.php"; $al="al.php";}elseif($fg[0]=="3"){$ac="cc.php"; $aa="ca.php"; $al="cl.php";}elseif($fg[0]=="2"){$ac="bc.php"; $aa="bu.php"; $al="bl.php";}elseif($fg[0]=="4"){$ac="dc.php"; $aa="da.php"; $al="dl.php";}elseif($fg[0]=="5"){$ac="ec.php"; $aa=null; $al="el.php";}elseif($fg[0]=="6"){$ac="rc.php"; $aa="ra.php"; $al="rl.php";}elseif($fg[0]=="7"){$ac="7c.php"; $aa="7a.php"; $al="7l.php";}elseif($fg[0]=="8"){$ac="8c.php"; $aa="8a.php"; $al="8l.php";}
  bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"-> Done Delet Number  $fg[0]",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"❲ Back ❳",'callback_data'=>"#Back"]],]])]);

	$uu = explode("a.php", $aa)[0] ;
shell_exec("pm2 stop $aa");
shell_exec("pm2 stop $al");
shell_exec("pm2 stop $ac");
system('rm -rf $uu.madeline');
system('rm -rf $uu.madeline.lock');
system('rm -rf $uu.madeline.lightState.php');
system('rm -rf $uu.madeline.lightState.php.lock');
system('rm -rf $uu.madeline.safe.php');
system('rm -rf $uu.madeline.safe.php.lock');
unlink("$uu.madeline"); 
unlink("$uu.madeline.lock");
unlink("$uu.madeline.lightState.php");
unlink("$uu.madeline.lightState.php.lock");
unlink("$uu.madeline.safe.php");
unlink("$uu.madeline.safe.php.lock");
file_put_contents("x".explode("c.php", $ac)[0], "0");
	$info = json_decode(file_get_contents('info.json'),true);
$info["number".$fg[1]] = "No number";
file_put_contents('info.json', json_encode($info));
	}

if ($chat_id == $group) {
if($text == "‌の Stop"){
bot('sendMessage', ['chat_id' => $chat_id,
'text'=>"-> Select button",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text' => "-> Stop ❌ 1",'callback_data' => "1|STOP"]],
[['text' => "-> Stop ❌ 2",'callback_data' => "2|STOP"]],
[['text' => "-> Stop ❌ 3",'callback_data' => "3|STOP"]],
[['text' => "-> Stop ❌ 4",'callback_data' => "4|STOP"]],
[['text' => "-> Stop ❌ 5",'callback_data' => "5|STOP"]],
[['text' => "-> Stop ❌ 6",'callback_data' => "6|STOP"]],
[['text' => "-> Stop ❌ 7",'callback_data' => "7|STOP"]],
[['text' => "-> Stop ❌ 8",'callback_data' => "8|STOP"]],
[['text'=>"❲ Back ❳",'callback_data'=>"#Back"]],
]])]);
 
}}



$fg=explode("|", $data) ;
if($fg[1]=="STOP") {
if($fg[0]=="1"){$ssb="type";}else{$ssb="type$fg[0]";}
	if($fg[0]=="1"){$ac="ac.php"; $aa="aa.php"; $al="al.php";}elseif($fg[0]=="3"){$ac="cc.php"; $aa="ca.php"; $al="cl.php";}elseif($fg[0]=="2"){$ac="bc.php"; $aa="bu.php"; $al="bl.php";}elseif($fg[0]=="4"){$ac="dc.php"; $aa="da.php"; $al="dl.php";}elseif($fg[0]=="5"){$ac="ec.php"; $aa=null; $al="el.php";}elseif($fg[0]=="6"){$ac="rc.php"; $aa="ra.php"; $al="rl.php";}elseif($fg[0]=="7"){$ac="7c.php"; $aa="7a.php"; $al="7l.php";}elseif($fg[0]=="8"){$ac="8c.php"; $aa="8a.php"; $al="8l.php";}
 bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"-> Done Stoped Checker \n $fg[0] . ",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"❲ Back ❳",'callback_data'=>"#Back"]],]])]);
$type = file_get_contents($ssb);

	unlink("x".explode("c.php", $ac)[0]); 
shell_exec("pm2 stop $aa");
shell_exec("pm2 stop $ac");
shell_exec("pm2 stop $al");
shell_exec("pm2 stop $aa");
shell_exec("pm2 stop $ac");
shell_exec("pm2 stop $al");

file_put_contents("x".explode("a.php", $aa)[0], "0");

	$info = json_decode(file_get_contents('info.json'),true);
$info["num".$fg[1]] = "off";
file_put_contents('info.json', json_encode($info));
	}
	
	$fg=explode("|", $data) ;
if($fg[1]=="Run") {
if($fg[0]=="1"){$ssb="type";}else{$ssb="type$fg[0]";}
	if($fg[0]=="1"){$ac="ac.php"; $aa="aa.php"; $al="al.php";}elseif($fg[0]=="3"){$ac="cc.php"; $aa="ca.php"; $al="cl.php";}elseif($fg[0]=="2"){$ac="bc.php"; $aa="bu.php"; $al="bl.php";}elseif($fg[0]=="4"){$ac="dc.php"; $aa="da.php"; $al="dl.php";}elseif($fg[0]=="5"){$ac="ec.php"; $aa=null; $al="el.php";}elseif($fg[0]=="6"){$ac="rc.php"; $aa="ra.php"; $al="rl.php";}elseif($fg[0]=="7"){$ac="7c.php"; $aa="7a.php"; $al="7l.php";}elseif($fg[0]=="8"){$ac="8c.php"; $aa="8a.php"; $al="8l.php";}
 bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"-> Run Checker $fg[0] . ",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"❲ Back ❳",'callback_data'=>"#Back"]],]])]);
$type = file_get_contents($ssb);
if($type == "c"){
	unlink("x".explode("c.php", $ac)[0]); 
shell_exec("pm2 stop $ac");
shell_exec("pm2 start $ac");
shell_exec("pm2 stop $al");
shell_exec("pm2 start $al");

file_put_contents("x".explode("c.php", $ac)[0], "0");
	}elseif($type == "a"){
		unlink("x".explode("a.php", $ac)[0]);
shell_exec("pm2 stop $aa");
shell_exec("pm2 start $aa");
shell_exec("pm2 stop $al");
shell_exec("pm2 start $al");

file_put_contents("x".explode("a.php", $aa)[0], "0");
}
	$info = json_decode(file_get_contents('info.json'),true);
$info["num".$fg[1]] = "on";
file_put_contents('info.json', json_encode($info));
	}
if ($chat_id == $group) {
if($text == "‌の Run"){
bot('sendMessage', ['chat_id' => $chat_id,
'text'=>"-> Select button",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text' => "-> Run ✅ 1",'callback_data' => "1|Run"]],
[['text' => "-> Run ✅ 2",'callback_data' => "2|Run"]],
[['text' => "-> Run ✅ 3",'callback_data' => "3|Run"]],
[['text' => "-> Run ✅ 4",'callback_data' => "4|Run"]],
[['text' => "-> Run ✅ 5",'callback_data' => "5|Run"]],
[['text' => "-> Run ✅ 6",'callback_data' => "6|Run"]],
[['text' => "-> Run ✅ 7",'callback_data' => "7|Run"]],
[['text' => "-> Run ✅ 8",'callback_data' => "8|Run"]],
[['text'=>"❲ Back ❳",'callback_data'=>"#Back"]],

]])]);
}}

$fg=explode("|", $data) ;
if($fg[1]=="Run") {
if($fg[0]=="1"){$ssb="type";}else{$ssb="type$fg[0]";}
	if($fg[0]=="1"){$ac="ac.php"; $aa="aa.php"; $al="al.php";}elseif($fg[0]=="3"){$ac="cc.php"; $aa="ca.php"; $al="cl.php";}elseif($fg[0]=="2"){$ac="bc.php"; $aa="bu.php"; $al="bl.php";}elseif($fg[0]=="4"){$ac="dc.php"; $aa="da.php"; $al="dl.php";}elseif($fg[0]=="5"){$ac="ec.php"; $aa=null; $al="el.php";}elseif($fg[0]=="6"){$ac="rc.php"; $aa="ra.php"; $al="rl.php";}elseif($fg[0]=="7"){$ac="7c.php"; $aa="7a.php"; $al="7l.php";}elseif($fg[0]=="8"){$ac="8c.php"; $aa="8a.php"; $al="8l.php";}
 bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"-> Run Checker $fg[0] . ",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"❲ Back ❳",'callback_data'=>"#Back"]],]])]);
$type = file_get_contents($ssb);
if($type == "c"){
	unlink("x".explode("c.php", $ac)[0]); 
shell_exec("pm2 stop $ac");
shell_exec("pm2 start $ac");
shell_exec("pm2 stop $al");
shell_exec("pm2 start $al");

file_put_contents("x".explode("c.php", $ac)[0], "0");
	}elseif($type == "a"){
		unlink("x".explode("a.php", $ac)[0]);
shell_exec("pm2 stop $aa");
shell_exec("pm2 start $aa");
shell_exec("pm2 stop $al");
shell_exec("pm2 start $al");

file_put_contents("x".explode("a.php", $aa)[0], "0");
}
	$info = json_decode(file_get_contents('info.json'),true);
$info["num".$fg[1]] = "on";
file_put_contents('info.json', json_encode($info));
	}
	
if ($chat_id == $group) {
if($text == "‌の Add Users"){
bot('sendMessage', ['chat_id' => $chat_id,
'text'=>"‌の Select button",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text' => "-> List 📋 1",'callback_data' => "model#1"]],
[['text' => "-> List 📋 2",'callback_data' => "model#2"]],
[['text' => "-> List 📋 3",'callback_data' => "model#3"]],
[['text' => "-> List 📋 4",'callback_data' => "model#4"]],
[['text' => "-> List 📋 5",'callback_data' => "model#5"]],
[['text' => "-> List 📋 6",'callback_data' => "model#6"]],
[['text' => "-> List 📋 7",'callback_data' => "model#7"]],
[['text' => "-> List 📋 8",'callback_data' => "model#8"]],
[['text'=>"❲ Back ❳",'callback_data'=>"#Back"]],
]])]);
}}if ($chat_id == $group) {
if($text == "/Delet"){
bot('sendMessage', ['chat_id' => $chat_id,
'text'=>"-> Done Delet all Lists",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"❲ Back ❳",'callback_data'=>"#Back"]],
]])]);
unlink('type');
unlink('type2');
unlink('type3');
unlink('type4');
unlink('type5');
unlink('type6');
unlink('type7');
unlink('type8');
unlink('users');
unlink('u2');
unlink('u3');
unlink('u4');
unlink('u5');
unlink('u6');
unlink('u7');
unlink('u8');
}}
$fg=explode("#", $data) ;
if($fg[0] == "model"){
	if($fg[1]=="1"){$ssb="addL";}else{$ssb="ad$fg[1]";}
 bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"-> Send List $fg[1] ",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"❲ Back ❳",'callback_data'=>"#Back"]],]])]);
file_put_contents('mode', $ssb);
}
 
$info = json_decode(file_get_contents('info.json'),true);
$S1 = explode("\n",file_get_contents("users"));
$S2 = explode("\n",file_get_contents("u2"));
$S3 = explode("\n",file_get_contents("u3"));
$S4 = explode("\n",file_get_contents("u4"));
$S5 = explode("\n",file_get_contents("u5"));
$S6 = explode("\n",file_get_contents("u6"));
$S7 = explode("\n",file_get_contents("u7"));
$S8 = explode("\n",file_get_contents("u8"));
$Sum1 = count($S1)-1;
$Sum2 = count($S2)-1;
$Sum3 = count($S3)-1;
$Sum4 = count($S4)-1;
$Sum5 = count($S5)-1;
$Sum6 = count($S6)-1;
$Sum7 = count($S7)-1;
$Sum8 = count($S8)-1;
$F = $Sum1+$Sum2+$Sum3+$Sum4+$Sum5+$Sum6+$Sum7+$Sum8;
$info["USERS"] = "$F";
file_put_contents('info.json', json_encode($info));
$sum = $info["USERS"];
$num1 = $info["num1"];
$num2 = $info["num2"];
$num3 = $info["num3"];
$num4 = $info["num4"];
$num5 = $info["num5"];
$num6 = $info["num6"];
$num7 = $info["num7"];
$num8 = $info["num8"];
if ($data == "#Back") {
 bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text' => "❲ Hi To @B_r_0 CheckEr ❳",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"All UserName - $sum - ",'callback_data'=>"#sum"]],
]])]);
}


////////
if ($chat_id == $group) {
if($text == "‌の Delet User"){
bot('sendMessage', ['chat_id' => $chat_id,
'text'=>"->Select button",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text' => "-> List 📋 1",'callback_data' => "deele#1"]],
[['text' => "-> List 📋 2",'callback_data' => "deele#2"]],
[['text' => "-> List 📋 3",'callback_data' => "deele#3"]],
[['text' => "-> List 📋 4",'callback_data' => "deele#4"]],
[['text' => "-> List 📋 5",'callback_data' => "deele#5"]],
[['text' => "-> List 📋 6",'callback_data' => "deele#6"]],
[['text' => "-> List 📋 7",'callback_data' => "deele#7"]],
[['text' => "-> List 📋 8",'callback_data' => "deele#8"]],
[['text'=>"❲ Back ❳",'callback_data'=>"#Back"]],
]])]);
}}

$fg=explode("#", $data) ;
if($fg[0] == "deele"){
	if($fg[1]=="1"){$ssb="Unpin";}else{$ssb="Unpin$fg[1]";}
 bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"-> Send List $fg[1] ",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"❲ Back ❳",'callback_data'=>"#Back"]],]])]);
file_put_contents('mode', $ssb);
}

if ($chat_id == $group) {
if($text == "‌"){
bot('sendMessage', ['chat_id' => $chat_id,
'text'=>"-> Select button",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text' => "->info ❓ 1",'callback_data' => "info#1"]],
[['text' => "->info ❓ 2",'callback_data' => "info#2"]],
[['text' => "->info ❓ 3",'callback_data' => "info#3"]],
[['text' => "->info ❓ 4",'callback_data' => "info#4"]],
[['text' => "->info ❓ 5",'callback_data' => "info#5"]],
[['text' => "->info ❓ 6",'callback_data' => "info#6"]],
[['text' => "->info ❓ 7",'callback_data' => "info#7"]],
[['text' => "->info ❓ 8",'callback_data' => "info#8"]],
[['text'=>"❲ Back ❳",'callback_data'=>"#Back"]],
]])]);
 
}}
if($data == "#info"){
bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,
'text'=>"-> Select button",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text' => "->info ❓ 1",'callback_data' => "info#1"]],
[['text' => "->info ❓ 2",'callback_data' => "info#2"]],
[['text' => "->info ❓ 3",'callback_data' => "info#3"]],
[['text' => "->info ❓ 4",'callback_data' => "info#4"]],
[['text' => "->info ❓ 5",'callback_data' => "info#5"]],
[['text' => "->info ❓ 6",'callback_data' => "info#6"]],
[['text' => "->info ❓ 7",'callback_data' => "info#7"]],
[['text' => "->info ❓ 8",'callback_data' => "info#8"]],
[['text'=>"❲ Back ❳",'callback_data'=>"#Back"]],
]])]);
 
}
$fg=explode("#", $data) ;
if($fg[0] == "info"){
	if($fg[1]=="1"){$ssb="type";}else{$ssb="type$fg[1]";}
	$get = file_get_contents($ssb);
	if ($get == "c") {
$t = "Channel";
}
else {
$t = "Account";
}
$n = file_get_contents("name");
$a = file_get_contents("about");
$c = file_get_contents("o$fg[1]");
 
 bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"のChecker $fg[1] \n • type : $t\n• channel name : $n\n• channe about : $a\n• old user : $c",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"❲ Back ❳",'callback_data'=>"#info"]],]])]);

}


if($data == "#sum"){
bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"->Select button",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text' => "->1 Users - $Sum1 - ",'callback_data' => "1#Show"]],
[['text' => "->2 Users - $Sum2 - ",'callback_data' => "2#Show"]],
[['text' => "->3 Users - $Sum3 - ",'callback_data' => "3#Show"]],
[['text' => "->4 Users - $Sum4 - ",'callback_data' => "4#Show"]],
[['text' => "->5 Users - $Sum5 - ",'callback_data' => "5#Show"]],
[['text' => "->6 Users - $Sum6 - ",'callback_data' => "6#Show"]],
[['text' => "->7 Users - $Sum7 - ",'callback_data' => "7#Show"]],
[['text' => "->8 Users - $Sum8 - ",'callback_data' => "8#Show"]],
[['text'=>"❲ Back ❳",'callback_data'=>"#Back"]],
]])]);
 
file_put_contents("z", $F);
}if ($chat_id == $group) {

if($text == "‌の To Account"){
bot('sendMessage', ['chat_id' => $chat_id,
'text'=>"-> Select button",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text' => "╭ Change To Account 1",'callback_data' => "UA#1"]],
[['text' => "╭ Change To Account 2",'callback_data' => "UA#2"]],
[['text' => "╭ Change To Account 3",'callback_data' => "UA#3"]],
[['text' => "╭ Change To Account 4",'callback_data' => "UA#4"]],
[['text' => "╭ Change To Account 5",'callback_data' => "UA#5"]],
[['text' => "╭ Change To Account 6",'callback_data' => "UA#6"]],
[['text' => "╭ Change To Account 7",'callback_data' => "UA#7"]],
[['text' => "╭ Change To Account 8",'callback_data' => "UA#8"]],
[['text'=>"❲ Back ❳",'callback_data'=>"#Back"]],
]])]);
 
}}

$fg=explode("#", $data) ;
if($fg[0] == "UA"){
	if($fg[1]=="1"){$ssb="type";}else{$ssb="type$fg[1]";}
	if($fg[1]=="1"){$ac="ac.php"; $aa="aa.php"; $al="al.php";}elseif($fg[1]=="3"){$ac="cc.php"; $aa="ca.php"; $al="cl.php";}elseif($fg[1]=="2"){$ac="bc.php"; $aa="bu.php"; $al="bl.php";}elseif($fg[1]=="4"){$ac="dc.php"; $aa="da.php"; $al="dl.php";}elseif($fg[1]=="5"){$ac="ec.php"; $aa=null; $al="el.php";}elseif($fg[1]=="6"){$ac="rc.php"; $aa="ra.php"; $al="rl.php";}elseif($fg[1]=="7"){$ac="7c.php"; $aa="7a.php"; $al="7l.php";}elseif($fg[1]=="8"){$ac="8c.php"; $aa="8a.php"; $al="8l.php";}
	shell_exec("pm2 stop $ac");
$num1 = $info["num$fg[1]"];
$type = file_get_contents($ssb);
if ($type == "a") {
bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"のChecker $fg[1] \n-> Done type to Account ✅",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text' => "$fg[1] type→acc",'callback_data' => "#"]],
[['text'=>"❲ Back ❳",'callback_data'=>"#Back"]],
]])]);
}else{
	if($fg[1]=="1"){$ssb="type";}else{$ssb="type$fg[1]";}
	if($fg[1]=="1"){$ac="ac.php"; $aa="aa.php"; $al="al.php";}elseif($fg[1]=="3"){$ac="cc.php"; $aa="ca.php"; $al="cl.php";}elseif($fg[1]=="3"){$ac="bc.php"; $aa="bu.php"; $al="bl.php";}elseif($fg[1]=="4"){$ac="dc.php"; $aa="da.php"; $al="dl.php";}elseif($fg[1]=="5"){$ac="ec.php"; $aa=null; $al="el.php";}elseif($fg[1]=="6"){$ac="rc.php"; $aa="ra.php"; $al="rl.php";}elseif($fg[1]=="7"){$ac="7c.php"; $aa="7a.php"; $al="7l.php";}elseif($fg[1]=="8"){$ac="8c.php"; $aa="8a.php"; $al="8l.php";}
file_put_contents($ssb, "a");
bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id, 'text' => "のChecker $fg[1] \n-> Done type to Account ✅",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text' => "$fg[1] type→acc",'callback_data' => "#"]],
[['text'=>"❲ Back ❳",'callback_data'=>"#Back"]],
]])]);
shell_exec("pm2 stop $aa");
shell_exec("pm2 start $aa");
shell_exec("pm2 stop $al");
shell_exec("pm2 start $al");
}
}


if ($chat_id == $group) {

if($text == "‌の To Channel"){
bot('sendMessage', ['chat_id' => $chat_id,
'text'=>"->Select button",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text' => "╭ Change To Channel 1",'callback_data' => "1#CN"]],
[['text' => "╭ Change To Channel 2",'callback_data' => "2#CN"]],
[['text' => "╭ Change To Channel 3",'callback_data' => "3#CN"]],
[['text' => "╭ Change To Channel 4",'callback_data' => "4#CN"]],
[['text' => "╭ Change To Channel 5",'callback_data' => "5#CN"]],
[['text' => "╭ Change To Channel 6",'callback_data' => "6#CN"]],
[['text' => "╭ Change To Channel 7",'callback_data' => "7#CN"]],
[['text' => "╭ Change To Channel 8",'callback_data' => "8#CN"]],
[['text'=>"❲ Back ❳",'callback_data'=>"#Back"]],
]])]);
}}

$info = json_decode(file_get_contents('info.json'),true);
$fg=explode("#", $data) ;

if($fg[1] == "CN"){
	if($fg[0]=="1"){$ssb="type";}else{$ssb="type$fg[1]";}
	if($fg[0]=="1"){$ac="aa.php"; $al="al.php";}elseif($fg[0]=="3"){$ac="ca.php";  $al="cl.php";}elseif($fg[0]=="2"){$ac="bu.php"; $al="bl.php"; }elseif($fg[0]=="4"){$ac="da.php";  $al="dl.php";}elseif($fg[0]=="5"){$ac="ea.php";  $al="el.php";}elseif($fg[0]=="6"){$ac="ra.php"; $al="rl.php";}elseif($fg[0]=="7"){$ac="7a.php"; $al="7l.php";}elseif($fg[0]=="8"){$ac="8a. php"; $al="8l.php";}
	shell_exec("pm2 stop $ac");
$num1 = $info["num$fg[0]"];
$type = file_get_contents($ssb);
if ($type == "c") {
bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,'text'=>"のChecker $fg[1] \n-> Done type to Channel ✅",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text' => "$fg[0] type→ch",'callback_data' => "#"]],
[['text'=>"❲ Back ❳",'callback_data'=>"#Back"]],
]])]);
}else{
	if($fg[0]=="1"){$ssb="type";}else{$ssb="type$fg[0]";}
	if($fg[0]=="1"){$ac="aa.php"; $al="al.php";}elseif($fg[0]=="3"){$ac="ca.php";  $al="cl.php";}elseif($fg[0]=="2"){$ac="bu.php"; $al="bl.php"; }elseif($fg[0]=="4"){$ac="da.php";  $al="dl.php";}elseif($fg[0]=="5"){$ac="ea.php";  $al="el.php";}elseif($fg[0]=="6"){$ac="ra.php"; $al="rl.php";}elseif($fg[0]=="7"){$ac="7a.php"; $al="7l.php";}elseif($fg[0]=="8"){$ac="8a. php"; $al="8l.php";}
file_put_contents($ssb, "c");
bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id, 'text' => "のChecker $fg[0] \n-> Done type to Channel ✅",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text' => "$fg[0] type→ch",'callback_data' => "#"]],
[['text'=>"❲ Back ❳",'callback_data'=>"#Back"]],
]])]);
shell_exec("pm2 stop $al");
shell_exec("pm2 start $al");

}
}

$info = json_decode(file_get_contents('info.json'),true);

$in = json_decode(file_get_contents('in.json'),true);
$loop1 = $in["loop1"]; if($loop1 == null) {$loop1 = "0";}
$loop2 = $in["loop2"];if($loop2 == null) {$loop2 = "0";}
$loop3 = $in["loop3"];if($loop3 == null) {$loop3 = "0";}
$loop4 = $in["loop4"];if($loop4 == null) {$loop4 = "0";}
$loop5 = $in["loop5"];if($loop5 == null) {$loop5 = "0";}
$loop6 = $in["loop6"];if($loop6 == null) {$loop6 = "0";}
$loop7 = $in["loop7"];if($loop7 == null) {$loop7 = "0";}
$loop8 = $in["loop8"];if($loop8 == null) {$loop8 = "0";}

if ($chat_id == $group) {
if($text == '‌の Requests'){
bot('sendMessage', ['chat_id' => $chat_id,
'text'=>"‌の Clicks Requests Of Numbers ‌の •",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"1→ ❲ $loop1 ❳",'callback_data'=>"U"],['text'=>"2→ ❲ $loop2 ❳",'callback_data'=>"U"]],
[['text'=>"3→ ❲ $loop3 ❳",'callback_data'=>"U"],['text'=>"4→ ❲ $loop4 ❳",'callback_data'=>"U"]],
[['text'=>"5→ ❲ $loop5 ❳",'callback_data'=>"U"],['text'=>"6→ ❲ $loop7 ❳",'callback_data'=>"U"]],
[['text'=>"7→ ❲ $loop8 ❳ ",'callback_data'=>"U"],['text'=>"8→❲ $loop9 ❳",'callback_data'=>"U"]],
[['text'=>"↺",'callback_data'=>"U"]],
]])]);
}}
if($data == "U"){
bot('editMessagetext',['chat_id'=>$chat_id2,'message_id'=>$message_id,
'text'=>"の Clicks Requests Of Numbers ‌の •",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"1→ ❲ $loop1 ❳",'callback_data'=>"U"],['text'=>"2→ ❲ $loop2 ❳",'callback_data'=>"U"]],
[['text'=>"3→ ❲ $loop3 ❳",'callback_data'=>"U"],['text'=>"4→ ❲ $loop4 ❳",'callback_data'=>"U"]],
[['text'=>"5→ ❲ $loop5 ❳",'callback_data'=>"U"],['text'=>"6→ ❲ $loop7 ❳",'callback_data'=>"U"]],
[['text'=>"7→ ❲ $loop8 ❳ ",'callback_data'=>"U"],['text'=>"8→❲ $loop9 ❳",'callback_data'=>"U"]],
[['text'=>"↺",'callback_data'=>"U"]],
]])]);
}





$lastupdid = $update['result'][0]['update_id'] + 1; 
}
while (true) {
global $last_up;
$get_up = getupdates($last_up + 1);
$last_up = $get_up['update_id'];
if ($get_up) {
run($get_up);
sleep(0.001);
}
}
?>