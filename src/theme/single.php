<?php get_header(); ?>
<main class="container">
	<div class="site-content">
		<?php
		if ( have_posts() ) :
			while ( have_posts() ) :
				the_post();
				get_template_part( 'content', 'single' );
		endwhile;
		else :
			get_template_part( 'content', 'none' );
		endif;
		?>
	</div>
</main>
<?php get_footer(); ?>