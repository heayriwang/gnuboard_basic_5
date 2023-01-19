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


    // 모바일버전 오른쪽상단 세로줄3개 아이콘 클릭시 메뉴가 나타나는 코드
    $('.mopen').on('click', function () {
        $('.header').toggleClass('on')

    });

    // 모바일버전 메뉴 클릭시 밑에 스몰메뉴를 뜨게하는코드
    $('.header .gnb>ul>li>a').on('click', function (e) {
        if ($('.header').hasClass('on')) {
            e.preventDefault();
        }

        // return false; 위와같은말
        console.log(e, e.currentTarget, $(this));
        $('.header .gnb>ul>li .submenu').removeClass('on');
        $(this).next().addClass('on');

    });

    $('.header').on('scroll wheel touchmove', function (e) {
        if ($('.header').hasClass('on')) {
            e.preventDefault();
        }

        // return false;


    })

})