<?php

namespace Bundle\AdminBundle\Application;

use Bundle\CoreBundle\Application\CustomType as CustomTypeAction;

class CustomType extends CustomTypeAction
{
    public static function sampleType()
    {
        $labels =
        array(
            'name'               => 'Samples',
            'singular_name'      => 'Sample',
            'add_new'            => 'Ajouter',
            'add_new_item'       => 'Ajouter un example',
            'edit_item'          => 'Modifier l\'example',
            'new_item'           => 'Nouveau example',
            'view_item'          => 'Voir l\'example',
            'search_items'       => 'Recherche un example',
            'not_found'          => 'Aucun example',
            'not_found_in_trash' => 'Aucun example',
            'parent_item_colon'  => ''
        );

        $args =
        array(
            'labels'            => $labels,
            'rewrite'           => array('slug' => 'Samples'),
            'public'            => true,
            'publicly_queryable'=> true,
            'show_ui'           => true,
            'query_var'         => true,
            'capability_type'   => 'post',
            'hierarchical'      => false,
            'menu_position'     => 4,
            'supports'          => array('title', 'editor', 'thumbnail', 'post_tag', 'revisions'),
            'menu_icon'         => get_template_directory_uri() . '/assets/admin/img/sample.png'
        );

        register_post_type('sample', $args);
    }

    public static function artType()
    {
        $labels =
        array(
            'name'               => 'Oeuvres d\'art',
            'singular_name'      => 'Oeuvre',
            'rewrite'            => array('slug' => 'art'),
            'add_new'            => 'Ajouter',
            'add_new_item'       => 'Ajouter une oeuvre',
            'edit_item'          => 'Modifier l\'oeuvre',
            'new_item'           => 'Nouvelle oeuvre',
            'view_item'          => 'Voir l\'oeuvre',
            'search_items'       => 'Rechercher une oeuvre',
            'not_found'          => 'Aucune oeuvre',
            'not_found_in_trash' => 'Aucune oeuvre',
            'parent_item_colon'  => ''
        );

        $args =
        array(
            'labels'            => $labels,
            'public'            => true,
            'publicly_queryable'=> true,
            'show_ui'           => true,
            'query_var'         => true,
            'rewrite'           => true,
            'capability_type'   => 'post',
            'hierarchical'      => false,
            'menu_position'     => 4,
            'supports'          => array('title', 'thumbnail', 'post_tag'),
            'menu_icon'         => ''
        );

        register_post_type('art', $args);
    }
}
