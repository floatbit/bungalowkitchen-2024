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
    <div class="logo">
        <img src="<?php echo assets_url('/dist/images/logo-primary.png'); ?>" alt="Logo" />
    </div>
    <div class="lg:flex lg:h-screen w-screen">
        <div class="basis-1/2 box-left">
            <div class="flex flex-col items-center justify-between h-full">
                <div class="w-full order-3 lg:order-1">
                    <h3 class="mt-4">
                        <a href="#" class="block w-full uppercase text-center underline hover:opacity-70 hover:text-black">We're Hiring!</a>
                    </h3>
                </div>
                <div class="location text-center order-2 h-full flex items-center justify-center">
                    <a href="/tiburon" class="hover:text-black h-full flex flex-col items-center justify-center">
                        <h2 class="uppercase mb-0">Tiburon</h2>
                        <h3>Northern California</h3>
                    </a>
                </div>
                <a href="#" class="hidden lg:block lg:order-3 py-4 px-6 text-center text-white w-full font-bold uppercase bg-gold hover:bg-brown">
                    <img src="<?php echo assets_url('/dist/images/arrow-right@2x.png'); ?>" alt="Reservation" class="inline-block mr-2 mix-blend-multiply">
                    Reservations
                </a>
                <div class="block lg:hidden w-full order-1 lg:order-4">
                    <h3 class="mt-4">
                        <a href="#" class="block w-full uppercase text-center underline hover:opacity-70 hover:text-black">Reserve</a>
                    </h3>
                </div>
            </div>
        </div>
        <div class="basis-1/2 box-right">
            <div class="flex flex-col items-center justify-between h-full">
                <div class="w-full order-3 lg:order-1">
                    <h3 class="mt-4">
                        <a href="#" class="block w-full uppercase text-center underline hover:opacity-70 hover:text-black">We're Hiring!</a>
                    </h3>
                </div>
                <div class="location text-center order-2 h-full flex items-center justify-center">
                    <a href="/long-beach" class="hover:text-black h-full flex flex-col items-center justify-center">
                        <h2 class="uppercase mb-0">Long Beach</h2>
                        <h3>Southern California</h3>
                    </a>
                </div>
                <a href="#" class="hidden lg:block lg:order-3 py-4 px-6 text-center text-white w-full font-bold uppercase bg-gold hover:bg-brown">
                    <img src="<?php echo assets_url('/dist/images/arrow-right@2x.png'); ?>" alt="Reservation" class="inline-block mr-2 mix-blend-multiply">
                    Reservations
                </a>
                <div class="block lg:hidden w-full order-1 lg:order-4">
                    <h3 class="mt-4">
                        <a href="#" class="block w-full uppercase text-center underline hover:opacity-70 hover:text-black">Reserve</a>
                    </h3>
                </div>
            </div>
        </div>
    </div>
</div>
