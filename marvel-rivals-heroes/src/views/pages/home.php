<main class="home container">
    <section class="text-center py-5">
        <h1 class="main-title">Choisissez votre héro</h1>
        <p>Parmis une grande sélection d'héros, choisissez celui ou celle qui vous représente le plus afin de conquérire le champ de bataille!</p>
    </section>

    <section>
        <h3>Filtres</h3>
        <?php require __DIR__ . '/../components/search-form.php' ; ?>
    </section>

    <section>
        <h3>Liste des héroes</h3>
        <?php 
            $heroList = $heroes; // si n'attribue pas heroes à une autre variable, heroes dans hero-list est vide (hypothèse : trop de layouts/ couches (?))
            require __DIR__ . '/../hero-list.php';
        ?>
    </section>
</main>
