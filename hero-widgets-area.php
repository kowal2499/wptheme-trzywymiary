<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package trzy-wymiary
 */

if ( ! is_active_sidebar( 'hero-sidebar' ) ) {
	return;
}
?>

<div class="widget-area" role="complementary">
	<?php dynamic_sidebar( 'hero-sidebar' ); ?>
</div>