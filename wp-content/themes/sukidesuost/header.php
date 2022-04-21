<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= get_bloginfo('name') ?> - <?= get_bloginfo('description')  ?></title>
    <?php wp_head() ?>
</head>

<body>
    <div class="container">
        <header>
            <a href="<?= get_site_url() ?>">
                <img src="https://sukidesuost.info/wp-content/uploads/2021/02/LOGO7-1.png" alt="">
            </a>
            <?php wp_nav_menu(['theme_location' => 'header', 'container' => 'nav']) ?>
        </header>
        <main>