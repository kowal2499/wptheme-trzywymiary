	<div class="container">
	<h1>Kontakt</h1>
		<div class="row row-nomargin">
			<article id="contact-details">


				<div class="col-md-8">	
					<div class="map">
						<?php echo do_shortcode('[gmap-embed id="107"]');?>
					</div>
				</div>

				<div class="col-md-4">
					<div class="note" style="background-color: rgba(37, 158, 137, 0.1)">
						<div class="cell company-name">
						Centrum Psychoterapii - <strong style="color: #E4572E;">Trzy Wymiary</strong>
						</div>
					</div>

					<div class="note">
						<div class="cell">
							<img src="<?php echo get_template_directory_uri() . '/assets/img/kompas.png'; ?>">
						</div>

						<div class="cell">
							ul. Przejazd 2A<br>lok. 305, 306<br>
								15-430 Białystok
						</div>
					</div>

					<div class="note">
					
						W celu umówienia wizyty prosimy o bezpośredni kontakt z jednym z naszych specjalistów ...
						<div>
						<a class="btn btn-default" href="<?php echo get_page_link(get_page_by_title( 'Nasz zespół' ));?>" role="button">Nasz Zespół</a><br>
						</div>
					
					
						<div class="cell" style="width: 70%;">
													... bądź o kontakt z koordynatorem Centrum, Jolantą Obidzińską &raquo;

						</div>

						<div class="cell">
							<a href="<?php echo get_page_link(get_page_by_title( 'Nasz zespół' )).'/#77';?>">
							<?php 
								echo get_the_post_thumbnail( 77, array(90, 90), array('class' => 'img-circle') );
							?>
							</a>
						</div>

					
					</div>

				</div>
			</article>

		</div>


		<div class="row row-nomargin text-center copyright">
			(c) 2016 Centrum Psychoterapii - Trzy Wymiary

			<a href="http://erla.pl" target="_blank" class="pull-right" style="background-color: #333; padding: 2px; margin-right: 15px;">
				<img src='<?php echo get_template_directory_uri(); ?>/assets/img/erla-logo.png'>
			</a>	
		</div>

	</div>
