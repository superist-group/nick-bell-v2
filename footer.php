<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package the-bell
 */

?>

	<footer class="site-footer bg-navy text-white">
		<div class="tb_container tb_container--sm">
			<div class="pt-[50px] md:pt-[64px] pb-[50px] flex flex-col md:flex-row justify-between w-full">
					<div class="w-full md:max-w-[500px] lg:max-w-[600px]">
						<div class="footer-logo">
							<a href="<?php echo get_site_url();?>">
								<img src="<?php echo get_field('footer_logo', 'option'); ?>" alt="<?php echo get_bloginfo('name'); ?>">
							</a>
						</div>
						<?php
							wp_nav_menu([
									'theme_location' => 'menu-2',
									'menu_id'        => 'footer-menu',
									'container'      => false,
									'menu_class'     => 'footer-menu', 
							]);
						?>
						<p><?php echo get_field('footer_description', 'option'); ?></p>
						
					</div>
					<div class="w-full md:w-auto mt-[42px] md:mt-[31px] ">
						<div class="social-link flex gap-4 md:justify-center mb-[24px] md:mb-[40px]">
							<?php if ($instagram = get_field('social_media_instagram_link', 'option')) : ?>
								<a href="<?php echo esc_url($instagram); ?>" target="_blank" rel="noopener">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/social-icon-1.svg" alt="Instagram">
								</a>
							<?php endif; ?>

							<?php if ($linkedin = get_field('social_media_linkedin_link', 'option')) : ?>
								<a href="<?php echo esc_url($linkedin); ?>" target="_blank" rel="noopener">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/social-icon-2.svg" alt="LinkedIn">
								</a>
							<?php endif; ?>

							<?php if ($tiktok = get_field('social_media_tiktok_link', 'option')) : ?>
								<a href="<?php echo esc_url($tiktok); ?>" target="_blank" rel="noopener">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/social-icon-3.svg" alt="TikTok">
								</a>
							<?php endif; ?>
						</div>

						<div class="platform-links">
							<?php if ($youtube = get_field('social_media_youtube', 'option')) : ?>
								<a class="social-platform-icon" href="<?php echo esc_url($youtube); ?>" target="_blank" rel="noopener">
									<img class="mx-auto" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/youtube.png" alt="Youtube">
								</a>
							<?php endif; ?>
							<?php if ($spotify = get_field('social_media_spotify', 'option')) : ?>
								<a class="social-platform-icon" href="<?php echo esc_url($spotify); ?>" target="_blank" rel="noopener">
									<img class="mx-auto" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/spotify.png" alt="Youtube">
								</a>
							<?php endif; ?>
						</div>
					</div>
			</div>
			<div class="pt-[20px] pb-[30px] border-t border-t-[#D1D5DC]">
				<p class="text-[14px] font-medium"><?php echo get_field('footer_copyright', 'option'); ?></p>
			</div>
		</div>
	</footer>
</div>

<script src="/wp-content/themes/the-bell/assets/js/hubspot.js"></script>

<?php wp_footer(); ?>

</body>
</html>
