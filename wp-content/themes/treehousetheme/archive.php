<?php get_header(); ?>

<section class="two-column row no-max pad">
  <div class="small-12 columns">
    <div class="row">
      <!-- Primary Column -->
      <div class="small-12 medium-7 medium-offset-1 medium-push-4 columns">
        <div class="primary">
          <div>
            <h1>Articles concernant : <?php wp_title(''); ?></h1>
          </div>
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <article class="post">
                <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                <h2><?php echo get_the_excerpt(); ?></h2>
                <ul class="post-meta no-bullet">
                  <li class="author">
                    <span class="wpt-avatar small">
                      <?php echo get_avatar( get_the_author_meta(' ID ') , 24 ); ?>
                    </span>
                    par <?php the_author_posts_link(); ?>
                  </li>
                  <li class="cat">situé dans <?php the_category(', '); ?></a></li>
                  <li class="date">le <?php the_time('j F Y'); ?></a></li>
                </ul>

              </article>
          <?php endwhile; else : ?>
            <p><?php _e( '404 error :( Désolé, aucun article n\'a été trouvé... :( ', 'treehouse-portfolio' ); ?></p>
          <?php endif; ?>
        </div>
      </div>
      <!-- Secondary Column with sidebar -->
      <?php get_sidebar(); ?>
    </div>
  </div>
</section>

<?php get_footer(); ?>