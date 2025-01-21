<?php

require_once '../utils/autoloader.php';

$heroRepository = new HeroRepository();
$heroes = $heroRepository->findAll();

if(!$heroes) {
    header("Location: ./create-hero.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Choose Your Hero</title>
    <link rel="stylesheet" href="./assets/styles/hero.css">
</head>
<body>

    <div class="hero-container">
        <h1>Choisis ton hero</h1>

        <div class="hero-cards">
            <?php 
            /**
             * @var Hero $hero
             */
            foreach($heroes as $hero): ?>
                <div class="hero-card">
                    <form action="../process/choice-hero-process.php" method="POST">
                        <input type="hidden" name="hero_id" value="<?= htmlspecialchars($hero->getId()) ?>">

                        <div class="hero-image">
                         <!-- mettre img ici  -->
                        </div>
                        <h2 class="hero-name"><?= htmlspecialchars($hero->getPrenom()) ?></h2>
                        <button type="submit">Select</button>
                    </form>
                </div>
            <?php endforeach; ?>
        </div>

        <a href="../process/disconnect.php" class="logout-button">Quitter</a>
    </div>

</body>
</html>
