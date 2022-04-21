<?php get_header() ?>
<div class="search">
    <ul>
        <?php dynamic_sidebar('sidebar-1') ?>
    </ul>
    <br>
    <h2>Search result for "<?php the_search_query() ?>"</h2>
</div>
<div class="posts">
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post() ?>
            <?php if (is_search() && $post->post_type == 'page') continue; ?>
            <div class="card">
                <div class="head">
                    <a href="<?php the_permalink() ?>">
                        <img class="img" src="<?= get_the_post_thumbnail_url() ? get_the_post_thumbnail_url() :  get_template_directory_uri() . '/img/defaultart.jpg' ?>" alt="">
                    </a>
                    <div class="tag"><?= get_the_category()[0]->name ?></div>
                </div>
                <div class="body">
                    <div class="title">
                        <a href="<?php the_permalink() ?>">
                            <?php the_title() ?>
                        </a>
                    </div>
                    <div class="date">
                        <?php the_time('d F Y') ?>
                    </div>
                </div>
            </div>
        <?php endwhile ?>
    <?php endif ?>
</div>
<div class="pagination">
    <?php the_posts_pagination() ?>
</div>
<?php get_footer() ?>