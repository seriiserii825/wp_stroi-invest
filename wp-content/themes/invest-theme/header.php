<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <title>СтройИнвест - корпоративный сайт</title>

  <?php wp_head(); ?>

</head>
<body>
  <div class="container">
    <div class="top-nav">
      <div class="row justify-content-between">
        <div class="col-md-12 col-lg-auto">
          <div class="logo">
            <?php the_custom_logo(); ?>
          </div>

          <button class="menu-btn" id="js-menu-btn">
            <i class="fa fa-bars"></i>
          </button>
        </div>
        <!-- /.col-md -->
        <div class="col-md">
          
          <?php wp_nav_menu([
              'theme_location'  => '',
              'menu'            => '', 
              'container'       => '', 
              'container_class' => '', 
              'container_id'    => '',
              'menu_class'      => 'top-nav_menu', 
              'menu_id'         => 'js-top-nav_menu',
              'echo'            => true,
              'fallback_cb'     => 'wp_page_menu',
              'before'          => '',
              'after'           => '',
              'link_before'     => '',
              'link_after'      => '',
              'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
              'depth'           => 0,
              'walker'          => '',
            ]); ?>

        </div>
        <!-- /.col-md -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.top-nav -->
  </div>