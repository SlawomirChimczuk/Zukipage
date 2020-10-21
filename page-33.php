<?php get_header(); ?>

<section class="home" id="home">

    <div class="home-page">

        <div class="home-page-bg">
            <img src="<?php the_field('home_page_background') ?>">
            <div class="home-page-bg_text">
                <?php the_field('home_page_title') ?>
            </div>
            <div class="arrow">
                <i class="fas fa-angle-down"></i>
            </div>
        </div>

        <div class="home-silder"></div>

        <div class="home-page-top">
            <div class="home-page-top_img">
                <img src="<?php the_field('home_page_square_flowers') ?>" alt="flowers">
            </div>
            <div class="home-page-top_text">
                <div class="home-page-top_text_wrap">
                    <h2><?php the_field('heading_cooperation') ?></h2>
                    <p><?php the_field('cooperation_informations') ?></p>
                    <a href="http://zukitextilestudio.pl/index.php/o-mnie/"><button type="button">Wiecej</button></a>
                </div>
            </div>
        </div>

        <div class="home-page-author">
            <img class="background-img" src="<?php the_field('home_page_background_4') ?>" alt="flower-pattern">
            <div class="home-page-author_left"></div>
            <div class="home-page-author_right">
                <img class="main-img" src="<?php the_field('author_image') ?>" alt="Zuzanna Kielbasa">
            </div>
        </div>

        <div class="home-page-carousel">
            <div class="home-page-carousel_wrap">
                <div class="owl-carousel owl-theme home-carousel-img">
                    <div class="item">
                        <img src="<?php the_field('carousel_image_1') ?>">
                    </div>
                    <div class="item">
                        <img src="<?php the_field('carousel_image_2') ?>">
                    </div>
                    <div class="item">
                        <img src="<?php the_field('carousel_image_3') ?>">
                    </div>
                    <div class="item">
                        <img src="<?php the_field('carousel_image_4') ?>">
                    </div>
                    <div class="item">
                        <img src="<?php the_field('carousel_image_5') ?>">
                    </div>
                    <div class="item">
                        <img src="<?php the_field('carousel_image_6') ?>">
                    </div>
                </div>
                <div class="carousel-info">
                    <h5><?php the_field('carousel_info') ?></h5>
                    <p><?php the_field('carousel_info_more') ?></p>
                    <div class="carousel-info-line"></div>
                </div>
            </div>
            <div class="home-page-carousel-text">
                <div class="home-page-carousel-text_wrap">
                    <h2><?php the_field('carousel_heading') ?></h2>
                    <p><?php the_field('carousel_information') ?></p>
                    <a href="http://zukitextilestudio.pl/index.php/portfolio/"><button type="button">Zapytaj o login</button></a>
                </div>
            </div>
        </div>

        <div class="home-page-rotator">
            <h2><?php the_field('rotator_head') ?></h2>
            <img class="background-img" src="<?php the_field('rotator_bg') ?>" alt="flower-pattern">
            <div class="home-page-rotator_wrap">
                <div class="owl-carousel owl-theme home-rotator-img">
                    <div class="item">
                        <img src="<?php the_field('rotator_img_1') ?>">
                    </div>
                    <div class="item">
                        <img src="<?php the_field('rotator_img_2') ?>">
                    </div>
                    <div class="item">
                        <img src="<?php the_field('rotator_img_3') ?>">
                    </div>
                    <div class="item">
                        <img src="<?php the_field('rotator_img_4') ?>">
                    </div>
                    <div class="item">
                        <img src="<?php the_field('rotator_img_5') ?>">
                    </div>
                    <div class="item">
                        <img src="<?php the_field('rotator_img_6') ?>">
                    </div>
                </div>    
            </div>
        </div>

        <?php 
            if ( have_posts() ) : 
                while ( have_posts() ) : the_post();
                    the_content();
                endwhile; 
            else: ?>
            <p>Sorry, no posts matched your criteria.</p>
        <?php endif; ?>

    </div>
    
</section>
    

<?php get_footer(); ?>