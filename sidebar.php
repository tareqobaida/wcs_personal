<?php
/**
 * The sidebar containing the secondary widget area
 *
 * Displays on posts and pages.
 *
 * If no active widgets are in this sidebar, hide it completely.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

if ( is_active_sidebar( 'sidebar-right' ) ) : ?>
			<div class="widget-area">
				<?php dynamic_sidebar( 'sidebar-right' ); ?>
			</div><!-- .widget-area -->
<?php endif; ?>