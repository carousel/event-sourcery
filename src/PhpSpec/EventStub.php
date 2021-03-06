<?php namespace EventSourcery\EventSourcery\PhpSpec;

use EventSourcery\EventSourcery\EventSourcing\DomainEvent;

class EventStub implements DomainEvent {

    /** @var */
    public $a;
    /** @var */
    public $b;
    /** @var */
    public $c;

    public function __construct($a, $b, $c) {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }

}