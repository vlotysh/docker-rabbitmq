<?php


namespace RabbitMQApp;

use RabbitMQApp\Message\MessageInterface;

class Resolver
{
    /**
     * @param MessageInterface $message
     * @param string $type
     */
    public function resolve(MessageInterface $message, string $type = '-')
    {
        $file = fopen(ROOT_PATH . 'tmp/test.txt', 'aw');

        $txt = sprintf("%s: %s\n", $type, $message->getBody());
        fwrite($file, $txt);
        fclose($file);
    }
}