<?php

namespace Techloco\TwitterOAuth\Tests;

use Techloco\TwitterOAuth\Consumer;

class ConsumerTest extends \PHPUnit_Framework_TestCase {
    public function testToString()
    {
        $key = uniqid();
        $secret = uniqid();
        $consumer = new Consumer($key, $secret);

        $this->assertEquals("Consumer[key=$key,secret=$secret]", $consumer->__toString());
    }
}