<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo PAGE_TITLE; ?></title>
    <?php wp_head(); ?>
</head>
<body>

<div class="container" data-padding="tiny" data-color="tan">
    <div class="row">
        <div class="column">
            <nav>
                <img src="<?php echo get_template_directory_uri(); ?>/dist/img/logo.svg">

                <?php
                wp_nav_menu(array(
                    'theme-location' => 'my-custom-menu',
                    'container_class' => 'uber-nav-menu'));
                ?>
            </nav>
        </div>
    </div>
</div>



