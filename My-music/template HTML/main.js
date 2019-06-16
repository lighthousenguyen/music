$(function(){

        $('.banner').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 5000,
        });
        $('.play-pause .pause').click(function (event) {
            $(this).toggleClass('fa-play');
            $(this).toggleClass('fa-pause');

        })
        $('.active').click(function (event) {
            $(this).toggleClass('fa-play');
            $(this).toggleClass('fa-pause');

        })
        $('.item-song').click(function (event) {
            $('.item-song').removeClass('active'); // cac nut khac dinh dang bo lop active
            $(this).addClass('active'); // nut hien tai dinh dang them 1 lop active
            $(".item-song .item-play .fa").addClass('fa-play'); 
            $(this).children(".item-play").children(".fa").removeClass('fa-play');
            $(this).children(".item-play").children(".fa").addClass('fa-pause');


        })


});
