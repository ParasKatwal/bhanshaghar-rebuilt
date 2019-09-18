$(document).ready(function(){
    $('.menu-toggle').click(function(){
        $('nav').toggleClass('active')
    })
    $('a').click(function(){
    //alert("i am clicked");
    var selected = $(this);
    $('a').removeClass('active');
    $(selected).addClass('active');
    });
    document.getElementById('poplog').addEventListener('click', function(){
    document.querySelector('.login').style.display = 'flex';
     }); 
    document.querySelector('.close').addEventListener('click', function(){
    document.querySelector('.login').style.display = 'none'
    });
    $(window).on('scroll', function(){
    if($(window).scrollTop()) {
        $('nav').addClass('scroll');
        $('.search-box').addClass('scroll');
        $('.menu-toggle').addClass('scroll');

    }
    else {
        $('nav').removeClass('scroll');
        $('.search-box').removeClass('scroll');
        $('.menu-toggle').removeClass('scroll');
    }
    })
    $(window).on('scroll', function(){
        if($(window).scrollTop()) {
            $('nav').addClass('scroll');
            $('.menu-toggle').addClass('scroll');
        }
        else {
            $('nav').removeClass('scroll');
            $('.menu-toggle').removeClass('scroll');
        }
    })

    $('.quick_menu-slider').slick({
        infinite: true,
        slidesToShow: 6,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        responsive: [
            {
              breakpoint: 1024,
              settings: {
                slidesToShow: 5,
                slidesToScroll: 1,
                infinite: true,
                dots: true
              }
            },
            {
              breakpoint: 600,
              settings: {
                slidesToShow: 3,
                slidesToScroll: 1
              }
            },
            {
              breakpoint: 480,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 1
              }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
          ]
      });
})