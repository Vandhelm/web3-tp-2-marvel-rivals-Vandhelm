<!-- TODO : 
        - images + petites
        - padding/ margin
        - mobile 
-->

<div class="col">
    <a href="index.php?page=details&hero=<?= format($hero['name'])?>"> 
        <img src="<?= htmlspecialchars($hero['images']['portrait']) ?>" alt="<?= htmlspecialchars($hero['name']) ?>"
        style="height: 100%; object-fit: cover;">
    </a>
</div>