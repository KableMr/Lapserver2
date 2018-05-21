$(function () {
    $('#menu-nav').click(function () {
        $("#menu_normal").slideToggle();
    });
    $('#menu-nav-mobile').click(function () {
        $("#menu-mobile").slideToggle();
    });
    $("#entrar").click(function () {
        $("#modal").slideToggle();
    });

    $("#cadastro").click(function () {
        $("#modal-cadastro").slideToggle();

    });


    $(".container-slide").animate({opacity: '1'}, '2000');
    $(".container-slide").animate({left: '-120px'});

    $("#setting-user").click(function () {
        $("#modal").slideToggle();
    });

});
