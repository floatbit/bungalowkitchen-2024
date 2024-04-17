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

$classes .= ' ' . get_field('bottom_margin');
?>

<div id="<?php echo esc_attr( $id ); ?>" class="<?php echo esc_attr( $classes ); ?>">
    <div class="container">
        <div class="text">
            <?php the_field( 'text' ); ?>
            <?php if ( have_rows( 'links' ) ) : ?>
            <p class="cta">
                <?php while ( have_rows( 'links' ) ) : the_row(); ?>
                    <?php $link = get_sub_field( 'link' ); ?>
                    <?php if ( $link ) : ?>
                        <a href="<?php echo esc_url( $link['url'] ); ?>" target="<?php echo esc_attr( $link['target'] ); ?>" class="btn"><?php echo esc_html( $link['title'] ); ?></a>
                    <?php endif; ?>
                <?php endwhile; ?>
            </p>
            <?php endif; ?>
        </div>
    </div>
</div>