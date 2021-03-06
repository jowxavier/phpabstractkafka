<?php

namespace PHPAbstractKafka;

use PHPAbstractKafka\Contracts\BrokerAwareInterface;

class Broker implements BrokerAwareInterface
{
    private $host;
    private $port;

    /**
     * Broker constructor.
     * @param $host
     * @param $port
     */
    public function __construct(string $host, string $port)
    {
        $this->host = $host;
        $this->port = $port;
    }

    public function __toString(): string
    {
        return $this->host . ":" . $this->port;
    }
}