<?php get_header(); ?>

<section class="two-column row no-max pad">
  <div class="small-12 columns">
    <div class="row">
      <!-- Primary Column -->
      <div class="small-12 medium-7 medium-offset-1 medium-push-4 columns">
        <div class="primary">
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            
            <?php get_template_part('content', get_post_format() ); ?>

          <?php endwhile; else : ?>
            <p><?php _e( '404 error :( Désolé, aucun article n\'a été trouvé... :( ', 'treehouse-portfolio' ); ?></p>
          <?php endif; ?>
        </div>
      </div>
      <!-- Secondary Column -->
      <?php get_sidebar('page'); ?>
    </div>
  </div>
</section>

<?php get_footer(); ?>