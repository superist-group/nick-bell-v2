<section class="my-[88px] lg:my-[100px] xl:my-[145px] overflow-hidden <?= $customClass; ?>">
  <div class="tb_container">

    <?php if (get_sub_field('section_title')) { ?>
      <h2 class="lg:text-[60px] md:text-[55px] text-[52px] text-[--color-navy] text-center mb-[31px]">
        <?php echo get_sub_field('section_title');  ?>
      </h2>
    <?php } ?>


    <div class="swiper md:flex gap-[24px] three-col-slider">
      <div class="swiper-wrapper">
        <?php if (have_rows('info_slider')) : ?>
          <?php $index = 0; ?>
          <?php while (have_rows('info_slider')) : the_row();
            $sliderInfoImage = get_sub_field('image');
          ?>
            <div class="swiper-slide md:w-[calc(33.3%-12px)]">
              <?php if ($sliderInfoImage): ?>
                <img class="w-full" src="<?php echo esc_url($sliderInfoImage['url']); ?>" class="rounded-[16px] lg:rounded-[20px]" alt="<?php echo esc_attr($sliderInfoImage['alt']); ?>">
              <?php endif; ?>


              <h5 class="mt-[26px] text-[14px] text-blue font-secondary font-bold uppercase">
                <?php echo get_sub_field('small_title');  ?>
              </h5>
              <h3 class="mt-[9px] text-[30px] text-[--color-navy] font-secondary font-bold">
                <?php echo get_sub_field('title');  ?>
              </h3>
              <p class="mt-[17px] text-[16px] text-[--color-navy] ">
                <?php echo get_sub_field('description');  ?>
              </p>
            </div>
          <?php endwhile; ?>
        <?php endif; ?>

      </div>

    </div>

  </div>
</section>