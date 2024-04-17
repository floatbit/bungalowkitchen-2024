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

$classes .= ' ' . get_field('bottom_margin');
?>

<?php
    $options = array();
    $options['start-date'] = date('m/d/Y');
    $options['order'] = 'asc';
    $upcoming_events = bungalowkitchen_get_events($options);

    $options = array();
    $options['past'] = true;
    $options['order'] = 'desc';
    $past_events = bungalowkitchen_get_events($options);

?>

<div id="<?php echo esc_attr( $id ); ?>" class="<?php echo esc_attr( $classes ); ?>">
    <div class="container container-narrow">
        <?php foreach($upcoming_events as $event): ?>
        <?php $event_id = $event->ID; ?>
        <div class="event">
            <div class="md:flex gap-4 md:gap-8">
                <div class="basis-5/12 md:basis-1/2">
                    <p>
                        <?php print get_the_post_thumbnail($event_id, 'full');?>
                    </p>
                </div>
                <div class="basis-7/12 md:basis-1/2">
                    <h3><?php print get_the_title($event_id);?></h3>
                    <p class="date uppercase">
                        <?php if (get_field('custom_date_and_time', $event_id)):?>
                        <?php print get_field('custom_date_and_time', $event_id);?>
                        <?php else:?>
                        <?php print bungalowkitchen_get_event_readable_date($event_id);?>
                        <?php endif;?>
                    </p>
                    <?php print apply_filters('the_content', $event->post_content);?>
                    <?php if ($links = get_field('links', $event_id)):?>
                    <p class="cta">
                      <?php foreach($links as $link):?>
                      <a class="btn" href="<?php echo $link['link']['url']; ?>" target="<?php print $link['link']['target'];?>"><?php echo $link['link'] && $link['link']['title'] ? $link['link']['title'] : 'More Info'; ?></a>
                      <?php endforeach;?>
                    </p>
                    <?php endif;?>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>


    <h2>
        <span class="shrink line"></span>
        <span class="grow text">Past Events</span>
        <span class="shrink line"></span>
    </h2>

    <div class="container container-narrow">
        <?php foreach($past_events as $event): ?>
        <?php $event_id = $event->ID; ?>
        <div class="event">
            <div class="md:flex gap-4 md:gap-8">
                <div class="basis-5/12 md:basis-1/2">
                    <p>
                        <?php print get_the_post_thumbnail($event_id, 'full');?>
                    </p>
                </div>
                <div class="basis-7/12 md:basis-1/2">
                    <h3><?php print get_the_title($event_id);?></h3>
                    <p class="date uppercase">
                        <?php if (get_field('custom_date_and_time', $event_id)):?>
                        <?php print get_field('custom_date_and_time', $event_id);?>
                        <?php else:?>
                        <?php print bungalowkitchen_get_event_readable_date($event_id);?>
                        <?php endif;?>
                    </p>
                    <?php print apply_filters('the_content', $event->post_content);?>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>