<nav class="block md:hidden items-center mobile-menu">
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

