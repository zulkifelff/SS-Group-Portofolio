jQuery(document).ready(function () {
    console.log("ready!");
    new WOW().init();
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

function menuBarToggle()
{
    // setTimeout(function () {
    //     if(jQuery("#navbarHeader").hasClass("show"))
    //     {
    //         debugger;
    //         jQuery("#navbarHeader").addClass('fixed-header-bar');
    //         var heightOfNavbar=$('#navbarHeader').outerHeight();
    //         jQuery(".navbar").css({"top": heightOfNavbar});
    //         jQuery(".navbar").addClass('active');
    //     }
    //     else
    //     {
    //         jQuery("#navbarHeader").removeClass('fixed-header-bar');
    //         jQuery(".navbar").css({"top": 0});
    //         jQuery(".navbar").removeClass('active');
    //     }
    // }, 400);

    jQuery("html, body").animate({ scrollTop: 0 }, 'fast');
    return false;

    console.log('Something is pressed');



    // Upon Open



    // Upon Close
}