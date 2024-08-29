jQuery(document).ready( function($) {
    $('#nav-expand').on('touchstart click', function(e) {
        e.preventDefault();
        $('html').toggleClass('mobile-nav-menu-active');
        return false;
    });
});