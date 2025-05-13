<?php
//$bg_color    = get_sub_field('background_color'); 
$customClass = get_sub_field('custom_class');
?>

<section class="tb_container md:px-[65px] mt-[68px] mb-[88px] lg:mt-[127px] lg:mb-[176px] <?= esc_attr($customClass); ?>">
  <div class="">
    <div class="text-center mx-auto max-w-[664px]">
      <?php if (get_sub_field('featured_top_title')) { ?>
        <h4 class="md:text-[32px] text-[20px] text-gray uppercase mb-[-10px]">
          <?php echo get_sub_field('featured_top_title');  ?>
        </h4>
      <?php } ?>

      <?php if (get_sub_field('featured_title')) { ?>
        <h2 class="md:text-[72px] text-[52px] capitalize leading-[1.3]">
          <?php echo get_sub_field('featured_title');  ?>
        </h2>
      <?php } ?>

      <?php if (get_sub_field('featured_title_description')) { ?>
        <p class="md:text-[20px] text-[18px] tracking-[-1%] font-medium max-w-[670px] mt-[15px] md:mt-[10px]">
          <?php echo get_sub_field('featured_title_description');  ?>
        </p>
      <?php } ?>
    </div>

    <?php if (have_rows('featured_block')) : ?>
      <?php $index = 0; ?>
      <?php while (have_rows('featured_block')) : the_row();
        $logo = get_sub_field('featured_logo');
        $title = get_sub_field('featured_title');
        $description = get_sub_field('featured_description');
        $big_image = get_sub_field('featured_big_image');

        $index++;
        $is_even = $index % 2 == 0;
        $margin_top_class = $index == 1 ? 'mt-[62px]' : 'mt-[80px] md:mt-[128px]';
        $extra_class = $is_even ? 'md:flex-row-reverse' : '';
      ?>
        <div class="lg:flex lg:gap-[65px] items-center <?php echo $margin_top_class . ' ' . $extra_class; ?>">
          <div class="lg:w-[380px]">
            <?php if ($logo): ?>
              <img class="max-h-[72px] xl:max-h-[104px]" src="<?php echo esc_url($logo['url']); ?>" alt="<?php echo esc_attr($logo['alt']); ?>">
            <?php endif; ?>

            <?php if ($title): ?>
              <h3 class="mt-[34px] md:mt-[40px] xl:mt-[64px] md:text-[28px] text-[24px] text-[--color-navy] capitalize tracking-[-1%] font-bold font-secondary">
                <?php echo esc_html($title); ?>
              </h3>
            <?php endif; ?>

            <?php if ($description): ?>
              <div class="text-gray md:text-[18px] text-[16px] tracking-[-1%] mt-[10px] font-semibold">
                <?php echo ($description); ?>
              </div>
            <?php endif; ?>

            <?php
            $link = get_sub_field('featured_button');
            if ($link):
              $link_url = $link['url'];
              $link_title = $link['title'];
              $link_target = $link['target'] ? $link['target'] : '_self';
            ?>
              <a class="btn btn-navy mt-[30px] md:mt-[50px]" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
            <?php endif; ?>


          </div>

          <div class="lg:w-[calc(100%-445px)] mt-[40px] lg:mt-0">
            <?php if ($big_image): ?>
              <img src="<?php echo esc_url($big_image['url']); ?>" class="rounded-[24px]" alt="<?php echo esc_attr($big_image['alt']); ?>">
            <?php endif; ?>
          </div>
        </div>
      <?php endwhile; ?>
    <?php endif; ?>

  </div>
</section>