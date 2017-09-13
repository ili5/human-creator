<?php
namespace Human\Classes;

use Human\Interfaces\HeadInterface;

class Head implements HeadInterface {

    protected $hairColor;
    protected $eyeColor;

    /**
     * Head constructor.
     * @param string $hairColor
     * @param string $eyeColor
     */
    function __construct(string $hairColor, string $eyeColor)
    {
        $this->hairColor = $hairColor;
        $this->eyeColor = $eyeColor;
    }

    public function blink()
    {
    }

    public function talk()
    {
    }
}