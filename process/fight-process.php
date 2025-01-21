

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

if ($hero->getPoint_vie() > 0 && $monster->getPoint_vie() > 0):
    echo $hero->getPrenom() . $monster->getPrenom() . "\n";

    $hero->hit($monster);

    echo $hero->getPrenom();

    // Si le monstre ne survit pas à l'attaque du héros
    if ($monster->getPoint_vie() > 0):
        echo $monster->getPrenom();

        $monster->hit($hero);

        echo $monster->getPrenom();
    endif;
endif;



header("Location: ../public/fight.php");
exit;