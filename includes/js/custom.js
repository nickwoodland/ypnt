jQuery( document ).ready( function( $ ) {

        var win_height      = $(window).height();
        var banner_height   = $('.site-header').height();
        var button_height   = $('.js-smooth-scroll').outerHeight();
        var hero_banner     = $('.above-the-fold');
        var target_height   = 0;

        // Force minimum height of the banner
        // Small viewports cause layout to break
        target_height   = (win_height - banner_height < 400) ? '400' : win_height - (banner_height + button_height - 24 );

        // Force banner height to be height of window minus height of site banner "header"
        hero_banner.css('height', target_height);
} );

jQuery(document).ready(function( $ ){
    $('body').on("click", ".js-smooth-scroll", function(e) {
        e.preventDefault();

        var target = $( $(this).attr('href') );

        var fudgeFactor = $(this).data('scroll-fudge-factor') || 0;

        jQuery('html, body').stop().animate({
            scrollTop: target.offset().top + fudgeFactor,
            easing: "swing",
            queue: false
        }, 2000);
        
    });
});