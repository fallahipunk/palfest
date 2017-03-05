<?php
  // This file assumes that you have included the nav walker from https://github.com/twittem/wp-bootstrap-navwalker
  // somewhere in your theme.
?>

<header class="navbar navbar-toggleable-md navbar-light bg-faded" role="banner">
  <div class="container-fluid">
    <div class="navbar-header">
    <div class = "row">
    <div class ="col-3 col-sm-6 col-lg-4 hidden-lg hamburger">
      <button type="button" class="navbar-toggler" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only"><?= __('Toggle navigation', 'sage'); ?></span>

      </button>
      </div>
      <div class="navbar-brand col-6 col-sm-5 col-lg-4">
      <a  href="<?= esc_url(home_url('/')); ?>"><img src="<?= get_template_directory_uri() . '/dist/images/
logo.jpg'; ?>"></a>
</div>
</div>
    </div>
    <div class = "row" >
    <div class="col-lg-2 col-xl-3"></div>
    <div class="col-lg-8 col-xl-6">
    <nav class="collapse navbar-collapse" role="navigation">
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'walker' => new wp_bootstrap_navwalker(), 'menu_class' => 'nav navbar-nav palfest-main-menu']);
      endif;
      ?>
    </nav>
    </div>
    </div>
  </div>
</header>