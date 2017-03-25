<?php
/*
    Template name: Home Page
*/

get_header(); ?>

	<main>

		<?php include('hero-widgets-area.php'); ?>

		<section id="strengths">
			<div class="container" >
				<h1>Centrum Psychoterapii</h1>
				
				<p class="small-margin">
					Oferujemy <span class="bold">pomoc psychiatryczną, psychologiczną i psychoterapeutyczną</span> w zmaganiu się z trudnościami w realacji z samym sobą, z innymi ludźmi, w życiu prywatnym i zawodowym.
				</p>

				<p class="large-margin">
					Jesteśmy grupą psychoterapeutów, którzy wierzą, że człowiek w swojej istocie jest wolny i zdolny do <span class="bold">przekraczania swoich ograniczeń</span>.
				</p>

				<p class="small-margin">
					Zapewniamy atmosferę bezwarunkowej <span class="bold">akceptacji</span>, empatycznego <span class="bold">zrozumienia</span> i <span class="bold">szacunku</span> oraz własną <span class="bold">autentyczność</span> w relacji.
				</p>
			</div>
		</section>

		<section id="paralaksa">
			<div class="container">
				<div class="parallax"></div>
			</div>
		</section>

		<section id="obszary">
			<div class="container">
				<h1>Świadczymy usługi terapeutyczne w obszarach:</h1>
				<?php get_template_part('template-parts/content', 'obszary'); ?>
			</div>
		</section> 

	</main>

	

<?php
get_footer();
