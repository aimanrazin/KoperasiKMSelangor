<?php
/*
 * Disallow direct access
 */
if (!defined('ABSPATH')) {
    die('Forbidden.');
}
function reshape_block_scripts()
{
    // enqueue parent style
    wp_enqueue_style('reshape-block-parent-style', get_template_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'reshape_block_scripts');

if (!function_exists('reshape_block_excerpt_limit')) {
    function reshape_block_excerpt_limit($length)
    {
        if (is_admin()) {
            return $length;
        }
        return 40;
    }
    add_filter('excerpt_length', 'reshape_block_excerpt_limit');
}

/**
 * Registers pattern categories.
 *
 * @since reshape-block 1.0.0
 *
 * @return void
 */
function reshape_block_register_pattern_category()
{

    $patterns = array();

    $block_pattern_categories = array(
        'reshape-block-patterns' => array('label' => __('Reshape Block Patterns', 'reshape-block'))
    );

    $block_pattern_categories = apply_filters('reshape_block_block_pattern_categories', $block_pattern_categories);

    foreach ($block_pattern_categories as $name => $properties) {
        if (!WP_Block_Pattern_Categories_Registry::get_instance()->is_registered($name)) {
            register_block_pattern_category($name, $properties);
        }
    }
}
add_action('init', 'reshape_block_register_pattern_category', 9);

