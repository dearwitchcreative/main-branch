<?php
/**
 * The template for displaying all pages.
 *
 * @package zerif-lite
 */
get_header(); ?>

<div class="clear"></div>

</header> <!-- / END HOME SECTION  -->

<?php
	zerif_after_header_trigger();
	$zerif_change_to_full_width = get_theme_mod( 'zerif_change_to_full_width' );
?>



		
<div id="primary" class="site-content">
		<div class="content" role="main">
			
		<?php while ( have_posts() ) : the_post(); 
				
			$services = get_field('services');
			$client = get_field('client');
			$link = get_field('site_link');
			$image_1 = get_field('image_1');
			$image_2 = get_field('image_2');
			$image_3 = get_field('image_3'); 
			$size = "full";
			$video = get_field('video');?>
				
		<article class="case-study">


			<aside class="case-study-sidebar">
			<h2><?php the_title(); ?></h2>
			<h5><?php echo $services; ?></h5>
			<h6>Client: <?php echo $client; ?></h6>

				<div class="description">
				<?php the_content(); ?>
				</div>

				
			
			<p><a href="<?php echo $link; ?>">Site Link</a></p>

		</aside>

	<div class="images">
		<div class="first-image">
		<?php if ($image_1) { 
			echo wp_get_attachment_image( $image_1, $size );
			 } ?></div>

			<div class="second-image">
		<?php if ($image_2) { 
			echo wp_get_attachment_image( $image_2, $size );
			 } ?></div>

			 <div class="third-image">
		<?php if ($image_3) { 
			echo wp_get_attachment_image( $image_3, $size );
			 } ?></div>

			 <div class="video">
		<?php if ($video) { 
			echo wp_get_attachment_image( $video, $size );
			 } ?></div>

</div>
</article>


			
			<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->

		

	</div><!-- #primary -->

	<nav id="navigation" class="container">
	<div class="left"><a href="<?php echo site_url('/case-studies/') ?>">&larr; <span>Back to Work</span></a></div>
</nav>
<?php get_footer(); ?>