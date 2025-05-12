<?php

/**
Template Name: Homepage Backup
**/

get_header();

?>

<main class="main-wrap">

  <section class="text-white relative min-h-[712px]">
    <div class="bg-radial-(--gradient) absolute w-full h-full"></div>
    <div class="tb_container m-auto">
      <div class="relative mx-auto min-h-[712px]">
        <div class="py-[48px] md:pt-[55px]  md:pb-[208px] md:max-w-[564px]">
          <h1 class="text-[80px] md:text-[100px] xl:text-[144px]">Nick Bell</h1>
          <p class="text-[30px]  md:text-[44px]">Entrepreneur</p>
          <p class="text-[15px] mt-[30px] md:text-[20px] ">Uni drop out who turned startups into a $500M global
            empire. Now he’s engineering the blueprint to live to 150.</p>
          <a class="btn-primary mt-[46px] w-full md:w-auto">chat with nick</a>
        </div>
        <div class="flex justify-end md:absolute right-0 bottom-0 w-full md:max-w-[calc(100%-440px)]">
          <img src="<?php echo site_url() ?>/wp-content/uploads/2025/04/NB-Black.png" class="">
        </div>
      </div>
    </div>

  </section>

  <?php if( have_rows('content') ): ?>
    <?php while( have_rows('content') ): the_row(); ?>
      <?php
        $layout = get_row_layout();
        get_template_part('template-blocks/' . $layout);
      ?>
    <?php endwhile; ?>
  <?php endif; ?>


  <!-- Media Section -->
  <section class="tb_container md:px-[65px]">
    <div class="pt-[127px] pb-[176px]">
      <div class="text-center mx-auto max-w-[664px]">
        <h3 class="md:text-[32px] text-[20px] text-gray uppercase">on air</h3>
        <h2 class="md:text-[72px] text-[52px] text-navy capitalize leading-[1]">in the media</h2>
        <p class="md:text-[20px] text-[18px] tracking-[-1%] font-medium text-navy">From prime-time TV to viral podcasts,
          Nick's insights on building empires and extending human potential are dominating global media.</p>
      </div>
      <section class="md:flex md:gap-[65px] mt-[62px]">
        <div class="md:w-[380px]">
          <img src="https://localhost/the-bell/wp-content/uploads/2025/04/shark-tank.png" alt="shark tank">
          <h3
            class="mt-[34px] md:mt-[64px] md:text-[28px] text-[24px] text-navy capitalize tracking-[-1%] font-bold font-secondary">
            Shark Tank</h3>
          <div
            class="[&>p]:text-gray [&>p]:md:text-[18px] [&>p]:text-[16px] [&>p]:tracking-[-1%] [&>p]:mt-[10px] [&>p]:font-semibold">
            <p>
              As Australia's newest Shark Tank judge, Nick brings his raw entrepreneurial fire to prime time television.
            </p>
            <p>
              Armed with a $500M empire and a legendary track record of turning startups into success stories, he's not
              just investing in companies —he's engineering Australia's next generation of business titans.
            </p>
          </div>
        </div>
        <div class="md:w-[calc(100%-445px)] mt-[37px] md:mt-0">
          <img src="https://localhost/the-bell/wp-content/uploads/2025/04/Photo_Shark_Tank.png" class="rounded-[24px]"
            alt="shark tank">
        </div>
      </section>
      <section class="md:flex md:gap-[65px] mt-[80px] md:mt-[128px] md:flex-row-reverse">
        <div class="md:w-[380px]">
          <img src="https://localhost/the-bell/wp-content/uploads/2025/04/shark-tank.png" alt="shark tank">
          <h3
            class="mt-[34px] md:mt-[64px] md:text-[28px] text-[24px] text-navy capitalize tracking-[-1%] font-bold font-secondary">
            Shark Tank</h3>
          <div
            class="[&>p]:text-gray [&>p]:md:text-[18px] [&>p]:text-[16px] [&>p]:tracking-[-1%] [&>p]:mt-[10px] [&>p]:font-semibold">
            <p>
              As Australia's newest Shark Tank judge, Nick brings his raw entrepreneurial fire to prime time television.
            </p>
            <p>
              Armed with a $500M empire and a legendary track record of turning startups into success stories, he's not
              just investing in companies —he's engineering Australia's next generation of business titans.
            </p>
          </div>
        </div>
        <div class="md:w-[calc(100%-445px)] mt-[37px] md:mt-0">
          <img src="https://localhost/the-bell/wp-content/uploads/2025/04/Photo_Shark_Tank.png" class="rounded-[24px]"
            alt="shark tank">
        </div>
      </section>
      <section class="md:flex md:gap-[65px] mt-[80px] md:mt-[128px]">
        <div class="md:w-[380px]">
          <img src="https://localhost/the-bell/wp-content/uploads/2025/04/shark-tank.png" alt="shark tank">
          <h3
            class="mt-[34px] md:mt-[64px] md:text-[28px] text-[24px] text-navy capitalize tracking-[-1%] font-bold font-secondary">
            Shark Tank</h3>
          <div
            class="[&>p]:text-gray [&>p]:md:text-[18px] [&>p]:text-[16px] [&>p]:tracking-[-1%] [&>p]:mt-[10px] [&>p]:font-semibold">
            <p>
              As Australia's newest Shark Tank judge, Nick brings his raw entrepreneurial fire to prime time television.
            </p>
            <p>
              Armed with a $500M empire and a legendary track record of turning startups into success stories, he's not
              just investing in companies —he's engineering Australia's next generation of business titans.
            </p>
          </div>
        </div>
        <div class="md:w-[calc(100%-445px)] mt-[37px] md:mt-0">
          <img src="https://localhost/the-bell/wp-content/uploads/2025/04/Photo_Shark_Tank.png" class="rounded-[24px]"
            alt="shark tank">
        </div>
      </section>
    </div>
  </section>

  <!-- Podcast Section -->
  <section class="md:px-[65px] w-full bg-light-blue/10">
    <div class="tb_container py-[52px] md:py-[100px] ">
      <div class="text-center">
        <img src="https://localhost/the-bell/wp-content/uploads/2025/04/the-bell.png" class="mx-auto" alt="bell">
        <h2 class="md:text-[72px] text-[44px] text-navy capitalize mt-[34px] md:mt-[0px]">See my latest podcast episodes</h2>
      </div>

      <div class="podcastSlider mt-[48px] grid lg:grid-cols-2 xl:grid-cols-4 gap-[24px]">
        <div class="rounded-[16px] relative z-1 overflow-hidden bg-linear-(--gradient-2) p-[1px] ">
          <div
            class="absolute rounded-[16px] w-[calc(100%-2px)] h-[calc(100%-2px)] top-[1px] left-[1px] bg-white z-[-1]">
          </div>
          <a href="#">
            <img src="https://localhost/the-bell/wp-content/uploads/2025/04/podcast.png"
              class="aspect-2/1.1 object-cover w-full" alt="bell"></a>
          <div class="p-[24px]">
            <h3 class=" font-bold text-[20px] font-secondary">Lorem ipsum dolor sit amet consectetur erosac</h3>
            <p class="text-[15px] mt-[10px] text-navy">Lorem ipsum dolor sit amet consectetur. Suspendisse
              sollicitudin gravida gravida aliquam nec ante.</p>
            <a class="mt-[23px] flex gap-[8px] font-bold text-[15px] text-primary items-center uppercase"><img
                src="https://localhost/the-bell/wp-content/themes/the-bell/assets/images/play-icon.svg" alt="bell">
              watch episode</a>
          </div>

        </div>
        <div class="rounded-[16px] relative z-1 overflow-hidden bg-linear-(--gradient-2) p-[1px]">
          <div
            class="absolute rounded-[16px] w-[calc(100%-2px)] h-[calc(100%-2px)] top-[1px] left-[1px] bg-white z-[-1]">
          </div>
          <a href="#">
            <img src="https://localhost/the-bell/wp-content/uploads/2025/04/podcast.png"
              class="aspect-2/1.1 object-cover w-full" alt="bell"></a>
          <div class="p-[24px]">
            <h3 class=" font-bold text-[20px] font-secondary">Lorem ipsum dolor sit amet consectetur erosac</h3>
            <p class="text-[15px] mt-[10px] text-navy">Lorem ipsum dolor sit amet consectetur. Suspendisse
              sollicitudin gravida gravida aliquam nec ante.</p>
            <a class="mt-[23px] flex gap-[8px] font-bold text-[15px] text-primary items-center uppercase"><img
                src="https://localhost/the-bell/wp-content/themes/the-bell/assets/images/play-icon.svg" alt="bell">
              watch episode</a>
          </div>
        </div>
        <div class="rounded-[16px] relative z-1 overflow-hidden bg-linear-(--gradient-2) p-[1px] ">
          <div
            class="absolute rounded-[16px] w-[calc(100%-2px)] h-[calc(100%-2px)] top-[1px] left-[1px] bg-white z-[-1]">
          </div>
          <a href="#">
            <img src="https://localhost/the-bell/wp-content/uploads/2025/04/podcast.png"
              class="aspect-2/1.1 object-cover w-full" alt="bell"></a>
          <div class="p-[24px]">
            <h3 class=" font-bold text-[20px] font-secondary">Lorem ipsum dolor sit amet consectetur erosac</h3>
            <p class="text-[15px] mt-[10px] text-navy">Lorem ipsum dolor sit amet consectetur. Suspendisse
              sollicitudin gravida gravida aliquam nec ante.</p>
            <span class="mt-[23px] flex gap-[8px] font-bold text-[15px] text-primary items-center uppercase"><img
                src="https://localhost/the-bell/wp-content/themes/the-bell/assets/images/play-icon.svg" alt="bell">
              watch episode</span>
          </div>
        </div>
        <div class="rounded-[16px] relative z-1 overflow-hidden bg-linear-(--gradient-2) p-[1px]">
          <div
            class="absolute rounded-[16px] w-[calc(100%-2px)] h-[calc(100%-2px)] top-[1px] left-[1px] bg-white z-[-1]">
          </div>
          <a href="#">
            <img src="https://localhost/the-bell/wp-content/uploads/2025/04/podcast.png"
              class="aspect-2/1.1 object-cover w-full" alt="bell"></a>
          <div class="p-[24px]">
            <h3 class=" font-bold text-[20px] text-navy font-secondary">Lorem ipsum dolor sit amet consectetur erosac
            </h3>
            <p class="text-[15px] mt-[10px] text-navy">Lorem ipsum dolor sit amet consectetur. Suspendisse
              sollicitudin gravida gravida aliquam nec ante.</p>
            <a class="mt-[23px] flex gap-[8px] font-bold text-[15px] text-primary items-center uppercase"><img
                src="https://localhost/the-bell/wp-content/themes/the-bell/assets/images/play-icon.svg" alt="bell">
              watch episode</a>
          </div>
        </div>
      </div>

      <div class="flex justify-center mt-[40px] md:mt-[64px] ">
        <a href="#" class="btn-outline w-100 md:w-auto">view all episodes</a>
      </div>
    </div>
  </section>

  <!-- About Story Section -->
  <section class="bg-[#0A1125] py-[88px] md:pt-[125px] md:pb-[145px] px-4 hidden">
    <div class="max-w-[1088px] mx-auto ">
      <div class="grid lg:grid-cols-2 gap-[48px]">
        <div class="text-white info">
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


  <!-- Companies Section -->






</main>



<?php get_footer();?>