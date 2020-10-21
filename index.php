<?php get_header(); ?>

    <section class="pattern-detail">
        <div class="pattern-detail-top"> 
            <img src="<?php the_field('pattern_top_left') ?>">
            <img src="<?php the_field('pattern_top_middle') ?>">
            <img src="<?php the_field('pattern_top_right') ?>">
        </div>
        <div class="pattern-detail-middle"> 
            <div class="pattern-title"><?php the_field('pattern_title') ?></div>
            <div class="pattern-price"><span>Cena:</span><?php the_field('pattern_price') ?></div> 
            <div class="pattern-desc"><?php the_field('pattern_desc') ?></div> 
        </div>
    </section>

    <?php 
        if ( have_posts() ) : 
            while ( have_posts() ) : the_post();
                the_content();
            endwhile; 
        else: ?>
        <p>Sorry, no posts matched your criteria.</p>
    <?php endif; ?>


<?php get_footer(); ?>