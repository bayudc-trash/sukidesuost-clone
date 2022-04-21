<?php get_header() ?>
<div class="post">
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post() ?>
            <h1><?php the_title() ?></h1>
            <p class="info">Posted at <?php the_time('d F Y') ?>, in <?php the_category(',', 'div') ?></p>
            <?php if (get_the_post_thumbnail_url()) : ?>
                <div class="thumbnail">
                    <img src="<?= get_the_post_thumbnail_url() ?>" alt="">
                </div>
            <?php endif ?>
            <div class="content">
                <?php the_content() ?>
            </div>
            <div class="tags">
                <?php the_tags(null, '', '') ?>
            </div>
        <?php endwhile ?>
    <?php endif ?>

</div>
<?php get_footer() ?>