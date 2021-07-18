<?php

namespace RabbitMQApp\Workers;

use RabbitMQApp\Message\MessageInterface;
use RabbitMQApp\Resolver;

/**
 * Class LogWorker
 * @package RabbitMQApp\Workers
 */
class LogWorker implements WorkerInterface
{
    public function work(MessageInterface $message): void
    {
        $es = new Resolver();
        $es->resolve($message, 'Log');
    }
}