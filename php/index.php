<?php require __DIR__ . ('/header.php'); ?>

<main>

    <!-- HERO SECTION -->

    <section class="hero" role="banner">
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

    <!-- GALLERY SECTION -->

    <section class="gallery">
        <div class="container" id="artworks">
            <?php foreach ($artworks as $artwork) : ?>
                <div class="box">
                    <a href=<?= $artwork['website']; ?> target="_blank">
                        <div class="frame">
                            <img <?= $artwork['image']; ?>>
                        </div>
                    </a>
                    <div>
                        <a href=<?= $artwork['website']; ?> class="title" target="_blank"> <?= $artwork['title']; ?> </a>
                        <p class="artist"><?= $artwork['artist']; ?></p>
                        <p class="era"><?= $artwork['era']; ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
</main>

<?php require __DIR__ . ('/footer.php'); ?>
