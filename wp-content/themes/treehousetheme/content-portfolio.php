<?php

  $num_posts = ( is_front_page() ) ? 4 : -1; // verification si content-portfolio.php est utilise dans front-page.php
  $args = array(
    'post_type' => 'portfolio',
    'posts_per_page' => $num_posts
  );
  $query = new WP_Query( $args );
?>

<section class="row no-max screenshots">

  <ul class="small-6 medium-4 large-3 columns grid-item">
    <?php if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>
      <li>
        <figure>
          <?php the_post_thumbnail('large'); ?>
          <figcaption>
            <div class="caption-content">
              <a href="<?php the_permalink(); ?>" class="single_image">
                <i class="fa fa-link"></i><br>
                <p><?php the_field('project-title'); ?></p>
              </a>
            </div>
          </figcaption>
        </figure>
      </li>
    <?php endwhile; endif; wp_reset_postdata(); ?>
  </ul>

</section>