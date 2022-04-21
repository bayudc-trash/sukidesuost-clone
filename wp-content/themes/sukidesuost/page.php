<?php get_header() ?>
<div class="post">
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post() ?>
            <h1>
                <?php the_title() ?>
            </h1>
            <div class="content">
                <?php the_content() ?>
            </div>
        <?php endwhile ?>
    <?php endif ?>
</div>
<?php get_footer() ?>