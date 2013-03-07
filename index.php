<!doctype html>
<html lang="es">
	<head>	
		<link href="<?php echo get_stylesheet_directory_uri(); ?>/style.css" rel="stylesheet">
	</head>
	<body>
		<h1 class="parallax muted"><a class="brand" href="<?php get_site_url(); ?>"><span><?php echo get_bloginfo('name'); ?><span></a></h1>

		<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/a.jpg" class="parallax  img1">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/b.jpg" class="parallax  img2">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/d.jpg" class="parallax  img3">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/e.jpg" class="parallax  img4">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/f.jpg" class="parallax  img5">
		<!-- la otra con su codigo css-->
		<div class="parallax box">
		<?php
			if (have_posts()) :
			while (have_posts()) : ?>				

				<article">
					<?php the_post(); ?>
					<h2><?php the_title(); ?></h2>
					<p>
						<?php the_content(); ?>	
					</p>
				</article>
			<?php endwhile;
			endif;	
		?>
		</div>

	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.min.js"></script>
	<script>
		// Variables
		var viewport = $(window),
		    root = $('html'),
		    maxScroll;

		// Bind events to window
		viewport.on({
		  scroll: function() {
		    // Grab scroll position
		    var scrolled = viewport.scrollTop();

		    /**
		     * Calculate our factor, setting it as the root `font-size`.
		     *
		     * Our factor is calculated by multiplying the ratio of the page scrolled by our base factor. The higher the base factor, the larger the parallax effect.
		     */
		    root.css({ fontSize: (scrolled / maxScroll) * 50 });
		  },
		  resize: function() {
		    // Calculate the maximum scroll position
		    maxScroll = root.height() - viewport.height();
		  }
		}).trigger('resize');
	</script>

	</body>
</html>
