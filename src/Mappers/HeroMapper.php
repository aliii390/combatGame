<?php


class HeroMapper 
{
    public static function mapToObject(array $datas)
    {
        return new Hero(
            $datas['id'],
            $datas['prenom'],
            $datas['point_vie'],
            $datas['attack'],
        );
    }

    public static function mapToArray(Hero $hero)
    {
        return [
            'prenom' => $hero->getPrenom(),
            'point_vie' => $hero->getPoint_vie(),
            'attack' => $hero->getAttack(),
        ];
    }
}