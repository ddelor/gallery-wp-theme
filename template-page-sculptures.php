<?php
/* Template Name: Sculptures */
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
            foreach ($sculptures as $sculpture) {
                $sculptureMainImage        = current(rwmb_meta('GAL_image', array('type' => 'image_advanced'), $sculpture->ID));
                $sculptureMainImageUrl     = wp_get_attachment_image_src($sculptureMainImage["ID"], 'full');
                $sculptureMainImageTag     = wp_get_attachment_image($sculptureMainImage["ID"], 'full');
        ?>

        <li>
            <a href=" <?php echo $sculptureMainImageUrl[0] ?> " title=" <?php echo $sculpture->post_title ?> ">
                <?php echo $sculptureMainImageTag ?>
            </a>
            <p> <?php echo $sculpture->post_title ?> </p>
            <p> <?php echo $sculpture->GAL_technic ?> </p>
            <p> <?php echo $sculpture->GAL_format ?> </p>
            <p> <?php echo $sculpture->GAL_year ?> </p>
        </li>

        <?php
            }
        ?>
    </ul>

</div>
<?php get_footer(); ?>
