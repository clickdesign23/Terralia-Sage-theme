<?php

use Roots\Acorn\Application;

/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader for
| our theme. We will simply require it into the script here so that we
| don't have to worry about manually loading any of our classes later on.
|
*/

if (! file_exists($composer = __DIR__.'/vendor/autoload.php')) {
    wp_die(__('Error locating autoloader. Please run <code>composer install</code>.', 'sage'));
}

require $composer;

/*
|--------------------------------------------------------------------------
| Register The Bootloader
|--------------------------------------------------------------------------
|
| The first thing we will do is schedule a new Acorn application container
| to boot when WordPress is finished loading the theme. The application
| serves as the "glue" for all the components of Laravel and is
| the IoC container for the system binding all of the various parts.
|
*/

Application::configure()
    ->withProviders([
        App\Providers\ThemeServiceProvider::class,
    ])
    ->boot();

/*
|--------------------------------------------------------------------------
| Register Sage Theme Files
|--------------------------------------------------------------------------
|
| Out of the box, Sage ships with categorically named theme files
| containing common functionality and setup to be bootstrapped with your
| theme. Simply add (or remove) files from the array below to change what
| is registered alongside Sage.
|
*/

collect(['setup', 'filters'])
    ->each(function ($file) {
        if (! locate_template($file = "app/{$file}.php", true, true)) {
            wp_die(
                /* translators: %s is replaced with the relative file path */
                sprintf(__('Error locating <code>%s</code> for inclusion.', 'sage'), $file)
            );
        }
    });






// Register custom post type for Properties
function register_properties_post_type() {
    register_post_type('property', array(
        'labels' => array(
            'name' => 'Properties',
            'singular_name' => 'Property',
        ),
        'public' => true,
        'has_archive' => true,
        'supports' => array('title', 'editor', 'thumbnail'),
        'menu_icon' => 'dashicons-building',
    ));
}
add_action('init', 'register_properties_post_type');



function enqueue_vite_assets() {
    $manifest_path = get_template_directory() . '/public/build/manifest.json';
    if (file_exists($manifest_path)) {
        $manifest = json_decode(file_get_contents($manifest_path), true);
        if (isset($manifest['resources/css/app.css']['file'])) {
            wp_enqueue_style('app-css', 
                get_template_directory_uri() . '/public/build/' . $manifest['resources/css/app.css']['file']
            );
        }
        if (isset($manifest['resources/js/app.js']['file'])) {
            wp_enqueue_script('app-js', 
                get_template_directory_uri() . '/public/build/' . $manifest['resources/js/app.js']['file'], 
                [], null, true
            );
        }
    }
}
add_action('wp_enqueue_scripts', 'enqueue_vite_assets');
    function register_my_menus() {
    register_nav_menus(
        array(
            'header_menu' => __('header_menu'),
            'footer_menu_1' => __('footer_menu_1'),
            'footer_menu_2' => __('footer_menu_2')
        )
    );
}
add_action('init', 'register_my_menus');



if (function_exists('acf_add_options_page')) {
    acf_add_options_page(array(
        'page_title' => 'Global Header',
        'menu_title' => 'Global Header',
        'menu_slug'  => 'global-header-settings',
        'capability' => 'edit_posts',
        'redirect'   => false
    ));

        // Footer Settings
    acf_add_options_page(array(
        'page_title'    => 'Footer Settings',
        'menu_title'    => 'Footer Settings',
        'menu_slug'     => 'footer-settings',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));
}
