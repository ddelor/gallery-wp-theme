<?php

namespace Bundle\FrontBundle\Application;

use Bundle\CoreBundle\Application\Hook as HookAction;

class Hook extends HookAction
{
    public static function loadJs()
    {
        HookAction::loadJs();

        wp_register_script('bootstrap', get_template_directory_uri() . '/assets/front/libs/bootstrap/js/bootstrap.min.js', array('jquery'), false, true);
        wp_register_script('sudoSlider', get_template_directory_uri() . '/assets/front/libs/jquery.sudoSlider.min.js', array('jquery'), false, true);

        wp_enqueue_script('bootstrap');
        wp_enqueue_script('sudoSlider');
    }

    public static function loadCss()
    {
        HookAction::loadCss();

        // global $is_IE;

        // if ($is_IE ) {

        //     // IE version conditional enqueue
        //     $response = wp_check_browser_version();
        //     if ( 0 > version_compare( intval( $response['version'] ) , 8 ) )
        //         wp_enqueue_style( ... );
        //     if ( 0 > version_compare( intval( $response['version'] ) , 9 ) )
        //         wp_enqueue_style( ... );
        // }

        wp_register_style('bootstrap', get_template_directory_uri() . '/assets/front/libs/bootstrap/css/bootstrap.min.css', null, false);
        wp_register_style('normalize', get_template_directory_uri() . '/assets/front/css/normalize.css', null, false);
        wp_register_style('app', get_template_directory_uri() . '/assets/front/css/app.css', null, false);

        wp_enqueue_style('bootstrap');
        wp_enqueue_style('normalize');
        wp_enqueue_style('app');

    }
}
