<?php
/* Template Name: Accueil */
get_header();
?>

<h1><?php echo of_get_option( 'option_artist_name', '' ); ?></h1>
<p><?php echo of_get_option( 'option_artist_description', '' ); ?></p>

<h2>En ce moment</h2>
<p><?php echo of_get_option( 'option_artist_news', '' ); ?></p>

<div class="home-slider-container">
    <ul class="home-slider">
        <?php
            foreach ($slides as $slide) {
                $slideMainImage        = current(rwmb_meta('GAL_image', array('type' => 'image_advanced'), $slide->ID));
                $slideMainImageUrl     = get_permalink($slide);
                $postMainImageSrc     = wp_get_attachment_image_src($slideMainImage["ID"], 'full');
                $slideMainImageTag     = wp_get_attachment_image($slideMainImage["ID"], 'full');
        ?>

        <li>
            <a href=" <?php echo $slideMainImageUrl ?> " title=" <?php echo $slide->post_title ?> ">
                <!-- <?php echo $slideMainImageTag ?> -->
                <img src="<?php echo $postMainImageSrc[0] ?>" alt="<?php echo $slide->post_title ?>">
            </a>
        </li>

        <?php
            }
        ?>
    </ul>
    <div class="legend"></div>
</div>

<?php get_footer(); ?>
