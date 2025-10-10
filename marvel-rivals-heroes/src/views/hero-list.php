<div class="container">
  <div class="row">


    <?php foreach ($filtered as $hero): ?>

        <div class="col">
            <h5 class="card-title"><?= htmlspecialchars($hero['name']) ?></h5>
            <p class="card-text"><?= htmlspecialchars($hero['class']) ?></p>
        </div>

    <?php endforeach; ?>


  </div>
</div>