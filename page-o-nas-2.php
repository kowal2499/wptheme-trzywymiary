<?php
/*
    Template name: Strona O Nas 2
*/

get_header(); ?>

	<main>
		<section class="new-single-page">
			<div class="container">
				<article>
					<h1>O nas</h1>

					<div class="inner-content">

						<div class="row">
							<div class="col-md-offset-1 col-md-10">

							<?php
								while ( have_posts() ) : the_post();

									the_content();

								endwhile; // End of the loop.
							?>

							</div>

						</div>

					</div>

					<footer>
						<a href="#"><i class="fa fa-arrow-circle-o-up" aria-hidden="true"></i> do góry</a> |
						<a href="<?php echo home_url(); ?>"><i class="fa fa-home" aria-hidden="true"></i> do strony głównej</a>
					</footer>
							

					</article>
							
			</div><!-- container -->
		</section>


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


	</main>

<?php
get_footer();