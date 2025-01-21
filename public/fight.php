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

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Combat</title>
    <link rel="stylesheet" href="./assets/styles/fight.css">
</head>

<body>

  <form action="../process/fight-process.php" method="post">
    <button type="submit" class="fight-button">Attaquez</button>
  </form>

  <div class="hero-container">
      <div class="hero">
          <p class="character-info"><?= $hero->getPrenom() ?> - <?= $hero->getPoint_vie() ?> HP</p>
          <img src="./assets/img/soldat-removebg-preview.png" alt="Héros" class="hero-image">
      </div>
      <div class="monster">
          <p class="character-info"><?= $monster->getPrenom() ?> - <?= $monster->getPoint_vie() ?> HP</p>
          <img src="./assets/img/zmbi-removebg-preview.png" alt="Monstre" class="monster-image">
      </div>
  </div>

</body>

</html>
