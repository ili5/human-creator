<?php
namespace Human\Classes;

use Human\Interfaces\ArmsInterface;
use Human\Interfaces\BodyInterface;
use Human\Interfaces\HeadInterface;
use Human\Interfaces\LegsInterface;

class Body implements BodyInterface {

    public $head;
    public $arms;
    public $torso;
    public $legs;

    /**
     * Body constructor.
     * @param HeadInterface $head
     * @param ArmsInterface $arms
     * @param LegsInterface $legs
     */
    function __construct(HeadInterface $head, ArmsInterface $arms, LegsInterface $legs){
        $this->head = $head;
        $this->arms = $arms;
        $this->legs = $legs;
    }

    public function keepALive()
    {
    }
}