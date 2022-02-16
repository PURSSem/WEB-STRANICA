<?php
session_start();
require('/home/webserver/vendor/autoload.php');

use \PhpMqtt\Client\MqttClient;
use \PhpMqtt\Client\ConnectionSettings;

$server   = 'broker.emqx.io';
$port     = 1883;
$clientId = rand(5, 15);
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
printf("client connected\n");

$mqtt->subscribe('soba101/temp', function ($topic, $message) {
    printf("Received message on topic [%s]: %s\n", $topic, $message);
    $_SESSION['var']=$message;

}, 0);



$mqtt->loop(true);
?>
