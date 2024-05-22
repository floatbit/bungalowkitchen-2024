<?php
/**
 * Block template file: block.php
 *
 * Menus Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'menus-' . $block['id'];
if ( ! empty($block['anchor'] ) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$classes = 'acf-block block-menus';
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
        <div class="nav-menus">
            <div class="flex gap-2 flex-wrap justify-center">
                <?php $menus = get_field( 'menus' ); ?>
                <?php foreach ( $menus as $post ) :  ?>
                <?php setup_postdata( $post ); ?>
                    <a href="#" class="btn" data-post-id="<?php print $post->ID;?>"><?php print $post->post_title;?></a>
                <?php endforeach; ?>
                <?php wp_reset_postdata(); ?>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="intro-image payload" data-post-id="0">
            <div class="flex justify-center">
                <div class="basis-1/12 send relative">
                    <img src="<?php echo assets_url('/dist/images/seashell-salmon.png'); ?>" class="seashell"/>
                </div>
                <div class="basis-10/12">
                    <img src="<?php echo assets_url('/dist/images/220117_Bungalow13522 1.jpg'); ?>"/>
                </div>
                <div class="basis-1/12">
                </div>
            </div>
        </div>
        
        <?php foreach ( $menus as $post ) :  ?>
        <?php setup_postdata( $post ); ?>
        <?php
            $left_text = get_field('left_text', $post->ID);
            $right_text = get_field('right_text', $post->ID);
        ?>
        <div class="menu-set payload hidden" data-post-id="<?php print $post->ID;?>">
            <div class="md:grid grid-cols-2 gap-8 justify-center">
                <div>
                    <?php print $left_text;?>
                </div>
                <div>
                    <?php print $right_text;?>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
        <?php wp_reset_postdata(); ?>


    </div>
</div>
