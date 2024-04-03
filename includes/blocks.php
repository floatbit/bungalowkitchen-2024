<?php

/**
 * Register blocks
 */
add_action('init', function () {
    $dir = get_template_directory();

    register_block_type($dir . '/blocks/text');
}, 5);

/**
 * Set allowed blocks
 */
add_filter('allowed_block_types_all', function($allowed_blocks, $editor_context) {
    switch ($editor_context->post->post_type) {
        case 'page':
            $allowed_blocks = [
                'acf/text',
            ];
            break;
    }

    return $allowed_blocks;
}, 10, 2);
