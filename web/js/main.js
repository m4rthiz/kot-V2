$(document).ready(function () {
    $(".logoSmall").hide();

    /**************FIXED NAV**************/
    $(window).scroll(function () {

        var height = $(this).scrollTop();

        if (height >= 215) {
            $('nav').addClass('fixed');
            $(".logoSmall").show();
        } else {
            $('nav').removeClass('fixed');
            $(".logoSmall").hide();
        }
    });
});
