<?php
/**
 * Block template file: block.php
 *
 * Events Past Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'events-past-' . $block['id'];
if ( ! empty($block['anchor'] ) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$classes = 'acf-block block-events-past';
if ( ! empty( $block['className'] ) ) {
    $classes .= ' ' . $block['className'];
}
if ( ! empty( $block['align'] ) ) {
    $classes .= ' align' . $block['align'];
}
?>

<?php
/**
 * Block template file: block.php
 *
 * Events Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'events-' . $block['id'];
if ( ! empty($block['anchor'] ) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$classes = 'acf-block block-events';
if ( ! empty( $block['className'] ) ) {
    $classes .= ' ' . $block['className'];
}
if ( ! empty( $block['align'] ) ) {
    $classes .= ' align' . $block['align'];
}
?>

<div id="<?php echo esc_attr( $id ); ?>" class="<?php echo esc_attr( $classes ); ?>">
    <h2>
        <span class="shrink line"></span>
        <span class="grow text">Past Events</span>
        <span class="shrink line"></span>
    </h2>
    <div class="container">
        <div class="flex justify-center">
            <div class="basis-11/12">
                <?php for($i = 0; $i < 3; $i++): ?>
                <div class="event">
                    <div class="flex gap-8">
                        <div class="basis-1/2">
                            <p>
                                <img src="http://placehold.it/800x1024" alt="">
                            </p>
                        </div>
                        <div class="basis-1/2">
                            <h3>Lorem Ipsum</h3>
                            <p class="date uppercase">Mar. 10, 2024</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit, rem.</p>
                            <p>
                                <strong>Wines by:</strong><br>
                                Lorem ipsum<br>
                                Lorem ipsum<br>
                                Lorem ipsum<br>
                                Lorem ipsum<br>
                                Lorem ipsum
                            </p>
                        </div>
                    </div>
                </div>
                <?php endfor; ?>
            </div>
        </div>
    </div>
</div>