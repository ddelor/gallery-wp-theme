<?php

namespace Bundle\AdminBundle\Application;

use Bundle\CoreBundle\Application\Hook as HookAction;

class Hook extends HookAction
{
    public static function adminLoadJs()
    {
        HookAction::adminLoadJs();
    }

    public static function adminLoadCss()
    {
        HookAction::adminLoadCss();
    }

    public static function removeDashboardWidgets()
    {
        // remove_meta_box('dashboard_right_now', 'dashboard', 'normal');
        // remove_meta_box('dashboard_recent_comments', 'dashboard', 'normal');
        // remove_meta_box('dashboard_incoming_links', 'dashboard', 'normal');
        // remove_meta_box('dashboard_plugins', 'dashboard', 'normal');
        // remove_meta_box('dashboard_quick_press', 'dashboard', 'side');
        // remove_meta_box('dashboard_recent_drafts', 'dashboard', 'side');
        remove_meta_box('dashboard_primary', 'dashboard', 'side');
        remove_meta_box('dashboard_secondary', 'dashboard', 'side');
        remove_meta_box('dashboard_activity', 'dashboard', 'normal');
    }

    public static function removeEditorMenu()
    {
        remove_action('admin_menu', '_add_themes_utility_last', 101);
    }

    public static function menuPages()
    {
        remove_menu_page('edit-comments.php');
        // remove_menu_page('plugins.php');

        // remove_menu_page('index.php');
        // remove_menu_page('themes.php');
        // remove_menu_page('edit.php');
        // remove_submenu_page( 'edit.php', 'edit-tags.php?taxonomy=post_tag' );   // Remove posts->tags submenu
        // remove_submenu_page( 'edit.php', 'edit-tags.php?taxonomy=category' );   // Remove posts->categories submenu
    }

    public static function adminBarRender()
    {
        global $wp_admin_bar;

        $wp_admin_bar->remove_menu('comments');
        $wp_admin_bar->remove_menu('new-content');
        $wp_admin_bar->remove_menu('wp-logo');

        // $wp_admin_bar->add_menu( array(
        //     'parent' => false, // use 'false' for a root menu, or pass the ID of the parent menu
        //     'id' => 'new_media', // link ID, defaults to a sanitized title value
        //     'title' => "Menu", // link title
        //     'href' => admin_url( 'nav-menus.php'), // name of file
        //     'meta' => false // array of any of the following options: array( 'html' => '', 'class' => '', 'onclick' => '', target => '', title => '' );
        // ));
    }

    public static function register_menus()
   {
       register_nav_menus(
           array(
               'header' => __( 'Header Navigation'),
               'footer' => __( 'Footer Navigation'),
           )
       );
   }
}
