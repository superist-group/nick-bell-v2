<?php
$background_dkt = get_field('background_image_desktop', 'option');
$background_mob = get_field('background_image_mobile', 'option');
?>


<section class="bg-[#0a1124] relative cta-section pt-[48px] md:py-[48px] md:pl-[40%] lg:pl-0">
  <img src="<?php echo $background_dkt; ?>" alt=""
    class="hidden md:block absolute inset-0 left-0 top-0 w-full h-full object-cover md:object-[20%_15%] lg:object-left-top">

  <div class="tb_container relative lg:flex align-items-center justify-between  ">
    <div class="blank-space lg:w-1/3">

    </div>
    <div class="center-data lg:w-1/3 text-center">
      <?php
      $image = get_field('center_logo', 'option');
      if (!empty($image)): ?>
        <img class="mx-auto" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
      <?php endif; ?>
      <?php
      $link = get_field('center_button', 'option');
      if ($link):
        $link_url = $link['url'];
        $link_title = $link['title'];
        $link_target = $link['target'] ? $link['target'] : '_self';
      ?>
        <a class="btn btn-light-blue mt-[32px]" href="<?php echo esc_url($link_url); ?>"
          target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
      <?php endif; ?>
    </div>


    <div class="flex justify-center lg:justify-end lg:w-1/3 items-center mt-[48px] lg:mt-0">
      <div class="w-full sm:w-auto flex lg:flex-col gap-[8px] lg:gap-[16px]">
        <?php if ($youtube = get_field('social_media_youtube', 'option')) : ?>
          <a class="social-platform-icon" href="<?php echo esc_url($youtube); ?>" target="_blank" rel="noopener">
            <img class="max-h-[35px] lg:max-h-[50px] mx-auto" style="height: 50px; width: auto;"
              src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/youtube.png" alt="Youtube">
          </a>
        <?php endif; ?>
        <?php if ($spotify = get_field('social_media_spotify', 'option')) : ?>
          <a class="social-platform-icon" href="<?php echo esc_url($spotify); ?>" target="_blank" rel="noopener">
            <img class="max-h-[35px] lg:max-h-[50px] mx-auto" style="height: 50px; width: auto;"
              src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/spotify.png" alt="Youtube">
          </a>
        <?php endif; ?>
        <?php if ($apple_podcasts = get_field('social_media_apple_podcasts', 'option')) : ?>
          <a class="social-platform-icon" href="<?php echo esc_url($apple_podcasts); ?>" target="_blank" rel="noopener">
            <img class="max-h-[35px] lg:max-h-[50px] mx-auto" style="height: 50px; width: auto;"
              src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/applepodcasts.png" alt="Apple Podcasts">
          </a>
        <?php endif; ?>
      </div>
    </div>


  </div>
  <img src="<?php echo $background_mob; ?>" alt="" class="md:hidden w-full mt-[-52px]">
</section>