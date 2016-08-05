<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package Scaffolding
 * @since Scaffolding 1.0
 */

get_header(); ?>

<div id="inner-content" class="wrap clearfix">

	<div class="row">

		<div id="main" class="<?php echo scaffolding_set_layout_classes( 'main' ); ?> clearfix" role="main">

			<section class="error-404 not-found clearfix">

				<header class="page-header">

					<h1 class="page-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'scaffolding' ); ?></h1>

				</header>

				<div class="page-content">

					<p><?php _e( 'It looks like nothing was found at this location. This may be due to the page being moved, renamed or deleted.', 'scaffolding' ); ?></p>

					<ul>
						<?php _e( '<li>Check the URL in the address bar above;</li><li>Look for the page in the main navigation above or on the <a href="/site-map/" title="Site Map Page">Site Map</a> page;</li><li>Or try using the Search below.</li>', 'scaffolding' ); ?>
					</ul>

					<?php get_search_form(); ?>

				</div>

			</section>
			
		</div><?php // END #main ?>
		
		<?php get_sidebar(); ?>
		
	</div><?php // END .row ?>
	
</div><?php // END #inner-content ?>

<?php get_footer();