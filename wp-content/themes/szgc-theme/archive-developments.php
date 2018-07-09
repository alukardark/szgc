<?php get_header(); ?>

    <div class="header-inner" style="background-image: url(<?=get_template_directory_uri();?>/img/section-company.jpg); background-position: bottom center;">
        <div class="wrapper">
            <ul class="breadcrumbs nostyle-list">
                <?php if(function_exists('bcn_display')){bcn_display();}?>
            </ul>
            <h1>События</h1>
        </div>
    </div>

    <div class="submenu-inner">
        <div class="wrapper">
            <ul class="submenu-inner-list nostyle-list">
               <!--  <li class="submenu-inner-item">
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
                    События
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
                    </ul>
                </li>
            </ul>
        </div>
    </div>

    <div class="wrapper developments">

        <ul class="developments-list nostyle-list">
            <?php
            global $query_string;

            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $custom_query = new WP_Query( array( 'post_type' => 'developments', 'paged' => $paged ) );

            if ( $custom_query->have_posts() ) : while ( $custom_query->have_posts() ) : $custom_query->the_post(); ?>


                <li class="developments-item">
                    <a href="<? print_r( esc_url(get_permalink()) )?>">
                        <div class="developments-item-img" style="background-image: url(<?=get_field('developments-img');?>)"></div>
                        <div class="developments-item-wrap-text">
                            <div class="developments-item-title">
                                <? the_title(); ?>
                            </div>
                            <div class="arrow"></div>
                            <div class="developments-item-date">
                                <?=get_field('developments-date')?>
                            </div>
                        </div>
                    </a>
                </li>
            <?php endwhile; endif;?>


        </ul>
        <ul class="pagination nostyle-list" >
            <? $pagination = get_pagination(); ?>

            <?if (isset($pagination->prev)):?>
                <li class="pagination__prev"><a href="<?=$pagination->prev->link?>" ></a></li>
            <?endif?>
            <?foreach ($pagination->pages as $page):?>
                <li>
                    <?if (isset($page->link)):?>
                        <a href="<?=$page->link ?>" class="<?=$page->class?> pagination__link"><?=$page->title?></a>
                    <?else:?>
                        <a href="<?=$page->link ?>" class="<?=$page->class?> pagination__link active"><?=$page->title ?></a>
                    <?endif?>
                </li>
            <?endforeach?>
            <?if (isset($pagination->next)):?>
                <li class="pagination__next"><a href="<?=$pagination->next->link?>" ></a></li>
            <?endif?>
        </ul>



    </div>

<?php
get_footer();
