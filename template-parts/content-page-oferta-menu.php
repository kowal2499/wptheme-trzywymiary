<a href="#oferta"><p>Oferta</p></a>
<a href="#obszary-pomocy"><p>Obszary usług terapeutycznych</p></a>

<?php
	$query_args = array (
		'post_type' => 'post',
		'category_name' => 'obszary-pomocy',
		'orderby'	=>	'date',
		'order'	=>	'ASC'
	);

	$loop = new WP_Query ( $query_args );
?>
	<ul class="nav">

<?php
		if ( $loop->have_posts() ) :
			while ( $loop->have_posts() ): $loop->the_post();
?>
				<li><a href="#<?php the_ID(); ?>"><?php the_title(); ?></a></li>		
<?php
			endwhile;
		endif;
?>
	</ul>
