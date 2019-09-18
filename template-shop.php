<?php 
/*
Template Name: Shop Page
*/
?>

<?php get_header(); ?>

<div class="main-container container">
  <div class="row">

    <div class="col lg-12">
      

      <h1><?php the_title(); ?></h1>

      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <?php the_content(); ?>
        <?php endwhile; else: endif; ?>
    </div>
  </div>
  
</div>

<?php get_footer(); ?>
