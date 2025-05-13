<?php

/**
 * the-bell functions and definitions
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 * @package the-bell
 */

if (! defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.0');
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function the_bell_setup()
{
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on the-bell, use a find and replace
		* to change 'the-bell' to the name of your theme in all the template files.
		*/
	load_theme_textdomain('the-bell', get_template_directory() . '/languages');

	// Add default posts and comments RSS feed links to head.
	add_theme_support('automatic-feed-links');

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support('title-tag');

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support('post-thumbnails');

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__('Primary', 'the-bell'),
		)
	);
	register_nav_menus(
		array(
			'menu-2' => esc_html__('Footer Menu', 'the-bell'),
		)
	);
	register_nav_menus(
		array(
			'menu-3' => esc_html__('Header Right', 'the-bell'),
		)
	);
	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);


	// Add theme support for selective refresh for widgets.
	add_theme_support('customize-selective-refresh-widgets');

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action('after_setup_theme', 'the_bell_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function the_bell_content_width()
{
	$GLOBALS['content_width'] = apply_filters('the_bell_content_width', 640);
}
add_action('after_setup_theme', 'the_bell_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function the_bell_widgets_init()
{
	register_sidebar(
		array(
			'name'          => esc_html__('Sidebar', 'the-bell'),
			'id'            => 'sidebar-1',
			'description'   => esc_html__('Add widgets here.', 'the-bell'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action('widgets_init', 'the_bell_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function the_bell_scripts()
{
	wp_enqueue_style('swiper-slider-style', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css');
	wp_enqueue_style('the-bell-style', get_stylesheet_uri(), array(), _S_VERSION);
	wp_enqueue_style('tailwind-output', get_template_directory_uri() . '/assets/css/output.css');
	//wp_enqueue_script( 'tailwind-script', 'https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4' );


	wp_enqueue_script('swiper-script', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js');
	wp_enqueue_script('main-script', get_template_directory_uri() . '/assets/js/main-script.js');
}
add_action('wp_enqueue_scripts', 'the_bell_scripts');

// Allow SVG uploads
function add_file_types_to_uploads($file_types)
{
	$new_filetypes = array();
	$new_filetypes['svg'] = 'image/svg+xml';
	$file_types = array_merge($file_types, $new_filetypes);
	return $file_types;
}
add_filter('upload_mimes', 'add_file_types_to_uploads');


/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';
/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

// Latest 4 Podcast shortcode
function latest_podcast_shortcode($atts)
{
	$current_id = is_singular('podcast') ? get_the_ID() : 0;

	// Get 5 posts in case current post is one of them
	$query = new WP_Query([
		'post_type'      => 'podcast',
		'posts_per_page' => 5,
		'post_status'    => 'publish',
		'orderby'        => 'date',
		'order'          => 'DESC',
	]);

	ob_start();
	if ($query->have_posts()) :
		$count = 0;
?>
		<div class="swiper-wrapper h-full grid lg:grid-cols-2 xl:grid-cols-4">
			<?php while ($query->have_posts() && $count < 4) : $query->the_post();
				if (get_the_ID() == $current_id) continue; // Skip current post if on single podcast

				$count++;
				$image_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
			?>
				<div class="swiper-slide rounded-[16px] relative z-1 overflow-hidden bg-linear-(--gradient-2) p-[1px] flex flex-col">
					<a href="<?php the_permalink(); ?>">
						<?php if ($image_url): ?>
							<img src="<?php echo esc_url($image_url); ?>" class="aspect-2/1.1 object-cover w-full" alt="<?php the_title_attribute(); ?>">
						<?php endif; ?>
					</a>
					<div class="p-[24px] bg-white rounded-b-[16px] min-h-[228px]">
						<h3 class="font-bold text-[20px] font-secondary text-[--color-navy]"><?php the_title(); ?></h3>
						<p class="text-[15px] mt-[10px] text-[--color-navy] line-clamp-3"><?php echo wp_trim_words(get_the_excerpt(), 20, '...'); ?></p>
						<a href="<?php the_permalink(); ?>" class="mt-[23px] flex gap-[8px] font-bold text-[15px] text-primary items-center uppercase">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/play-icon.svg" alt="play icon">
							Watch Episode
						</a>
					</div>
				</div>
			<?php endwhile; ?>
		</div>
	<?php endif;

	wp_reset_postdata();

	return ob_get_clean();
}
add_shortcode('latest_podcast', 'latest_podcast_shortcode');



// All Latest shortcode
function all_podcast_list_shortcode($atts)
{
	$initial_posts = 5;
	$additional_posts = 5;
	$count = 0;

	$query = new WP_Query([
		'post_type'      => 'podcast',
		'posts_per_page' => -1,
		'post_status'    => 'publish',
		'orderby'        => 'date',
		'order'          => 'DESC',
		'paged'          => 1,
	]);

	ob_start();
	?>
	<div id="podcast-list" class="border-t border-t-[#D1D5DC]">
		<?php if ($query->have_posts()) : ?>
			<?php while ($query->have_posts()) : $query->the_post();
				$image_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
				$hidden_class = ($count >= $initial_posts) ? 'tb-hidden' : '';
			?>
				<div class="md:flex gap-[32px] lg:gap-[40px] py-[24px] md:py-[30px] lg:py-[40px] items-center border-b border-b-[#D1D5DC] <?php echo $hidden_class; ?>">
					<div class="md:w-2/5">
						<a href="<?php the_permalink(); ?>" class="rounded-[16px]">
							<?php if ($image_url): ?>
								<img src="<?php echo esc_url($image_url); ?>" class="aspect-2/1.1 object-cover w-full rounded-[16px]" alt="<?php the_title_attribute(); ?>">
							<?php endif; ?>
						</a>
					</div>
					<div class="lg:pr-[16px] md:w-3/5 mt-[32px] lg:mt-[0]">
						<h3 class="font-bold text-[24px] lg:text-[30px] font-secondary text-[--color-navy]"><?php the_title(); ?></h3>
						<p class="lg:text-[16px] text-[15px] mt-[10px] text-[--color-navy] line-clamp-3"><?php echo wp_trim_words(get_the_excerpt(), 50, '...'); ?></p>
						<a href="<?php the_permalink(); ?>" class="mt-[23px] flex gap-[8px] font-bold text-[15px] text-primary items-center uppercase">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/play-icon.svg" alt="play icon">
							Watch Episode
						</a>
					</div>
				</div>
			<?php
				$count++; // Increment the count variable
			endwhile; ?>
		<?php endif; ?>
	</div>

	<?php if ($query->found_posts > $initial_posts) : ?>
		<div class="text-center">
			<button id="load-more" class="btn btn-outline !min-w-[250px] mx-auto mt-[40px]">view all</button>
		</div>
	<?php endif; ?>

<?php
	wp_reset_postdata();
	return ob_get_clean();
}
add_shortcode('all_podcast_list', 'all_podcast_list_shortcode');
