<section class="text-white relative bg-[var(--color-navy)]">
    
    <div class="tb_container m-auto">
      <div class="relative mx-auto min-h-[550px] lg:min-h-[612px] xl:min-h-[712px] 	">
        <div class="py-[48px] md:pt-[75px] md:max-w-[480px] xl:max-w-[564px] relative z-2">

          <?php if (get_sub_field('banner_title')) { ?>
            <h1 class="text-[80px] md:text-[100px] xl:text-[144px] text-white">
              <?php echo get_sub_field('banner_title');  ?>
            </h1>
          <?php }?>
          
          <?php if (get_sub_field('banner_sub_title')) { ?>
            <p class="text-[30px]  md:text-[44px] font-semibold">
              <?php echo get_sub_field('banner_sub_title');  ?>
            </p>
          <?php }?>

          <?php if (get_sub_field('banner_description')) { ?>
            <p class="text-[15px]  md:text-[18px] xl:text-[20px] mt-[25px] md:mt-[30px] ">
              <?php echo get_sub_field('banner_description');  ?>
            </p>
          <?php }?>

          <?php 
            $link = get_sub_field('banner_button');
            if( $link): 
              $link_url = $link['url'];
              $link_title = $link['title'];
              $link_target = $link['target'] ? $link['target'] : '_self';
          ?>
            <a class="btn btn-primary mt-[42px] md:mt-[46px] " href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
              <?php echo esc_html( $link_title ); ?>
            </a>
          <?php endif; ?>

        </div>

        <div class="flex justify-end relative md:absolute right-0 md:right-[-10%] lg:right-0 bottom-0 w-full md:max-w-[calc(100%-300px)] lg:max-w-[calc(100%-350px)] xl:max-w-[calc(100%-440px)] z-0	">
          <div class="b-person-bg absolute w-full h-full"></div>
          <?php 
            $image = get_sub_field('banner_right_image');
            if ( !empty( $image ) ): ?>
              <img class="relative" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
          <?php endif; ?>
        </div>

      </div>
    </div>

  </section>