<?php get_header(); ?>

<div class="studio-about">
    <div class="about-wrap">
        <h1>Studio</h1>
        <div class="hr-line"></div>
    </div>

    <?php 
        if ( have_posts() ) : 
            while ( have_posts() ) : the_post();
                the_content();
            endwhile; 
        else: ?>
        <p>Sorry, no posts matched your criteria.</p>
    <?php endif; ?>

    <div class="studio-about-bottom">
        <img class="bottom-bg" src="<?php the_field('studio_img_1') ?>" alt="flower-pattern">
        <div class="bottom_left">
            <img class="main-img" src="<?php the_field('studio_img_2') ?>" alt="Zuzanna Kielbasa">   
        </div>
        <div class="bottom_right">
            <img class="main-img" src="<?php the_field('studio_img_3') ?>" alt="Zuzanna Kielbasa">
        </div>
    </div>

</div>

<?php get_footer(); ?>