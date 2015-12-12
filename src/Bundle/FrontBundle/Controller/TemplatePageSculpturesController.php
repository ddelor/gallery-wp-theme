<?php

namespace Bundle\FrontBundle\Controller;

use Bundle\CoreBundle\Controller\Controller;

class TemplatePageSculpturesController extends Controller
{
    protected function get(){

        global $post;

        // GET SCULPTURES
        $argSculptures = array(
            'post_type'      => 'art',
            'posts_per_page' => -1,
            'posts_status'   => 'publish',
            'range'          => 'Sculpture',
            'meta_key'       => 'GAL_year',
            'orderby'        => 'meta_value',
            'order'          => 'ASC',
        );
        $sculptures = get_posts($argSculptures);

        return array(
            'sculptures' => $sculptures
        );
    }
}
