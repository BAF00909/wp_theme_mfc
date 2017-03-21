<footer class="page-footer">

    <div class="container-fluid clearfix">
        <div class="row clearfix">
                    <div class="col-md-3 col-md-offset-3 bg-brown">
                        <p>﻿Техническая поддержка сайта</p>
                        <a href="mailto:<?php echo get_theme_mod('footer-email', 'info@mfc.ru'); ?>" class="page-footer__mail"><?php echo get_theme_mod('footer-email', 'info@mfc.ru'); ?></a>
                        <a href="tel:<?php echo get_theme_mod('footer-phone', '8 (473) 226-99-99'); ?>" class="page-footer__phone" ><?php echo get_theme_mod('footer-phone', '8 (473) 226-99-99'); ?></a>
                    </div>

                    <div class="col-md-6 bg-brown">
                        <?php get_search_form(); ?>
                        <div class="bvi-block">
                            <a href="#" class="bvi-panel-open"><i class="fa fa-eye" aria-hidden="true"></i>  Версия для слабовидящих</a>
                        </div>
                       <!-- <ul class="v-menu social-menu">
                            <li class="v-menu__item social-menu__item">
                                <a href="#" class="menu__link social-menu__link social-menu__link--tw"></a>
                            </li>
                            <li class="v-menu__item social-menu__item">
                                <a href="#" class="menu__link social-menu__link social-menu__link--fb"></a>
                            </li>
                        </ul>-->

                      <!--  <p class="copyright"><?php echo get_theme_mod('copyright_textbox', 'Текст копирайта еще не придумали'); ?></p>
                        <a href="#" class="confident-link">Конфиденциальность</a>-->
                        <p class="version">v<?php echo do_shortcode("[theme_version]"); ?></p>
                    </div>
        </div>
    </div>


</footer>

<?php wp_footer(); ?>

<script>
    jQuery(document).ready(function($){
        $(document).ready(function(){
            $('.owl-carousel').owlCarousel(
                {
                    items: 1,
                    autoplay: true,
                    loop: true,
                    autoplayTimeout: 5000,
                    responsive: {
                        0: {
                            items: 1
                        },
                        600: {
                            items: 1
                        },
                        1000: {
                            items: 1
                        }
                    }
                });
        });
    });

</script>




</body>
</html>