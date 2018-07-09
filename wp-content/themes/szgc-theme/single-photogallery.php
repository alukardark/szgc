<?php get_header(); ?>


    <div class="header-inner" style="background-image: url(<?=get_template_directory_uri();?>/img/section-company.jpg); background-position: bottom center;">
        <div class="wrapper">
            <ul class="breadcrumbs nostyle-list">
                <?php if(function_exists('bcn_display')){bcn_display();}?>
            </ul>
            <h1><? the_title(); ?></h1>
        </div>
    </div>


    <div class="wrapper gallery">

        <ul class="gallery-item-list nostyle-list">

            <?foreach (get_field('photogallery-gallery') as $photogallery_item):?>
                <li class="gallery-item">
                    <a data-fancybox="gallery" href="<?=$photogallery_item['url']?>">
                        <div style="background-image: url(<?=$photogallery_item['url']?>);"></div>
                    </a>
                </li>
            <?endforeach;?>



        </ul>
    </div>

<?php
get_footer();
