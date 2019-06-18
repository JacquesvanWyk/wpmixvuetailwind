<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php the_title();?></title>
    <?php wp_head();?>

</head>
<body <?php body_class('border-t-8 border-teal-500');?>">
<header>
    <nav>
        <div class="container mx-auto px-4 max-w-4xl">
            <div class="bg-white shadow-lg rounded-lg md:flex justify-between">
                <div class="logo">
                    <img src="<?php bloginfo('template_url'); ?>/img/logo.png" alt="company Logo" width="100" height="1s00">
                </div>
                <div class="navlinks p-8">
                    <?php
                    wp_nav_menu(
                            array(
                                    'theme_location' => 'main-nav',
                                    'menu_class' => 'flex'
                            )
                    )
                    ?>
<!--                    <ul class="flex">-->
<!--                        <li class="px-2"><a href="/">Home</a></li>-->
<!--                        <li class="px-2"><a href="about">About</a></li>-->
<!--                        <li class="px-2"><a href="contact">Contact</a></li>-->
<!--                    </ul>-->
                </div>
            </div>
        </div>
    </nav>
</header>
