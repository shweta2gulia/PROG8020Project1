<?php
/**
 * The template for displaying 404 pages (not found)
 *
 */

get_header(); ?>
	<div id="content" class="large-8 columns" role="main">
		<article class="error-404 not-found">
			<header class="article-intro">
				<div class="article-title no-thumbnail large-12 columns">
					<h2><?php _e( 'Oops! That page can&rsquo;t be found.', 'mymagazine' ); ?></h2>
				</div>
			</header><!-- .page-header -->
			<div class="row">
				<div class="article-container large-12 columns">
					<div class="article-content">
						<p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'mymagazine' ); ?></p>

						<div class="none-and-search">
							<?php get_search_form(); ?>
						</div>
					</div><!-- end .article-content -->
				</div><!-- end .article-container -->
			</div><!-- end .row -->
		</article>
	</div><!-- end main -->

<?php get_footer(); ?>
