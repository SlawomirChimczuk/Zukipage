// JAvaScript file
(function ($) {

    //all functions
    const App = {
        init: function () {
            App.menuAnimation();
            App.stickyNav();
            App.slideOutElements();
            App.galleryModal();
            App.formAnimation();
        },

        // Hamburger animation
        menuAnimation: () => {

            const menuBurger = document.querySelector('.menu-cover');
            const shadowBackground = document.querySelector('.slideout-fade');
            const elementsUnactive = document.querySelectorAll('.unactive');
            const menuBtns = [menuBurger, shadowBackground];

            menuBtns.forEach(element => element.addEventListener('click', () => elementsUnactive.forEach(e => e.classList.toggle('is-active'))));
        },

        // sticky nav animation
        stickyNav: () => {
            const $navbar = $("nav"),
                yAxis = $navbar.offset().top,
                heightTop = $navbar.height();

            $(document).scroll(function () {
                const scrollTop = $(this).scrollTop();

                if (scrollTop > yAxis + heightTop) {
                    $navbar.addClass("navbar-fixed").animate({
                        top: 0
                    });
                } else if (scrollTop <= yAxis + heightTop) {
                    $navbar.removeClass("navbar-fixed").clearQueue().animate({
                        top: "-50px"
                    }, 0);
                }
            });
        },

        // Slide out elements animation
        slideOutElements: () => {
            $(document).on('scroll', function () {
                const windowHeight = $(window).height();
                const scrollValue = $(this).scrollTop();

                const myArrow = ['.fa-angle-down'];
                const tableOfClass = ['.home-page-top_img > img', '.home-page-top_text_wrap > h2', '.home-page-top_text_wrap > p', '.home-page-top_text_wrap > a > button', '.main-img', '.home-page-carousel-text_wrap > h2', '.home-page-carousel-text_wrap > p', '.home-page-carousel-text_wrap > a > button', '.home-page-carousel_wrap', '.carousel-info', '.home-page-rotator_wrap'];

                if ($(".fa-angle-down")[0]) myArrow.forEach(element => {
                    const accesFromTop = $(element).offset().top;
                    const accesHeight = $(element).outerHeight() - 300;

                    if (scrollValue > accesFromTop + accesHeight - windowHeight) $(element).addClass('home-img-hide');
                    if (scrollValue < 50) $(element).removeClass('home-img-hide');
                });

                if ($("#home")[0]) tableOfClass.forEach(element => {
                    const accesFromTop = $(element).offset().top;
                    const accesHeight = $(element).outerHeight() - 300;

                    if (scrollValue > accesFromTop + accesHeight - windowHeight) $(element).addClass('home-img-show');
                    if (scrollValue < 50) $(element).removeClass('home-img-show');
                });
            });
        },

        //modal window gallery 
        galleryModal: () => {
            const patternImage = document.querySelectorAll('.pattern-detail img');

            patternImage.forEach(ele => ele.addEventListener('click', (element) => {

                //Creating Parent Div
                const modalElement = document.createElement('div');
                const modalParent = document.querySelector('.pattern-detail');
                modalParent.append(modalElement);
                modalElement.className = 'pattern-bg-shadow modal';

                //Creating Child Div
                const parentElement = document.querySelector('.pattern-bg-shadow');
                const childImgElement = document.createElement('img');
                parentElement.append(childImgElement);
                childImgElement.className = 'full-img modal';
                childImgElement.setAttribute("src", "");

                //Displaying modal img src and closing
                setTimeout(() => {
                    //Displaying modal img
                    const myModal = document.querySelectorAll('.modal');
                    const modalImage = document.querySelector('.full-img');
                    myModal.forEach(e => e.classList.add('open'));
                    let modalImageSource = element.target.getAttribute("src");
                    modalImage.src = `${modalImageSource}`;

                    //closing modal on click
                    const modalBg = document.querySelector('.open');
                    modalBg.addEventListener('click', () => {
                        myModal.forEach(e => e.classList.remove('open'));
                        setTimeout(() => parentElement.remove(), 200);
                    });

                    //closing modal esc
                    window.addEventListener('keydown', (e) => {
                        if (e.keyCode == '27') myModal.forEach(e => e.classList.remove('open'));
                        setTimeout(() => parentElement.remove(), 200);
                    });
                }, 10);
            }));
        },

        //form text animation
        formAnimation: () => {
            $(window).load(function () {
                $(".wpcf7-form-control-wrap .wpcf7-text").val("");

                $(".wpcf7-form-control-wrap .wpcf7-text,.wpcf7-form-control-wrap textarea").focus(function () {
                    if ($(this).val() == "") {
                        $(this).parent().prev().addClass("has-content");
                        $(this).css("border-bottom-color", "#1C5860");
                    }
                });

                $(".wpcf7-form-control-wrap .wpcf7-text,.wpcf7-form-control-wrap textarea").focusout(function () {
                    if ($(this).val() == "") {
                        $(this).parent().prev().removeClass("has-content");
                        $(this).css("border-bottom-color", "#ebcabb");
                    }
                });
            });
        }

    };

    $(function () {
        App.init();
    });

})(jQuery, undefined);