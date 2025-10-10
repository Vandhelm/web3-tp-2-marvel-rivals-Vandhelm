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
?>