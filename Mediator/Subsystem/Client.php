<?php

/*
 * DesignPatternPHP
 */

namespace DesignPatterns\Mediator\Subsystem;

use DesignPatterns\Mediator\Colleague;

/**
 * Client is a client that make request et get response
 */
class Client extends Colleague
{

    public function request()
    {
        $this->getMediator()->makeRequest();
    }

    public function output($content)
    {
        echo $content;
    }

}