$(document).ready(function(){

    $('.owl-carousel-top').owlCarousel({
        items: 1,
        margin: 30,
        loop: false,
        nav: false,
        responsive:{
            0:{
                items:1
            }
        },
        autoplay: false,
        dots: false

    });

    $('.owl-carousel-popular').owlCarousel({
        items: 5,
        margin: 10,
        loop: false,
        nav: false,
        responsive:{
            0:{
                items:5
            }
        },
        autoplay: false,
        dots: true

    });

    $('.owl-carousel-latest').owlCarousel({
        items: 4,
        margin: 10,
        loop: false,
        nav: false,
        responsive:{
            0:{
                items:4
            }
        },
        autoplay: false,
        dots: true

    });

    $("#fa-user").on('click',function(e){
        e.preventDefault();
        $('.user-options').toggle();
    });

    $('#login-form').on('submit',function(e){
        e.preventDefault();
    });

    $('#login').on('click',function(e){
        e.preventDefault();
        $('.user-options').hide();
        $('.login-popup').show();
    });

    $('.close').on('click',function(){
        $('.login-popup').hide();
    });
    $('.single').okzoom({
        width: 200,
        height: 200,
        round: true,
        background: "#fff",
        backgroundRepeat: "repeat",
        shadow: "0 0 5px #000",
        border: "1px solid black"
    });
});