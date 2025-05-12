<?php 
  $bg_color = get_sub_field('background_color'); 
  $text_color = get_sub_field('text_color'); 
  $customClass = get_sub_field('custom_class');
?>

<section class="py-[88px] md:pt-[125px] md:pb-[145px] px-4 <?= $customClass; ?>" style="background-color: <?= esc_attr($bg_color); ?>">
    <div class="max-w-[1088px] mx-auto ">
      <div class="grid lg:grid-cols-2 gap-[48px] lg:gap-[20px]">
        <div class="text-white info" style="color: <?= esc_attr($text_color); ?>">

          <?php if (get_sub_field('story_small_title')) { ?>
            <p class="text-[15px] md:text-[18px] mb-[7px] md:mb-[11px] uppercase tracking-[0.04em]">
              <?php echo get_sub_field('story_small_title');  ?>
            </p>
          <?php }?>
    
          <?php if (get_sub_field('story_title')) { ?>
            <h2 class="text-[44px] leading-[52px] md:text-[64px] md:leading-[72px] mb-[27px] md:mb-[40px] text-white">
              <?php echo get_sub_field('story_title');  ?>
            </h2> 
          <?php }?>
          <div class="text-[16px] md:text-[17px] leading-[24px] md:leading-[27px]" >
            <?php echo get_sub_field('story_content_text');  ?>
          </div>

          <?php 
            $link = get_sub_field('story_button');
            if( $link): 
              $link_url = $link['url'];
              $link_title = $link['title'];
              $link_target = $link['target'] ? $link['target'] : '_self';
          ?>
            <a class="btn btn-primary mt-[42px] md:mt-[50px] !px-[40px]" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
              <?php echo esc_html( $link_title ); ?>
            </a>
          <?php endif; ?>
        </div>
        <div class="img-wrap flex justify-center lg:justify-end">
          <?php 
            $image = get_sub_field('stroy_right_column_image');
            if ( !empty( $image ) ): ?>
              <img class="max-w-full h-auto" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
          <?php endif; ?>
        </div>
      </div>
    </div>
  </section>