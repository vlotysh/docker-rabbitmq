<?php

require_once __DIR__ . '/../vendor/autoload.php';

use RabbitMQApp\WorkerReceiver;

$reciver = new WorkerReceiver();
$reciver->listen();
