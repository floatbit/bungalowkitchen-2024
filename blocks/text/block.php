<?php
/**
 * Block template file: block.php
 *
 * Text Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'text-' . $block['id'];
if ( ! empty($block['anchor'] ) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$classes = 'acf-block block-text';
if ( ! empty( $block['className'] ) ) {
    $classes .= ' ' . $block['className'];
}
if ( ! empty( $block['align'] ) ) {
    $classes .= ' align' . $block['align'];
}
?>

<div id="<?php echo esc_attr( $id ); ?>" class="<?php echo esc_attr( $classes ); ?>">
    <div class="container">
        <div class="text">
            <h2>Lorem Ipsum</h2>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequuntur molestias quasi perspiciatis iure cumque non, suscipit animi corporis vero in quaerat velit enim dolores minima aut, nisi accusamus tempore ipsam, rem dignissimos! Architecto ullam magni voluptates aut pariatur ex eveniet!</p>
            <p class="cta">
                <a href="#" class="button">Make a Reservation</a>
            </p>
        </div>
    </div>
</div>