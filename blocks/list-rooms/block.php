<?php
/**
 * Block template file: block.php
 *
 * List of Rooms Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'list-rooms-' . $block['id'];
if ( ! empty($block['anchor'] ) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$classes = 'acf-block block-list-rooms';
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
    <?php if ( have_rows( 'rooms' ) ) : ?>
		<?php while ( have_rows( 'rooms' ) ) : the_row(); ?>
			<?php $image = get_sub_field( 'image' ); ?>
            <div class="room">
                <div class="md:flex gap-8">
                    <div class="basis-1/2">
                        <p>
                        <?php if ( $image ) : ?>
                            <img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
                        <?php endif; ?>
                        </p>
                    </div>
                    <div class="basis-1/2">
                        <?php the_sub_field( 'text' ); ?>
                    </div>
                </div>
            </div>
		<?php endwhile; ?>
	<?php endif; ?>
    </div>
</div>