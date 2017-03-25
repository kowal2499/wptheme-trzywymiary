<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package trzy-wymiary
 */

get_header(); ?>

	<main>
		<section class="new-single-page">
			<div class="container">
				<article>
					<h1><?php the_title(); ?></h1>

					<div class="inner-content">

						<div class="row">
							<div class="col-sm-8">
								<?php
									while ( have_posts() ) : the_post();
										the_content();
									endwhile; // End of the loop.
								?>
							</div>

							<div class="col-sm-4">
								<?php
									the_post_thumbnail('medium', array('class' => 'img-thumbnail img-responsive'));
								?>
							</div>
						</div><!-- row -->

					</div>

					<footer>
						<a href="#"><i class="fa fa-arrow-circle-o-up" aria-hidden="true"></i> do góry</a> |
						<a href="<?php echo home_url(); ?>"><i class="fa fa-home" aria-hidden="true"></i> do strony głównej</a>
					</footer>
							

					</article>
							
			</div><!-- container -->
		</section>
	</main>

<?php
get_footer();