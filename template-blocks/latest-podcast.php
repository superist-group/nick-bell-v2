<style>
  .podcast-links {
    margin: 20px;
  }

  @media (max-width: 768px) {
    .podcast-links {
      margin: 0;
      margin-top: 20px;
    }
  }
</style>

<section class="bg-[var(--color-light-blue)]/10 overflow-hidden relative">
  <div class="tb_container py-[52px] md:py-[100px]">
    <div class="text-center">
      <?php
      $image = get_field('latest_podcast_title_image', 'option');
      if (!empty($image)): ?>
        <img class="mx-auto" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
      <?php endif; ?>

      <?php if (get_field('latest_podcast_title', 'option')) { ?>
        <h2 class=" text-[44px] md:text-[62px] xl:text-[72px] text-[--color-navy] capitalize mt-[34px] md:mt-[0px]">
          <?php echo get_field('latest_podcast_title', 'option');  ?>
        </h2>
      <?php } ?>
    </div>

    <div class="swiper podcast-slider mt-[30px] md:mt-[48px]">
      <?php echo do_shortcode('[latest_podcast]'); ?>
    </div>

    <?php
    $link = get_field('podcast_view_all_button', 'option');
    if ($link):
      $link_url = $link['url'];
      $link_title = $link['title'];
      $link_target = $link['target'] ? $link['target'] : '_self';
    ?>
      <div class="flex justify-center mt-[40px] md:mt-[64px] ">
        <a class="btn btn-outline" href="<?php echo esc_url($link_url); ?>"
          target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
      </div>
    <?php endif; ?>

    <div class="podcast-links md:absolute mx-auto md:right-0 bottom-0 flex gap-4 justify-center">
      <a href="<?php echo get_field('social_media_youtube', 'option')?>" target="_blank" rel="noopener">
        <img height="50" class="mx-auto" style="height: 50px; width: auto;"
          src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/youtube-colored.png" alt="Youtube">
      </a>
      <a href="<?php echo get_field('social_media_spotify', 'option')?>" target="_blank" rel="noopener">
        <img height="50" class="mx-auto" style="height: 50px; width: auto;"
          src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/spotify-colored.png" alt="Youtube">
      </a>
      <a href="<?php echo get_field('social_media_apple_podcasts', 'option')?>" target="_blank" rel="noopener">
        <img height="50" class="mx-auto" style="height: 50px; width: auto;"
          src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/applepodcasts-colored.png"
          alt="Apple Podcasts">
      </a>
    </div>
  </div>
</section>