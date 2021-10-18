<?php require __DIR__ . ('/header.php'); ?>

<section class="hero">
    <div class="hero block-1">
        <h1>
            <?= $indexH1; ?>
            <!-- Berzelii Gallery
            <br>
            Dept. -->
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
        <div class="box box-1">
            <div class="frame">
                <img src="../images/the-woman-of-samaria.jpeg" alt="">
            </div>
            <div>
                <p class="era">1860</p>
                <p class="title">The Woman of Samaria</p>
                <p class="artist">Artist: William Dyce</p>
            </div>
        </div>

        <div class="box box-2">
            <div class="frame">
                <img src="../images/festive-gathering.jpeg" alt="">
            </div>
            <div>
                <p class="era">1860</p>
                <p class="title">Festive Gathering</p>
                <p class="artist">Artist: William Dyce</p>
            </div>
        </div>

        <div class="box box-3">
            <div class="frame">
                <img src="../images/hope-comforting-love.jpeg" alt="">
            </div>
            <div class="">
                <p class="era">1901</p>
                <p class="title">Hope Comforting Love</p>
                <p class="artist">Artist: Unknown</p>
            </div>
        </div>

        <div class="box box-4">
            <div class="frame">
                <img src="../images/the-grotto-at-posillipo.jpeg" alt="">
            </div>
            <div>
                <p class="era">1754</p>
                <p class="title">The Grotto at Posillipo</p>
                <p class="artist">Artist: Unknown</p>
            </div>
        </div>

        <div class="box box-5">
            <div class="frame">
                <img src="../images/banquet-still-life.jpeg" alt="">
            </div>
            <div>
                <p class="era">1664</p>
                <p class="title">Banquet Still Life</p>
                <p class="artist">Artist: Unknown</p>

            </div>
        </div>

        <div class="box box-6">
            <div class="frame">
                <img src="../images/Monte-Civetta.jpeg" alt="">
            </div>
            <div>
                <p class="era">1867</p>
                <p class="title">Monte Civetta</p>
                <p class="artist">Artist: Elijah Walton</p>
            </div>
        </div>

        <div class="box box-7">
            <div class="frame">
                <img src="../images/the-river-servern-at-shrewsbury.jpeg" alt="">
            </div>
            <div>
                <p class="era">1770</p>
                <p class="title">The River Severn at Shrewsbury</p>
                <p class="artist">Artist: Paul Sandby</p>
            </div>
        </div>

        <div class="box box-8">
            <div class="frame">
                <img src="../images/sea-lions.jpeg" alt="">
            </div>
            <div>
                <p class="era">1788</p>
                <p class="title">Monte Civetta</p>
                <p class="artist">Artist: Charles Collins</p>
            </div>
        </div>
    </div>
</section>

<?php require __DIR__ . ('/footer.php'); ?>