<?php get_header(); ?>
    <div class="header-inner header-inner-company">
        <div class="wrapper">
            <ul class="breadcrumbs nostyle-list">
                <?php if(function_exists('bcn_display')){bcn_display();}?>
            </ul>
            <h1><?the_title()?></h1>

            <div class="company-desc">
                <?=get_field('company-text-home-screen', 92)?>
                <a href="#" data-link-video="<?=get_field('company-detail-video', 92)?>" class="btn-video"  data-target="#modalVideo" data-toggle="modal">Видео о заводе</a>
            </div>

        </div>
    </div>


    <div class="submenu-inner">
        <div class="wrapper">
            <ul class="submenu-inner-list nostyle-list">
                <!-- <li class="submenu-inner-item">
                    <a href="/company/certificates/">Сертификаты</a>
                </li> -->
                <!-- <li class="submenu-inner-item">
                    <a href="/company/reviews/">Отзывы</a>
                </li> -->
                <li class="submenu-inner-item">
                    <a href="/company/photogallery/">Фотогалерея</a>
                </li>
                <li class="submenu-inner-item">
                    <a href="/company/developments/">События</a>
                </li>
            </ul>
            <ul class="dropdown-inner-list nostyle-list">
                <li>
                    <?the_title()?>
                    <ul class="nostyle-list">
                        <!-- <li class="dropdown-inner-item">
                            <a href="/company/certificates/">Сертификаты</a>
                        </li> -->
                        <!-- <li class="dropdown-inner-item">
                            <a href="/company/reviews/">Отзывы</a>
                        </li> -->
                        <li class="dropdown-inner-item">
                            <a href="/company/photogallery/">Фотогалерея</a>
                        </li>
                        <li class="dropdown-inner-item">
                            <a href="/company/developments/">События</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>

    <div class="company ">
        <div class="wrapper">
            <?=get_field('company-detail-text', 92)?>
        </div>

        <div class="company-numbers">
            <ul class="nostyle-list wrapper">
                <li>
                    <div class="company-numbers-num" data-val="<?=get_field('company-1-num', 92)?>"><?=get_field('company-1-num', 92)?></div>
                    <div class="company-numbers-unit"><?=get_field('company-1-unit', 92)?></div>
                    <div class="company-numbers-title"><?=get_field('company-1-title', 92)?></div>
                </li>
                <li>
                    <div class="company-numbers-num" data-val="<?=get_field('company-2-num', 92)?>"><?=get_field('company-2-num', 92)?></div>
                    <div class="company-numbers-unit"><?=get_field('company-2-unit', 92)?></div>
                    <div class="company-numbers-title"><?=get_field('company-2-title', 92)?></div>
                </li>
                <li>
                    <div class="company-numbers-num" data-val="<?=get_field('company-3-num', 92)?>"><b>14</b><span></span><b>2</b><span></span><b>3,5</b></div>
                    <div class="company-numbers-unit"><?=get_field('company-3-unit', 92)?></div>
                    <div class="company-numbers-title"><?=get_field('company-3-title', 92)?></div>
                </li>
            </ul>
        </div>

        <div class="wrapper">
            <?=get_field('company-detail-text-bottom', 92)?>
        </div>
    </div>

    <div class="partners">
        <div class="wrapper">
            <h3>Партнеры</h3>
            <div class="slider-arrow-wrap">
                <div class="slider-arrow-left"></div>
                <div class="slider-arrow-right"></div>
            </div>
            <ul class="partners-slider nostyle-list">
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

    <script>
        $(function(){
            $('p>img').unwrap();
        });
    </script>

<?php
get_footer();
