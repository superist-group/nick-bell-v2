
<?php 
  $bgImage = get_sub_field('background_image');
  $bgPosition = get_sub_field('banner_background_position'); // get the position value
?>

<section class="bg-blue/10 md:py-[80px] py-[60px] bg-no-repeat bg-cover" style="background-image: url('<?php echo esc_url($bgImage); ?>'); background-position: <?php echo esc_attr($bgPosition); ?>;">
  <div class="tb_container">
    <div class="max-w-[680px] mx-auto text-center text-white">

      <?php if (get_sub_field('banner_small_title')): ?>
        <h5 class="text-[20px] tracking-[2%] font-medium uppercase font-secondary text-light-gray">
          <?php echo esc_html(get_sub_field('banner_small_title')); ?>
        </h5>
      <?php endif; ?>

      <?php if (get_sub_field('banner_title')): ?>
        <h1 class="text-[88px] md:text-[112px]  tracking-[-1%] text-white">
          <?php echo esc_html(get_sub_field('banner_title')); ?>
        </h1>
      <?php endif; ?>

      <?php if (get_sub_field('banner_description')): ?>
        <p class="md:text-[18px] text-[17px] font-medium text-midnight px-8">
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
        <a class="btn btn-light-blue  mt-[32px] w-full md:w-auto" href="<?php echo esc_url($button_url); ?>" target="<?php echo esc_attr($button_target); ?>">
          <?php echo esc_html($button_title); ?>
        </a>
      <?php endif; ?>

    </div>
  </div>

</section>
