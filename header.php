<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package the-bell
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'the-bell' ); ?></a>

	<header id="masthead" class="site-header <?php if( get_field('header_sticky', 'option') ) echo 'sticky'; ?>">
		<div class="tb_container header-wrap">
			<div class="left-wrap flex">
				<button class="menu-toggle block lg:hidden mr-4">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/header-menu.svg">
				</button>
				<?php the_custom_logo(); ?>
			</div>
			<nav id="site-navigation" class="main-navigation">
				<div class="menu-wrap ">
					<div class="sidebar-header flex justify-between align-center block lg:hidden">
						<div class="sidebar-logo">
							<a href="<?php echo get_site_url();?>">
								<img  class="max-w-[125px] h-auto" src="<?php echo get_field('header_sidebar_logo', 'option'); ?>" alt="<?php echo get_bloginfo('name'); ?>">
							</a>
						</div>
						<button class="menu-toggle w-[30px] block">
							<img class="" src="<?php echo get_template_directory_uri(); ?>/assets/images/menu-close.svg">
						</button>
					</div>
					<?php
						wp_nav_menu(
							array(
								'theme_location' => 'menu-1',
								'menu_id'        => 'primary-menu',
								'container'      => false,
								'menu_class'     => 'header-menu', 
							)
						);
					?>
				</div>

			</nav>
			<div class="right-menu">
				<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-3',
							'menu_id'        => 'Header Right',
						)
					);
				?>
			</div>
		</div>

	</header>
