<?php
session_start();
require('/home/webserver/vendor/autoload.php');

use \PhpMqtt\Client\MqttClient;
use \PhpMqtt\Client\ConnectionSettings;

$server   = 'broker.emqx.io';
$port     = 1883;
$clientId = 'Ante';
$username = null;
$password = null;
$clean_session = false;

$connectionSettings  = new ConnectionSettings();
$connectionSettings
    ->setUsername($username)
    ->setPassword(null)
    ->setKeepAliveInterval(60)
    ->setLastWillTopic('emqx/test/last-will')
    ->setLastWillMessage('client disconnect')
    ->setLastWillQualityOfService(1);

$mqtt = new MqttClient($server, $port, $clientId);

$mqtt->connect($connectionSettings, $clean_session);


if($_SESSION["brSobe"] == "101"){
    $brojSobeTopic = 'hotelpurs/soba101';
}elseif($_SESSION["brSobe"] == "201"){
    $brojSobeTopic = 'hotelpurs/soba201';
}

if (array_key_exists('wcON', $_POST)) {

    $mqtt->publish($brojSobeTopic, 'wcon', 2, true);
}
else if (array_key_exists('wcOFF', $_POST)) {

    $mqtt->publish($brojSobeTopic, 'wcoff', 2, true);
}
if (array_key_exists('sobaON', $_POST)) {

    $mqtt->publish($brojSobeTopic, 'sobaon', 2, true);
}

else if (array_key_exists('sobaOFF', $_POST)) {

    $mqtt->publish($brojSobeTopic, 'sobaoff', 2, true);
}

if (array_key_exists('vrata', $_POST)) {

    $mqtt->publish($brojSobeTopic, 'open', 2, true);
  //  sleep(3);
  //  $mqtt->publish('soba101/vrata', 'null', 0, true);
}
if (array_key_exists('roleteUP', $_POST)) {

    $mqtt->publish($brojSobeTopic, 'rolup', 2, true);
   // sleep(2);
   // $mqtt->publish('soba101/rolete', 'null', 0, true);
}
else if (array_key_exists('roleteDOWN', $_POST)) {

    $mqtt->publish($brojSobeTopic, 'roldown', 2, true);
  //  sleep(2);
  //  $mqtt->publish('soba101/rolete', 'nulll', 0, true);
}

if (array_key_exists('tempUP', $_POST)) {

    $mqtt->publish($brojSobeTopic, 'tempup', 2, true);
  //  sleep(2);
  //  $mqtt->publish('soba101/tempset', 'null', 0, true);
}
else if (array_key_exists('tempDOWN', $_POST)) {


    $mqtt->publish($brojSobeTopic, 'tempdown', 2, true);
  //  sleep(2);
   // $mqtt->publish('soba101/tempset', 'null', 0, true);
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="stylesupravljanje.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PAKOPA Upravljanje</title>
</head>

<body>
    <center>
        <h1>Upravljanje hotelskom sobom</h1>

      

            <h3>rasvjeta kupaonica</h3>
            <form method="post">
            <input type="submit" name="wcON" class="button" value="ON" />
            <input type="submit" name="wcOFF" class="button" value="OFF" />
        </form>
            <h3>Rasvjeta soba</h3>
            <form method="post">
            <input type="submit" name="sobaON" class="button" value="ON" />
            <input type="submit" name="sobaOFF" class="button" value="OFF" />
            </form>
            <h3>Vrata</h3>
            <form method="post">
            <input type="submit" name="vrata" class="button" value="Otključaj" />
            </form>
            <h3>Rolete</h3>
            <form method="post">
            <input type="submit" name="roleteUP" class="button" value="&#8593" />
            <input type="submit" name="roleteDOWN" class="button" value="&#8595" />
            </form>

            <h3>Temperatura</h3>
<form method="post">
            <input type="submit" name="tempUP" class="button" value="+" />
            <input type="submit" name="tempDOWN" class="button" value="-" />
            </form>


            <h3>Stanje temperature</h3>
            <?php

            echo $_SESSION['var'];

            ?>
    </center>
    <div>
        <br>
        <br>
        <form action="index.php">
            <input type="submit" value="POČETNA">
        </form>
    </div>
</body>