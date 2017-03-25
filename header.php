<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package trzy-wymiary
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" type="image/png" href="<?php echo get_home_url().'/favicon-32x32.png'; ?>" sizes="32x32">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); if (is_page_template( "page-oferta-2.php" )) { echo ' data-spy="scroll" data-target="#navigation"'; }?>>


	<header>
		<!-- upper contact bar  -->
		<section id="upper-contact">
			<div class="container">
				<div class="row">
					<div class="upper-contact">
							<div class="vcenter-parent pull-right">
								<div class="vcenter-child">
									<img class="address" src="<?php echo get_template_directory_uri() . '/assets/img/kompas.png'; ?>" alt="adres">
									<span class="address">Centrum Psychoterapii "Trzy Wymiary", ul. Przejazd 2A, lok. 305, 306 15-430 Białystok</span>
									<!-- <img src="<?php #echo get_template_directory_uri() . '/assets/img/tel.png'; ?>" alt="telefon"> -->
									<!-- +48 605 988 285 -->
								</div>
							</div>
					</div>
				</div>		
			</div>
		</section>

		<!-- navigation  -->
		<nav class="navbar navbar-default">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="<?php echo home_url(); ?>">
						<img src="<?php echo get_template_directory_uri() . '/assets/img/logo.png'; ?>" class="img-responsive">
					</a>
				</div><!-- navbar-header -->
								
				<div class="navbar-collapse collapse">
					<?php 
			            wp_nav_menu(array(
			            		'theme_location'			=> 'primary',
			            		'container'					=> false,
			            		'menu_class'				=> 'nav navbar-nav navbar-right'
			            	));
			            ?>
				</div><!-- navbar-collapse -->
			</div>
		</nav>
		
	</header>
