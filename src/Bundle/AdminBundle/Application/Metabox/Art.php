<?php

namespace Bundle\AdminBundle\Application\Metabox;

use Bundle\AdminBundle\Application\Filter as FilterAction;

class Art extends FilterAction
{
  public static function registerMetaBoxes( $meta_boxes )
  {
      global $post;

      $meta_boxes[] = array(
          'id' => 'technical',
          'title' => 'Informations techniques',
          'pages' => array( 'art' ),
          'context' => 'normal',
          'priority' => 'high',
          'autosave' => true,

          // List of meta fields
          'fields' => array(
              array(
                  'name' => 'Image',
                  'id'   => FilterAction::PREFIX . "image",
                  'max_file_uploads' => 1,
                  'type' => 'image_advanced',
              ),
              array(
                  'type' => 'divider',
                  'id'   => 'fake_divider_id',
              ),
              array(
                  'name'  => 'Technique',
                  'id'    => FilterAction::PREFIX . "technic",
                  'desc'  => 'Technique utilisée',
                  'type'  => 'text',
                  'clone' => false,
              ),
              array(
                  'name'  => 'Format',
                  'id'    => FilterAction::PREFIX . "format",
                  'type'  => 'text',
                  'clone' => false,
                  'desc' => 'Format de l\'oeuvre',
              ),
              array(
                  'name'  => 'Année',
                  'id'    => FilterAction::PREFIX . "year",
                  'type'  => 'text',
                  'clone' => false,
                  'desc' => 'Année',
              ),
          )
      );

      return $meta_boxes;
  }
}
