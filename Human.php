<?php
namespace Human;


use Human\Classes\Body;
use Human\Classes\Brain;

class Human extends HumanAbstract {

    /**
     * @var Body
     */
    public $body;

    /**
     * @var Brain
     */
    public $brain;

    /**
     * Human constructor.
     * @param Body $body
     * @param Brain $brain
     */
    function __construct(Body $body, Brain $brain)
    {
        $this->body = $body;
        $this->brain = $brain;
    }
}