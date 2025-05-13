<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package the-bell
 */

get_header();
?>

<?php
$title = get_the_title();
$content = get_the_content();

$thumbnail = get_field('thumbnail');
$spotify_link = get_field('spotify_link');
$youtube_link = get_field('youtube_link');
$apple_music_link = get_field('apple_music_link');
?>

<style>
.play-button-overlay {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  cursor: pointer;
  transition: transform 0.3s ease;
  pointer-events: none;
}

.play-button-overlay:hover {
  transform: translate(-50%, -50%) scale(1.1);
}

.pulse-btn {
  -webkit-animation: pulse 1.25s cubic-bezier(0.66, 0, 0, 1) infinite;
  animation: pulse 1.25s cubic-bezier(0.66, 0, 0, 1) infinite;
  box-shadow: 0 0 0 0 hsla(0, 0%, 85.1%, 0.7);
  display: inline-block;
  border-radius: 50%;
}

.podcast-thumbnail {
  width: 100%;
  height: auto;
  transition: opacity 0.3s ease;
  cursor: pointer;
  position: relative;
}

.podcast-thumbnail:hover {
  opacity: 0.9;
}

.video-container {
  position: relative;
  padding-bottom: 56.25%;
  height: 0;
  overflow: hidden;
}

.video-container iframe {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
}

.aspect-ratio-16-9 {
  position: relative;
  width: 100%;
  padding-top: min(56.25%, 80vh);
  /* Uses the smaller value between 56.25% (16:9 ratio) and 80vh */
}

.aspect-ratio-16-9 #thumbnailImage {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  object-fit: cover;
  max-height: 80vh;
}
</style>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <div class="podcast-thumbnail relative">
    <div id="thumbnailContainer" class="aspect-ratio-16-9">
      <img id="thumbnailImage" class="w-full h-full object-cover" src="<?= $thumbnail['url'] ?>"
        alt="<?= $thumbnail['alt'] ?>">
      <?php if ($youtube_link) : ?>
      <div class="play-button-overlay pulse-btn cursor-pointer z-10">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/play-btn.svg" alt="Play button"
          width="80px" />
      </div>
      <?php endif; ?>
    </div>
  </div>

  <section class="_container my-8">
    <div class="mt-8 grid lg:grid-cols-2 gap-8">
      <div>
        <h1 class="text-5xl lg:text-[8rem]">
          <?= $title ?>
        </h1>
        <p class="mt-4">
          <?= $content ?>
        </p>
      </div>

      <iframe id="spotify-embed" style="border-radius:12px" width="100%" height="152" frameborder="0" allowfullscreen=""
        allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
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

  <?php include locate_template('template-blocks/podcast-episodes.php'); ?>
</article>

<?php get_footer(); ?>