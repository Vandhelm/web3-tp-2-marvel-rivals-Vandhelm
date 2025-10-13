<?php
// TODO: Lire tous les héros à partir du fichier "./data/heroes.json"
// TODO: Obtenir le héro chercher via le paramètre GET
// TODO: Si héro introuvable, redirect vers index.php (`header('Location: ./index.php)`)
// TODO: Call mon API (chercher sur internet comment faire (utilisation de "curl()") afin d'obtenir la bio du héro

$url = "https://hub-sorel-tracy.mathiscote.ca/api/marvel-rivals/adam-warlock";

	
?>
<!-- TODO: Afficher le nom du héro dans le title -->


<!--
    Pour cette page, il faut récupérer un paramètre de l'URL afin d'identifier le héro de manière unique (e.g. le "name" dans le JSON)
    À partir de cet identifiant, nous allons pouvoir aller chercher les données du héro pour pouvoir les afficher.

    Nous utiliserons l'API sur mon site afin d'obtenir la bio de chaque héro:

    - https://hub-sorel-tracy.mathiscote.ca/api/marvel-rivals/adam-warlock

    Vous pouvez récupérer les autres données à partir du fichier heroes.json, comme pour la page index.php
-->
<main>
    <section class="details overflow-x-hidden">
        <img class="hero-background" src="<?= htmlspecialchars($hero['images']['background']) ?>" alt="Background du hero" />
        <img class="details-background" src="public/images/ui/details-background.png" alt="Background du details" />
        <img class="hero-full-portrait" src="<?= htmlspecialchars($hero['images']['full-portrait']) ?>" alt="portrait complet du hero" />

        <a href="index.php" class="more-heroes">
            <img src="public/images/ui/more-heroes.png" alt="Voir plus de heros" />
        </a>

        <div class="hero-info">
            <img src="<?= htmlspecialchars($hero['images']['icon']) ?>" alt="icône de classe" class="hero-icon" />

            <div class="class">
                <img src="<?= getRoleIcon($hero['class'])?>" alt="icône de classe">
                <h3><?= htmlspecialchars($hero['class']) ?></h3>
            </div>

            <h1><?= htmlspecialchars($hero['name']) ?></h1>

            <div class="bio">
                <h5>Biographie</h5>
                <p><?= htmlspecialchars($hero['bio']) ?></p>
            </div>
        </div>
    </section>
</main>
  
