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
    <div class="lg:flex lg:h-screen w-screen">
        <?php if (!empty($locations)) : ?>
            <?php foreach ($locations as $index => $location) : ?>
                <?php
                $homepage_url = !empty($location['homepage_url']) ? $location['homepage_url'] : '';
                $background_image = !empty($location['background_image']) ? $location['background_image'] : null;
                $background_image_url = is_array($background_image) && !empty($background_image['url']) ? $background_image['url'] : '';
                $logo = !empty($location['logo']) ? $location['logo'] : null;
                $logo_url = is_array($logo) && !empty($logo['url']) ? $logo['url'] : assets_url('/dist/images/logo-primary.png');
                $hiring_link = !empty($location['hiring_link']) ? $location['hiring_link'] : null;
                $open_popup = !empty($location['open_popup']);
                $popup = !empty($location['popup']) && is_array($location['popup']) ? $location['popup'] : array();
                $popup_image = !empty($popup['image']) ? $popup['image'] : null;
                $popup_image_url = is_array($popup_image) && !empty($popup_image['url']) ? $popup_image['url'] : '';
                $popup_url = !empty($popup['url']) ? $popup['url'] : '';
                $popup_id = $id . '-popup-' . $index;
                $has_popup = $open_popup && !empty($popup_image_url);
                $reservation_url = '#';
                $panel_class = $index === 0 ? 'box-left' : 'box-right';
                $style_attr = $background_image_url ? sprintf(' style="background-image: url(%s);"', esc_url($background_image_url)) : '';
                ?>
                <div class="basis-1/2 box <?php echo esc_attr($panel_class); ?>"<?php echo $style_attr; ?>>
                    <div class="flex flex-col items-center justify-between h-full">
                        <div class="w-full order-3 lg:order-1">
                            <?php if (!empty($hiring_link['url'])) : ?>
                                <h3 class="mt-4">
                                    <a href="<?php echo esc_url($hiring_link['url']); ?>" target="<?php echo esc_attr(!empty($hiring_link['target']) ? $hiring_link['target'] : '_self'); ?>" class="block w-full uppercase text-center underline hover:opacity-70 hover:text-black"><?php echo esc_html(!empty($hiring_link['title']) ? $hiring_link['title'] : "We're Hiring!"); ?></a>
                                </h3>
                            <?php endif; ?>
                        </div>
                        <div class="location text-center order-2 h-full flex items-center justify-center">
                            <?php if ($has_popup) : ?>
                            <a href="#" data-popup-target="<?php echo esc_attr($popup_id); ?>" class="js-landing-popup-trigger h-full flex flex-col items-center justify-center">
                            <?php elseif (!empty($homepage_url)) : ?>
                            <a href="<?php echo esc_url($homepage_url); ?>" class="h-full flex flex-col items-center justify-center">
                            <?php endif; ?>
                            <div class="h-full flex flex-col items-center justify-center<?php echo (!empty($homepage_url) || $has_popup) ? ' hover:text-black' : ''; ?>">
                                <img src="<?php echo esc_url($logo_url); ?>" alt="Logo" />
                            </div>
                            <?php if ($has_popup || !empty($homepage_url)) : ?>
                            </a>
                            <?php endif; ?>
                        </div>
                        <a href="<?php echo esc_url($reservation_url); ?>" class="hidden lg:hidden lg:order-3 py-4 px-6 text-center text-white w-full font-bold uppercase bg-gold hover:bg-brown">
                            <img src="<?php echo assets_url('/dist/images/arrow-right@2x.png'); ?>" alt="Reservation" class="inline-block mr-2 mix-blend-multiply">
                            Reservations
                        </a>
                        <div class="block lg:hidden w-full order-1 lg:order-4">
                            <h3 class="mt-4 hidden">
                                <a href="<?php echo esc_url($reservation_url); ?>" class="block w-full uppercase text-center underline hover:opacity-70 hover:text-black">Reserve</a>
                            </h3>
                        </div>
                    </div>
                </div>
                <?php if ($has_popup) : ?>
                <div id="<?php echo esc_attr($popup_id); ?>" class="landing-popup js-landing-popup" aria-hidden="true">
                    <button type="button" class="landing-popup__backdrop js-landing-popup-close" aria-label="Close popup"></button>
                    <div class="landing-popup__content">
                        <button type="button" class="landing-popup__close js-landing-popup-close" aria-label="Close popup">&times;</button>
                        <?php if (!empty($popup_url)) : ?>
                        <a href="<?php echo esc_url($popup_url); ?>" target="_blank" class="landing-popup__image-link">
                        <?php endif; ?>
                            <img src="<?php echo esc_url($popup_image_url); ?>" alt="" class="landing-popup__image" />
                        <?php if (!empty($popup_url)) : ?>
                        </a>
                        <?php endif; ?>
                    </div>
                </div>
                <?php endif; ?>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
</div>
