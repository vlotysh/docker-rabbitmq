<?php

require_once __DIR__ . '/../vendor/autoload.php';

use RabbitMQApp\WorkerSender;

$sender = new WorkerSender();
$sender->execute('Text for sending');