<?php 

require_once __DIR__ . '/../Utils/file-utils.php';

function getAllHeroes(): array {
    $path = checkFile('data/heroes.json');

    $json = file_get_contents($path);
    $data = json_decode($json, true); 

    // TODO : rassembler les validations communes
    if (!is_array($data)) { 
        die("Error : the contents of file heroes.json are invalid.");
    }
    return $data;
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