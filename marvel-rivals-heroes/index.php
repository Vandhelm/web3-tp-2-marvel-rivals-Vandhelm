<?php
    $page = $_GET['page'] ?? 'home';

    switch ($page) {
        case 'home':
            require_once './src/controllers/homeController.php';
            break;
        case 'details':
            require_once './src/controllers/detailsController.php';
            break;
        default:
            require_once './src/controllers/homeController.php';
            break;   
    }
?>

<!-- 
    https://laconsole.dev/formations/php/design-pattern-mvc#routeur
    création d'un "routeur" (diriger vers quel controller)
-->

<!-- Architecture MVC (Model-View-Controller) PHP → https://www.youtube.com/watch?v=PkL2wRGfE-w (pratique) -->
<!--                                                https://developer.mozilla.org/en-US/docs/Glossary/MVC (théorie)                     
                                                    https://dyma.fr/blog/introduction-au-mvc-avec-php/#:~:text=L'architecture%20MVC%20(Model%2D,une%20structure%20efficace%20et%20organis%C3%A9e. (théorie +) 
                                                    https://www.sitepoint.com/the-mvc-pattern-and-php-1/ (théorie ++) 
                                                    
                                                    modèle suivie : https://laconsole.dev/formations/php/design-pattern-mvc 
                                                    exemple MVC (plus avancé) avec classes + bonnes pratiques de protection des données : 
                                                        https://blog.crea-troyes.fr/5297/jour-12-mvc-creer-larchitecture-mvc-dun-site-web/
                                                    -->

<!-- 
Model       :   gère données et logique métier (traitement)
                https://stackoverflow.com/questions/5863870/how-should-a-model-be-structured-in-mvc
View        :   gère mise en page et affichage
Controller  :   achemine commandes vers les pièces du modèle et de la vue (intermédiaire)
-->

<!--   *En PHP MVC, les saisies utilisateur sont généralement gérées par le contrôleur. 
        Ce dernier reçoit les saisies utilisateur, les valide, puis les transmet au modèle pour traitement. 
        Le modèle met ensuite à jour les données et notifie le contrôleur, qui met à jour la vue. -->