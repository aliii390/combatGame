<?php

abstract class Character 
{
    private string $prenom;
    private int $point_vie;
    private int $attack;

    public function __construct(string $prenom, int $point_vie, int $attack)
    {
        $this->prenom = $prenom;
        $this->point_vie = $point_vie;
        $this->attack = $attack;
    }

    /**
     * Get the value of prenom
     */ 
    public function getPrenom(): string
    {
        return $this->prenom;
    }

    /**
     * Get the value of point_vie
     */ 
    public function getPoint_vie(): int
    {
        return $this->point_vie;
    }

    /**
     * Set the value of point_vie
     */ 
    public function setPoint_vie(int $point_vie): self
    {
        $this->point_vie = $point_vie;
        return $this;
    }

    /**
     * Get the value of healthMax
     */ 
    public function getAttack(): int
    {
        return $this->attack;
    }


    public function hit(Character $target)
    {

        if($target->getPoint_vie() - 15 <= 0){
            $target->setPoint_vie(0);
        } else {
            $target->setPoint_vie($target->getPoint_vie() - 15);
        }
        
    }
}