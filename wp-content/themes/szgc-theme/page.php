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
<?php
get_footer();
