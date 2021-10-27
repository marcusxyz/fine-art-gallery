<footer>
    <div class="separator footer"></div>
    <div class="contact-us">
        <h2><?= $submits['title']; ?></h2>
        <a href="<?= $submits['link']; ?>"><?= $submits['button-text']; ?></a>
    </div>
    <div class="separator footer"></div>
    <div class="links-and-copyright">
        <ul>
            <?php foreach ($socials as $social) : ?>
                <li>
                    <a href="#"><?= $social; ?></a>
                </li>
            <?php endforeach; ?>
        </ul>
        <p class="contact"><?= $footerContact; ?> <a href="<?= $contacts['hello@gallerydept.com']; ?>"><?= $mail; ?></a></p>
        <p>&copy; <?= date('Y') ?></p>
    </div>
</footer>
</body>

</html>
