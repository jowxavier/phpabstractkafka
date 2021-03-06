<?php

namespace PHPAbstractKafka\Contracts;

interface KafkaConsumerHandlerInterface
{
    public function __invoke(\RdKafka\Message $message, \RdKafka\KafkaConsumer $consumer);
}