<?php

// Add images sizes.
function custom_theme_setup()
{
    add_image_size('low-image', 20, 20, true);
}
add_action('init', 'custom_theme_setup');


function image_sizes_to_mediapicker($default_sizes)
{
    return array_merge($default_sizes, array(
        'low-image' => __('Low image size'),
    ));
}
add_filter('image_size_names_choose', 'image_sizes_to_mediapicker');
