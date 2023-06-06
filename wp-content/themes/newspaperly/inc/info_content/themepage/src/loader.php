<?php
defined("ABSPATH") || exit();


add_action('admin_menu', 'business_blog_themepage');
function business_blog_themepage()
{
    add_menu_page(__('Theme Settings', 'newspaperly'), __('Theme Settings', 'newspaperly'), 'manage_options', 'business_blog_themepage', 'business_blog_themepage_content', get_template_directory_uri() . '/inc/info_content/themepage/src/wp-icon-superb.svg', 61);
}

function business_blog_themepage_content()
{
    require_once(trailingslashit(get_template_directory()) . 'inc/info_content/themepage/src/themepage.php');
}

function business_blog_comparepage_css($hook)
{
    if ('toplevel_page_business_blog_themepage' != $hook) {
        return;
    }
    wp_enqueue_style('newspaperly-custom-style', get_template_directory_uri() . '/inc/info_content/themepage/src/compare.css');
}
add_action('admin_enqueue_scripts', 'business_blog_comparepage_css');

// Theme page end
