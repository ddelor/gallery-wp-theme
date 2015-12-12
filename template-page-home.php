<?php
/* Template Name: Accueil */
get_header();
?>

<div id="content">

    <h1>Accueil</h1>
    <div id="content">

        <h1><?php echo of_get_option( 'option_artist_name', '' ); ?></h1>
        <p><?php echo of_get_option( 'option_artist_description', '' ); ?></p>

        <h2>En ce moment</h2>
        <p><?php echo of_get_option( 'option_artist_news', '' ); ?></p>

        <h2>Sider</h2>
        <ul>
            <?php
                foreach ($slides as $slide) {
                    $slideMainImage        = current(rwmb_meta('GAL_image', array('type' => 'image_advanced'), $slide->ID));
                    $slideMainImageUrl     = get_permalink($slide);
                    $slideMainImageTag     = wp_get_attachment_image($slideMainImage["ID"], 'full');
            ?>

            <li>
                <a href=" <?php echo $slideMainImageUrl ?> " title=" <?php echo $slide->post_title ?> ">
                    <?php echo $slideMainImageTag ?>
                </a>
                <p> <?php echo $slide->post_title ?> </p>
            </li>

            <?php
                }
            ?>
        </ul>
    </div>

</div>
<?php get_footer(); ?>
