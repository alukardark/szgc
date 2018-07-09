<?php get_header(); ?>

    <div class="header-inner" style="background-image: url(<?=get_template_directory_uri();?>/img/section-company.jpg); background-position: bottom center;">
        <div class="wrapper">
            <ul class="breadcrumbs nostyle-list">
                <?php if(function_exists('bcn_display')){bcn_display();}?>
            </ul>
            <h1>Фотогалерея</h1>
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
                    Фотогалерея
                    <ul class="nostyle-list">
                        <!-- <li class="dropdown-inner-item">
                            <a href="/company/reviews/">Отзывы</a>
                        </li> -->
                        <!-- <li class="dropdown-inner-item">
                            <a href="/company/certificates/">Сертификаты</a>
                        </li> -->
                        <li class="dropdown-inner-item">
                            <a href="/company/developments/">События</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>

    <div class="wrapper gallery">

        <ul class="gallery-list nostyle-list">


            <?php
            global $query_string;
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $custom_query = new WP_Query( array( 'post_type' => 'photogallery', 'paged' => $paged ) );
            if ( $custom_query->have_posts() ) : while ( $custom_query->have_posts() ) : $custom_query->the_post(); ?>
                <li>
                    <a href="<? print_r( esc_url(get_permalink()) )?>">
                        <div class="gallery-img" style="background-image: url(<?=get_field('photogallery-albom');?>)"></div>
                        <div class="gallery-text">
                            <div class="gallery-title">
                                <p><? the_title(); ?></p>
                            </div>
                            <div class="gallery-count">
                                <span></span><?=count(get_field('photogallery-gallery')) ?> фото
                            </div>
                            <div class="arrow"></div>
                        </div>
                    </a>
                </li>
            <?php endwhile; endif;?>
        </ul>

    </div>

<?php
get_footer();
