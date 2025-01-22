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
// Récupérez le message de la session, puis supprimez-le
$message = $_SESSION['message'] ?? null;
unset($_SESSION['message']);
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

    <?php if ($message): ?>
        <div class="message">
            <p><?= htmlspecialchars($message) ?></p>
        </div>
    <?php endif; ?>
    
    <div class="hero-container">
        <div class="hero">
            <p class="character-info"><?= $hero->getPrenom() ?> - <span style="color: red;"><?= $hero->getPoint_vie() ?> HP</span></p>
            <img src="./assets/img/soldat-removebg-preview.png" alt="Héros" class="hero-image">
        </div>
        <div class="monster">
            <p class="character-info"><?= $monster->getPrenom() ?> - <span style="color: red;"><?= $monster->getPoint_vie() ?> HP</span></p>
            <img src="./assets/img/zmbi-removebg-preview.png" alt="Monstre" class="monster-image">
        </div>
    </div>

</body>

</html>
