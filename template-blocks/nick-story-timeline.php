<?php 
  //$bg_color    = get_sub_field('background_color'); 
  $customClass = get_sub_field('custom_class');
?>


<section class="my-[88px] lg:my-[100px] xl:my-[145px] <?= esc_attr($customClass); ?>">
  <div class="tb_container tb_container--sm">

    <?php if (get_sub_field('timeline_title')) { ?>
      <h2 class=" text-[52px] lg:text-[62px] xl:text-[72px] capitalize leading-[1.3] text-center ">
        <?php echo get_sub_field('timeline_title');  ?>
      </h2>
    <?php }?>


    <?php if (have_rows('timeline_block')) : ?>
      <?php $index = 0; ?>
      <?php while (have_rows('timeline_block')) : the_row(); 
        $title = get_sub_field('timeline_block_title');
        $description = get_sub_field('timeline_description');
        $big_image = get_sub_field('timeline_big_image');

        $index++;
        $is_even = $index % 2 == 0;
        $margin_top_class = $index == 1 ? 'mt-[48px]' : 'mt-[80px] md:mt-[112px]';
        $extra_class = $is_even ? 'md:flex-row-reverse' : '';
      ?>
        <div class="md:flex <?php echo $margin_top_class . ' ' . $extra_class; ?>">
          <div class="md:w-[50%]">
            <div class="relative h-[1.5px] bg-blue w-full mb-[20px] md:mt-[28px] xl:mt-[48px] xl:mb-[28px]">
              <span class="w-[10px] h-[10px] rounded-full bg-blue absolute top-[-4px] <?php echo $is_even ? 'md:right-0' : 'left-0'; ?>"></span>
            </div>
            <div class="<?php echo $is_even ? 'md:pl-[42px] xl:pl-[72px]' : 'md:pr-[42px] xl:pr-[72px]'; ?>">
              <?php if ($title): ?>
                <h3 class="text-[36px] text-navy  tracking-[-1%] font-secondary font-bold">
                  <?php echo esc_html($title); ?>
                </h3>
              <?php endif; ?>
              <?php if ($description): ?>
                <div class="mt-[13px] md-[23px] xl:mt-[38px] text-[17px] xl:text-[18px] font-semibold tracking-[-1px] text-gray">
                  <?php echo ($description); ?>
                </div>
              <?php endif; ?>
            </div>
          </div>
          <div class="md:w-[60%] mt-[37px] md:mt-0">
            <?php if ($big_image): ?>
              <img src="<?php echo esc_url($big_image['url']); ?>" class="rounded-[24px]" alt="<?php echo esc_attr($big_image['alt']); ?>">
            <?php endif; ?>
          </div>
        </div>
      <?php endwhile; ?>
    <?php endif; ?>




  </div>

</section>