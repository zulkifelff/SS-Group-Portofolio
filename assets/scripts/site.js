jQuery(document).ready(function () {
    console.log("ready!");
    new WOW().init();
    openLoader();
});

jQuery(window).on('scroll', function () {
    if (jQuery(window).scrollTop() > 0) {
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

function menuBarToggle()
{
    jQuery("html, body").animate({ scrollTop: 0 }, 'fast');
    return false;
    console.log('Something is pressed');

}

function seeCompanies()
{
    var elmnt = document.getElementById("our-companies");
    elmnt.scrollIntoView();
}

function redirectTo(incomingPageName)
{
    var baseURL=window.location.protocol + "//" + window.location.host+"/";
    window.open(baseURL+incomingPageName);
}