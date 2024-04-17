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
                <a href="#" class="btn" data-post-id="10">Brunch</a>
                <a href="#" class="btn" data-post-id="11">Dinner</a>
                <a href="#" class="btn">Drinks</a>
                <a href="#" class="btn">Dessert</a>
                <a href="#" class="btn">Sunset Strips</a>
                <a href="#" class="btn">Tasting Menu</a>
                <a href="#" class="btn">Sunday Supper</a>
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
        
        <div class="menu-set payload hidden" data-post-id="10">
            <div class="md:grid grid-cols-2 gap-8 justify-center">
                <div>
                        <?php for($i = 0; $i < 3; $i++): ?>
                        <h4>10 The Caviar Co. & Hog Island Oysters</h4>
                        <p>
                            <strong>Lorem Ipsum</strong><br>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto, facere?<br>
                            <em>Lorem, ipsum dolor.</em>
                        </p>
                        <p>
                            <strong>Lorem Ipsum</strong><br>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto, facere?<br>
                            <em>Lorem, ipsum dolor.</em>
                        </p>
                        <p>
                            <strong>Lorem Ipsum</strong><br>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto, facere?<br>
                            <em>Lorem, ipsum dolor.</em>
                        </p>
                        <?php endfor; ?>
                </div>
                <div>
                    <h4>Starters</h4>
                    <p>
                        <strong>Lorem Ipsum</strong><br>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto, facere?<br>
                        <em>Lorem, ipsum dolor.</em>
                    </p>
                    <p>
                        <strong>Lorem Ipsum</strong><br>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto, facere?<br>
                        <em>Lorem, ipsum dolor.</em>
                    </p>
                    <p>
                        <strong>Lorem Ipsum</strong><br>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto, facere?<br>
                        <em>Lorem, ipsum dolor.</em>
                    </p>
                </div>
            </div>
        </div>

        <div class="menu-set payload hidden" data-post-id="11">
            <div class="md:grid grid-cols-2 gap-8 justify-center">
                <div>
                    <?php for($i = 0; $i < 3; $i++): ?>
                    <h4>11 The Caviar Co. & Hog Island Oysters</h4>
                    <p>
                        <strong>Lorem Ipsum</strong><br>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto, facere?<br>
                        <em>Lorem, ipsum dolor.</em>
                    </p>
                    <p>
                        <strong>Lorem Ipsum</strong><br>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto, facere?<br>
                        <em>Lorem, ipsum dolor.</em>
                    </p>
                    <p>
                        <strong>Lorem Ipsum</strong><br>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto, facere?<br>
                        <em>Lorem, ipsum dolor.</em>
                    </p>
                    <?php endfor; ?>
                </div>
                <div>
                    <h4>Starters</h4>
                    <p>
                        <strong>Lorem Ipsum</strong><br>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto, facere?<br>
                        <em>Lorem, ipsum dolor.</em>
                    </p>
                    <p>
                        <strong>Lorem Ipsum</strong><br>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto, facere?<br>
                        <em>Lorem, ipsum dolor.</em>
                    </p>
                    <p>
                        <strong>Lorem Ipsum</strong><br>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto, facere?<br>
                        <em>Lorem, ipsum dolor.</em>
                    </p>
                </div>
            </div>
        </div>

    </div>
</div>