<?php get_header(); ?>
    <div class="header-inner" style="
            background-image: url(<?=get_template_directory_uri();?>/img/about-header.jpg);
            height: 100vh;
            min-height: 850px;">
        <div class="wrapper">
            <ul class="breadcrumbs nostyle-list">
                <?php if(function_exists('bcn_display')){bcn_display();}?>
            </ul>
            <h1>ООО «Сибирский завод<br>горячего цинкования»</h1>


            <div class="address-wrap">
                <div class="address-list">
                    <p><?=get_field('settings-address', 119); ?></p>
                    <a href="#" class="btn-map" data-target="#modalMap" data-toggle="modal">Смотреть на карте</a>
                </div>

                <div class="link-list">
                    <div class="link-title">Отдел продаж:</div>
                    <a class="phone" href="tel:<?=get_field('settings-sales-phone', 119); ?>"><?=get_field('settings-sales-phone', 119); ?></a><br>
                    <?
                    $settingsEmail = explode(",", get_field('settings-email', 119));
                    foreach ($settingsEmail as $settingsEmailItem):?>
                        <a class="mail" href="mailto:<?=$settingsEmailItem?>"><?=$settingsEmailItem?></a><br>
                    <?endforeach;?>

                </div>
            </div>

        </div>
    </div>



    <div class="contacts">
        <div class="wrapper">

            <?php
            global $post;
            $args = array('post_type' => 'people', 'order' => 'DESC','numberposts' => -1);
            $myposts = get_posts( $args );
            foreach( $myposts as $post ){
                setup_postdata($post);?>
                <div class="people">
                    <div class="contacts-title"><?=get_field('people-position'); ?></div>
                    <div class="contact-name"><? the_title(); ?></div>
                    <ul class="nostyle-list">

                        <?
                        $peoplePhone = explode(",", get_field('people-phone'));
                        foreach ($peoplePhone as $peoplePhonelItem):?>
                            <li class="phone">
                                <a href="mailto:<?=$peoplePhonelItem?>"><?=$peoplePhonelItem?></a>
                            </li>
                        <?endforeach;?>
                        <?
                        $peopleEmail = explode(",", get_field('people-email'));
                        foreach ($peopleEmail as $peopleEmailItem):?>
                            <li class="mail">
                                <a href="mailto:<?=$peopleEmailItem?>"><?=$peopleEmailItem?></a>
                            </li>
                        <?endforeach;?>

                    </ul>
                    <ul class="nostyle-list">
                        <?if(get_field('people-worktime')){?>
                            <li>Время работы:</li>
                            <li>Пн-Пт - <?=get_field('people-worktime'); ?></li>
                            <li>Сб-Вс: <?=get_field('people-worktime-weekend'); ?></li>
                            <li>Обед: <?=get_field('people-worktime-dinner'); ?></li>
                        <?}?>
                    </ul>
                </div>
            <?}wp_reset_postdata();?>



            <div class="requisites">
                <div class="contacts-title">Реквизиты:</div>
                <ul class="nostyle-list">
                    <?=get_field('contacts-requisites', 123)?>
                </ul>
            </div>

            <?if(get_field('contacts-city')){?>
                <div class="city">
                    <div class="contacts-title">В других городах:</div>
                    <?=get_field('contacts-city', 123)?>
                </div>
            <?}?>

        </div>
    </div>
    <script>
        $('.contacts ul').addClass('nostyle-list');
    </script>


<?php
get_footer();
