jQuery( document ).ready( function( $ ) {

        var win_height      = $(window).height();
        var banner_height   = $('.site-header').height();
        var hero_banner     = $('.above-the-fold');
        var target_height   = 0;

        // Force minimum height of the banner
        // Small viewports cause layout to break
        target_height   = (win_height - banner_height < 400) ? '400' : win_height - banner_height;

        // Force banner height to be height of window minus height of site banner "header"
        hero_banner.css('height', target_height);
} );
