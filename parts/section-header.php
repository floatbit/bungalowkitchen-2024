<header>
  <div class="container container-fluid">
    <div class="flex justify-between">
      <div class="basis-1/4 self-end">
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

<nav class="main-menu flex items-center">
  <div class="container container-fluid">
    <?php wp_nav_menu(array('menu' => 'Main')); ?>
  </div>
</nav>

