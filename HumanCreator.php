<?php
namespace Human;

use Human\Classes\Arms;
use Human\Classes\Body;
use Human\Classes\Brain;
use Human\Classes\Head;
use Human\Classes\Legs;

class HumanCreator{

    /**
     * Simple human creator
     * @param int $height
     * @param int $weight
     * @param string $sex
     * @param string $hairColor
     * @param string $eyeColor
     * @return Human
     */
    public static function create(int $height, int $weight, string $sex, string $hairColor, string $eyeColor): Human{
        $arms = new Arms();
        $head = new Head($hairColor, $eyeColor);
        $legs = new Legs();

        $body = new Body($head, $arms, $legs);
        $brain = new Brain();

        // Implementation of abstract class
        $human = new Human($body, $brain);
        $human->setWeight($weight);
        $human->setSex($sex);
        $human->setHeight($height);

        return $human;
    }
}