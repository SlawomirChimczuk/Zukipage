<?php get_header(); ?>

<div class="catalog">

    <div class="about-wrap">
        <h1>Katalog Wzorów</h1>
        <div class="hr-line"></div>
    </div>
    
    <div class="page-bg">
        <img src="<?php the_field('catalog_page_background') ?>">
        <div class="page-bg_text">
            <?php the_field('catalog_page_title') ?>
        </div>
        <div class="arrow">
            <i class="fas fa-angle-down"></i>
        </div>
    </div>

    <section>
        <?php
            $gallery_images = CFS()->get('gallery_loop');
                if($gallery_images){
                    foreach ($gallery_images as $image) {
                        echo '<div class="gallery">' . '<div class="gallery_wrapper">' . '<a class="gallery-link" href="">' . '<img class="gallery-item-main" src="'.$image["gallery_images"].'"/>';
                        echo '<img class="gallery-item-secondary" src="'.$image["gallery_images_sub"].'"/>' . '</a>' . '</div>' . '<div class="gallery-info">' . '<div class="name">'.$image["gallery_images_text"].'</div>' . '</div>' . '</div>';
                }
            }
        ?>
    </section>
    
    <?php 
        if ( have_posts() ) : 
            while ( have_posts() ) : the_post();
                the_content();
            endwhile; 
        else: ?>
        <p>Sorry, no posts matched your criteria.</p>
    <?php endif; ?>
    
</div>
    

<?php get_footer(); ?>