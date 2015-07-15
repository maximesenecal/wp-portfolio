<?php get_header(); ?>

<section class="two-column row no-max pad">
  <div class="small-12 columns">
    <div class="row">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <!-- Primary Column -->
        <div class="small-12 medium-7 medium-offset-1 medium-push-4 columns">
          <div class="primary">
            <h2><?php the_field('project-title'); ?></h2>
            <p><?php the_field('image'); ?></p>        
          </div>
        </div>
        <div class="small-12 medium-4 medium-pull-8 columns">
          <div class="secondary">
            <p><?php the_field('description'); ?></p>
            <hr>
            <p><?php previous_post_link(); ?></p>
            <p><a href="<?php bloginfo('url')?>/portfolio">Retour au Portfolio</a></p>
            <p><?php next_post_link(); ?></p>
          </div>
        </div>
      <?php endwhile; endif; ?>
      <!-- Secondary Column -->
    </div>
  </div>
</section>

<?php get_footer(); ?>