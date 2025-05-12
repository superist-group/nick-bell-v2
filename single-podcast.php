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

	<main id="primary" class="site-main">

		<section class="mb-[80px] lg:mb-[140px] mt-[45px] lg:mt-[72px]">
			<div class="tb_container">
				<div class="lg:flex items-center">
					<div class="text-wrap lg:max-w-[380px]  xl:max-w-[430px] ">
						<h1 class="font-bold text-[44px] xl:text-[52px] font-secondary mb-[24px]"><?php the_title();?></h1>
						<?php the_content();?>
						<div class="gap-[16px] md:gap-[8px] mt-[24px] md:mt-[34px] hidden lg:flex">
							<?php if ($youtube = get_field('social_media_youtube', 'option')) : ?>
								<a href="<?php echo esc_url($youtube); ?>" target="_blank" rel="noopener">
									<img class="mx-auto" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/youtube-colored.png" alt="Youtube">
								</a>
							<?php endif; ?>
							<?php if ($spotify = get_field('social_media_spotify', 'option')) : ?>
								<a href="<?php echo esc_url($spotify); ?>" target="_blank" rel="noopener">
									<img class="mx-auto" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/spotify-colored.png" alt="Youtube">
								</a>
							<?php endif; ?>
						</div>
					</div>
					<div class="video-wrap lg:pl-[50px] xl:pl-[150px] w-full  mt-[26px] lg:mt-0">
						<div class="podcast-thumbnail relative">
							<div id="thumbnailContainer" class="aspect-ratio-16-9 rounded-[16px] lg:rounded-[24px]  overflow-hidden" data-video-url="<?php echo get_field('podcast_video_link'); ?>">
								<img id="thumbnailImage" class="w-full h-full object-cover" src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full');?>" alt="Video Thumbnail">
								<div class="play-button-overlay pulse-btn cursor-pointer z-10 absolute w-full h-full top-0 left-0 flex items-center justify-center">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/play-btn.svg" alt="Play button" class="max-w-[56px] lg:max-w-[88px]">
								</div>
							</div>

						</div>
					</div>
					<div class="flex justify-center gap-[16px] md:gap-[8px] mt-[24px] md:mt-[34px] lg:hidden">
							<?php if ($youtube = get_field('social_media_youtube', 'option')) : ?>
								<a href="<?php echo esc_url($youtube); ?>" target="_blank" rel="noopener">
									<img class="mx-auto" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/youtube-colored.png" alt="Youtube">
								</a>
							<?php endif; ?>
							<?php if ($spotify = get_field('social_media_spotify', 'option')) : ?>
								<a href="<?php echo esc_url($spotify); ?>" target="_blank" rel="noopener">
									<img class="mx-auto" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/spotify-colored.png" alt="Youtube">
								</a>
							<?php endif; ?>
						</div>
				</div>
			</div>
		</section>


		<section class="bg-navy py-[56px] md:py-[58px] relative">
			<img class="absolute inset-0 left-0 top-0 w-full h-full object-cover object-[70%_20%] md:object-center" src="<?php echo get_template_directory_uri(); ?>/assets/images/gradient-bg.jpg" alt="">
			<div class="tb_container tb_container--sm relative">
				<div class="md:flex ">
					<div class="md:w-5/12 text-center">
						<img class="mx-auto max-w-[222px]" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/the-bell-logo-white.png" alt="">
						<?php if ($spotify = get_field('social_media_spotify', 'option')) : ?>
							<a class="mt-[32px] lg:mt-[40px] block" href="<?php echo esc_url($spotify); ?>" target="_blank" rel="noopener">
								<img class="mx-auto" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/spotify-colored.png" alt="Youtube">
							</a>
						<?php endif; ?>
					</div>
					<div class="md:w-7/12 relative block mt-[40px] md:mt-0" >
							<iframe style="border-radius:12px" src="https://open.spotify.com/embed/episode/1nMmR3kUp8FwhcjFXjNgld" width="100%" height="168" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
					</div>
				</div>
			</div>
		</section>

		<?php get_template_part('template-blocks/latest-podcast'); ?>
		<?php get_template_part('template-blocks/get-in-touch'); ?>

	</main><!-- #main -->
<?php

get_footer();
