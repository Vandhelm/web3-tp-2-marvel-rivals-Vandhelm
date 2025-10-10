<div class="container">
  <div class="row">

    <?php if (empty($filtered)): ?>
        <p>Aucun héros trouvé.</p>

    <?php else: ?>

        <?php foreach ($filtered as $hero): ?>
            <?php include __DIR__ . '/components/hero-card.php'; ?>
        <?php endforeach; ?>

    <?php endif; ?>    


  </div>
</div>