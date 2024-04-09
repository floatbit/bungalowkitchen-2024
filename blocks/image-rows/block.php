<?php
/**
 * Block template file: block.php
 *
 * Rows of Images Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'image-rows-' . $block['id'];
if ( ! empty($block['anchor'] ) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$classes = 'acf-block block-image-rows';
if ( ! empty( $block['className'] ) ) {
    $classes .= ' ' . $block['className'];
}
if ( ! empty( $block['align'] ) ) {
    $classes .= ' align' . $block['align'];
}
?>

<div id="<?php echo esc_attr( $id ); ?>" class="<?php echo esc_attr( $classes ); ?>">
    <div class="container">
    <?php $rows = get_field('rows');?>
    <?php foreach($rows as $row):?>
        <div class="flex gap-4">
            <?php foreach($row['images'] as $image):?>
            <div class="image" style="flex: <?php print $image['width'] / $image['height'];?>;">
                <img src="<?php print $image['url'];?>" alt="">
            </div>
            <?php endforeach;?>
        </div>
    <?php endforeach;?>
    </div>
</div>