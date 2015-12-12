<?php

namespace Bundle\FrontBundle\Controller;

use Bundle\CoreBundle\Controller\Controller;

class TemplatePageGravuresController extends Controller
{
    protected function get(){

        global $post;

        // GET GRAVURES
        $argGravures = array(
            'post_type'      => 'art',
            'posts_per_page' => -1,
            'posts_status'   => 'publish',
            'range'          => 'Gravure',
            'meta_key'       => 'GAL_year',
            'orderby'        => 'meta_value',
            'order'          => 'ASC',
        );
        $gravures = get_posts($argGravures);

        return array(
            'gravures' => $gravures
        );
    }
}
