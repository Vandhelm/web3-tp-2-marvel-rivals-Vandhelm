<?php 
    require_once __DIR__ . '/../models/hero.php';

    function getFilteredHeroes(): array {
        $hero_name = $_GET['hero_name'] ?? '';
        $role = $_GET['role'] ?? 'all';

        $heroes = loadHeroes();
        $filtered = filterHeroes($heroes, $hero_name, $role);

        return $filtered;
    }
?>