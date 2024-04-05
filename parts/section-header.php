<header>
  <div class="container container-fluid">
    <div class="flex justify-between">
      <div class="basis-1/4 self-end">
        <img src="<?php echo assets_url('/dist/images/lifeguard-gold.png'); ?>" class="lifeguard" />
      </div>
      <div class="basis-1/2 self-center text-center">
        <img src="<?php echo assets_url('/dist/images/logo-primary.png'); ?>" class="logo" />
      </div>
      <div class="basis-1/4 self-start text-right">
        <img src="<?php echo assets_url('/dist/images/bird.png'); ?>" class="bird" />
      </div>
    </div>
  </div>
  
</header>

<nav class="main-menu flex items-center">
  <div class="container container-fluid">
    <?php wp_nav_menu(array('menu' => 'Main')); ?>
  </div>
</nav>

