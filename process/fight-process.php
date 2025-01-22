<?php
require_once '../utils/autoloader.php';

session_start();

/**
 * @var Hero $hero
 */
$hero = $_SESSION['hero'];

/**
 * @var Monster $monster
 */
$monster = $_SESSION['monster'];

// Verif les points de vie avant toute action
if ($hero->getPoint_vie() > 0 && $monster->getPoint_vie() > 0) {
    $hero->hit($monster);

    // Si le monstre ne survit pas à l'attaque du héros
    if ($monster->getPoint_vie() > 0) {
        $monster->hit($hero);
    }
}

// Déterminez le gagnant
if ($hero->getPoint_vie() <= 0) {
    $_SESSION['message'] = "Vous avez perdu, le monstre a gagné !";
} elseif ($monster->getPoint_vie() <= 0) {
    $_SESSION['message'] = "Bravo ! Vous avez gagné, le monstre a été vaincu !";
}


header("Location: ../public/fight.php");
exit;
