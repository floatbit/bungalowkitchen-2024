<?php
/**
 * Add theme support
 */
add_action('after_setup_theme', function () {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('menus');
    add_theme_support('editor-styles');
    add_editor_style('dist/editor.css');

    register_nav_menus([
        'main_navigation' => __('Main Navigation'),
    ]);

    // Add ACF options page
    if (function_exists('acf_add_options_page')) {
        acf_add_options_page([
            'page_title' => 'Announcement',
            'menu_slug' => 'announcement',
        ]);
    }
    if (function_exists('acf_add_options_page')) {
        acf_add_options_page([
            'page_title' => 'Footer',
            'menu_slug' => 'footer',
        ]);
    }
});

/**
 * Enqueue script and styles
 */
add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style('app', assets_url('/dist/app.css'), [], null);
    wp_enqueue_script('app', assets_url('/dist/app.js'), ['jquery'], null, true);

    // Register script for blocks
    // If needed, separate the script per block
    //wp_register_script('blocks/text', assets_url('/dist/blocks/text.js'), ['jquery'], null, true);
});


/**
 * Custom body classes.
 */
function bungalowkitchen_body_class($classes) {
  global $post;
  $blocks = parse_blocks( $post->post_content );
  foreach ($blocks as $id=>$block) {
    if ($id == 0 && ($block['blockName'] == 'acf/wide-image' || $block['blockName'] == 'acf/text-image')) {
      $classes[] = 'page-header-no-bottom-margin';
    }
  }
  return $classes;
}
add_filter('body_class', 'bungalowkitchen_body_class');

function bungalowkitchen_get_events($options = array()) {
    $args = array(
      'post_type'      => 'tribe_events',
      'post_status'    => 'publish',
      'posts_per_page' => -1,
      'orderby' => 'meta_value',
      'meta_key' => '_EventEndDate',
      'order' => 'ASC',
    );
    if (isset($options['order'])) {
        $args['order'] = $options['order'];
    }
    $tax_query = array();
    if (isset($options['tribe_events_cat'])) {
      $tax_query[] =  array(
        'taxonomy' => 'tribe_events_cat',
        'field' => 'term_id',
        'terms' => $options['tribe_events_cat']
      );
      $args['tax_query'] = $tax_query;
    }
    $meta_query = array();
    if ($options['start-date']) {
      $start_date = date('Y-m-d 23:59:59', strtotime($options['start-date'] . '-4 hours'));
      $meta_query[] = array(
        'key' => '_EventEndDate',
        'compare' => '>=',
        'value' => $start_date,
        'type' => 'DATETIME'
      );
    }
    if ($options['past']) {
      $start_date = date('Y-m-d 23:59:59', strtotime($options['start-date'] . '-4 hours'));
      $meta_query[] = array(
        'key' => '_EventEndDate',
        'compare' => '<',
        'value' => $start_date,
        'type' => 'DATETIME'
      );
    }
    if ($meta_query) {
      $args['meta_query'] = $meta_query;
    }

    if ($options['exclude_events']) {
      $exclude_ids = array();
      foreach ($options['exclude_events'] as $event) {
        $exclude_ids[] = $event->ID;
      }
      $args['post__not_in'] = $exclude_ids;
    }

    //pr($options);
    //pr($args);
    $posts = get_posts($args);
    return $posts;
  }

  function bungalowkitchen_get_event_readable_date($event) {
    $start = tribe_get_start_date( $event, false, 'Y-m-d' );
    $end = tribe_get_end_date( $event, false, 'Y-m-d' );
    if ($start == $end) {
      return tribe_get_start_date( $event, false, 'M. j, Y' );
    } else if (time() < strtotime($start)) {
      return sprintf('%s – %s', tribe_get_start_date( $event, false, 'M. j, Y' ), tribe_get_end_date( $event, false, 'M. j, Y' ));
    } else {
      return sprintf('%s – %s', tribe_get_start_date( $event, false, 'M. j, Y' ), tribe_get_end_date( $event, false, 'M. j, Y' ));
    }
  }
  