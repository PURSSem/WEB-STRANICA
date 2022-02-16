<?php
require('C:\Users\antep\vendor\autoload.php');

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
//pcntl_async_signals(true);

$mqtt = new MqttClient($server, $port, $clientId);
//pcntl_signal(SIGINT, function (int $signal, $info) use ($mqtt) {
  //  $mqtt->interrupt();
//});
$mqtt->connect($connectionSettings, $clean_session);

$mqtt->subscribe('soba101/temptest', function ($topic, $message) {
    printf("Received message on topic [%s]: %s\n", $topic, $message);

    echo "<h2>" . $message . "</h2>";
    echo "<h2>" . $topic . "</h2>";
}, 0);


if (array_key_exists('wc101ON', $_POST)) {
    $payload = array(
        'on'
    );
    $mqtt->publish(
        // topic
        'soba101/wc',
        // payload
        'on',
        // qos
        0,
        // retain
        true
    );
}

if (array_key_exists('wc101OFF', $_POST)) {
    $payload = array(
        'off'
    );
    $mqtt->publish(
        // topic
        'soba101/wc',
        // payload
        'off',
        // qos
        0,
        // retain
        true
    );
}

//sleep(1);
//$mqtt->loop(true);




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

        <form method="post">

            <h3>rasvjeta kupaonica</h3>
            <input type="submit" name="wc101ON" class="button" value="ON" />
            <input type="submit" name="wc101OFF" class="button" value="OFF" />

            <h3>Rasvjeta soba</h3>
            <input type="submit" name="soba101ON" class="button" value="ON" />
            <input type="submit" name="soba101OFF" class="button" value="OFF" />

            <h3>Vrata</h3>
            <input type="submit" name="vrata101" class="button" value="Otključaj" />

            <h3>Rolete</h3>
            <input type="submit" name="roletegore" class="button" value="&#8593" />
            <input type="submit" name="roletedolje" class="button" value="&#8595" />


            <h3>Temperatura</h3>

            <input type="submit" name="tempgore" class="button" value="&#8593" />
            <input type="submit" name="tempdolje" class="button" value="&#8595" />

            <h3>Stanje temperature</h3>



    </center>
    <div>
        <br>
        <br>
        <form action="index.php">
            <input type="submit" value="POČETNA">
        </form>
    </div>
</body>