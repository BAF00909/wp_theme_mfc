<div class="footer-wrapper">
<div class="container clearfix">
    <div class="row">
        <div class="col-md-9 col-md-offset-3">
    <footer class="page-footer">
            <div class="row mr-none clearfix">
                <div class="col-md-4 pr-non">
                    <div class="bg-brown pl-15">
                        <p>﻿Техническая поддержка сайта</p>
                        <a href="mailto:<?php echo get_theme_mod('footer-email', ''); ?>" class="page-footer__mail"><?php echo get_theme_mod('footer-email', ''); ?></a>
                        <a href="tel:<?php echo get_theme_mod('footer-phone', ''); ?>" class="page-footer__phone" ><?php echo get_theme_mod('footer-phone', ''); ?></a>
                    </div>
                </div>

                <div class="col-md-6 bg-brown">
                    <div class="bvi-block">
                        <a href="#" class="bvi-panel-open"><i class="fa fa-eye" aria-hidden="true"></i>  Версия для слабовидящих</a>
                    </div>
                </div>

                <div class="col-md-2 bg-brown">
                    <?php get_search_form(); ?>
                    <!--  <p class="copyright"><?php echo get_theme_mod('copyright_textbox', ''); ?></p>
                            <a href="#" class="confident-link">Конфиденциальность</a>-->
                    <p class="version">v<?php $my_theme = wp_get_theme();echo$my_theme->get( 'Version' ); ?></p>
                </div>
            </div>
    </footer>
        </div>
    </div>
</div>
</div>
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