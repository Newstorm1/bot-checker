<?php

date_default_timezone_set('Asia/Baghdad');

if (!file_exists('madeline.php')) {
    copy('https://phar.madelineproto.xyz/madeline.php', 'madeline.php');
}

define('MADELINE_BRANCH', 'deprecated');
include 'madeline.php';

echo "Welcome To The Tool { Made By -> @isiraqi }" . PHP_EOL;
echo "Select What Do You Want Here" . PHP_EOL;
echo "[ '1' -> Check A List ] , [ '2' Check UserType ] [ '3' -> Check Last Seen ] , [ '4' Add A Number ]" . PHP_EOL;
$Input = readline("Select What You Want -> ");

if($Input == '1') {
    system("clear");
    if(is_dir('sessions')) {
        do {
            $filename = readline("File Name -> ");
        } while(!file_exists($filename));
        $checked = 0;
        $glob = glob('sessions/*.madeline');
        $explode = array_filter(explode("\n",file_get_contents($filename)));
        file_put_contents($filename,preg_replace('~[\r\n]+~',"\n",trim(file_get_contents($filename))));
        do {
            foreach($glob as $sessions) {
                $session = explode("sessions/", explode(".", $sessions)[0])[1];
                $MadelineProto = new \danog\MadelineProto\API("sessions/$session.madeline");
                $ex = array_filter(explode("\n",file_get_contents($filename)));
                for($i = 0; $i <= 10; $i++) {
                    $user = $ex[$i];
                    if($user != null) {
                        try {
                            $MadelineProto->messages->getPeerDialogs(['peers' => [$user] ]);
                            echo "Valid Username -> $user, Checked -> $checked" . PHP_EOL;
                            file_put_contents("$filename#Valid.txt","$user\n", FILE_APPEND);
                        } catch(Exception $e) {
                            echo "Unvalid Username -> $user, Checked -> $checked" . PHP_EOL;
                        }
                        file_put_contents($filename,str_replace($user,"",file_get_contents($filename)));
                        $checked++;
                    }
                }
                file_put_contents($filename,preg_replace('~[\r\n]+~',"\n",trim(file_get_contents($filename))));
            }
        } while(count($explode) != $checked);
        echo "Done Checking $filename" . PHP_EOL;
    } else {
        echo "Please Add Numbers First" . PHP_EOL;
        exit;
    }
} elseif($Input == '2') {
    system("clear");
    if(is_dir('sessions')) {
        do {
            $filename = readline("File Name -> ");
        } while(!file_exists($filename));
        $checked = 0;
        $glob = glob('sessions/*.madeline');
        $explode = array_filter(explode("\n",file_get_contents($filename)));
        file_put_contents($filename,preg_replace('~[\r\n]+~',"\n",trim(file_get_contents($filename))));
        do {
            foreach($glob as $sessions) {
                $session = explode("sessions/", explode(".", $sessions)[0])[1];
                $MadelineProto = new \danog\MadelineProto\API("sessions/$session.madeline");
                $ex = array_filter(explode("\n",file_get_contents($filename)));
                for($i = 0; $i <= 10; $i++) {
                    $user = $ex[$i];
                    if($user != null) {
                        try {
                            $type = $MadelineProto->getInfo($user)['type'];
                            echo "Valid Username -> $user, Checked -> $checked, Type -> $type" . PHP_EOL;
                            file_put_contents("$filename#$type.txt","$user\n", FILE_APPEND);
                        } catch(Exception $e) {
                            echo "Unvalid Username -> $user, Checked -> $checked" . PHP_EOL;
                        }
                        file_put_contents($filename,str_replace($user,"",file_get_contents($filename)));
                        $checked++;
                    }
                }
                file_put_contents($filename,preg_replace('~[\r\n]+~',"\n",trim(file_get_contents($filename))));
            }
        } while(count($explode) != $checked);
        echo "Done Checking $filename" . PHP_EOL;
    } else {
        echo "Please Add Numbers First" . PHP_EOL;
        exit;
    }
}elseif($Input == '3') {
    system("clear");
    if(is_dir('sessions')) {
        do {
            $filename = readline("File Name -> ");
        } while(!file_exists($filename));
        $checked = 0;
        $glob = glob('sessions/*.madeline');
        $explode = array_filter(explode("\n",file_get_contents($filename)));
        file_put_contents($filename,preg_replace('~[\r\n]+~',"\n",trim(file_get_contents($filename))));
        do {
            foreach($glob as $sessions) {
                $session = explode("sessions/", explode(".", $sessions)[0])[1];
                $MadelineProto = new \danog\MadelineProto\API("sessions/$session.madeline");
                $ex = array_filter(explode("\n",file_get_contents($filename)));
                for($i = 0; $i <= 10; $i++) {
                    $user = $ex[$i];
                    if($user != null) {
                        try {
                            $date = $MadelineProto->getPwrChat($user);
                            if($date['type'] == 'user' && isset($date['status']['was_online'])) {
                                echo "Valid Username -> $user, Date -> ". date('Y-m-d H:i:s', $date['status']['was_online']) . PHP_EOL;
                                file_put_contents("$filename#date.txt","$user|".date('Y-m-d H:i:s', $date['status']['was_online'])."\n", FILE_APPEND);
                            } else {
                                echo "Valid Username -> $user, Date -> Unknown" . PHP_EOL;
                            }
                        } catch(Exception $e) {
                            echo "Unvalid Username -> $user, Checked -> $checked" . PHP_EOL;
                        }
                        file_put_contents($filename,str_replace($user,"",file_get_contents($filename)));
                        $checked++;
                    }
                }
                file_put_contents($filename,preg_replace('~[\r\n]+~',"\n",trim(file_get_contents($filename))));
            }
        } while(count($explode) != $checked);
        echo "Done Checking $filename" . PHP_EOL;
    } else {
        echo "Please Add Numbers First" . PHP_EOL;
        exit;
    }
}elseif($Input == '4'){
    system("clear");
    
    $phone_number = readline("Enter The Phone Number -> ");
    
    $settings['app_info']['api_id'] = 210897;
    $settings['app_info']['api_hash'] = 'c7d2d161d83ce18d56c1a8a54437f5ff'; 
    
    @mkdir('sessions');
    
    $MadelineProto = new \danog\MadelineProto\API("sessions/$phone_number.madeline", $settings);  
    $MadelineProto->start();
    
} else {
    echo "Please Select A Valid Option";
}