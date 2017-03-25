<?php

	$query_args = array (
		'post_type' => 'post',
		'category_name' => 'obszary-pomocy',
		'orderby'	=>	'date',
		'order'	=>	'ASC'
	);

	$loop = new WP_Query ( $query_args );
	$postsNumber = $loop->post_count;
	
	$counter = 0;
	$classString = "col-md-4";
	$offset = "";
	echo "<div class='row row-nomargin'>";
	if ( $loop->have_posts() ) :
		while ( $loop->have_posts() ): $loop->the_post();

		// Add a new row before 2th, 4th, 6th, etc.. element
		if (!($counter % 3) && ($counter)) {
			echo "</div><!-- .row -->";
			echo "<div class='row row-nomargin'>";

			// Add appropriate margin if there are less than 3 elements in last row
			if ($postsNumber - $counter == 1) {
				$offset = "col-md-offset-4";
			}
			if ($postsNumber - $counter == 2) {
				$offset = "col-md-offset-2";
			}
		}	
?>
		<div class="<?php echo $offset." ".$classString; 
		// make sure that the offset is used only once per row
		if ($offset) { 
			$offset=""; 
		};

		?>" style='padding: 0px;'>
			<a href='<?php echo get_permalink( get_page_by_title( 'oferta' ) )."#".get_the_ID(); ?>'>
				
				<div class="content">
					<div class="vcenter-parent">
						<div class="vcenter-child">
							<h2><?php the_title(); ?></h2>

						</div>
					</div>

								<?php the_post_thumbnail(); ?>
								<!-- <div class="image" style="background: url('<?php #the_post_thumbnail_url(); ?>');"></div> -->
				</div>

			</a>
		</div>
<?php
			$counter = $counter+1;
?>
		
<?php
		endwhile;
	echo "</div>";
	else:
			echo "Brak wpisów z kategorii 'obszary-pomocy'.";
	endif;

?>