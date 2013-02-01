<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>

	

	<footer id="colophon" role="contentinfo">
	<div id="social">
		<img src="http://itsnotadate.demos.thisisboss.com/wp-content/uploads/2013/02/vimeo.png" />
		<img src="http://itsnotadate.demos.thisisboss.com/wp-content/uploads/2013/02/1359755477_facebook.png" />
		<img src="http://itsnotadate.demos.thisisboss.com/wp-content/uploads/2013/02/1359755496_social_twitter_box_blue.png" />
	</div>
			<?php
				/* A sidebar in the footer? Yep. You can can customize
				 * your footer with three columns of widgets.
				 */
				if ( ! is_404() )
					get_sidebar( 'footer' );
			?>

			<div id="site-generator">
				<?php do_action( 'twentyeleven_credits' ); ?>
				
			</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>