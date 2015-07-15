<?php
/*
  Template Name: Portfolio Page
*/
?>

<?php get_header(); ?>

<div class="row">
  <div class="small-12 columns text-center">
    <div class="leader">
        
      <h1>Tous mes projets</h1>
      <hr>
      <p>N'hésitez pas à survoler une image pour découvrir chaque projet plus en détails.</p>        

    </div>
  </div>
</div>

<?php get_template_part('content', 'portfolio'); ?>

<?php get_footer(); ?>