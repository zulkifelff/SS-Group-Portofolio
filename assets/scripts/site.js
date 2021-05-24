jQuery( document ).ready(function() {
    console.log( "ready!" );
});

jQuery(window).on('scroll', function () {
    if ( jQuery(window).scrollTop() > 10 ) {
        jQuery('.navbar').addClass('active');
    } else {
        jQuery('.navbar').removeClass('active');
    }
});

function sendContact() {

}