<?php

final class Goblin extends Monster
{
    public function __construct(string $prenom = "Goblin", int $point_vie = 60, int $attack = 60)
    {
        parent::__construct($prenom, $point_vie, $attack);
    }
}