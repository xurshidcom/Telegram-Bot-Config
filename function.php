<?php

include_once("config.php");

function bot($method, $datas = []) {
    global $config;
    $url = "https://api.Telegram.org/bot".$config['botToken'].
    "/".$method;
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $datas);
    $res = curl_exec($ch);
    if (curl_error($ch)) {
        var_dump(curl_error($ch));
    } else {
        return json_decode($res);
    }
}


function typing($ch){
	return bot('sendChatAction', [
		'chat_id' => $ch,
		'action' => 'typing',
	]);
}


?>