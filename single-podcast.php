<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package the-bell
 */

get_header();

$thumbnail = get_field('thumbnail');
$spotify_link = get_field('spotify_link');
$youtube_link = get_field('youtube_link');
$apple_podcasts_link = get_field('apple_music_link');
?>

<main id="primary" class="site-main">

  <section class="mb-[80px] lg:mb-[140px] mt-[45px] lg:mt-[72px]">
    <div class="tb_container">
      <div class="lg:flex items-center">
        <div class="text-wrap lg:max-w-[380px]  xl:max-w-[430px] ">
          <h1 class="font-bold text-[44px] xl:text-[52px] font-secondary mb-[24px]"><?php the_title(); ?></h1>
          <?php the_content(); ?>
          <div class="gap-[16px] md:gap-[8px] mt-[24px] md:mt-[34px] hidden lg:flex">
            <?php if ($youtube_link) : ?>
            <a href="<?php $youtube_link ?>" target="_blank" rel="noopener">
              <img style="height: 50px; width: auto;" class="mx-auto"
                src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/youtube-colored.png" alt="Youtube">
            </a>
            <?php endif; ?>
            <?php if ($spotify_link) : ?>
            <a href="<?php $spotify_link ?>" target="_blank" rel="noopener">
              <img style="height: 50px; width: auto;" class="mx-auto"
                src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/spotify-colored.png" alt="Youtube">
            </a>
            <?php endif; ?>
            <?php if ($apple_podcasts_link) : ?>
            <a href="<?php $apple_podcasts_link ?>" target="_blank" rel="noopener">
              <img style="height: 50px; width: auto;" class="mx-auto"
                src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/applepodcasts-colored.png"
                alt="Apple Podcasts">
            </a>
            <?php endif; ?>
          </div>
        </div>
        <div class="video-wrap lg:pl-[50px] xl:pl-[150px] w-full  mt-[26px] lg:mt-0">
          <div class="podcast-thumbnail relative">
            <div id="thumbnailContainer" class="aspect-ratio-16-9 rounded-[16px] lg:rounded-[24px]  overflow-hidden"
              data-video-url="<?= $youtube_link ?>">
              <img id="thumbnailImage" class="w-full h-full object-cover" src="<?= $thumbnail['url'] ?>"
                alt="Video Thumbnail">
              <div
                class="play-button-overlay pulse-btn cursor-pointer z-10 absolute w-full h-full top-0 left-0 flex items-center justify-center">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/play-btn.svg" alt="Play button"
                  class="max-w-[56px] lg:max-w-[88px]">
              </div>
            </div>

          </div>
        </div>
        <div class="flex justify-center gap-[16px] md:gap-[8px] mt-[24px] md:mt-[34px] lg:hidden">
          <?php if ($youtube_link) : ?>
          <a href="<?= $youtube_link; ?>" target="_blank" rel="noopener">
            <img class="mx-auto" style="height: 50px; width: auto;"
              src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/youtube-colored.png" alt="Youtube">
          </a>
          <?php endif; ?>
          <?php if ($spotify_link) : ?>
          <a href="<?= $spotify_link ?>" target="_blank" rel="noopener">
            <img class="mx-auto" style="height: 50px; width: auto;"
              src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/spotify-colored.png" alt="Youtube">
          </a>
          <?php endif; ?>
          <?php if ($apple_podcasts_link) : ?>
          <a href="<?= $apple_podcasts_link ?>" target="_blank" rel="noopener">
            <img class="mx-auto" style="height: 50px; width: auto;"
              src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/applepodcasts-colored.png"
              alt="Apple Podcasts">
          </a>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </section>

  <section class="bg-navy py-[56px] md:py-[58px] relative">
    <img class="absolute inset-0 left-0 top-0 w-full h-full object-cover object-[70%_20%] md:object-center"
      src="<?php echo get_template_directory_uri(); ?>/assets/images/gradient-bg.jpg" alt="">
    <div class="tb_container tb_container--sm relative">
      <div class="md:flex ">
        <div class="md:w-5/12 text-center">
          <img class="mx-auto max-w-[222px]"
            src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/the-bell-logo-white.png?v=0.1" alt="">
          <?php if ($spotify_link) : ?>
          <a class="mt-[32px] lg:mt-[40px] block" href="<?= $spotify_link; ?>" target="_blank" rel="noopener">
            <img class="mx-auto" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/spotify-colored.png"
              alt="Youtube">
          </a>
          <?php endif; ?>
        </div>
        <div class="md:w-7/12 relative block mt-[40px] md:mt-0">
          <iframe id="spotify-embed" style="border-radius:12px" width="100%" height="152" frameborder="0"
            allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"
            loading="lazy"></iframe>
        </div>
      </div>
    </div>
  </section>

  <script>
  const urlParts = new URL("<?= $spotify_link ?>");
  const spotifyEmbedUrl = `https://open.spotify.com/embed-podcast/episode/${
    urlParts.pathname.split('/').pop()
  }`;

  document.getElementById('spotify-embed').src = spotifyEmbedUrl;
  </script>

  <script>
  document.addEventListener('DOMContentLoaded', function() {
    const youtube_link = '<?= $youtube_link ?>';
    if (!youtube_link) return;

    const thumbnailContainer = document.getElementById('thumbnailContainer');
    const thumbnailImage = document.getElementById('thumbnailImage');

    // Function to extract YouTube ID from URL
    function getYoutubeId(url) {
      const regExp = /^.*(youtu.be\/|v\/|u\/\w\/|embed\/|watch\?v=|&v=)([^#&?]*).*/;
      const match = url.match(regExp);
      return (match && match[2].length === 11) ? match[2] : null;
    }

    // Set up click handler for the play button
    thumbnailContainer.addEventListener('click', function(e) {
      e.preventDefault();
      console.log('Play button clicked');
      const youtubeId = getYoutubeId(youtube_link);
      if (youtubeId) {
        thumbnailContainer.innerHTML = `
          <div class="video-container">
            <iframe width="100%" height="100%" src="https://www.youtube.com/embed/${youtubeId}?autoplay=1" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
        `;

        document.querySelector(".aspect-ratio-16-9").style.paddingTop = "0";
      }
    });
  });
  </script>

  <?php get_template_part('template-blocks/latest-podcast'); ?>
  <?php get_template_part('template-blocks/get-in-touch'); ?>

</main><!-- #main -->
<?php

get_footer();