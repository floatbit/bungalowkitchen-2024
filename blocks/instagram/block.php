<?php
/**
 * Block template file: block.php
 *
 * Instagram Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'instagram-' . $block['id'];
if ( ! empty($block['anchor'] ) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$classes = 'acf-block block-instagram';
if ( ! empty( $block['className'] ) ) {
    $classes .= ' ' . $block['className'];
}
if ( ! empty( $block['align'] ) ) {
    $classes .= ' align' . $block['align'];
}

$classes .= ' ' . get_field('bottom_margin');
?>

<div id="<?php echo esc_attr( $id ); ?>" class="<?php echo esc_attr( $classes ); ?>">
    <div class="container container-narrow">
        <h2 class="mb-0">
            <a href="https://instagram.com/<?php the_field( 'instagram_handle' ); ?>" target="_blank">@<?php the_field( 'instagram_handle' ); ?></a>
        </h2>
        <?php print apply_filters( 'the_content', get_field('instagram_shortcode') ); ?>
    </div>
</div>
