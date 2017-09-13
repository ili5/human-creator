<?php

/*
 * This is an example how to create a human and make him walk;
 */
$humanCreator = \Human\HumanCreator::create(192, 80, "male", "black", "brown");
$humanCreator->brain->think();
$humanCreator->body->legs->walk();