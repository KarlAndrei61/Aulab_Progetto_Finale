$(document).ready(function () {

    $(".circle").animate({

    }, 1000);

    $(".cardarticle").mouseenter(function () {

        $(this).css("border-width", "2px")

    });

    $(".cardarticle").mouseleave(function () {

        $(this).css("border-width", "1px")

    });


    $(".stilealert").animate({
        width: '12.5vh',
    }, 1000);
});

