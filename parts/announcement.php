<?php
$post_id = get_queried_object_id();
if (is_page() && $post_id && (int) wp_get_post_parent_id($post_id) === 0) :
  $location_fields = bungalowkitchen_get_location_fields();
  $show_announcement = !empty($location_fields['show_announcement']);
  $announcement_image = $location_fields['announcement_image'];
  $announcement_url = !empty($location_fields['announcement_url']) ? $location_fields['announcement_url'] : '';

  if ($show_announcement && !empty($announcement_image)) :
    $image_url = '';
    $image_alt = '';

    if (is_array($announcement_image)) {
      $image_url = !empty($announcement_image['url']) ? $announcement_image['url'] : '';
      $image_alt = !empty($announcement_image['alt']) ? $announcement_image['alt'] : '';
    } elseif (is_numeric($announcement_image)) {
      $image_url = wp_get_attachment_image_url((int) $announcement_image, 'full');
      $image_alt = get_post_meta((int) $announcement_image, '_wp_attachment_image_alt', true);
    } else {
      $image_url = $announcement_image;
    }

    if (!empty($image_url)) :
?>
<div class="announcement">
  <?php if (!empty($announcement_url)) : ?>
  <a href="<?php echo esc_url($announcement_url); ?>" target="_blank">
  <?php endif; ?>
    <img src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($image_alt); ?>" class="w-full"/>
  <?php if (!empty($announcement_url)) : ?>
  </a>
  <?php endif; ?>
</div>
<?php
    endif;
  endif;
endif;
?>