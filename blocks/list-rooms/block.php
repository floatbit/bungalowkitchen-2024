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
?>

<div id="<?php echo esc_attr( $id ); ?>" class="<?php echo esc_attr( $classes ); ?>">
    <div class="container">
        <div class="flex justify-center">
            <div class="basis-11/12">
                <?php for($i = 0; $i < 3; $i++): ?>
                <div class="room">
                    <div class="flex gap-8">
                        <div class="basis-1/2">
                            <p>
                                <img src="http://placehold.it/1000x680" alt="">
                            </p>
                        </div>
                        <div class="basis-1/2">
                            <h3 class="uppercase">The Listening Room</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A incidunt fugit sed consequuntur earum iure nostrum. Quisquam vero officia esse. Suscipit asperiores deserunt commodi quaerat assumenda minus eum consectetur laborum. Obcaecati culpa sed neque magni officia, enim architecto doloremque nesciunt!</p>
                        </div>
                    </div>
                </div>
                <?php endfor; ?>
            </div>
        </div>
    </div>
</div>