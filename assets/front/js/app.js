var app = {

    init: function($){
        app.initSlider();
        app.events();
    },

    initSlider: function($){
        var auto = true;
        var autostopped = false;

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

    events: function() {

        // TOGGLE EFFECTS
        jQuery('.toggle-next').on('click', function(e) {
            e.preventDefault();
            jQuery(this).toggleClass('open');
            jQuery(this).next().slideToggle();
        });
    }

};

jQuery(document).ready(function($){
    app.init($);
});
