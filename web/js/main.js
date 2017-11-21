/*
$(window).on('scroll', function () {
    var scrollTop = $(window).scrollTop();
    if (scrollTop > 20) {
        $('#header').stop().animate({height: "170"},5);

        $('#titleHeader').stop().fadeOut(50);
    }
    else {
        $('#header').stop().animate({height: "400"},5);

        $('#titleHeader').stop().fadeIn(50);
    }
});
*/

$(document).ready(function () {

    $("textarea").attr("maxlength", 1200);

    //Swiper
    var swiper = new Swiper ('.swiper-container', {
        // Optional parameters
        loop: true,
        spaceBetween: 30,
        hashNavigation: {
            watchState: true
        },

        // If we need pagination
        pagination: {
            el: '.swiper-pagination',
            clickable: true
        },

        // Navigation arrows
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev'
        },

        // And if we need scrollbar
        scrollbar:{
            el: '.swiper-scrollbar'
        }
    });

//NavBar
    /* $("#navbar").sticky({topSpacing: 150, zIndex: 6});*/
    /*$("#search").sticky({topSpacing: 0, zIndex: 6,getWidthFrom: "500px", center: true});*/

    //CAROUSSEL
    $('#myCarousel').carousel({
        interval: 5000
    });

    //Limit Checkbox
    var cb = document.querySelectorAll("[class=check-limit]");
    var i = 0,
        l = cb.length;
    for (; i < l; i++)
        cb[i].addEventListener("change", function () {
            if (document.querySelectorAll(":checked").length > 3)
                this.checked = false;
        }, false);

    //Modal de connection
    $('#formConnect').on('shown.bs.modal', function () {
        $('#myInput').focus()
    });
});

function showImg(idimg, img) {
    document.getElementById(idimg).setAttribute('src', img);
}

function hideImg(idimg, img) {
    document.getElementById(idimg).setAttribute('src', img);
}

