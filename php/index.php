<?php require __DIR__ . ('/header.php'); ?>

<section class="hero">
    <div class="hero block-1">
        <h1>
            <?= $indexH1; ?>
        </h1>
    </div>
    <div class="hero block-2">
        <p>
            <?= $heroDescription; ?>
        </p>
    </div>

    <div class="hero block-4">
        <ul class="contact-info">
            <?php foreach ($contacts as $contact => $value) : ?>
                <li>
                    <a href="<?= $value; ?>" target="_blank"><?= $contact; ?></a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</section>

<section class="gallery">
    <div class="container">
        <?php foreach ($artworks as $artwork) : ?>
            <a href=<?= $artwork['website']; ?> class="box" target="_blank">
                <div class="frame">
                    <img <?= $artwork['image']; ?>>
                </div>
                <div>
                    <p class="title"><?= $artwork['title']; ?></p>
                    <p class="artist"><?= $artwork['artist']; ?></p>
                    <p class="era"><?= $artwork['era']; ?></p>
                </div>
            </a>
        <?php endforeach; ?>
    </div>
</section>

<?php require __DIR__ . ('/footer.php'); ?>
