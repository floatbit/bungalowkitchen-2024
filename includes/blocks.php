<?php

/**
 * Register blocks
 */
add_action('init', function () {
    $dir = get_template_directory();

    register_block_type($dir . '/blocks/text');
    register_block_type($dir . '/blocks/wide-image');
    register_block_type($dir . '/blocks/dock-map-image');
    register_block_type($dir . '/blocks/instagram');
    register_block_type($dir . '/blocks/menus');
    register_block_type($dir . '/blocks/events');
    register_block_type($dir . '/blocks/events-past');
    register_block_type($dir . '/blocks/list-rooms');
    register_block_type($dir . '/blocks/boat-hand');
    register_block_type($dir . '/blocks/tripleseat-form');
    register_block_type($dir . '/blocks/image-rows');
    register_block_type($dir . '/blocks/tree-boat-image');
    register_block_type($dir . '/blocks/text-image');
}, 5);

/**
 * Set allowed blocks
 */
add_filter('allowed_block_types_all', function($allowed_blocks, $editor_context) {
    switch ($editor_context->post->post_type) {
        case 'page':
        case 'gallery':
            $allowed_blocks = [
                'acf/text',
                'acf/wide-image',
                'acf/dock-map-image',
                'acf/instagram',
                'acf/menus',
                'acf/events',
                'acf/events-past',
                'acf/list-rooms',
                'acf/boat-hand',
                'acf/tripleseat-form',
                'acf/image-rows',
                'acf/tree-boat-image',
                'acf/text-image',
            ];
            break;
    }

    return $allowed_blocks;
}, 10, 2);
