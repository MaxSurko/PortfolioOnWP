/*global jQuery, jQuery, alert*/

//scrolling animation

jQuery(document).on('click', 'ul.nav a', function (event) {
    "use strict";
    event.preventDefault();

    jQuery('html, body').animate({
        scrollTop: jQuery(jQuery.attr(this, 'href')).offset().top
    }, 700);

});

//changing color of menu elements when scrolling

jQuery(function () {
    "use strict";
    jQuery(window).bind('scroll', function () {
        jQuery('.anchor').each(function () {
            var anchored = jQuery(this).attr("id"),
                position = jQuery(this).position().top - jQuery(window).scrollTop(),
                targetOffset = jQuery(this).offset().top - 500;

            if (jQuery(window).scrollTop() > targetOffset) {

                jQuery('ul.nav li').find('a').removeClass("active");
                jQuery('ul.nav').find(('*[data-anchor="' + anchored + '"]')).addClass("active");
            }
        });
    });
});