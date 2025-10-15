<?php
    require_once __DIR__ . '/../models/hero.php';
    require_once __DIR__ . '/../services/heroService.php';
    require_once __DIR__ . '/../utils/hero-utils.php';

    $name = $_GET['hero'] ?? '';
    $name = unformat($name);
    

    if (empty($name)) {
        print_r("Error: No name");
        header('Location: index.php?page=error');
        exit;
    }

    $hero = getHero($name);

    if (!$hero) {
        print_r("Error: Hero not found");
        header('Location: index.php?page=error');
        exit;
    }

    $title = "Marvel Rivals - " . htmlspecialchars($hero['name']);
    $content = __DIR__ . '/../views/pages/details.php';

    require_once __DIR__ . '/../views/layouts/layout.php';
?>