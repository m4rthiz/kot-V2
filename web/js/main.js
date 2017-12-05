$(document).ready(function () {
    $(".logoSmall").hide();

    /**************FIXED NAV**************/
    $(window).scroll(function () {

        var height = $(this).scrollTop();

        if (height >= 215) {
            $('nav').addClass('fixed');
            $('.content').css('margin-top', '65px')
            $(".logoSmall").show();
        } else {
            $('nav').removeClass('fixed');
            $('.content').css('margin-top', '0px')
            $(".logoSmall").hide();
        }
    });
});
/*
rubik = {
    misc:{
        navbar_menu_visible: 0
    },
initAnimationsCheck: function(){

    $('[class*="add-animation"]').each(function(){
        offset_diff = 30;
        if($(this).hasClass('title')){
            offset_diff = 110;
        }

        var waypoints = $(this).waypoint(function(direction) {
            if(direction == 'down'){
                $(this.element).addClass('animate');
            } else {
                $(this.element).removeClass('animate');
            }
        }, {
            offset: window_height - offset_diff
        });
    });

},
.animated {
  -webkit-animation-duration: 5s;
  animation-duration: 5s;
  -webkit-animation-fill-mode: both;
  animation-fill-mode: both;
}

*/
