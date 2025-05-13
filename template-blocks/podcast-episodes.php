<?php
$pocast_episodes = get_posts(array(
  'post_type' => 'podcast-episode',
));
?>

<style>
.episode-card {
  transition: all 0.3s ease;
}

.watch-btn {
  transition: opacity 0.3s ease;
}

.episode-card:hover .watch-btn {
  opacity: 0.9;
}
</style>

<section class="_container mb-32">
  <div class="md:mt-8 relative grid sm:grid-cols-2 md:grid-cols-1 gap-6 md:gap-16">
    <?php foreach ($pocast_episodes as $episode) :
      $title = $episode->post_title;
      $content = $episode->post_content;

      $post_id = $episode->ID;

      $thumbnail = get_field('thumbnail', $post_id);
      $spotify_link = get_field('spotify_link', $post_id);
      $youtube_link = get_field('youtube_link', $post_id);
      $apple_music_link = get_field('apple_music_link', $post_id);

      $link = get_permalink($post_id);
    ?>
    <a href="<?= $link ?>" class="block">
      <div class="grid md:grid-cols-2 gap-4 md:gap-12 episode-card">
        <div>
          <img class="w-full object-cover aspect-4/3" src="<?= $thumbnail['url'] ?>" alt="<?= $thumbnail['alt'] ?>">
        </div>

        <div class="flex flex-col gap-4 md:gap-8">
          <div>
            <h3 class="text-4xl">
              <?= $title ?>
            </h3>

            <div class="mt-8">
              <?= $content ?>
            </div>
          </div>

          <div class="flex items-center justify-between">
            <button class="_btn watch-btn">Watch Episode</button>

            <div class="flex items-center gap-4">
              <?php if ($spotify_link) : ?>
              <a href="<?= $spotify_link ?>" target="_blank" onclick="event.stopPropagation();">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/spotify-colored.png"
                  alt="Spotify" />
              </a>
              <?php endif; ?>

              <?php if ($youtube_link) : ?>
              <a href="<?= $youtube_link ?>" target="_blank" onclick="event.stopPropagation();">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/youtube-colored.png"
                  alt="YouTube" />
              </a>
              <?php endif; ?>

              <?php if ($apple_music_link) : ?>
              <a href="<?= $apple_music_link ?>" target="_blank" onclick="event.stopPropagation();">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/spotify.png" alt="Apple Music" />
              </a>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
    </a>
    <?php endforeach; ?>
  </div>
</section>