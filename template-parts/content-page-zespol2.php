<?php
	$query_args = array (
		'post_type' => 'team',
		'orderby'	=>	'date',
		'order'	=>	'ASC'
	);

	$loop = new WP_Query ( $query_args );
?>



		<h1>Informacje szczegółowe</h1>



<?php
	if ( $loop->have_posts() ) :
		while ( $loop->have_posts() ): $loop->the_post();
?>

			<div class="row row-nomargin" id="<?php the_ID(); ?>">

				<div class="col-sm-3 no-padding left-header">
					<?php the_post_thumbnail('thumbnail', array('class' => 'img-circle center-block')); ?>
					<p>
					<?php 
						if (get_post_meta(get_the_ID(), 'koordynator', true)) {
							echo '<p class="koordynator">koordynator zespołu</p>';
						} 
					?>						
					</p>
				</div>

				<div class="col-sm-9 no-padding right-header">

					<h2><?php the_title(); ?></h2>

					<p><i class="fa fa-tags" aria-hidden="true"></i>&nbsp;&nbsp;<?php echo get_post_meta(get_the_ID(), 'specjalizacja', true); ?></p>
					<p><i class="fa fa-phone-square" aria-hidden="true"></i>&nbsp;&nbsp;<?php echo get_post_meta(get_the_ID(), 'telefon', true); ?></p>
					<p><i class="fa fa-envelope" aria-hidden="true"></i>&nbsp;&nbsp;<?php echo get_post_meta(get_the_ID(), 'email', true); ?></p>

					
				</div>

			</div>

			<div class="row row-nomargin">
				<div class="col-sm-offset-3 col-sm-9 right-content">
					<div class="about-me">
						<?php the_content(); ?>

						<footer>
						<a href="#"><i class="fa fa-arrow-circle-o-up" aria-hidden="true"></i> do góry</a> |
						<a href="<?php echo home_url(); ?>"><i class="fa fa-home" aria-hidden="true"></i> do strony głównej</a>
					</footer>
						
					</div>
					
					
				</div>

			</div>



		


<?php
		endwhile;
	endif;
?>