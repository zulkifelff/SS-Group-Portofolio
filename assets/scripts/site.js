jQuery(document).ready(function () {
    console.log("ready!");
    openLoader();
});

jQuery(window).on('scroll', function () {
    if (jQuery(window).scrollTop() > 10) {
        jQuery('.navbar').addClass('active');
    } else {
        jQuery('.navbar').removeClass('active');
    }
});

jQuery(window).on('load', function () {
    closeLoader();
});


function sendContact() {

}

function closeLoader() {
    jQuery('#loaderHolder').addClass('d-none');
}

function openLoader() {
    jQuery('#loaderHolder').removeClass('d-none');
}