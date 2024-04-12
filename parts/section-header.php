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
        $menu_name = 'Main';
        $menu = wp_get_nav_menu_object($menu_name);
        $menu_items = wp_get_nav_menu_items($menu->term_id);
        foreach ($menu_items as $menu_item) {
          $title = $menu_item->title;
          $url = $menu_item->url;
          print sprintf('<li><a href="%s">%s</a></li>', $url, $title);
        }
      ?>
      </ul>
    </div>
  </div>
</nav>


<header>
  <div class="container container-fluid">
    <div class="flex justify-between">
      <div class="invisible md:visible basis-1/4 self-end">
        <a href="/">
          <img src="<?php echo assets_url('/dist/images/lifeguard-gold.png'); ?>" class="lifeguard" />
        </a>
      </div>
      <div class="basis-1/2 self-center text-center">
        <a href="/">
          <img src="<?php echo assets_url('/dist/images/logo-primary.png'); ?>" class="logo" />
        </a>
      </div>
      <div class="basis-1/4 self-start text-right">
        <a href="/">
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
      $menu_name = 'Main';
      $menu = wp_get_nav_menu_object($menu_name);
      $menu_items = wp_get_nav_menu_items($menu->term_id);
      foreach ($menu_items as $menu_item) {
        $title = $menu_item->title;
        $url = $menu_item->url;
        $image = get_field('image', $menu_item);
        print sprintf('<li><img src="%s"><a href="%s">%s</a></li>', $image['url'], $url, $title);
      }
    ?>
    </ul>
  </div>
</nav>

