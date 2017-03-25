<?php
/*
    Template name: Strona Oferta 2
*/

get_header(); ?>

	<main>
		<section class="new-single-page">
			<div class="container">
				<article>
					<h1>Oferta</h1>
					<div class="inner-content">
						<div class="row">

							<nav class="col-sm-4" id="navigation">
								<div class="left-menu" data-spy="affix" data-offset-top="320" data-offset-bottom="600">
									<?php include('template-parts/content-page-oferta-menu.php'); ?>
									
								</div>
							</nav>

							<div class="col-sm-8">
									
									<div id="oferta"></div>
									<article>
									<?php
										while ( have_posts() ) : the_post();
											the_content();
										endwhile;
									?>
									</article>
									
									<h3 id="obszary-pomocy">obszary usług terapeutycznych</h3>
										<?php include('template-parts/content-page-oferta-obszary.php'); ?>

							</div><!-- col-sm-9 -->
						</div><!-- row -->
					</div>
				</article>
			</div><!-- container -->
		</section>
	</main>
	

<?php
get_footer();
?>

<script>
			// jQuery('body').scrollspy({ target: '#navigation' })

	</script>