<?php

namespace Bundle\AdminBundle\Application\Metabox;

use Bundle\AdminBundle\Application\Filter as FilterAction;

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

      // HOME
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

      // ART
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

      // ABOUT
      $meta_boxes[] = array(
          'id'       => 'formations_list',
          'title'    => 'Liste de formations',
          'pages'    => array( 'page' ),
          'context'  => 'normal',
          'priority' => 'high',
          'show'     => array(
              'template' => array(
                  'template-page-about.php',
                )
            ),
          'autosave' => true,

          // List of meta fields
          'fields' => array(
              array(
                  'name'     => 'Formation',
                  'id'       => FilterAction::PREFIX . "formation",
                  'type'     => 'group',
                  'clone'    => true,

                  'fields' => array(
                      array(
                          'name'  => 'Dates',
                          'id'    => FilterAction::PREFIX . "formation_dates",
                          'type'  => 'text',
                          'clone' => false,
                      ),
                      array(
                          'name'  => 'Description',
                          'id'    => FilterAction::PREFIX . "formation_description",
                          'type'  => 'textarea',
                          'cols'  => 20,
                          'rows'  => 3,
                          'clone' => false,
                      ),
                  ),
              ),
          )
      );

      $meta_boxes[] = array(
          'id'       => 'exhibitions_list',
          'title'    => 'Liste d\'expositions',
          'pages'    => array( 'page' ),
          'context'  => 'normal',
          'priority' => 'high',
          'show'     => array(
              'template' => array(
                  'template-page-about.php',
                )
            ),
          'autosave' => true,

          // List of meta fields
          'fields' => array(
              array(
                  'name'     => 'Exposition',
                  'id'       => FilterAction::PREFIX . "exhibition",
                  'type'     => 'group',
                  'clone'    => true,

                  'fields' => array(
                      array(
                          'name'  => 'Année de début',
                          'id'    => FilterAction::PREFIX . "exhibition_year_start",
                          'type'  => 'text',
                          'clone' => false,
                      ),
                      array(
                          'name'  => 'Année de fin',
                          'id'    => FilterAction::PREFIX . "exhibition_year_end",
                          'type'  => 'text',
                          'clone' => false,
                      ),
                      array(
                          'name'  => 'Description',
                          'id'    => FilterAction::PREFIX . "exhibition_description",
                          'type'  => 'textarea',
                          'cols'  => 20,
                          'rows'  => 3,
                          'clone' => false,
                      ),
                  ),
              ),
          )
      );

      $meta_boxes[] = array(
          'id'       => 'misc_list',
          'title'    => 'Informations Diverses',
          'pages'    => array( 'page' ),
          'context'  => 'normal',
          'priority' => 'high',
          'show'     => array(
              'template' => array(
                  'template-page-about.php',
                )
            ),
          'autosave' => true,

          // List of meta fields
          'fields' => array(
              array(
                  'name'  => 'Divers',
                  'id'    => FilterAction::PREFIX . "misc",
                  'type'  => 'textarea',
                  'cols'  => 20,
                  'rows'  => 3,
                  'clone' => true,
              ),
          )
      );

      return $meta_boxes;
  }
}
