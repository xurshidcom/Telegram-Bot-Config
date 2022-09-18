<?php 

include_once("config.php");
include_once("function.php");


$update = json_decode(file_get_contents('php://input'));

$message     = $update->message;     //Telegram serveridan kelgan xabardam message'ni ajratib olish
$text        = $message->text;       //Kelgan message ichidan text'ni ajratib olish
$chat_id     = $message->chat->id;   //Xabar yuboruvchisining telegram id'sini ajratib olish
$message_id  = $message->message_id; //Xabar yuboruvchi xabarining message id'sini ajratib olish
$name = $message->chat->first_name;
$last = $message->chat->last_name;
$full_name = $name." ".$last;


$callback = $update->callback_query; //Shaffof tugma bosilgandagi xabarni ajratib olish
$chat_id2 = $callback->message->chat->id; //Shaffof tugma bosgan kishi telegram id'sini ajratib olish
$message_id2 = $callback->message->message_id; //Shaffof tugma message id'sini ajratib olish
$data = $update->callback_query->data; //Shaffof tugma ostidagi ma'lumotni ajratib olish
$cq_id = $update->callback_query->id;  //Shaffof tugma id'sini ajratib olish
$mmid = $callback->inline_message_id;
$mes = $callback->message;
$idd = $callback->message->chat->id;
$cbid = $callback->from->id;
$cbuser = $callback->from->username;
$data = $callback->data;
$ida = $callback->id;
$cbins = $callback->chat_instance;
$cbchtyp = $callback->message->chat->type;


if(isset($text)){
	typing($chat_id);
}


if($text == "/dev"){
    bot("sendMessage", [
        'chat_id' => $chat_id,
        'text' => "<b>🧑‍💻 Dasturchi:</b> @xurshid_com",
        'parse_mode'=>"html",
    ]);
}


if($text == "/start"){
    bot("sendMessage", [
        'chat_id' => $chat_id,
        'text' => "Assalomu Alaykum <b>$full_name</b>",
        'parse_mode'=>"html",
    ]);
}




?>