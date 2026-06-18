<?php
/**
 * Block template file: block.php
 *
 * Landing Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'landing-' . $block['id'];
if (!empty($block['anchor'])) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$classes = 'acf-block block-landing';
if (!empty($block['className'])) {
    $classes .= ' ' . $block['className'];
}
if (!empty($block['align'])) {
    $classes .= ' align' . $block['align'];
}
?>

<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($classes); ?>">
    <?php $locations = get_field('locations'); ?>
    <div class="logo">
        <img src="<?php echo assets_url('/dist/images/logo-primary.png'); ?>" alt="Logo" />
    </div>
    <div class="lg:flex lg:h-screen w-screen">
        <?php if (!empty($locations)) : ?>
            <?php foreach ($locations as $index => $location) : ?>
                <?php
                $name = !empty($location['name']) ? $location['name'] : '';
                $city_state = !empty($location['city_state']) ? $location['city_state'] : '';
                $homepage_url = !empty($location['homepage_url']) ? $location['homepage_url'] : '';
                $background_image = !empty($location['background_image']) ? $location['background_image'] : null;
                $background_image_url = is_array($background_image) && !empty($background_image['url']) ? $background_image['url'] : '';
                $hiring_link = !empty($location['hiring_link']) ? $location['hiring_link'] : null;
                $reservation_url = '#';
                $panel_class = $index === 0 ? 'box-left' : 'box-right';
                $style_attr = $background_image_url ? sprintf(' style="background-image: url(%s);"', esc_url($background_image_url)) : '';
                ?>
                <div class="basis-1/2 <?php echo esc_attr($panel_class); ?>"<?php echo $style_attr; ?>>
                    <div class="flex flex-col items-center justify-between h-full">
                        <div class="w-full order-3 lg:order-1">
                            <?php if (!empty($hiring_link['url'])) : ?>
                                <h3 class="mt-4">
                                    <a href="<?php echo esc_url($hiring_link['url']); ?>" target="<?php echo esc_attr(!empty($hiring_link['target']) ? $hiring_link['target'] : '_self'); ?>" class="block w-full uppercase text-center underline hover:opacity-70 hover:text-black"><?php echo esc_html(!empty($hiring_link['title']) ? $hiring_link['title'] : "We're Hiring!"); ?></a>
                                </h3>
                            <?php endif; ?>
                        </div>
                        <div class="location text-center order-2 h-full flex items-center justify-center">
                            <?php if (!empty($homepage_url)) : ?>
                            <a href="<?php echo esc_url($homepage_url); ?>" class="h-full flex flex-col items-center justify-center">
                            <?php endif; ?>
                            <div class="h-full flex flex-col items-center justify-center<?php echo !empty($homepage_url) ? ' hover:text-black' : ''; ?>">
                                <h2 class="uppercase mb-0"><?php echo esc_html($name); ?></h2>
                                <h3><?php echo esc_html($city_state); ?></h3>
                            </div>
                            <?php if (!empty($homepage_url)) : ?>
                            </a>
                            <?php endif; ?>
                        </div>
                        <a href="<?php echo esc_url($reservation_url); ?>" class="hidden lg:block lg:order-3 py-4 px-6 text-center text-white w-full font-bold uppercase bg-gold hover:bg-brown">
                            <img src="<?php echo assets_url('/dist/images/arrow-right@2x.png'); ?>" alt="Reservation" class="inline-block mr-2 mix-blend-multiply">
                            Reservations
                        </a>
                        <div class="block lg:hidden w-full order-1 lg:order-4">
                            <h3 class="mt-4">
                                <a href="<?php echo esc_url($reservation_url); ?>" class="block w-full uppercase text-center underline hover:opacity-70 hover:text-black">Reserve</a>
                            </h3>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
</div>
