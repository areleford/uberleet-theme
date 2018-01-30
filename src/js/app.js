// require all images for now so that for production they can be compressed with img loader
require.context('../img', true);

$(document).ready(() => {
    // Mobile Hamburger
    $("#hamburger").on('click', function() {
        $(this).toggleClass('open');
        $("#mobileNavLinks").slideToggle();
    });
});