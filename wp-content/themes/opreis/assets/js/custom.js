$(document).ready(function () {

    $('[data-toggle="tooltip"]').tooltip();

	$('.writer_slider').owlCarousel({  
        margin:24,
        responsiveClass:true,
        nav: true,
        loop: true,
        autoplay: true,
        autoplayTimeout: 2000,
        autoplaySpeed: 2000,
        autoplayHoverPause:true,
        dots: false,
        navText: ["<img src='assets/images/left-arrow.svg'>","<img src='assets/images/right-arrow.svg'>"],
        responsive:{
            0:{
                items:1,               
            },
            576:{
                items:2,               
            },
            992:{
                items:2.5,              
           }
        }
    })

    $('.testimonial_slider').owlCarousel({ 
        stagePadding: 4, 
        margin:20,
        responsiveClass:true,
        nav: false,
        loop: true,
        autoplay: true,
        autoplayTimeout: 2000,
        autoplaySpeed: 2000,
        autoplayHoverPause:true,
        dots: true,
        responsive:{
            0:{
                items:1,               
            },
            576:{
                items:2,               
            },
            992:{
                items:3,              
           }
        }
    }) 

    

});



$(window).on('scroll', function () {
    stickyHeader()
});
function stickyHeader() {
    var sticky = $('header.sticky-header');
    var scrollFromtop = $(window).scrollTop();
    var scrollLimit = $('header').height() + 10;

    if (scrollFromtop < scrollLimit) {
        sticky.removeClass('sticky-on');
    } else {
        sticky.addClass('sticky-on');
    }
}

new WOW().init();