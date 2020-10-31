var i = 0;
var slideInterval = 3000;
var next = function() {
    i++;
    if (i < 3) {
        $(".slider").css({
            'transform': 'translateX(calc(-100%*' + i + '))'
        })
    } else {
        i = 0;
        $(".slider").css({
            'transform': 'translateX(calc(-100%*' + i + '))'
        })
    }
}
var prev = function() {
    i--;
    if (i >= 0) {
        $(".slider").css({
            'transform': 'translateX(calc(-100%*' + i + '))'
        })
    } else {
        i = 2;
        $(".slider").css({
            'transform': 'translateX(calc(-100%*' + i + '))'
        })
    }
}

$(document).ready(function() {
    $('.navbtnslider').click(function() {
        navBtnId = $(this).index();
        if (navBtnId == i) {} else {
            i = navBtnId;
            $(".slider").css({
                'transform': 'translateX(calc(-100%*' + i + '))'
            })
        }




    });
    var handle = setInterval(next, slideInterval);
    $('.viewport_slider').hover(function() {
        clearInterval(handle)
    }, function() {
        handle = setInterval(next, slideInterval);
    });
    $('.btn-next').click(next);
    $('.btn-prev').click(prev);
});