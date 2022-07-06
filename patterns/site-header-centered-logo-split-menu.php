<?php
/**
 * Title: Site header with splitted menu
 * Slug: wonder/site-header-splitted-menu
 * Categories: wonder-site-header
 * Block Types: core/site-title, core/site-logo, core/navigation
 * Keywords: site header
 *
 * @package wonder
 * @since 1.0.0
 */

?>
<!-- wp:group {"style":{"spacing":{"blockGap":"30px","padding":{"top":"30px","right":"0px","bottom":"30px","left":"0px"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group" style="padding-top:30px;padding-right:0px;padding-bottom:30px;padding-left:0px">
	<!-- wp:navigation {"layout":{"type":"flex","justifyContent":"center"},"style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"500"}},"fontSize":"x-small"} -->
		<!-- wp:navigation-link {"isTopLevelLink":true} /-->
		<!-- wp:navigation-link {"isTopLevelLink":true} /-->
		<!-- wp:navigation-link {"isTopLevelLink":true} /-->
		<!-- wp:site-logo {"width":150} /-->
		<!-- wp:navigation-link {"isTopLevelLink":true} /-->
		<!-- wp:navigation-link {"isTopLevelLink":true} /-->
		<!-- wp:navigation-link {"isTopLevelLink":true} /-->
	<!-- /wp:navigation -->
</div>
<!-- /wp:group -->
