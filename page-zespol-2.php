<?php
/*
    Template name: Strona Zespół 2
*/

get_header(); ?>

	<main>
		
		<section class="new-single-page">
			<div class="container">
				<article>
					<h1>Członkowie naszego zespołu</h1>
					<?php include('template-parts/content-zespol-links.php'); ?>

					<footer>
						<a href="#"><i class="fa fa-arrow-circle-o-up" aria-hidden="true"></i> do góry</a> |
						<a href="<?php echo home_url(); ?>"><i class="fa fa-home" aria-hidden="true"></i> do strony głównej</a>
					</footer>

				</article>
			</div>
		</section>

		<section class="new-single-page ">
			<div class="container">
				<article class="team">
					<?php include('template-parts/content-page-zespol2.php'); ?>

				</article>
			</div>
		</section>

	</main>

	

<?php
get_footer();