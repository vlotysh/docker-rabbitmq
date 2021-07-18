<?php

namespace RabbitMQApp\Workers;

use RabbitMQApp\Message\MessageInterface;
use RabbitMQApp\Resolver;

class MessageWorker implements WorkerInterface
{
    public function work(MessageInterface $message): void
    {
        $es = new Resolver();
        $es->resolve($message, 'Message');
    }
}