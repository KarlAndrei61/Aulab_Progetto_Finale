$(document).ready(function () {

    $(".circle").animate({
        margin: '12.5vh'
    }, 1000);

    $(".magictrick").fadeIn(875);

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

