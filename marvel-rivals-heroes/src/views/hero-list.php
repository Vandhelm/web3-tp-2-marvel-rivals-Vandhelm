<div class="container">
  <div class="row g-3">

    <?php if (empty($heroes)): ?>
        <p>Aucun héros trouvé.</p>

    <?php else: ?>

        <?php foreach ($heroes as $hero): ?>
            <?php include __DIR__ . '/components/hero-card.php'; ?>
        <?php endforeach; ?>

    <?php endif; ?>    

  </div>
</div>