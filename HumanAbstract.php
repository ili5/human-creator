<?php
namespace Human;

abstract class HumanAbstract{

    protected $sex;
    protected $weight;
    protected $height;

    public function getSex()
    {
        return $this->sex;
    }

    /**
     * @param string $sex
     */
    public function setSex(string $sex)
    {
        $this->sex = $sex;
    }

    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @param number $height
     */
    public function setHeight(number $height)
    {
        $this->height = $height;
    }

    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * @param number $weight
     */
    public function setWeight(number $weight)
    {
        $this->weight = $weight;
    }

}