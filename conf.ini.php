<?php



// ---------------- AKI VA EL TOKEN DE TU BOT --------------------//
$bottoken = '6151300355:AAE4Bkl2JkIycWIfxCBAm5SH8TESdzaehY8';

// ---------------- AKI VA EL ID DE TU CHAT --------------------//
$chatid = '1739203762';



define('BOT_TOKEN', $bottoken);
define('CHAT_ID', $chatid);
define('API_URL', 'https://api.telegram.org/bot' . BOT_TOKEN . '/');
function enviar_telegram($mss)
{
  $queryArray = [
    'chat_id' => CHAT_ID,
    'text' => $mss,
    'parse_mode' => 'html'
  ];
  $url = 'https://api.telegram.org/bot' . BOT_TOKEN . '/sendMessage?' . http_build_query($queryArray);
  $result = file_get_contents($url);
}

?>
