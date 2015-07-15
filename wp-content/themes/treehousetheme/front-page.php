<?php get_header(); ?>

<section class="row no-max pad main background-home">
  <?php get_template_part('content','header'); ?>
  <div class="small-12 columns text-center">
    <div class="leader">
      
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="fontstyle-home">
          <h1><?php the_title(); ?></h1>
          <h2><?php bloginfo( 'description' ); ?></h2>
          <hr>
          <p>here is the place for socials link</i></p>
          <p><a class="landing button" href="<?php get_bloginfo('url');?>">Allons-y</a></p>
          <p><?php the_content(); ?></p>   
        </div>     
      <?php endwhile; else : ?>
        <p><?php _e( '404 error :( Désolé, aucune page n\'a été trouvé.', 'treehousetheme' ); ?></p>
      <?php endif; ?>

    </div>
  </div>
</section>

<section class="row no-max">
    <div class="large-12 text-center">
      <div class="leader">
        <p>Mes derniers articles</p>
        <p><a class="landing button secondary" href="<?php get_bloginfo('url');?>">Tous mes articles</a></p>
      </div>
    </div>
</section>

<section class="row no-max background-home-blurred clear">
  <div class="large-12 text-center">
    <div class="fontstyle-home">
      <p>Mes derniers projets</p>
    </div>
    <?php get_template_part('content', 'portfolio'); ?>
  </div>
</section>

<section class="row no-max">
  <div class="large-12 text-center">
    <div class="leader">
      <p>Besoin de me rencontrer ?</p>
    </div>
  </div>
</section>

<?php get_footer(); ?>