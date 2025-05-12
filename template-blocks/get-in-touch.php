<?php 
  $bg_color = get_sub_field('background_color'); 
  $customClass = get_sub_field('custom_class');
?>

<section class="my-[64px] md:my-[80px] <?=  $customClass; ?>">
  <div class="tb_container">
    <div class="bg-[var(--color-royal-blue)] rounded-[24px] md:rounded-[48px] px-[16px] py-[70px] md:py-[80px] text-center text-white "  style="background-color: <?= esc_attr($bg_color); ?>">
      <h2 class="text-[52px] md:text-[80px] lg:text-[100px] xl:text-[120px] leading-[60px] md:leading-none text-white">
        <?php echo get_field('get_in_touch_title', 'option'); ?>
      </h2>
      <div class="text-[16px]  md:text-[20px] lg:text-[24px] tracking-[-2%] font-tertiary mt-[21px]">
        <?php echo get_field('get_in_touch_description', 'option'); ?>
      </div>
      <?php 
        $link = get_field('get_in_touch_button', 'option');
        if( $link): 
            $link_url = $link['url'];
          $link_title = $link['title'];
          $link_target = $link['target'] ? $link['target'] : '_self';
      ?>
        <a class="btn btn-navy mt-[30px] md:mt-[50px] !px-[40px] " href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
      <?php endif; ?>
    </div>
  </div>
</section>