<?php get_header(); ?>
    <div class="header-inner" style="background-image: url(<?=get_template_directory_uri();?>/img/section-company.jpg); background-position: bottom center;">
        <div class="wrapper">
            <ul class="breadcrumbs nostyle-list">
                <?php if(function_exists('bcn_display')){bcn_display();}?>
            </ul>
            <h1><? the_title() ?></h1>
        </div>
    </div>



    <div class="wrapper ">
        <div class="type">

            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <?php the_content(); ?>
            <?php endwhile; endif; ?>
                                  
        </div>
    </div>

    <?if(get_field('page-gallery')):?>
        <div class=" gallery service-gallery-wrap">
            <div class="slider-arrow-left"></div>
            <div class="slider-arrow-right"></div>
            <div class="wrapper">
            <ul class="gallery-item-list nostyle-list service-gallery">
                <?
                foreach (get_field('page-gallery') as $gallery_item):?>
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

<?php
get_footer();
