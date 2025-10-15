<?php 
require_once __DIR__ . '/../utils/hero-utils.php';
require_once __DIR__ . '/../utils/file-utils.php';
require_once __DIR__ . '/../services/MarvelRivalApiService.php';

function loadHeroes(): array {
    $path = checkFile('data/heroes.json');

    $json = file_get_contents($path);
    $heroes = json_decode($json, true); 

    if (!is_array($heroes)) { 
        die("Error : the contents of file heroes.json are invalid.");
    }

    // https://www.php.net/manual/fr/language.references.whatdo.php#language.references.whatdo.assign (Exemple #3 Références et structure foreach)
    // '&' agit comme un pointeur (en C) → crée une ref vers l'élément du tableau (pour que la modif "reste")
    foreach ($heroes as &$hero) { 
        $hero['images'] = buildHeroImagePaths($hero['name']);
        $hero['bio'] = fetchHeroBio(format($hero['name']));   // 1 info stable pour petit nb de données (héros) → pas la peine de le faire quand on clique
    }
    return $heroes;
}

function filterHeroes(array $heroes, string $name, string $role): array {
    $filtered = filterByRole($heroes, $role);
    $filtered = filterByName($filtered, $name);

    return $filtered;
}

function filterByName(array $heroes, string $name): array {
    if ($name === '') return $heroes;

    $filtered = array_filter($heroes, 
        function ($hero) use ($name){
            return stripos($hero['name'], $name) !== false; // stripos : dans la chaîne + ne tient pas compte des min/ maj
    });

    return $filtered;
}

function filterByRole(array $heroes, string $role): array {
    if ($role === '' || $role === 'all') return $heroes;

    $filtered = array_filter($heroes, 
        function ($hero) use ($role){
            return ($hero['class'] ?? '') === $role; 
    });

    return $filtered;
}
?>