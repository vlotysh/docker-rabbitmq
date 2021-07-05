<?php


namespace RabbitMQApp;

use PhpAmqpLib\Channel\AMQPChannel;
use PhpAmqpLib\Connection\AMQPStreamConnection;

/**
 * Class BaseAMQP
 * @package App
 */
abstract class BaseAMQP
{
    /**
     * @var AMQPStreamConnection
     */
    protected AMQPStreamConnection $connection;

    /**
     * @var AMQPChannel
     */
    protected AMQPChannel $channel;

    /**
     * WorkerSender constructor.
     */
    public function __construct()
    {
        $this->connection = new AMQPStreamConnection('rabbitmq', 5672, 'admin', 'adminpass');
        $this->channel = $this->connection->channel();
    }

    /**
     * @throws \Exception
     */
    public function __destruct()
    {
        $this->connection->close();
        $this->channel->close();
    }
}