<?php get_header(); ?>

<div class="hero" style="background-image: url(https://place-hold.it/1200x400)">
	
</div>

<div class="container">
	<div class="gallery--container">
		<div><img src="<?php echo get_template_directory_uri(); ?>/img/one.svg" alt="Image one"></div>
		<div><img src="<?php echo get_template_directory_uri(); ?>/img/two.svg" alt="Image two"></div>
		<div><img src="<?php echo get_template_directory_uri(); ?>/img/three.svg" alt="Image three"></div>
	</div>
</div>

<main class="mt-40">
	<div class="container">
		<div class="row">
			<?php
		
				if ( have_posts() ) : while ( have_posts() ) : the_post();

				// retrieve the image alt tag
				$image_id = get_post_thumbnail_id();
				$image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', TRUE); ?>

				<div class="col-sm-6 col-md-4">
					<div class="post--block">
						<h3><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h3>
						<?php if( has_post_thumbnail() ){ ?>
							<img src="<?php echo the_post_thumbnail_url('xsmall-thumbnail') ?>" alt="<?php echo $image_alt ?>" style="width:100%;"/>
						<?php }?>
						<p><?php the_time( 'F j, Y g:i a' ); ?></p>
						<p><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php the_author(); ?></a></p>
						<p>
							<?php
								$categories = get_the_category();
								$separator  = ', ';
								$output     = '';
								if ( $categories ) {
									foreach ( $categories as $category ) {
				 						$output .= '<a href="' . get_category_link( $category->term_id ) . '">' . $category->cat_name . '</a>' . $separator;
									}
									echo trim( $output, $separator );
								}
							?>
						</p>
						<p><?php echo get_the_tag_list('',', ',''); ?></p>
					</div>
				</div>
			<?php endwhile; else : ?>
				<div class="col-sm-4">
					<div class="post--block">
						<h3>No posts.</h3>
					</div>
				</div>
			<?php endif; ?>

			<!-- for display purposes -->
			<div class="col-sm-6 col-md-4">
				<div class="post--block">
				</div>
			</div>
			<div class="col-sm-6 col-md-4">
				<div class="post--block">
				</div>
			</div>
			<!-- /end -->

		</div>
	</div>
</main>	

<?php get_footer(); ?>