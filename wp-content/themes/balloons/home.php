<?php
/*
Template Name: Home
*/
?>
<?php get_header(); ?>
<main>
    <section class="section-about">
        <div class="text-align-center margin-bottom-80px">
            <h2 class="title-secondary"><?php the_field('about_title'); ?></h2>
        </div>
        <div class="row">
            <div class="col-1-of-2">
                <h3 class="title-third margin-bottom-10px"><?php the_field('about_title_1'); ?></h3>
                <p class="paragraph margin-bottom-30px"><?php the_field('about_desc_1'); ?></p>
                <h3 class="title-third margin-bottom-10px"><?php the_field('about_title_2'); ?></h3>
                <p class="paragraph margin-bottom-50px"><?php the_field('about_desc_2'); ?></p>
                <a href="#" class="btn-text">Read more &rarr;</a>
            </div>
            <div class="col-1-of-2">
                <div class="composition">
                    <img src="<?php the_field('about_img_1'); ?>" alt="Photo-ballons-1" class="composition__photo composition__photo_n1">
                    <img src="<?php the_field('about_img_2'); ?>" alt="Photo-ballons-2" class="composition__photo composition__photo_n2">
                    <img src="<?php the_field('about_img_3'); ?>" alt="Photo-ballons-3" class="composition__photo composition__photo_n3">
                </div>
            </div>
        </div>
    </section>
    <section class="section-adventure">
        <div class="row">
            <div class="col-1-of-4">
                <div class="adventure-card"><i class="adventure-card__icon icon-Vector-3 margin-bottom-30px"></i>
                    <h3 class="title-third margin-bottom-10px"><?php the_field('adv_card_title-1'); ?></h3>
                    <p class="paragraph"><?php the_field('adv_card_desc_1'); ?></p>
                </div>
            </div>
            <div class="col-1-of-4">
                <div class="adventure-card"><i class="adventure-card__icon icon-Vector-2 margin-bottom-30px"></i>
                    <h3 class="title-third margin-bottom-10px"><?php the_field('adv_card_title-2'); ?></h3>
                    <p class="paragraph"><?php the_field('adv_card_desc_2'); ?></p>
                </div>
            </div>
            <div class="col-1-of-4">
                <div class="adventure-card"><i class="adventure-card__icon icon-Vector margin-bottom-30px"></i>
                    <h3 class="title-third margin-bottom-10px"><?php the_field('adv_card_title-3'); ?></h3>
                    <p class="paragraph"><?php the_field('adv_card_desc_3'); ?></p>
                </div>
            </div>
            <div class="col-1-of-4">
                <div class="adventure-card"><i class="adventure-card__icon icon-Vector-1 margin-bottom-30px"></i>
                    <h3 class="title-third margin-bottom-10px"><?php the_field('adv_card_title-4'); ?></h3>
                    <p class="paragraph"><?php the_field('adv_card_desc_4'); ?></p>
                </div>
            </div>
        </div>
    </section>
    <section class="section-tour">
        <div class="text-align-center margin-bottom-80px">
            <h2 class="title-secondary"><?php the_field('tour_title'); ?></h2>
        </div>
        <div class="row">
            <div class="col-1-of-3">
                <div class="card-tour">
                    <div class="card-tour__side card-tour__side_front">
                        <div class="card-tour__img card-tour__img_1 margin-bottom-50px"></div>
                        <h4 class="card-tour__title">
                            <span class="card-tour__span card-tour__span_1">
                                <?php the_field('card_tour_title_up_1'); ?>
                            </span><br><span class="card-tour__span card-tour__span_2">
                                <?php the_field('card_tour_title_down_1'); ?>
                            </span>
                        </h4>
                        <div class="card-tour__descr">
                            <?php the_field('card_tour_desc_1'); ?>
                        </div>
                    </div>
                    <div class="card-tour__side card-tour__side_back">
                        <div class="card-tour__backSide-box">
                            <p class="card-tour__text card-tour__text_1">Full price:</p>
                            <p class="card-tour__text card-tour__text_2"><?php the_field('card_tour_price_1'); ?></p>
                            <a href="#" class="btn btn_animated">Reserve</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-1-of-3">
                <div class="card-tour">
                    <div class="card-tour__side card-tour__side_front">
                        <div class="card-tour__img card-tour__img_2 margin-bottom-50px"></div>
                        <h4 class="card-tour__title">
                            <span class="card-tour__span card-tour__span_1">
                                <?php the_field('card_tour_title_up_2'); ?>
                            </span><br>
                            <span class="card-tour__span card-tour__span_2">
                                <?php the_field('card_tour_title_down_2'); ?>
                            </span>
                        </h4>
                        <div class="card-tour__descr">
                        <?php the_field('card_tour_desc_2'); ?>
                        </div>
                    </div>
                    <div class="card-tour__side card-tour__side_back">
                        <div class="card-tour__backSide-box">
                            <p class="card-tour__text card-tour__text_1">Full price:</p>
                            <p class="card-tour__text card-tour__text_2"><?php the_field('card_tour_price_2'); ?></p>
                            <a href="#" class="btn btn_animated">Reserve</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-1-of-3">
                <div class="card-tour">
                    <div class="card-tour__side card-tour__side_front">
                        <div class="card-tour__img card-tour__img_3"></div>
                        <h4 class="card-tour__title">
                            <span class="card-tour__span card-tour__span_1">
                                <?php the_field('card_tour_title_up_3'); ?>
                            </span><br>
                            <span class="card-tour__span card-tour__span_2">
                            <?php the_field('card_tour_title_down_3'); ?>
                            </span>
                        </h4>
                        <div class="card-tour__descr">
                        <?php the_field('card_tour_desc_3'); ?>
                        </div>
                    </div>
                    <div class="card-tour__side card-tour__side_back">
                        <div class="card-tour__backSide-box">
                            <p class="card-tour__text card-tour__text_1">Full price:</p>
                            <p class="card-tour__text card-tour__text_2"><?php the_field('card_tour_price_3'); ?></p>
                            <a href="#" class="btn btn_animated">Reserve</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-align-center"><a href="#" class="btn btn_brown btn_animated">Reserve</a></div>
    </section>
    <section class="section-feedBack">
        <div class="bg-gradient"></div><video class="bg-video" autoplay muted loop>
            <source src="<?php bloginfo('template_url'); ?>/assets/img/Hot air balloons-1.mp4">
            <source src="<?php bloginfo('template_url'); ?>/assets/img/Hot air balloons-1.webm">
        </video>
        <div class="text-align-center margin-bottom-80px">
            <h2 class="title-secondary title-secondary_white"><?php the_field('feedback_title'); ?></h2>
        </div>
        <div class="row">
            <div class="feedBack-card">
                <figure class="feedBack-card__img"><img src="<?php the_field('fb_card_img_1'); ?>" alt="persone">
                    <figcaption class="feedBack-card__name"><?php the_field('fb_card_name_1'); ?></figcaption>
                </figure>
                <div class="feedBack-card__box">
                    <h3 class="title-third margin-bottom-10px"><?php the_field('fb_card_title_1'); ?></h3>
                    <p class="paragraph"><?php the_field('fb_title_desc_1'); ?></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="feedBack-card">
                <figure class="feedBack-card__img"><img src="<?php the_field('fb_card_img_2'); ?>" alt="persone">
                    <figcaption class="feedBack-card__name"><?php the_field('fb_card_name_2'); ?></figcaption>
                </figure>
                <div class="feedBack-card__box">
                    <h3 class="title-third margin-bottom-10px"><?php the_field('fb_card_title_2'); ?></h3>
                    <p class="paragraph"><?php the_field('fb_title_desc_2'); ?></p>
                </div>
            </div>
        </div>
        <div class="text-align-center"><a href="#" class="btn btn_animated">Reserve</a></div>
    </section>
    <section class="section-book">
        <div class="row">
            <div class="book">
                <div class="book_form">
                    <form action="#" class="form">
                        <div class="text-align-center margin-bottom-30px">
                            <h2 class="title-secondary">Book a tour</h2>
                        </div>
                        <?php echo do_shortcode('[contact-form-7 id="92cc8ae" title="Contact form"]') ?>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>