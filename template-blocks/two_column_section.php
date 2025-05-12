<?php 
  $bg_color = get_sub_field('background_color'); 
  $customClass = get_sub_field('custom_class');
?>

<section class="bg-[#0A1125] py-[88px] md:pt-[125px] md:pb-[145px] px-4 <?=  $customClass; ?>" style="background-color: <?= esc_attr($bg_color); ?>">
    <div class="max-w-[1088px] mx-auto ">
      <div class="grid lg:grid-cols-2 gap-[48px]">
        <div class="text-[white] info">
          <p class="text-[15px] md:text-[18px] mb-[7px] md:mb-[11px] uppercase tracking-[0.04em]">Nick’s origin story
          </p>
          <h2 class="text-[44px] leading-[52px] md:text-[64px] md:leading-[72px] mb-[27px] md:mb-[40px]">From uni drop
            out to richlister</h2>
          <p>Born and raised on a country cattle farm, Nick learned early that true grit builds empires. After dropping
            out of university in just one week, he launched a skincare company that crashed and burned — but failure
            only fuelled his fire.</p>
          <p>Everything changed when he started his first digital agency with $400, turning it into a $39M exit and
            proving his doubters wrong.</p>
          <p>That was just the beginning, as Nick went on to build a $500M empire across four continents, becoming one
            of Australia's most successful entrepreneurial exports.</p>
          <a class="btn-primary mt-[42px] md:mt-[50px] w-full md:w-auto">about me</a>
        </div>
        <div class="text-center">
          <img class="mx-auto lg:ml-auto" src="https://localhost/the-bell/wp-content/uploads/2025/04/nick-story.png">
        </div>
      </div>
    </div>
  </section>