<?php 
  $background_dkt = get_sub_field('background_image_desktop' );
  $background_mob = get_sub_field('background_image_Mobile' );
?>


<section class="bg-[#0a1124] relative cta-section pt-[56px] md:pb-[88px] md:pt-[96px]" >
  <img src="<?php echo $background_dkt; ?>" alt="" class="hidden md:block absolute inset-0 left-0 top-0 w-full h-full object-cover md:object-[40%_15%] lg:object-left-center">

  <div class="tb_container relative ">
    <div class="md:w-1/2 text-center">
      <?php 
        $image = get_sub_field('banner_left_logo' );
        if ( !empty( $image ) ): ?>
          <img class="mx-auto" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
      <?php endif; ?>

      <div class="flex justify-center items-center mt-[48px] lg:mt-[72px]">
        <div class="flex justify-center gap-[8px] lg:gap-[16px] w-full">
          <?php if ($youtube = get_field('social_media_youtube', 'option' )) : ?>
            <a class="social-platform-icon" href="<?php echo esc_url($youtube); ?>" target="_blank" rel="noopener">
              <img class="max-h-[35px] lg:max-h-[50px] mx-auto" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/youtube.png" alt="Youtube">
            </a>
          <?php endif; ?>
          <?php if ($spotify = get_field('social_media_spotify', 'option' )) : ?>
            <a class="social-platform-icon" href="<?php echo esc_url($spotify); ?>" target="_blank" rel="noopener">
              <img class="max-h-[35px] lg:max-h-[50px] mx-auto" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/spotify.png" alt="Youtube">
            </a>
          <?php endif; ?>
        </div>

      </div>
    </div>   

  </div>
  <img src="<?php echo $background_mob; ?>" alt="" class="md:hidden w-full mt-[-52px]">
</section>