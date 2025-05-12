<?php 
  // $bg_color    = get_sub_field('background_color'); 
  $customClass = get_sub_field('custom_class');
?>

<section class="my-[88px] md:my-[176px] text-center <?= esc_attr($customClass); ?>">
  <div class="max-w-[1310px] mx-auto px-4">
    
    <?php if (get_sub_field('companies_title')) { ?>
      <h2 class="section-title"><?php echo get_sub_field('companies_title');  ?></h2> 
    <?php }?>

    <?php if (get_sub_field('companies_sub_title')) { ?>
      <p class="text-[16px] md:text-[24px] leading-[22px] md:leading-none mt-[12px] md:mt-[20px] mx-auto max-w-[250px] sm:max-w-[600px]">
        <?php echo get_sub_field('companies_sub_title');  ?>
      </p> 
    <?php  }?>

    <?php if ( have_rows('companies_list') ) : ?>
      <ul class="companies-list flex flex-wrap justify-center sm:grid-cols-3 gap-y-[30px] sm:gap-y-[40px] lg:gap-y-[50px] max-w-[360px] sm:max-w-[500px] md:max-w-[865px] mx-auto mt-[24px] md:mt-[63px]">
        <?php while ( have_rows('companies_list') ) : the_row(); 
          $brandImage   = get_sub_field('company_logo');
          $link         = get_sub_field('company_link');
          $targetBlank  = get_sub_field('company_target_blank');
          $order        = get_sub_field('company_logo_order');  
        ?>
          <li class="flex justify-between md:justify-center items-center w-[auto] md:w-[33.33%] px-2 sm:px-4" data-order="<?= $order; ?>">
            <?php if ( $link ) : ?>
              <a href="<?= esc_url($link) ?>" <?= $targetBlank ? 'target="_blank" rel="noopener"' : '' ?>>
                <img class="max-h-[30px] sm:max-h-[40px] md:max-h-[50px]" src="<?= esc_url($brandImage['url']) ?>" alt="<?= esc_attr($brandImage['alt']) ?>" />
              </a>
            <?php else: ?>
              <img class="max-h-[30px] sm:max-h-[40px] md:max-h-[50px]" src="<?= esc_url($brandImage['url']) ?>" alt="<?= esc_attr($brandImage['alt']) ?>" />
            <?php endif; ?>
          </li>
        <?php endwhile; ?>
      </ul>
    <?php endif; ?>
  </div>
</section>
