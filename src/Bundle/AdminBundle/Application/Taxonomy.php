<?php

namespace Bundle\AdminBundle\Application;

use Bundle\CoreBundle\Application\Taxonomy as TaxonomyAction;

class Taxonomy extends TaxonomyAction
{
    public static function type()
    {
        register_taxonomy('type',

            array(
                'post',
            ),

            array(
                "hierarchical"   => true,
                "label"          => 'Types',
                "singular_label" => 'type',
                "rewrite"        => array(
                    'slug'         => 'type',
                    'hierarchical' => true,
                )
            )
        );
    }

    public function art_range()
    {
        register_taxonomy('range',

            array(
                'art',
            ),

            array(
                "hierarchical"   => true,
                "label"          => 'Genre',
                'menu_name'      => __( 'Taxonomy', 'text_domain' ),
                "singular_label" => 'Genre',
                "rewrite"        => array(
                    'slug'         => 'range',
                    'hierarchical' => true,
                )
            )
        );
    }
}
