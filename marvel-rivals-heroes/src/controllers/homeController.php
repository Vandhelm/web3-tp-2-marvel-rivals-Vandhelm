<?php
    require_once __DIR__ . '/../services/heroService.php';

    $title = "Marvel Rivals - Accueil";
    $heroes = getFilteredHeroes();

    $content = __DIR__ . '/../views/pages/home.php';
    require_once __DIR__ . '/../views/layouts/layout.php';
?>