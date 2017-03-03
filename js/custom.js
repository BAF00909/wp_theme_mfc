(function () {
    

jQuery(function($) {
    $(document).ready(function () {
        $(".menu-item-has-children > a").click(function () {
            var ul = $(this).next(),
                clone = ul.clone().css({"height": "auto"}).appendTo(".mini-menu .menu-sidebar-container"),
                height = ul.css("height") === "0px" ? ul[0].scrollHeight + "px" : "0px";
            clone.remove();
            ul.animate({"height": height});
            return false;
        });
        $('.mini-menu .menu-sidebar-container > ul > li > a').click(function () {
            $('.menu-item-has-children a').removeClass('active');
            $(this).addClass('active');
        }),
            $('.menu-item-has-children ul li a').click(function () {
                $('.menu-item-has-children ul li a').removeClass('active');
                $(this).addClass('active');
            });
    });
});

jQuery(function($) {
    $(document).ready(function () {
        $(".sub > a").click(function () {
            var ul = $(this).next(),
                clone = ul.clone().css({"height": "auto"}).appendTo(".mini-menu"),
                height = ul.css("height") === "0px" ? ul[0].scrollHeight + "px" : "0px";
            clone.remove();
            ul.animate({"height": height});
            return false;
        });
        $('.mini-menu > ul > li > a').click(function () {
            $('.sub a').removeClass('active');
            $(this).addClass('active');
        }),
            $('.sub ul li a').click(function () {
                $('.sub ul li a').removeClass('active');
                $(this).addClass('active');
            });
    });
});

var hwSlideSpeed = 700;
var hwTimeOut = 3000;
var hwNeedLinks = true;
jQuery(function($) {
    $(document).ready(function (e) {
        $('.slide').css(
            {
                "position": "absolute",
                "top": '0', "left": '0'
            }).hide().eq(0).show();
        var slideNum = 0;
        var slideTime;
        var slideCount = $("#slider .slide").length;
        var animSlide = function (arrow) {
            clearTimeout(slideTime);
            $('.slide').eq(slideNum).fadeOut(hwSlideSpeed);
            if (arrow == "next") {
                if (slideNum == (slideCount - 1)) {
                    slideNum = 0;
                }
                else {
                    slideNum++
                }
            }
            else if (arrow == "prew") {
                if (slideNum == 0) {
                    slideNum = slideCount - 1;
                }
                else {
                    slideNum -= 1
                }
            }
            else {
                slideNum = arrow;
            }
            $('.slide').eq(slideNum).fadeIn(hwSlideSpeed, rotator);
            $(".control-slide.active").removeClass("active");
            $('.control-slide').eq(slideNum).addClass('active');
        }
        if (hwNeedLinks) {
            var $linkArrow = $('<a id="prewbutton" href="#"></a><a id="nextbutton" href="#"></a>')
                .prependTo('#slider');
            $('#nextbutton').click(function () {
                animSlide("next");
                return false;

            })
            $('#prewbutton').click(function () {
                animSlide("prew");
                return false;
            })
        }
        var $adderSpan = '';
        $('.slide').each(function (index) {
            $adderSpan += '<span class = "control-slide">' + index + '</span>';
        });
        $('<div class ="sli-links">' + $adderSpan + '</div>').appendTo('#slider-wrap');
        $(".control-slide:first").addClass("active");

        $('.control-slide').click(function () {
            var goToNum = parseFloat($(this).text());
            animSlide(goToNum);
        });
        var pause = false;
        var rotator = function () {
            if (!pause) {
                slideTime = setTimeout(function () {
                    animSlide('next')
                }, hwTimeOut);
            }
        }
        $('#slider-wrap').hover(
            function () {
                clearTimeout(slideTime);
                pause = true;
            },
            function () {
                pause = false;
                rotator();
            });
        rotator();
    });
});

    $(document).ready(function() {

        var docHeight = $(window).height();
        var footerHeight = $('.page-footer').height();
        var footerTop = $('.page-footer').position().top + footerHeight;

        if (footerTop < docHeight) {
            $('.page-footer').css('margin-top', 10+ (docHeight - footerTop) + 'px');
        }
    });

})();