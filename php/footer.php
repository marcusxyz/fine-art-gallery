<footer>
    <div class="separator footer"></div>
    <div class="contact-us">
        <h2>Do you want to collaborate with us?</h2>
        <button>
            Submit your work
        </button>
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
        <p class="contact">For all questions: <a href="<?= $contacts['hello@gallerydept.com']; ?>">hello@gallerydept.com</a></p>
        <p>&copy; <?= date('Y') ?></p>
    </div>
</footer>
</body>

</html>
