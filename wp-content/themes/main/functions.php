<?php

/**
 * Author: NguyenBa <banv.drei@gmail.com>
 * Last Edited: 01 September 2020
 * Edited By: NguyenBa
 */

define('THEME_DIR', get_template_directory());
define('THEME_URI', get_template_directory_uri());
define('THEME_ASSETS', THEME_URI . '/assets');
define('ADMIN_AJAX_URL', admin_url('admin-ajax.php'));
define('HOME_URL', home_url('/'));
define('FAVICON', THEME_ASSETS . '/images/favicon.png');
define('FAVICON_ADMIN', THEME_URI . '/inc/assets/images/favicon.png');
define('LOGO_LOGIN_ADMIN', THEME_URI . '/inc/assets/images/logo-admin.png');
define('LOGO_LOGIN_ADMIN_W', THEME_URI . '/inc/assets/images/logo-admin-w.svg');
define('SCREEN_SHOT', THEME_URI . '/screenshot.png?v=' . date('dmY'));
define('NOT_IMAGE', THEME_ASSETS . '/images/image-placeholder.png');
define('FACEBOOK_APP_ID', '');

require_once('inc/Admin.php');
require_once('inc/Helpers.php');
require_once('inc/Menu.php');
require_once('inc/Options.php');
require_once('inc/Paginate.php');
require_once('inc/PostType.php');
require_once('inc/CustomHook.php');
// require_once('inc/Smtp.php');
require_once('inc/contact-form/FormAjax.php');
$formCommon = new FormCommon();

class MainCore
{
    private static $_instance = null;
    function __construct()
    {
        add_action('after_setup_theme', array($this, 'afterSetupTheme'));
        add_action('wp_enqueue_scripts', array($this, 'enqueue'));
    }
    public static function instance()
    {
        if (is_null(self::$_instance)) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }
    public function afterSetupTheme()
    {
        load_theme_textdomain('corex', get_template_directory() . '/languages');
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');
    }
    public function enqueue()
    {
        // //libs css
        // wp_enqueue_style('style_update', THEME_ASSETS . '/css/style_update.scss.css');
        // wp_enqueue_style('styles', THEME_URI . '/css/style.scss.css');

        //libs js
        wp_enqueue_script('validator', THEME_URI . '/assets/js/scripts/form-validation.min.js', array('jquery'), false, true);
        wp_enqueue_script('scripts', THEME_URI . '/assets/js/scripts/scripts.min.js', array('jquery'), false, true);
        $wp_script_data = array(
            'AJAX_URL' => ADMIN_AJAX_URL,
            'HOME_URL' => HOME_URL
        );
        wp_localize_script('scripts', 'obj', $wp_script_data);
    }
}
MainCore::instance();
