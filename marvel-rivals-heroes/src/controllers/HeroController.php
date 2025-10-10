<?php 
    require_once __DIR__ . '/../Models/hero.php';

    function showHeroes() {
        $hero_name = $_GET['hero_name'] ?? '';
        $role = $_GET['role'] ?? 'all';

        $heroes = getAllHeroes();
        $filtered = filterHeroes($heroes, $hero_name, $role);

        print_r($filtered);
        # TODO: ajouter la liste des heros
    }
?>