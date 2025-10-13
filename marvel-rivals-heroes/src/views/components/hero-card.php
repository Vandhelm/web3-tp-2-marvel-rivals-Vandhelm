<!-- TODO : 
        - images + petites
        - padding/ margin
        - mobile 
-->

<div class="col col-2">
    <a href="index.php?page=details&hero=<?= format($hero['name'])?>"> 
        <img src="<?= htmlspecialchars($hero['images']['portrait']) ?>" alt="<?= htmlspecialchars($hero['name']) ?>">
    </a>
</div>