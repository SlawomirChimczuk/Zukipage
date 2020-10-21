 
    <footer>
        <div class="footer-wrap">
            <div class="footer-content">
                <p>Copyright</p>
                <p>2019 © ZukiTextileStudio</p>
            </div>
        </div>
    </footer>

    <? wp_footer(); ?>

    <script src="<?php bloginfo('template_directory'); ?>/js/jquery.min.js" type="text/javascript"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/owl.carousel.js" type="text/javascript"></script>
    <script type="text/javascript">

        $('.home-carousel-img').owlCarousel({
            loop:true,
            margin:10,
            nav:false,
            autoplay:true,
            autoplayTimeout:4000,
            responsive:{
                0:{
                    items:1
                }
            }
        });


        $('.home-rotator-img').owlCarousel({
            loop:true,
            margin:10,
            nav:false,
            autoplay:true,
            autoplayTimeout:4000,
            responsive:{
                0:{
                    items:1
                },
                768:{
                    items:2
                },
                1024:{
                    items:3
                }
            }
        });
    </script>

    </body>
</html>