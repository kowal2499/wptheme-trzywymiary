
<?php
	$query_args = array (
		'post_type' => 'post',
		'category_name' => 'obszary-pomocy',
		'orderby'	=>	'date',
		'order'	=>	'ASC'
	);

	$loop = new WP_Query ( $query_args );
?>


<?php
	if ( $loop->have_posts() ) :
		while ( $loop->have_posts() ): $loop->the_post();
?>
				<article id="<?php the_ID(); ?>">
							
								<div class="row oferta-head">
									<div class="col-md-3">
										<?php the_post_thumbnail(); ?>
									</div>
									<div class="col-md-9">
										<h2><?php the_title(); ?></h2>
									</div>
								</div>
								

							<p><?php the_content(); ?></p>

							<footer>
								<a href="<?php echo home_url()."#obszary"; ?>"><i class="fa fa-home" aria-hidden="true"></i> do strony głównej</a>
							</footer>
				</article>
<?php
		endwhile;
	endif;
?>