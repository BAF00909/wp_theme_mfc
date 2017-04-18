(function () {


    jQuery(function ($) {
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

    jQuery(function ($) {
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
    


    jQuery(function ($) {
        $(document).ready(function () {
            var btnMobile = $('.mobile-menu img');
            var menu = $('#main-menu');
            btnMobile.on('click',function(){
                if(!menu.hasClass('open')){
                    menu.removeClass('close');
                    menu.addClass('open')
                } else {
                    menu.removeClass('open');
                    menu.addClass('close');
                }
            });
        });

    });

})();