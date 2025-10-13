<?php
    require_once __DIR__ . '/../services/heroService.php';

    $title = "Marvel Rivals - Accueil";
    $heroes = getFilteredHeroes();

    # TODO : peut surement être amélioré (chercher contenu automatiquement)
    $content = __DIR__ . '/../views/pages/home.php';
    require_once __DIR__ . '/../views/layouts/layout.php';
?>