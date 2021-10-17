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
                <p>17th century</p>
                <p class="title">Festive Gathering</p>
            </div>
        </div>

        <div class="box box-3">
            <div class="frame">
                <img src="../images/hope-comforting-love.jpeg" alt="">
            </div>
            <div class="">
                <p>1901</p>
                <p class="title">Hope Comforting Love</p>
            </div>
        </div>

        <div class="box box-4">
            <div class="frame">
                <img src="../images/the-grotto-at-posillipo.jpeg" alt="">
            </div>
            <div>
                <p>1754</p>
                <p class="title">The Grotto at Posillipo</p>
            </div>
        </div>

        <div class="box box-5">
            <div class="frame">
                <img src="../images/banquet-still-life.jpeg" alt="">
            </div>
            <div>
                <p>1664</p>
                <p class="title">Banquet Still Life</p>
            </div>
        </div>

        <div class="box box-6">
            <div class="frame">
                <!-- IMG -->
            </div>
            <div>
                <p>Era</p>
                <p class="title">Title</p>
            </div>
        </div>

        <div class="box box-7">
            <div class="frame">
                <!-- IMG -->
            </div>
            <div>
                <p>Era</p>
                <p class="title">Title</p>
            </div>
        </div>

        <div class="box box-8">
            <div class="frame">
                <!-- IMG -->
            </div>
            <div>
                <p>Era</p>
                <p class="title">Title</p>
            </div>
        </div>
    </div>
</section>

<?php require __DIR__ . ('/footer.php'); ?>