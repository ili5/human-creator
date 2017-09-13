<?php
namespace Human\Interfaces;

interface ArmsInterface{
    public function moveLeft();
    public function moveRight();
    public function moveUp();
    public function moveDown();
    public function grab();
}