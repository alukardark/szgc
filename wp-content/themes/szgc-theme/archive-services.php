<?php get_header(); ?>

    <div class="header-inner" style="background-image: url(<?=get_template_directory_uri();?>/img/section-company.jpg); background-position: bottom center;">
        <div class="wrapper">
            <ul class="breadcrumbs nostyle-list">
                <?php if(function_exists('bcn_display')){bcn_display();}?>
            </ul>
            <h1>Услуги</h1>
        </div>
    </div>


    <div class="wrapper services">
        <ul class="services-list nostyle-list">



            <?php
            global $query_string;

            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $custom_query = new WP_Query( array( 'post_type' => 'services', 'paged' => $paged , 'order' => 'ASC') );

            if ( $custom_query->have_posts() ) : while ( $custom_query->have_posts() ) : $custom_query->the_post(); ?>

                <li class="services-item">
                    <a href="<? print_r( esc_url(get_permalink()) )?>">
                        <div class="services-item-img" style="background-image: url(<?=get_field('services-img-preview');?>);"></div>
                        <div class="services-item-wrap-text">
                            <div class="services-item-title">
                                <? the_title(); ?>
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
