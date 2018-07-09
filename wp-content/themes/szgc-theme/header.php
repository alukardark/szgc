<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE">
    <meta name="format-detection" content="telephone=no">
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
    <?php wp_head(); ?>
</head>

    <?if(is_front_page()){?>
        <body <?php body_class(); ?>>
    <?}else{?>
        <body <?php body_class( 'inner-page' ); ?>>
            <div class="wrap-page">
                <div class="inside-content">
    <?}?>

    <header>
        <div class="wrapper">
            <div class="logo-wrap">
                <a href="/" class="logo"></a>

                <a href="#" class="btn-menu" data-target="#modalNavigation" data-toggle="modal">
                    <div class="burger">
                        <div class="upper"></div>
                        <div class="middle"></div>
                        <div class="bottom"></div>
                    </div>
                    <span class="menu-title">Меню</span>
                </a>
            </div>
            <div class="phone-wrap">
                <div class="phone-title">Отдел продаж</div>
                <a href="tel:<?=get_field('settings-sales-phone', 119)?>" class="phone">
                    <?=get_field('settings-sales-phone', 119)?>
                </a>
            </div>
        </div>
    </header>