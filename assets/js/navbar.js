$(window).load(function() {
    var x1 = 0; //定義初始坐標值
    var header = $('.navbar');
    if (header.offset().top > 5) {
        if (!header.hasClass('shadow')) {
            header.addClass('shadow');
            header.addClass('Transparent');
        }
    } else {
        header.removeClass('shadow');
        header.removeClass('Transparent');
    }

    $(window).scroll(function(e) {
        if (header.offset().top > 5) {
            if (!header.hasClass('shadow')) {
                header.addClass('shadow');
                if (!$('.navbar-collapse').hasClass('in')) {
                    header.addClass('Transparent');
                }
            }
            //將變數x2指定為x1的值
            var x2 = x1;
            //重新抓取目前最新作標值
            x1 = header.offset().top;
            //當 x1 > x2 為頁面下拉觸發
            if (x1 > x2 && header.offset().top > 100) {
                header.stop(true); //停止剩餘未執行的動畫列表
                if ($('.navbar-collapse').hasClass('in')) {
                    $('.navbar-collapse').removeClass('in');
                    header.addClass('Transparent');
                };
                header.animate({
                    top: "-55px",
                });
                //$('.navbar').slideUp('slow'); //也可使用
            }
            //當 x1 < x2 為頁面上拉觸發
            if (x1 < x2 || header.offset().top < 100) {
                header.stop(true); //停止剩餘未執行的動畫列表
                header.animate({
                    top: "0px",
                });
                //$('.navbar').slideDown('slow'); //也可使用
            }
        } else {
            header.removeClass('shadow');
            header.removeClass('Transparent');

        }
    });
    $('.navbar-toggle').click(function() {
        if ($('.navbar-collapse').hasClass('in') && header.offset().top > 5) {
            header.addClass('Transparent');
        };
        if (!$('.navbar-collapse').hasClass('in')) {
            header.removeClass('Transparent');
        };
    });
    $(".form-lg").focus(function() {
        //$(this).animate({
        //    width: "150px"
        //});
        $(this).css({
            "width": "150px",
            "background-color": "#FFFFFF",
            "color": "#ccc",
            "transition": "0.5s"
        });
        $('.navbar-form > .btn').css({
            "display": "inline",
            "transition": "0.2s"
        });
    });
    $(".form-lg").blur(function() {
        if (!$(this).val() == '') {

        } else {
            $(this).css({
                "width": "52px",
                "background-color": "#2b2b2b",
                "color": "#fff",
                "transition": "0.5s"
            });
            $('.navbar-form > .btn').css({
                "display": "none",
                "transition": "0.2s"
            });
        };
        //$(this).animate({
        //    width: "0px"
        //});
    });
});
