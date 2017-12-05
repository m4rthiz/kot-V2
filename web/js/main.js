$(document).ready(function () {
    $(".logoSmall").hide();

    /**************FIXED NAV**************/
    $(window).scroll(function () {

        var height = $(this).scrollTop();

        if (height >= 215) {
            $('nav').addClass('fixed');
            $('.article').css('margin-top', '60px')
            $(".logoSmall").show();
        } else {
            $('nav').removeClass('fixed');
            $('.article').css('margin-top', '0px')
            $(".logoSmall").hide();
        }
    });
});
