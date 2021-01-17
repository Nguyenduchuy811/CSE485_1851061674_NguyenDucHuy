$(document).ready(function(){
    $('.rate_place_main').owlCarousel({
        margin:30,
        nav:true,
        dots:false,
        autoplay:true,
        autoplayTimeout:8000,
        autoplayHoverPause:false,
        autoplaySpeed:1000,
        navSpeed:1000,
        navigation:true,
        pagination:false,
        loop:true,
        responsive:{
            0:{
                items:1
            },
            1000:{
                items:4
            }
        }
    });

    $('.owl_cal_info_group').owlCarousel({
        margin:30,
        responsive:{
            0:{
                items: 2,
            }
        }
    });

    $('#banner_slide').owlCarousel({
        margin:0,
        nav:true,
        dots:false,
        autoplay:true,
        autoplayTimeout:8000,
        autoplayHoverPause:false,
        autoplaySpeed:1000,
        navSpeed:1000,
        navigation:true,
        pagination:false,
        loop:true,
        responsive:{
            0:{
                items:1
            }
        }
    });

    $('.thank_slide').owlCarousel({
        margin:10,
        nav:false,
        dots:true,
        autoplay:true,
        autoplayTimeout:8000,
        autoplayHoverPause:false,
        autoplaySpeed:1000,
        navSpeed:1000,
        navigation:true,
        pagination:false,
        loop:true,
        responsive:{
            0:{
                items:1
            }
        }
    });

    $('#sidebarCollapse').on('click', function () {
        $('#sidebar').toggleClass('active');
    });

});

