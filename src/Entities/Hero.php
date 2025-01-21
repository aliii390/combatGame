<?php

final class Hero extends Character
{
    private int $id;


    public function __construct(int $id, string $prenom, int $point_vie = 100, int $attack = 100)
    {
        parent::__construct($prenom, $point_vie, $attack);
        $this->id = $id;
    }

    /**
     * Get the value of id
     */ 
    public function getId(): int
    {
        return $this->id;
    }
}