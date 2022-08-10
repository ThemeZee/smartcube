<?php
/**
 * Title: Default List View
 * Slug: smartcube/blog-posts-list
 * Block Types: core/query
 * Categories: smartcube_blog
*/
?>

<!-- wp:query {"queryId":1,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","categoryIds":[],"tagIds":[],"order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true}} -->
<div class="wp-block-query">

	<!-- wp:post-template -->

		<!-- wp:group {"style":{"spacing":{"margin":{"bottom":"4vw"}}}} -->
		<div class="wp-block-group" style="margin-bottom:4vw">

			<!-- wp:post-featured-image {"isLink":true,"style":{"spacing":{"margin":{"top":"0px"}}}} /-->

			<!-- wp:post-terms {"term":"category","className":"is-style-flip-link-hover"} /-->

			<!-- wp:post-title {"isLink":true,"style":{"spacing":{"margin":{"top":"0.75rem"}}},"fontSize":"huge"} /-->

			<!-- wp:pattern {"slug":"smartcube/postmeta"} /-->

			<!-- wp:post-excerpt {"moreText":"Continue reading &raquo;","style":{"spacing":{"margin":{"bottom":"0px"}}}} /-->

		</div>
		<!-- /wp:group -->

	<!-- /wp:post-template -->

	<!-- wp:query-pagination {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
	<!-- wp:query-pagination-numbers /-->
	<!-- /wp:query-pagination -->

</div>
<!-- /wp:query -->
