<?php
/**
 * The template for displaying 404 pages (Not Found)
 */

get_header(); ?>
	<!-- BEGIN of 404 page -->
	<div class="container not-found">
		<div class="grid-x">
			<div class="col-12 text-center">
				<h1><?php _e( '404: Oops', 'default' ); ?></h1>
				<h3><?php _e( 'Keep on looking...', 'default' ); ?></h3>
				<p class="not-found__description"><?php printf( __( 'Double check the URL or head back to the 
                    <a class="label" href="%1s">HOMEPAGE</a>', 'default' ), get_bloginfo( 'url' ) ); ?>
                </p>
			</div>
		</div>
	</div>
	<!-- END of 404 page -->
<?php get_footer(); ?>
