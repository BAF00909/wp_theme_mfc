<div class="container block-relative">
    <footer class="page-footer">

        <div class="page-footer__left-part bg-grey min-h"></div>

        <div class="page-footer__right-part">
            <div class="page-footer__item bg-brown min-h">
                <p>﻿Техническая поддержка сайта</p>
                <a href="mailto:support@mydocuments36.ru" class="page-footer__mail">support@mydocuments36.ru</a>
                <a href="tel:8 (473) 226-99-99" class="page-footer__phone" >8 (473) 226-99-99</a>
            </div>
            <div class="page-footer__item bg-brown min-h">
                <a href="#">Информация о загруженности</a>
            </div>

            <div class="page-footer__item bg-brown min-h">
                <form id="page-footer__searchform" action="/searchForm" method="get" class="page-footer__searchform">
                    <input type="search" name="search-field" id="page-footer__search-field" placeholder="Найти">
                    <input type="submit" class="searchBtn" value="">
                </form>

                <ul class="v-menu social-menu">
                    <li class="v-menu__item social-menu__item">
                        <a href="#" class="menu__link social-menu__link social-menu__link--tw"></a>
                    </li>
                    <li class="v-menu__item social-menu__item">
                        <a href="#" class="menu__link social-menu__link social-menu__link--fb"></a>
                    </li>
                </ul>

                <p class="copyright">©2017 МФЦ Воронежской области</p>
                <a href="#" class="confident-link">Конфиденциальность</a>

            </div>
        </div>

    </footer>
</div>

<?php wp_footer(); ?>

<script type="text/javascript">

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

</script>

<script>
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
</script>


</body>
</html>