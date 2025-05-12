<?php

/**
Template Name: Theme Default Template
**/

get_header();

?>

<main class="main-wrap">

  <?php if( have_rows('banner') ): ?>
    <?php while( have_rows('banner') ): the_row(); ?>
      <?php
        $layout = get_row_layout();
        get_template_part('template-blocks/banners/' . $layout);
      ?>
    <?php endwhile; ?>
  <?php endif; ?>

  <?php if( have_rows('content') ): ?>
    <?php while( have_rows('content') ): the_row(); ?>
      <?php
        $layout = get_row_layout();
        get_template_part('template-blocks/' . $layout);
      ?>
    <?php endwhile; ?>
  <?php endif; ?>


</main>



<?php get_footer();?>