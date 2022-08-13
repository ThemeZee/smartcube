<?php
/**
 * Title: Footer Widgets
 * Slug: smartcube/footer-widgets
 * Inserter: no
*/
?>

<!-- wp:columns {"style":{"spacing":{"blockGap":"1.25vw","padding":{"right":"0.5rem"}}}} -->
<div class="wp-block-columns" style="padding-right:0.5rem">

	<!-- wp:column {"style":{"spacing":{"padding":{"top":"0.5rem","bottom":"0.5rem","left":"0.5rem"}}}} -->
	<div class="wp-block-column" style="padding-top:0.5rem;padding-bottom:0.5rem;padding-left:0.5rem">

		<!-- wp:group {"className":"footer-widget"} -->
		<div class="wp-block-group footer-widget">

			<!-- wp:heading {"level":3,"backgroundColor":"darker-gray","textColor":"white","className":"is-style-default","fontSize":"small"} -->
			<h3 class="is-style-default has-white-color has-darker-gray-background-color has-text-color has-background has-small-font-size">
				<?php _e( 'About Smartcube', 'smartcube' ); ?>
			</h3><!-- /wp:heading -->

			<!-- wp:paragraph -->
			<p><?php _e( 'Smartcube is a clean and lightweight block theme with modern colors and typography. The theme supports a huge range of block patterns, multiple header and footer block template parts as well as global style variants.', 'smartcube' ); ?></p>
			<!-- /wp:paragraph -->

		</div>
		<!-- /wp:group -->

	</div>
	<!-- /wp:column -->

	<!-- wp:column {"style":{"spacing":{"padding":{"top":"0.5rem","bottom":"0.5rem","left":"0.5rem"}}}} -->
	<div class="wp-block-column" style="padding-top:0.5rem;padding-bottom:0.5rem;padding-left:0.5rem">

		<!-- wp:group {"className":"footer-widget"} -->
		<div class="wp-block-group footer-widget">

			<!-- wp:heading {"level":3,"backgroundColor":"darker-gray","textColor":"white","className":"is-style-default","fontSize":"small"} -->
			<h3 class="is-style-default has-white-color has-darker-gray-background-color has-text-color has-background has-small-font-size">
				<?php _e( 'Categories', 'smartcube' ); ?>
			</h3><!-- /wp:heading -->

			<!-- wp:categories /-->

		</div>
		<!-- /wp:group -->

	</div>
	<!-- /wp:column -->

	<!-- wp:column {"style":{"spacing":{"padding":{"top":"0.5rem","bottom":"0.5rem","left":"0.5rem"}}}} -->
	<div class="wp-block-column" style="padding-top:0.5rem;padding-bottom:0.5rem;padding-left:0.5rem">

		<!-- wp:group {"className":"footer-widget"} -->
		<div class="wp-block-group footer-widget">

			<!-- wp:heading {"level":3,"backgroundColor":"darker-gray","textColor":"white","className":"is-style-default","fontSize":"small"} -->
			<h3 class="is-style-default has-white-color has-darker-gray-background-color has-text-color has-background has-small-font-size">
				<?php _e( 'Archives', 'smartcube' ); ?>
			</h3><!-- /wp:heading -->

			<!-- wp:archives /-->

		</div>
		<!-- /wp:group -->

	</div>
	<!-- /wp:column -->

	<!-- wp:column {"style":{"spacing":{"padding":{"top":"0.5rem","bottom":"0.5rem","left":"0.5rem"}}}} -->
	<div class="wp-block-column" style="padding-top:0.5rem;padding-bottom:0.5rem;padding-left:0.5rem">

		<!-- wp:group {"className":"footer-widget"} -->
		<div class="wp-block-group footer-widget">

			<!-- wp:heading {"level":3,"backgroundColor":"darker-gray","textColor":"white","className":"is-style-default","fontSize":"small"} -->
			<h3 class="is-style-default has-white-color has-darker-gray-background-color has-text-color has-background has-small-font-size">
				<?php _e( 'Stay in Touch', 'smartcube' ); ?>
			</h3><!-- /wp:heading -->

			<!-- wp:social-links {"iconColor":"white","iconColorValue":"#ffffff","className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"left"}} -->
			<ul class="wp-block-social-links has-icon-color is-style-logos-only">

				<!-- wp:social-link {"url":"https://twitter.com","service":"twitter"} /-->
				<!-- wp:social-link {"url":"https://facebook.com/","service":"facebook"} /-->
				<!-- wp:social-link {"url":"https://instagram.com","service":"instagram"} /-->

			</ul>
			<!-- /wp:social-links -->

		</div>
		<!-- /wp:group -->

	</div>
	<!-- /wp:column -->

</div>
<!-- /wp:columns -->
