<main>
    <section class="details overflow-x-hidden">
        <img class="hero-background" src="<?= htmlspecialchars($hero['images']['background']) ?>" alt="background du hero" />
        <img class="details-background" src="public/images/ui/backgrounds/details-background.png" alt="background du details" />
        <img class="hero-full-portrait" src="<?= htmlspecialchars($hero['images']['full-portrait']) ?>" alt="portrait complet du hero" />

        <a href="index.php" class="more-heroes">
            <img src="public/images/ui/icons/more-heroes.png" alt="Voir plus de heros" />
        </a>

        <div class="hero-info">
            <img src="<?= htmlspecialchars($hero['images']['icon']) ?>" alt="icône de classe" class="hero-icon" />

            <div class="class">
                <img src="<?= getRoleIcon($hero['class'])?>" alt="icône de classe">
                <h3><?= htmlspecialchars($hero['class']) ?></h3>
            </div>

            <h1><?= htmlspecialchars($hero['name']) ?></h1>

            <div class="bio">
                <h5>Biographie</h5>
                <p><?= htmlspecialchars($hero['bio']) ?></p>
            </div>
        </div>
    </section>
</main>
  
