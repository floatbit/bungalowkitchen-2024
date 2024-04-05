<?php
/**
 * Block template file: block.php
 *
 * Dock Map Image Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'dock-map-image-' . $block['id'];
if ( ! empty($block['anchor'] ) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$classes = 'acf-block block-dock-map-image';
if ( ! empty( $block['className'] ) ) {
    $classes .= ' ' . $block['className'];
}
if ( ! empty( $block['align'] ) ) {
    $classes .= ' align' . $block['align'];
}
?>

<div id="<?php echo esc_attr( $id ); ?>" class="<?php echo esc_attr( $classes ); ?>">
<div class="flex justify-end">
        <div class="basis-3/5 text-center">
            <img src="<?php echo assets_url('/dist/images/map.png'); ?>" class="map" />
        </div>
    </div>
    <div class="flex justify-end">
        <div class="basis-2/5 self-end relative">
            <img src="<?php echo assets_url('/dist/images/dock-gold.png'); ?>" class="dock" />
        </div>
        <div class="basis-3/5 text-center">
            <img src="<?php echo assets_url('/dist/images/MM-BB-Bungalow-1-scaled 1.jpg'); ?>" class="photo" />
        </div>
    </div>
</div>