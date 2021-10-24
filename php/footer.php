<footer>
    <div class="separator footer"></div>
    <div class="contact-us">
        <h2>Do you want to collaborate with us?</h2>
        <a href="mailto:#">
            Submit your work
        </a>
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
