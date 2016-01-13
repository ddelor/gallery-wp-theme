<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php echo of_get_option( 'option_artist_name', '' ); ?> - <?php echo of_get_option( 'option_artist_description', '' ); ?></title>
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <nav class="nav-menu">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/front/images/menu-bg.png">
        <a class="toggle-menu" title="Menu"><span class="glyphicon glyphicon-menu-hamburger"></span></a>
        <?php wp_nav_menu(array('theme_location' => 'header')); ?>
    </nav>

    <div class="global-content">

        <header>
        </header>

        <div id="page">
