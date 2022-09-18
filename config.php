<?php 

$config = [

'dbServername' => "localhost",
'dbUsername' => "root",
'dbPassword' => "",
'dbName' => "db_bot",
'dbbot' => "table_bot",
    
'botToken' => "1430775065:AAEYm4igOi-04BcZsIxlI3xL9iL4LbJxYLw",
'adminId' => "25091996",
'adminUserName' => "xurshidjon_yunusov",
'group' => '-709251996',

];

echo "https://api.telegram.org/bot" . $config['botToken'] . "/setwebhook?url=" . $_SERVER['SERVER_NAME'] . "" . $_SERVER['SCRIPT_NAME'];


?>