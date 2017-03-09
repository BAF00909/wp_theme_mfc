<footer class="page-footer">

    <div class="container clearfix">
        <div class="row">
            <div class="col-md-9 col-md-offset-3 bg-brown">
                <div class="row">
                    <div class="col-md-4">
                        <p>﻿Техническая поддержка сайта</p>
                        <a href="mailto:<?php echo get_theme_mod('footer-email', 'info@mfc.ru'); ?>" class="page-footer__mail"><?php echo get_theme_mod('footer-email', 'info@mfc.ru'); ?></a>
                        <a href="tel:<?php echo get_theme_mod('footer-phone', '8 (473) 226-99-99'); ?>" class="page-footer__phone" ><?php echo get_theme_mod('footer-phone', '8 (473) 226-99-99'); ?></a>
                    </div>
                    <div class="col-md-4">
                        <!--<a href="#" class="footer-info">Информация о загруженности</a>-->
                    </div>
                    <div class="col-md-4">
                        <?php get_search_form(); ?>
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
                    </div>
                </div>
            </div>
        </div>
    </div>


</footer>

<?php wp_footer(); ?>




</body>
</html>