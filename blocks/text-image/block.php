<?php
/**
 * Block template file: block.php
 *
 * Text + Image Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'text-image-' . $block['id'];
if ( ! empty($block['anchor'] ) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$classes = 'acf-block block-text-image';
if ( ! empty( $block['className'] ) ) {
    $classes .= ' ' . $block['className'];
}
if ( ! empty( $block['align'] ) ) {
    $classes .= ' align' . $block['align'];
}
?>

<div id="<?php echo esc_attr( $id ); ?>" class="<?php echo esc_attr( $classes ); ?>">
    <div class="container container-narrow">
        <div class="md:flex">
            <div class="basis-5/12">
                <div class="text">
                    <h2>Need to Reach Us?</h2>
                    <h4>Call 415-366-4088</h4>
                    <p>
                        <strong>Reservations</strong><br>
                        <a href="mailto:reservations.tib@bungalowkitchen.com">reservations.tib@bungalowkitchen.com</a>
                    </p>
                    <p>
                        <strong>Events</strong><br>
                        <a href="mailto:tiburon.events@bungalowkitchen.com">tiburon-events@bungalowkitchen.com</a>
                    </p>
                    <p>
                        <strong>General Information</strong><br>
                        <a href="mailto:tiburon.info@bungalowkitchen.com">tiburon-info@bungalowkitchen.com</a>
                    </p>
                </div>
            </div>
            <div class="basis-7/12 text-center hidden md:block">
                <img src="<?php echo assets_url('/dist/images/mic-gold.png'); ?>" class="mic" />
            </div>
        </div>
    </div>
</div>