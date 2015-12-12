<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php echo of_get_option( 'option_artist_name', '' ); ?> - <?php echo of_get_option( 'option_artist_description', '' ); ?></title>
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <header>
        <?php wp_nav_menu(array('theme_location' => 'header')); ?>
    </header>

    <div id="page">
