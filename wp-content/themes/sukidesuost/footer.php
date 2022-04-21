</main>
<?php get_sidebar(); ?>

<footer>
    <p>
        Copyright&copy;<?= date('Y') ?> <?= get_bloginfo('name') ?>
    </p>
    <?php wp_nav_menu(['theme_location' => 'footer', 'container' => 'nav']) ?>
</footer>
</div>
<?php wp_footer() ?>
</body>

</html>