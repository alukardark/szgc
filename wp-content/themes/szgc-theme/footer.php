<?if(!is_front_page()){?>
    </div>
<?}?>

<div data-section="footer">

    <?if(is_front_page()){?>
        <div class="partners">
            <div class="wrapper">
                <h3>Партнеры</h3>
                <div class="slider-arrow-wrap">
                    <div class="slider-arrow-left"></div>
                    <div class="slider-arrow-right"></div>
                </div>
                <ul class="partners-slider">
                    <?php
                    global $post;
                    $args = array('post_type' => 'partners', 'order' => 'ASC','numberposts' => -1);
                    $myposts = get_posts( $args );
                    foreach( $myposts as $post ){
                        setup_postdata($post);?>
                        <li class="partners-item">
                            <a target="_blank" href="<?=get_field('partner-link'); ?>">
                                <img src="<?=get_field('partner-logo'); ?>">
                            </a>
                        </li>
                    <?}wp_reset_postdata();?>
                </ul>
            </div>
        </div>
    <?}?>

    <footer>
        <div class="wrapper">

            <div class="footer-row">
                <div class="footer-col">
                    <img class="logo-footer" src="<?=get_template_directory_uri();?>/img/logo-footer.png" alt="ООО Сибирский зовод горячего цинкования">
                    <div class="comp-desc">©<?php echo date("Y"); ?>, ООО Сибирский<br>завод горячего цинкования</div>
                    <!--<?php echo date("Y"); ?>-->
                </div>
                <div class="footer-col">
                    <ul class="footer-nav nostyle-list">
                        <li><a href='/services/'>Услуги</a>
                        <li><a href="/tehnologii-tsinkovaniya/">Технология цинкования</a></li>
                        <li><a href='/trebovaniya-k-izdeliyam/'>Требования к изделиям</a></li>
                        <li><a href="/kontrol-kachestva/">Контроль качества</a></li>
                        <li><a href="/company/">О заводе</a></li>
                        <li><a href="/contacts/">Контакты</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <ul class="contacts-list nostyle-list">
                        <li class="footer-address">
                            <i class="fa fa-map-marker" aria-hidden="true"></i> <?=get_field('settings-min-address', 119)?>
                        </li>
                        <?
                        $settingsPhone = explode(",", get_field('settings-phone', 119));
                        foreach ($settingsPhone as $settingsPhoneItem):?>
                            <li class="footer-phone">
                                <a href="tel:<?=$settingsPhoneItem?>"><?=$settingsPhoneItem?></a>
                            </li>
                        <?endforeach;?>


                        <?
                        $settingsEmail = explode(",", get_field('settings-email', 119));
                        foreach ($settingsEmail as $settingsEmailItem):?>
                            <li class="footer-email">
                                <a href="mailto:<?=$settingsEmailItem?>"><?=$settingsEmailItem?></a>
                            </li>
                        <?endforeach;?>
                    </ul>
                </div>
            </div>

            <div class="footer-row">
                <div class="footer-col">
                    <a class="axi-logo" title="Создание, продвижение и администрирование сайтов" href="http://www.web-axioma.ru/" target="_blank">
                        <img src="<?=get_template_directory_uri();?>/img/axi-logo.png" alt="ООО Сибирский зовод горячего цинкования">
                        <p>Создание сайта</p>
                    </a>
                </div>
                <div class="footer-col">
                    <a target="_blank" class="copyriht" href="/copyright/">Информация для правообладателей</a>
                </div>
                <div class="footer-col footer-col-privacy">
                    <a target="_blank" class="copyriht" href="/privacy/">Политика конфиденциальности</a>
                </div>
            </div>

            <div class="footer-row min-row">

                <div class="footer-col">
                    <img class="logo-footer" src="<?=get_template_directory_uri();?>/img/logo-footer.png" alt="ООО Сибирский зовод горячего цинкования">
                    <div class="comp-desc">©<?php echo date("Y"); ?>, ООО Сибирский<br>завод горячего цинкования</div>
                    <!--<?php echo date("Y"); ?>-->
                </div>
                <div class="footer-col">
                    <a class="axi-logo" title="Создание, продвижение и администрирование сайтов" href="http://www.web-axioma.ru/" target="_blank">
                        <img src="<?=get_template_directory_uri();?>/img/axi-logo.png" alt="ООО Сибирский зовод горячего цинкования">
                    </a>
                </div>

            </div>
        </div>
        <div id="scroll-top"></div>
    </footer>
</div>

<?if(!is_front_page()){?>
    </div>
<?}?>

<?get_template_part('modals')?>


<?php wp_footer(); ?>

</body>
</html>
