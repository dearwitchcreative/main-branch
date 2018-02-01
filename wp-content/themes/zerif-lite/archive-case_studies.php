<?php
/**
 * The template for displaying all pages.
 *
 * @package zerif-lite
 */
get_header(); ?>


</header> 
    
 
 
<?php echo do_shortcode("[widget id=organic_widgets_hero_section-2]"); ?>
 


<a class="button" href="localhost:8888/dearwitch/#contact">Contact Us</a>







<!-- and new stuff -->

<?php
	zerif_after_header_trigger();
	$zerif_change_to_full_width = get_theme_mod( 'zerif_change_to_full_width' );
?>






<div id="primary" class="site-content">
		<div class="content" role="main">
			<?php while ( have_posts() ) : the_post(); 
				$image_1 = get_field("image_1");
				$size = "full";
				$services = get_field("services");
				$client = get_field('client');
			?>

			<div class="this-service">
<div class="service-content"?
<article class="case-study">
	<aside class="case-study-sidebar">
		<h2><?php the_title(); ?></a></h2>
		<h5><?php echo $services; ?></h5>
<h6>Client: <?php echo $client; ?></h6>
		<?php the_excerpt(); ?>

	</aside></div>



	<div class="images">
		<?php if($image_1){
			echo wp_get_attachment_image( $image_1, $size );
		} ?>

	</div>

</article>
</div>
				
			<?php endwhile; // end of the loop. ?>

			<div class="archive-video">
<?php echo do_shortcode("[embedyt]http://www.youtube.com/watch?v=Pzj0cobvCRU&width=400&height=250[/embedyt]"); ?>
			</div>

			

			<a class="live-site" href="https://www.littlewildhouse.com">Visit Live Site</a>
		</div><!-- .main-content -->



					
		






<?php get_footer(); ?>