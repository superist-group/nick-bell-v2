<section class="bg-blue/10 md:py-[80px] py-[60px] ">
  <div class="tb_container">
    <div class="max-w-[680px] mx-auto md:text-center">

      <?php if (get_sub_field('banner_small_title')): ?>
        <h5 class="text-[20px] tracking-[2%] font-medium uppercase text-gray font-secondary">
          <?php echo esc_html(get_sub_field('banner_small_title')); ?>
        </h5>
      <?php endif; ?>

      <?php if (get_sub_field('banner_title')): ?>
        <h1 class="md:text-[112px] text-[88px] tracking-[-1%] text-[--color-navy]">
          <?php echo esc_html(get_sub_field('banner_title')); ?>
        </h1>
      <?php endif; ?>

      <?php if (get_sub_field('banner_description')): ?>
        <p class="md:text-[18px] text-[17px] font-medium text-midnight">
          <?php echo esc_html(get_sub_field('banner_description')); ?>
        </p>
      <?php endif; ?>

      <?php
      $button = get_sub_field('banner_button');
      if ($button):
        $button_url = $button['url'];
        $button_title = $button['title'];
        $button_target = $button['target'] ? $button['target'] : '_self';
      ?>
        <a class="btn btn-primary  mt-[32px] w-full md:w-auto" href="<?php echo esc_url($button_url); ?>" target="<?php echo esc_attr($button_target); ?>">
          <?php echo esc_html($button_title); ?>
        </a>
      <?php endif; ?>

    </div>
  </div>

</section>