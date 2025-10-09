<?php
// TODO: Lire tous les héros à partir du fichier "./data/heroes.json"
// TODO: Effectuer la logique de filtrage
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./public/images/favicon.ico" type="image/x-icon">
    <title>Marvel Rivals - Heroes</title>

    <script defer src=".public/bootstrap/js/boostrap.js"></script>    
    
    <link rel="stylesheet" href="./public/bootstrap/css/bootstrap.css"> 

    <link rel="stylesheet" href="./public/stylesheets/styles.css">
</head>
<body>
    <main class="container">
        <section class="text-center py-5">
            <h1 class="main-title">Choisissez votre héro</h1>
            <p>
                Parmis une grande sélection d'héros, choisissez celui ou celle qui vous représente le plus afin de conquérire le champ de bataille!
            </p>
        </section>
        <!--
            Pour les filtres, il faudra ajouter un formulaire contenant :
                1) Un barre de recherche pour pouvoir chercher un hero par son nom
                2) Des radio-buttons pour la classe du héro (Vanguard, Duelist, Strategist)
            La recherche se fera côté serveur en PHP. Il faudra récupérer la classe qu'on veut filtrer (Vanguard, Duelist, Strategist) et le nom du héro à filter.
                1) Si aucun filtre n'est sélectionné et que rien n'est entré dans le champ de texte, on affiche tous les héros (affichage par défaut)
                2) Si un ou plusieurs filtres sont sélectionnés, nous faisons le filtre sur ces éléments :
                    - Si nous avons une valeur dans le champ de texte, nous filtrons sur le nom des héros et affichons tous les héros ayant la valeur dans leur nom (e.g. amer ==> Captain America)
                    - Si nous sélectionnons une classe, nous faisons un filtre afin d'afficher tous les héros ayant cette classe.
                    - Les deux filtres peuvent se combiner (e.g. le nom et la classe).
            ATTENTION: Toute la logique des filtres doit fonctionner sans aucun JavaScript! Tout doit être fait côté serveur en PHP.
        -->
        <section>
            <h3>Filtres</h3>
        </section>

        <section>
            <h3>Liste des héroes</h3>
        </section>
    </main>
</body>
</html>