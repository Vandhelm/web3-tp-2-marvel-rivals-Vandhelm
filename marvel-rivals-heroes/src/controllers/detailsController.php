<?php
    #require_once __DIR__ '/../models/hero.php';

    // $name = $_GET['hero'] ?? '';
    // $heroes = loadHeroes();

    // if (!isset($heroes[$name])) {
    //     header('Location: index.php?page=error');
    // }

    // $hero = $heroes[$name];
    #$title = "Marvel Rivals - " . $hero['name'];

    $title = "Marvel Rivals - " . "nome du héro";
    
    $content = __DIR__ . '/../views/pages/details.php';
    require_once __DIR__ . '/../views/layouts/layout.php';

    include '/../views/pages/details.php';
?>


<?php
    // require_once __DIR__ . '/../services/heroService.php';

    // $title = "Marvel Rivals - Accueil";
    // $heroes = getFilteredHeroes();

    // # TODO : peut surement être amélioré (chercher contenu automatiquement)
    // $content = __DIR__ . '/../views/pages/home.php';
    // require_once __DIR__ . '/../views/layouts/layout.php';
?>