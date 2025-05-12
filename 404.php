<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package the-bell
 */

get_header();
?>

	<main id="primary" class="site-main">
  <section class="bg-navy pt-[40px] md:pt-[62px] pb-[60px] md:pb-[80px] text-center  text-white relative">
	<img class="absolute inset-0 left-0 top-0 w-full h-full md:object-auto object-[70%_20%] md:object-[70%_20%]" src="<?php echo get_template_directory_uri(); ?>/assets/images/gradient-bg-404.jpg" alt="">
		<div class="tb_container relative">
			<h1 class="text-[112px] md:text-[152px] text-blue tracking-[-1px]"> 
				<?php echo get_field('title','option');  ?>
			</h1>
			<p class="text-[18px]"><?php echo get_field('description','option');  ?></p>
			<?php 
        $link = get_field('button', 'option');
        if( $link): 
          $link_url = $link['url'];
          $link_title = $link['title'];
          $link_target = $link['target'] ? $link['target'] : '_self';
      ?>
        <a class="btn btn-white mt-[34px] md:mt-[50px]" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
      <?php endif; ?>
		</div>
  </section>

	</main><!-- #main -->

<?php
get_footer();
