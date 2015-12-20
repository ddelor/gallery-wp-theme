// var app = {

//     init: function($){
//         app.initSlider();
//         app.events();
//     },

//     initSlider: function($){
//         var auto = true;
//         var autostopped = false;

//         var homeSlider = jQuery(".home-slider").sudoSlider({
//             autoHeight:false,
//             speed:800,
//             touch:true,
//             numeric:true,
//             controlsAttr:'class="home-slider-pagination"',
//             prevNext:true,
//             continuous: true,
//             controlsFade:false,
//             auto:true,
//             pause:3000,
//             effect: "slide"
//         });
//     },

//     events: function() {

//         // TOGGLE EFFECTS
//         jQuery('.toggle-next').on('click', function(e) {
//             e.preventDefault();
//             jQuery(this).toggleClass('open');
//             jQuery(this).next().slideToggle();
//         });
//     }

// };

// jQuery(document).ready(function($){
//     app.init($);
// });

jQuery( document ).ready(function( $ ) {
    App = {

        initPlugins: function() {
            $('.fancybox').fancybox({
                helpers : {
                    title : {
                        type : 'outside'
                    },
                    wrap : {
                        css : {
                            'overflow' : 'hidden'
                        }
                    },
                    overlay : {
                        css : {
                            // 'background' : 'rgba(0, 0, 0, 0.9)'
                        }
                    }
                },
                padding : 0
            });
        },

        menu: function() {
            var $menuBtnIcon = $('.nav-menu .toggle-menu span');
            var $menu = $('.nav-menu');
            var $globalContent = $('.global-content');

            $(document).on('click', '.nav-menu .toggle-menu', function(e) {
                e.preventDefault();
                $(this).find('span').toggleClass('glyphicon-menu-hamburger glyphicon-remove');
                $menu.toggleClass('open');
                $globalContent.toggleClass('out');
            });

            $(document).on('click', '.global-content', function() {
                if ($menu.hasClass('open')) {
                    $menuBtnIcon.removeClass('glyphicon-remove').addClass('glyphicon-menu-hamburger');
                    $menu.removeClass('open');
                    $globalContent.removeClass('out');
                }
            });
        },


        events: function() {
            // Toggle content
            $('.toggle-next').on('click', function(e) {
                e.preventDefault();
                $(this).toggleClass('open');
                $(this).next().slideToggle();
            });
        },

        slider: function() {
            // Slider
            // if ($('.slider').length == 1) {
            //     var $slides = $('.slider .slides .slide');

            //     $(document).on('click', '.slider .paginator a', function(e) {
            //         e.preventDefault();
            //         var index = $(this).parent().index();
            //         $('.slider .paginator a').removeClass('begin').removeClass('selected');
            //         $(this).addClass('selected');
            //         $slides.fadeOut('slow');
            //         setTimeout(function() {
            //             $slides.eq(index).fadeIn('slow');
            //         }, 500);
            //     });

            // }

            var homeSlider = jQuery(".home-slider").sudoSlider({
                autoHeight:false,
                speed:800,
                touch:true,
                numeric:true,
                controlsAttr:'class="home-slider-pagination"',
                prevNext:true,
                continuous: true,
                controlsFade:false,
                auto:true,
                pause:3000,
                effect: "slide"
            });
        },

        init: function() {
            // this.initPlugins();
            this.menu();
            this.events();
            // this.slider();
        }
    };

    App.init();

});
