<?php get_header(); ?>

<!-- container -->
<div class="container">	
	<!-- site-content -->
	<div class="row site-content">
		<main class="col-sm-8">
			<?php if ( have_posts() ) : ?>
				<h1 class="page-title">
				<?php
					if ( is_category() ) {
						single_cat_title();
					} elseif ( is_tag() ) {
						single_tag_title();
					} elseif ( is_author() ) {
						the_post();
						echo 'Author Archives: ' . get_the_author();
						rewind_posts();
					} elseif ( is_day() ) {
						echo 'Daily Archives: ' . get_the_date();
					} elseif ( is_month() ) {
						echo 'Monthly Archives: ' . get_the_date( 'F Y' );
					} elseif ( is_year() ) {
						echo 'Yearly Archives: ' . get_the_date( 'Y' );
					} else {
						echo 'Archives:';
					}
				?>
				</h1>

				<!-- main-column -->
				<div class="main-column grid 
				<?php
				if ( ! is_search_has_results() ) {
					echo 'no-result'; }
					?>
					">
					<?php
					while ( have_posts() ) :
						the_post();
						get_template_part( 'content', get_post_format() );
					endwhile;
					?>
				</div>
				<!-- /main-column -->
	
			<?php
			else :
				get_template_part( 'content', 'none' );
			endif;
			?>
	
			<div class="pagination side">
			<?php echo paginate_links(); ?>
			</div>
		</main>
		<!-- /col -->

		<aside class="site-sidebar col-sm-4">
			<?php get_sidebar(); ?>
		</aside>

	</div>
	<!--/site-content-->

</div>
<!-- /container -->
<?php get_footer(); ?>
