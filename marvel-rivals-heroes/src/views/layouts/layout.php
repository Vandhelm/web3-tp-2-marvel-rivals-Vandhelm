<!DOCTYPE html>
<html lang="en">
<head>
    <?php include __DIR__ . '/head.php'; ?>
    <title> <?php htmlspecialchars($title ?? 'Marvel Rivals') ?> </title>
</head>
<body>
    <?php include $content; ?>
</body>
</html>

<!-- 
    https://laconsole.dev/formations/php/design-pattern-mvc#layout
    isolation du layout (balises structurelles) → éviter répétitions
-->

<!--  __DIR__ : retourne le chemin absolu du dossier contenant le fichier courant -->
<!--  htmlspecialchars : sécurise l'affichage du texte -->