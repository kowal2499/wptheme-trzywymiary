


<div id="team-short">

	
<br>
<?php
	$query_args = array (
		'post_type' => 'team',
		'orderby'	=>	'date',
		'order'	=>	'ASC'
	);
	wp_reset_query();
	$loop = new WP_Query ( $query_args );
?>


	<div class="row row-nomargin">

<?php

	$breakpoint = 4;
	$counter = 0;

	if ( $loop->have_posts() ) :
		while ( $loop->have_posts() ): $loop->the_post();
?>
				<?php
					if ($counter && ($counter % ($breakpoint) == 0)) {
						echo '</div>';
						echo '<div class="row row-nomargin">';
						$counter = 0;
					} else {
						$counter++;
					}
				?>

			<div class="col-md-3 team-member">

				<a href='<?php echo get_home_url() ."/zespol/#".get_the_ID(); ?>'>
				<?php the_post_thumbnail(array(90, 90), array('class' => 'img-circle center-block')); ?>
				<p class="team-member-name">
					<?php 
						the_title();
					?>
				</p>

				</a>
				<?php 
					if (get_post_meta(get_the_ID(), 'koordynator', true)) {
							echo '<div class="koordynator">koordynator</div><br>';
						}
				?>

			</div>		
<?php
		endwhile;
?>

		</div><!--row-->
<br><br>
<?php

	endif;
?>

</div>