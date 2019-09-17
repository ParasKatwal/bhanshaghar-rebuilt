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

})