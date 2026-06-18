<nav class="block md:hidden items-center mobile-menu bg-green">
  <div class="flex mobile-menu-toggle text-center justify-center items-center">
    <div class="bars inline-block">
      <svg width="42" height="19" viewBox="0 0 42 19" fill="none" xmlns="http://www.w3.org/2000/svg">
        <line y1="1.5" x2="42" y2="1.5" stroke="#FFFDF8" stroke-width="3"/>
        <line y1="9.5" x2="42" y2="9.5" stroke="#FFFDF8" stroke-width="3"/>
        <line y1="17.5" x2="42" y2="17.5" stroke="#FFFDF8" stroke-width="3"/>
      </svg>
    </div>
    <div class="close hidden">
      <svg width="32" height="33" viewBox="0 0 32 33" fill="none" xmlns="http://www.w3.org/2000/svg">
        <line x1="3.40353" y1="1.5759" x2="30.1427" y2="29.6194" stroke="#F6F0E4" stroke-width="4"/>
        <line x1="30.1095" y1="2.41421" x2="1.41387" y2="31.1099" stroke="#F6F0E4" stroke-width="4"/>
      </svg>
    </div>
  </div>
  <div class="links">
    <div class="container container-fluid">
      <ul>
      <?php
        $location_fields = bungalowkitchen_get_location_fields();
        foreach ($location_fields['nav_links'] as $row) {
          $link = $row['link'];
          print sprintf('<li><a href="%s" target="%s">%s</a></li>', $link['url'], $link['target'] ?: '_self', $link['title']);
        }
      ?>
      </ul>
    </div>
  </div>
</nav>


<?php 
  global $post;
  $home_url = get_permalink();
  if (!empty($post) && !empty($post->ID)) {
    $parent_id = wp_get_post_parent_id($post->ID);
    if (!empty($parent_id)) {
      $home_url = get_permalink($parent_id);
    }
  }
?>
<header>
  <div class="container container-fluid">
    <div class="flex justify-between">
      <div class="invisible md:visible basis-1/4 self-end">
        <a href="<?php echo $home_url; ?>">
          <img src="<?php echo assets_url('/dist/images/lifeguard-gold.png'); ?>" class="lifeguard" />
        </a>
      </div>
      <div class="basis-1/2 self-center text-center">
        <a href="<?php echo $home_url; ?>">
          <img src="<?php echo assets_url('/dist/images/logo-primary.png') . '?v=20260601-nomina'; ?>" class="logo" />
        </a>
      </div>
      <div class="basis-1/4 self-start text-right">
        <a href="<?php echo $home_url; ?>">
          <img src="<?php echo assets_url('/dist/images/bird.png'); ?>" class="bird" />
        </a>
      </div>
    </div>
  </div>
  
</header>

<nav class="hidden md:flex items-center main-menu">
  <div class="container container-fluid">
    <ul>
    <?php
      $location_fields = bungalowkitchen_get_location_fields();
      foreach ($location_fields['nav_links'] as $row) {
        $link = $row['link'];
        $image = $row['image'];
        $image_url = is_array($image) ? $image['url'] : $image;
        $image_html = $image_url ? sprintf('<img src="%s">', $image_url) : '';
        print sprintf('<li>%s<a href="%s" target="%s">%s</a></li>', $image_html, $link['url'], $link['target'] ?: '_self', $link['title']);
      }
    ?>
    </ul>
  </div>
</nav>

