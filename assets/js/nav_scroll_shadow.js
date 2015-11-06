$(window).load(function() {
    var header = $('.navbar');
    if (header.offset().top > 5) {
        if (!header.hasClass('shadow')) {
            header.addClass('shadow');
        }
    } else {
        header.removeClass('shadow');
    }
    $(window).scroll(function(e) {
        if (header.offset().top > 5) {
            if (!header.hasClass('shadow')) {
                header.addClass('shadow');
            }
        } else {
            header.removeClass('shadow');
        }
    });
});
