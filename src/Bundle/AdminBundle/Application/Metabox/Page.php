<?php

namespace Bundle\AdminBundle\Application\Metabox;

use Bundle\AdminBundle\Application\Filter as FilterAction;
use \WP_Query;

class Page extends FilterAction
{
  public static function registerMetaBoxes( $meta_boxes )
  {
      global $post;

      // GET ART POSTS
      $argArts = array(
          'post_type'      => 'art',
          'posts_per_page' => -1,
          'posts_status'   => 'publish',
      );
      $listArts = array();
      $arts = get_posts($argArts);
      foreach ($arts as $art) {
        $listArts[$art->ID] = $art->post_title;
      }

      $meta_boxes[] = array(
          'id'       => 'page_content',
          'title'    => 'Contenu',
          'pages'    => array( 'page' ),
          'context'  => 'normal',
          'priority' => 'high',
          'show'     => array(
              'template' => array(
                  'template-page-gravures.php',
                  'template-page-sculptures.php',
                )
            ),
          'autosave' => true,

          // List of meta fields
          'fields' => array(
              array(
                  'name'  => 'Sous titre',
                  'id'    => FilterAction::PREFIX . "subtitle",
                  'type'  => 'text',
                  'clone' => false,
              ),
          )
      );

      $meta_boxes[] = array(
          'id'       => 'home_slider_content',
          'title'    => 'Contenu du slider',
          'pages'    => array( 'page' ),
          'context'  => 'normal',
          'priority' => 'high',
          'show'     => array(
              'template' => array(
                  'template-page-home.php',
                )
            ),
          'autosave' => true,

          // List of meta fields
          'fields' => array(
              array(
                  'name'     => 'Oeuvres',
                  'id'       => FilterAction::PREFIX . "slider_art",
                  'type'     => 'autocomplete',
                  'desc'     => 'Choisissez une ou plusieurs oeuvre à insérer dans le slider',
                  'multiple' => true,
                  'clone'    => false,
                  'options'  => $listArts,
              ),
          )
      );

      return $meta_boxes;
  }
}
