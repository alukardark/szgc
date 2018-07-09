<?php get_header(); ?>
    <div class="header-inner" style="background-image: url(<?=get_template_directory_uri();?>/img/section-company.jpg); background-position: bottom center;">
        <div class="wrapper">
            <ul class="breadcrumbs nostyle-list">
                <?php if(function_exists('bcn_display')){bcn_display();}?>
            </ul>
            <h1><? the_title(); ?></h1>

            <div class="header-inner-date">
                <?=get_field('developments-date');?>
            </div>
        </div>
    </div>

    <div class="wrapper ">
        <div class="development">
            <?=get_field('developments-content');?>
        </div>
    </div>

    <?if(get_field('developments-gallery')):?>
        <div class=" gallery service-gallery-wrap">
            <div class="slider-arrow-left"></div>
            <div class="slider-arrow-right"></div>
            <div class="wrapper">
            <ul class="gallery-item-list nostyle-list service-gallery">
                <?
                foreach (get_field('developments-gallery') as $gallery_item):?>
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

    <div class="development-other">
        <div class="wrapper">
            <div class="development-other-caption">Другие публикации</div>
            <ul class="development-other-list nostyle-list">

                <?
                $prev_post = get_previous_post();
                if( ! empty($prev_post) ){?>
                    <li class="development-other-item">
                        <a href="<?php echo get_permalink( $prev_post->ID ); ?>">
                            <div class="development-other-left" style="background-image: url(<?=get_field('developments-img', $prev_post->ID);?>);"></div>
                            <div class="development-other-right">
                                <div class="development-other-title"><?php echo $prev_post->post_title; ?></div>
                                <div class="development-other-date"><?=get_field('developments-date', $prev_post->ID);?></div>
                                <div class="arrow"></div>
                            </div>
                        </a>
                    </li>
                <?}?>

                <?
                $next_post = get_next_post();
                if( ! empty($next_post) ){?>
                    <li class="development-other-item">
                        <a href="<?php echo get_permalink( $next_post->ID ); ?>">
                            <div class="development-other-left" style="background-image: url(<?=get_field('developments-img', $next_post->ID);?>);"></div>
                            <div class="development-other-right">
                                <div class="development-other-title"><?php echo $next_post->post_title; ?></div>
                                <div class="development-other-date"><?=get_field('developments-date', $next_post->ID);?></div>
                                <div class="arrow"></div>
                            </div>
                        </a>
                    </li>
                <?}?>

            </ul>
        </div>





    </div>

<?php
get_footer();
