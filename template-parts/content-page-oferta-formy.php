
<?php
	$query_args = array (
		'post_type' => 'post',
		'category_name' => 'formy-pomocy',
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
							
							<div class="title-wrap">
								<h2><?php the_title(); ?></h2>
								<div class="image-wrap">
									<?php the_post_thumbnail(array(120, 120)); ?>
								</div>
							</div>

							<p><?php the_content(); ?></p>

							<footer>
								<a href="<?php echo home_url()."#formy"; ?>"><i class="fa fa-home" aria-hidden="true"></i> do strony głównej</a>
							</footer>
				</article>
<?php
		endwhile;
	endif;
?>