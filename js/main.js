$(function () {

    $('.main_slide').slick({
        // arrows: false,

    });

    $('.m_link li a').on('click', function (e) {
        e.preventDefault();
        var idx = $(this).parent().index();
        $('.main_slide').slick('slickGoTo', idx)
    });

    $(window).on('scroll', function () {
        var sct = $(window).scrollTop();
        console.log(sct);
        if (sct > 300) {
            // $('.toTop').fadeIn()
            $('.toTop').addClass('on')
        } else {
            $('.toTop').removeClass('on')
        }
    });
    $('.toTop').on('click', function () {
        $('html, body').animate({ scrollTop: 0 })
    })

})