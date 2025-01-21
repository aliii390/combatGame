<?php

abstract class Monster extends Character
{
    public function __construct(string $prenom, int $point_vie, int $attack)
    {
        parent::__construct($prenom, $point_vie, $attack);
    }
}