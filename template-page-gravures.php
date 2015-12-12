<?php
/* Template Name: Gravures */
get_header();
?>

<div id="content">

    <h1><?php echo $post->post_title; ?></h1>

    <?php
        $subtitle = $post->GAL_subtitle;
        if (isset($subtitle) && !empty($subtitle)) {
            echo '<h2>' . $subtitle . '</h2>';
        }
    ?>

    <ul>
        <?php
            foreach ($gravures as $gravure) {
                $gravureMainImage        = current(rwmb_meta('GAL_image', array('type' => 'image_advanced'), $gravure->ID));
                $gravureMainImageUrl     = wp_get_attachment_image_src($gravureMainImage["ID"], 'full');
                $gravureMainImageTag     = wp_get_attachment_image($gravureMainImage["ID"], 'full');
        ?>

        <li>
            <a href=" <?php echo $gravureMainImageUrl[0] ?> " title=" <?php echo $gravure->post_title ?> ">
                <?php echo $gravureMainImageTag ?>
            </a>
            <p> <?php echo $gravure->post_title ?> </p>
            <p> <?php echo $gravure->GAL_technic ?> </p>
            <p> <?php echo $gravure->GAL_format ?> </p>
            <p> <?php echo $gravure->GAL_year ?> </p>
        </li>

        <?php
            }
        ?>
    </ul>

</div>
<?php get_footer(); ?>
