<?php
/**
 * Title: Testimonial with image #3
 * Slug: wonder/testimonial-with-image-3
 * Categories: wonder-testimonials
 * Keywords: testimonials
 * Block Types: core/cover, core/group, core/media-text, core/spacer
 *
 * @package wonder
 * @since 1.0.0
 */

?>
<!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri() ); ?>/assets/images/demo-content/home-1/testimonials-bg.png","dimRatio":80,"overlayColor":"secondary","align":"full","style":{"spacing":{"padding":{"top":"100px","right":"100px","bottom":"0px","left":"100px"}}}} -->
<div class="wp-block-cover alignfull" style="padding-top:100px;padding-right:100px;padding-bottom:0px;padding-left:100px">
	<span aria-hidden="true" class="wp-block-cover__background has-secondary-background-color has-background-dim-80 has-background-dim"></span>
	<img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( get_theme_file_uri() ); ?>/assets/images/demo-content/home-1/testimonials-bg.png" data-object-fit="cover"/>
	<div class="wp-block-cover__inner-container">
		<!-- wp:group {"layout":{"inherit":true}} -->
		<div class="wp-block-group">
			<!-- wp:media-text {"mediaPosition":"right","mediaType":"image"} -->
			<div class="wp-block-media-text alignwide has-media-on-the-right is-stacked-on-mobile">
				<figure class="wp-block-media-text__media"><img src="http://blocktheme.test/wonder/wp-content/themes/wonder/assets/images/demo-content/home-1/martharamos.jpg" alt=""/></figure>
				<div class="wp-block-media-text__content">
					<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"fontSize":"huge"} -->
					<p class="has-huge-font-size" style="font-style:normal;font-weight:700">“ Here I can find original items, low prices without to lose quality or sustainability.<br>Love it! “</p>
					<!-- /wp:paragraph -->

					<!-- wp:spacer {"height":"50px"} -->
					<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
					<!-- /wp:spacer -->

					<!-- wp:paragraph -->
					<p>Martha Ramos <br>Customer from 2007</p>
					<!-- /wp:paragraph -->
				</div>
			</div>
			<!-- /wp:media-text -->

			<!-- wp:html -->
			<div style="margin-bottom:-100px"></div>
			<!-- /wp:html -->
		</div>
		<!-- /wp:group -->
	</div>
</div>
<!-- /wp:cover -->