   <article class="post">
    <?php if ( get_the_post_thumbnail() ) : ?>
      <div class="img-container">
        <?php the_post_thumbnail('medium'); ?>
      </div>
    <?php endif; ?>

    <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
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
    <p><?php the_content(); ?></p>
    <?php comments_template(); ?>
  </article>