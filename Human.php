<?php
namespace Human;


use Human\Classes\Body;
use Human\Classes\Brain;
use Human\Interfaces\BodyInterface;
use Human\Interfaces\BrainInterface;

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
    function __construct(BodyInterface $body, BrainInterface $brain)
    {
        $this->body = $body;
        $this->brain = $brain;
    }
}