<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/styles/style.css">

</head>
<body class="">
  
    <header class="header">
        <h1 class="">Bienvenue Sur Mortal Kombat</h1>
        <h3 class="h3-header">Créer un personnage - Mortal Kombat</h3>
    </header>
    <main>

   
    <section class="form-section">
        <h2 class="">Créez votre personnage</h2>
        <form class="character-form" action="../process/create-hero-process.php" method="POST" class="character-form flex flex-col">
            <label for="prenom" class="mb-2 font-bold text-yellow-400 text-lg">Prenom :</label>
            <input 
                type="text" 
                name="prenom" 
                id="name" 
                placeholder="Entrez le nom de votre hero "
                class="mb-5 p-3 text-base border-2 border-yellow-400 rounded-lg bg-gray-700 text-white placeholder-gray-400 italic focus:outline-none focus:border-red-600 focus:ring-2 focus:ring-red-600"
            >

            <button 
                type="submit" 
                class="bg-red-600 text-white text-lg p-3 rounded-lg hover:bg-yellow-400 hover:scale-105 transition duration-300 focus:outline-none focus:ring-2 focus:ring-yellow-400"
            >
                Create
            </button>
        </form>
    </section>
    </main>
</body>
</html>
