<?php
/**
 * The template for displaying the footer.
 * Contains the closing of the #content div and all content after
 *
 * @package zerif-lite
 */

?>

</div><!-- .site-content -->

<footer class="site-footer section-inner">

	<p>&copy; <?php echo date_i18n(esc_html__('Y','minimalist-portfolio')) ?> <a href="<?php echo esc_url( home_url() ); ?>" class="site-name"><?php bloginfo( 'name' ); ?></a></p>
	


	<?php echo do_shortcode('[widget id="instagram-feed"]'); ?>
	<?php echo do_shortcode('[widget id="simple-social-icons-2"]'); ?>
</footer> <!-- footer -->
	

<?php wp_footer(); ?>

</body>
</html>