<div class="off-canvas-wrap" data-offcanvas>
  <div class="inner-wrap">
    <a class="left-off-canvas-toggle" href="#" ><i class="fa fa-bars fa-1x"></i></a>

    <aside zf-swipe-close="left" class="left-off-canvas-menu">
      <?php 
          $defaults = array(
            'container' => false,
            'theme_location'  => 'primary-menu',
            'menu_class'  => 'menu-item'
          );
          wp_nav_menu( $defaults );
      ?>
    </aside>
  <section class="main-section">