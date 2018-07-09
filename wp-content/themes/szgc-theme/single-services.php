<?php get_header(); ?>
    <div class="header-inner header-inner-services" style="background-image: url(<?=get_field('services-img-detail')?>);">
        <div class="wrapper">
            <ul class="breadcrumbs nostyle-list">
                <?php if(function_exists('bcn_display')){bcn_display();}?>
            </ul>
            <?$get_title = get_the_title();?>
            <h1><? the_title(); ?></h1>

            <?if(get_field('services-block-left') && get_field('services-block-right')){?>
                <div class="price"><strong><?=get_field('services-block-left')?></strong><span><?=get_field('services-block-right')?></span></div>
            <?}?>

            <br>
            <a class="find-cost" href=".section-calculation">Узнать стоимость оцинковки вашего проекта</a>

        </div>
    </div>

    <div class="wrapper">
        <div class="service">
            <?=get_field('services-detail')?>
        </div>
    </div>


<?if(get_field('services-gallery')):?>
    <div class=" gallery service-gallery-wrap">
        <div class="slider-arrow-left"></div>
        <div class="slider-arrow-right"></div>
        <div class="wrapper">
        <ul class="gallery-item-list nostyle-list service-gallery">
            <?
            foreach (get_field('services-gallery') as $gallery_item):?>
                <li class="gallery-item">
                <a data-fancybox="gallery" href="<?=$gallery_item['url']?>">
                    <div style="background-image: url( <?=$gallery_item['url']?> );"></div>
                </a>
            </li>
            <?endforeach;?>
        </ul>
        </div>
    </div>
<?endif;?>

    <section class="service-section section-calculation">

        <div class="wrapper">
<?echo do_shortcode(" [contact-form-7 id=\"602\" title=\"Рассчитайте стоимость оцинкования вашего проекта\"] ");?>
            <!-- <form action="#">
                <h2>Рассчитайте стоимость оцинкования вашего проекта</h2>

                <div class="form-row">
                    <span class="form-placeholder">Наименование</span>
                    <select multiple="multiple" class="name" name="name">
                        <option value="Дорожные ограждения">Дорожные ограждения</option>
                        <option value="Опоры ЛЭП">Опоры ЛЭП</option>
                        <option value="Общестроительные металлоконструкции">Общестроительные металлоконструкции</option>
                        <option value="Опоры освещения">Опоры освещения</option>
                        <option value="Мелкогабаритная продукция">Мелкогабаритная продукция</option>
                        <option value="Металлопрокат (полоса, пруток)">Металлопрокат (полоса, пруток)</option>
                    </select>
                </div>

                <div class="form-row">
                    <span class="form-placeholder">Объем партии, т</span>
                    <select multiple="multiple" class="amount" name="amount">
                        <option value="1-10т">1-10т</option>
                        <option value="10-19т">10-19т</option>
                        <option value="20-49т">20-49т</option>
                        <option value="50-99т">50-99т</option>
                        <option value="от 100т и выше">от 100т и выше</option>
                    </select>
                </div>

                <div class="form-row">
                    <span class="form-placeholder">Телефон</span>
                    <input type="text" name="phone">
                </div>

                <div class="form-row">
                    <span class="form-placeholder">E-mail</span>
                    <input type="text" name="email">
                </div>

                <input type="submit" class="btn btn-white" value="Узнать цену">
                
                <p class="form-personal">
                    Нажимая на кнопку вы соглашаетесь<br>
                    на обработку <a target="_blank" href="/personal-information/">персональных данных</a>
                </p>

            </form> -->

        </div>
        <div class="calculation-img">
            <h2>Другие услуги:</h2>
            <ul class="nostyle-list">
                <?php
                global $post;
                $args = array('post_type' => 'services', 'order' => 'ASC','numberposts' => 6);
                $myposts = get_posts( $args );
                foreach( $myposts as $post ){
                    setup_postdata($post);?>
                    <? if($get_title == $post->post_title) continue; ?>
                    <li><a href="<? print_r( esc_url(get_permalink()) );?>"><span></span><strong><?=$post->post_title?></strong></a></li>
                <?}wp_reset_postdata();?>
            </ul>
        </div>

    </section>
<?php
get_footer();
