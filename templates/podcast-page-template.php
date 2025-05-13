<?php

/**
Template Name: Podcast Page Template
 **/

get_header();

?>

<main class="main-wrap">

  <?php if (have_rows('banner')): ?>
    <?php while (have_rows('banner')): the_row(); ?>
      <?php
      $layout = get_row_layout();
      get_template_part('template-blocks/banners/' . $layout);
      ?>
    <?php endwhile; ?>
  <?php endif; ?>

  <section class="my-[88px] md:my-[100px] lg:my-[145px]">
    <div class="tb_container tb_container--sm">
      <h2 class="text-[52px] md:text-[62px] xl:text-[72px] text-[--color-navy] capitalize text-center">
        See all the latest episodes
      </h2>
      <p class="text-center text-[20px] font-semibold mt-4 lg:mt-3">Build Health. Build Wealth.</p>
      <div class="podcast-list-wrapper  mt-[34px] md:mt-[50px]">
        <?php echo do_shortcode('[all_podcast_list]'); ?>
      </div>
    </div>
  </section>

  <?php if (have_rows('content')): ?>
    <?php while (have_rows('content')): the_row(); ?>
      <?php
      $layout = get_row_layout();
      get_template_part('template-blocks/' . $layout);
      ?>
    <?php endwhile; ?>
  <?php endif; ?>


</main>



<?php get_footer(); ?>