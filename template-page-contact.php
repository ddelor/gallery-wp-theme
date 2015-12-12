<?php
/* Template Name: Contact */
get_header();
?>

<div id="content">

    <h1><?php echo $post->post_title; ?></h1>
    <p><?php echo of_get_option( 'option_artist_address', '' ); ?></p>
    <p>Téléphone : <?php echo of_get_option( 'option_artist_phone', '' ); ?></p>
    <p>Mobile : <?php echo of_get_option( 'option_artist_mobile', '' ); ?></p>
    <p>Email : <a href="mailto:<?php echo of_get_option( 'option_artist_email', '' ); ?>"><?php echo of_get_option( 'option_artist_email', '' ); ?></a></p>

</div>
<?php get_footer(); ?>
