<?php

namespace Bundle\FrontBundle\Controller;

use Bundle\CoreBundle\Controller\Controller;

class TemplatePageHomeController extends Controller
{
    protected function get(){

        global $post;

        // SLIDER
        $sliderPostsID = rwmb_meta('GAL_slider_art', array('type' => 'autocomplete', 'multiple' => 'true'), $post->ID);
        $sliderPosts   = array();
        foreach ($sliderPostsID as $id) {
            $sliderPosts[] = get_post($id);
        }

        return array(
            'slides'    => $sliderPosts
        );
    }
}
