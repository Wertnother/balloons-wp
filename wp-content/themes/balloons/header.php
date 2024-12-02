<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Ballons</title>

    <?php wp_head(); ?>
</head>

<body>
    <div class="container">
        <div class="navigation"><input type="checkbox" class="navigation__toggle" id="navi-toggle"> <label for="navi-toggle" class="navigation__button">
                <div class="navigation__icon"></div>
            </label>
            <div class="navigation__background"></div>
            <nav class="navigation__nav">
                <ul class="navigation__list">
                    <li class="navigation__item"><a href="#" class="navigation__link">about us</a></li>
                    <li class="navigation__item"><a href="#" class="navigation__link">discounts</a></li>
                    <li class="navigation__item"><a href="#" class="navigation__link">best tours</a></li>
                    <li class="navigation__item"><a href="#" class="navigation__link">price calculator</a></li>
                    <li class="navigation__item"><a href="#" class="navigation__link">contact us</a></li>
                </ul>
            </nav>
        </div>
        <header class="header">
            <div class="header__logo"><?php the_custom_logo(); ?></div>
            <div class="header__box">
                <h1 class="title-first">
                    <span class="title-first__main">
                    <?php the_field('main_title'); ?>
                    </span> 
                    <span class="title-first__secondary">
                        <?php the_field('subtitle'); ?>
                    </span>
                </h1>
                <a href="#" class="btn btn_animated">Our catalog</a>
            </div>
        </header>