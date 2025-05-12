<?php 

  $bg_color = get_sub_field('background_color'); 
  // $animation = get_sub_field('animation');
  // $animation = $animation ? " wow {$animation} " : '';
  // $margin = get_sub_field('margin');
  // $padding = get_sub_field('padding');
  $customClass = get_sub_field('custom_class');
?>

<section class="py-[50px] bg-pearl <?=  $customClass; ?>" style="background-color: <?= esc_attr($bg_color); ?>">
    <p class="md:text-[24px] text-[19px] font-bold text-navy text-center tracking-[-1%] px-4">
      <?php the_sub_field('brand__logo_slider_heading'); ?>
    </p>
    <div class="swiper logoSwiper mt-[35px]">
      <?php if( have_rows('brand_logo_slider') ): ?>
        <div class="swiper-wrapper items-center">
          <?php while( have_rows('brand_logo_slider') ): the_row(); 
            $brandImage = get_sub_field('logo__brand_image');
            $link = get_sub_field('logo__brand_link_url');
            $targetBlank = get_sub_field('logo__brand_target_blank');
            
          ?>
            <div class="swiper-slide w-auto">
              <?php if( $link ): ?>
                <a href="<?php echo esc_url($link); ?>" <?php if ( $targetBlank ) : ?>target="_blank" rel="noopener"<?php endif; ?>>
                  <img class="max-h-[32px] md:max-h-[48px]" src="<?php echo esc_url($brandImage['url']); ?>" alt="<?php echo esc_attr($brandImage['alt']); ?>" />
                </a>
              <?php else: ?>
                  <img class="max-h-[32px] md:max-h-[48px]" src="<?php echo esc_url($brandImage['url']); ?>" alt="<?php echo esc_attr($brandImage['alt']); ?>" />
              <?php endif; ?>
            </div>
          <?php endwhile; ?>
        </div>
      <?php endif; ?>
    </div>
  </section>