<?php
// TODO: Lire tous les héros à partir du fichier "./data/heroes.json"
// TODO: Obtenir le héro chercher via le paramètre GET
// TODO: Si héro introuvable, redirect vers index.php (`header('Location: ./index.php)`)
// TODO: Call mon API (chercher sur internet comment faire (utilisation de "curl()") afin d'obtenir la bio du héro

$url = "https://hub-sorel-tracy.mathiscote.ca/api/marvel-rivals/adam-warlock";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="./public/images/favicon.ico" type="image/x-icon">

        <!-- TODO: Afficher le nom du héro dans le title -->
        <title>Marvel Rivals - ...</title>

        <!-- TODO: Remove CDN link and include Bootstrap files locally -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

        <link rel="stylesheet" href="./public/stylesheets/styles.css">
    </head>
    <body>
        <!--
            Pour cette page, il faut récupérer un paramètre de l'URL afin d'identifier le héro de manière unique (e.g. le "name" dans le JSON)
            À partir de cet identifiant, nous allons pouvoir aller chercher les données du héro pour pouvoir les afficher.

            Nous utiliserons l'API sur mon site afin d'obtenir la bio de chaque héro:

            - https://hub-sorel-tracy.mathiscote.ca/api/marvel-rivals/adam-warlock

            Vous pouvez récupérer les autres données à partir du fichier heroes.json, comme pour la page index.php
        -->
        <main>
            <section class="details overflow-x-hidden">
                <img class="hero-background" src="public/images/heroes/adam-warlock/background.png" alt="Background du hero" />
                <img class="details-background" src="public/images/ui/details-background.png" alt="Background du details" />
                <img class="hero-full-portrait" src="public/images/heroes/adam-warlock/full-portrait.png" alt="portrait complet du hero" />
                <a href="index.php" class="more-heroes">
                    <img src="public/images/ui/more-heroes.png" alt="Voir plus de heros" />
                </a>
                <div class="hero-info">
                    <img src="public/images/heroes/adam-warlock/icon.png" alt="icône de classe" class="hero-icon" />
                    <div class="class">
                        <img src="public/images/ui/strategist-icon.png" alt="icône de classe" />
                        <h3>Strategist</h3>
                    </div>
                    <h1>Adam Warlock</h1>
                    <div class="bio">
                        <h5>Biographie</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque varius est magna, id vehicula libero interdum vitae. Cras ut mi elit. Nulla leo diam, ultricies eu convallis quis, ultricies quis metus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
                    </div>
                </div>
            </section>
        </main>
    </body>
</html>
