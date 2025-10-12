<?php
// TODO: Lire tous les héros à partir du fichier "./data/heroes.json"
// TODO: Effectuer la logique de filtrage
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <!-- https://www.php.net/manual/en/function.include.php -->
    <!-- include __DIR__ . -->
    <?php include './public/includes/head.php'; ?>
    <title>Marvel Rivals - Heroes</title>
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
            <?php include __DIR__ . '/src/views/components/search-form.php' ; ?>
        </section>

        <section>
            <h3>Liste des héroes</h3>
            <?php 
                require_once __DIR__ . '/src/Controllers/HeroController.php'; // TODO: changer d'endroit ?
                showHeroes(); 
            ?>
        </section>
    </main>
</body>
</html>

<!-- Architecture MVC (Model-View-Controller) PHP → https://www.youtube.com/watch?v=PkL2wRGfE-w (pratique) -->
<!--                                                https://developer.mozilla.org/en-US/docs/Glossary/MVC (théorie)                     
                                                    https://dyma.fr/blog/introduction-au-mvc-avec-php/#:~:text=L'architecture%20MVC%20(Model%2D,une%20structure%20efficace%20et%20organis%C3%A9e. (théorie +) 
                                                    https://www.sitepoint.com/the-mvc-pattern-and-php-1/ (théorie ++) -->
<!--    En PHP MVC, les saisies utilisateur sont généralement gérées par le contrôleur. 
        Ce dernier reçoit les saisies utilisateur, les valide, puis les transmet au modèle pour traitement. 
        Le modèle met ensuite à jour les données et notifie le contrôleur, qui met à jour la vue. -->

<!-- 
Model       :   gère données et logique métier (traitement)
                https://stackoverflow.com/questions/5863870/how-should-a-model-be-structured-in-mvc
View        :   gère mise en page et affichage
Controller  :   achemine commandes vers les pièces du modèle et de la vue (intermédiaire)




-->