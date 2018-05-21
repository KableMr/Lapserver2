$(function () {
    $(".container-modal ul > li").hover(function () {
        $(this).animate({"text-indent" : "5px"});
    }, function(){
        $(this).animate({"text-indent" : "0px"});
    });

    $("#modal-funcoes-conteiner").click(function () {
       $("#modal-funcoes").slideToggle();
    });

});
