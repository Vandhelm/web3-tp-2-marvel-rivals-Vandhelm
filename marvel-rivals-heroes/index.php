<?php
    $page = $_GET['page'] ?? 'home';

    # TODO : changer pour une fonction qui génère automatiquement le chemin
    switch ($page) {
        case 'home':
            require_once './src/controllers/homeController.php';
            break;
        case 'details':
            require_once './src/controllers/detailsController.php';
            break;
        // default:
        //     require_once './src/controllers/errorController.php';
        //     break;   
    }
?>