<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php wp_title('|', true, 'right'); ?><?php get_bloginfo('name'); ?></title>
    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?> > 
    <!-- start the offcanvas menu foundation -->   
    <?php get_template_part('content','offcanvasmenu'); ?>
    <!-- end the offcanvas menu foundation -->
    <?php if ( !is_front_page() ) : get_template_part('content','header'); endif; ?>

  