$(function () {

    $('.main_slide').slick({
        // arrows: false,

    });

    $('.m_link li a').on('click', function (e) {
        e.preventDefault();
        var idx = $(this).parent().index();
        $('.main_slide').slick('slickGoTo', idx)
    });


})