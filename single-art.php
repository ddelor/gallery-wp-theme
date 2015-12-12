<?php get_header(); ?>

<div id="content">

    <h1><?php echo $post->post_title; ?></h1>
    <p><?php echo $post->post_content; ?></p>
    <p>Format : <?php echo $post->GAL_format; ?></p>
    <p>technique : <?php echo $post->GAL_technic; ?></p>
    <p>Année : <?php echo $post->GAL_year; ?></p>
    <?php
     $post_image_fiche = current(rwmb_meta('GAL_image', array('type' => 'image'), $post->ID));
     $post_image_fiche_url = wp_get_attachment_image_src($post_image_fiche["ID"], 'full');
    ?>
    <img src="<?php echo $post_image_fiche_url[0] ?>">

</div>
<?php get_footer(); ?>
