<?php
/*
Template Name: homePageTemplate-Embed
*/
?>
<?php include( TEMPLATEPATH . '/headerHome-Embed.php' ); ?>
<div id="maincontant">
	<div id="content_main">
		<div id="content">
			<div class="video-float">
				<a href="https://www.youtube.com/watch?v=PUFG5XDfB3s" rel="wp-video-lightbox" title="Meet Tenmast">
					<img src="<?php bloginfo('template_url');?>/images/lightbox_embed.png" alt="Meet Tenmast" />
				</a>
			</div>
			<div class="content-float">
				<h1>Take 90 seconds to meet Tenmast</h1>
				<p>
					Tenmast serves Public Housing Authorities &amp; Affordable Housing Organizations with software for Tenant Management, Finance/Accounting, Maintenance, Inspections, Document Management, Compliance, and Executive Decision Making.<br/><br/>Our team is client-focused, offering the industry's finest customer support. <a href="/contact-us">Contact us</a> to discuss how we can help create custom business processes to streamline your business.
				</p>
				<div style="text-align: center;margin-top: 50px;">
					<a class="demo-button" href="/sign-up-for-a-free-demo/">Sign Up For A <strong>FREE DEMO</strong></a>
				</div>
			</div>
		</div>
        <div class="clear"></div>
        <div class="columns">
            	<div id="column-left">
					<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Home - Left Column") ) : ?>
                    <?php endif; ?>
                </div>
                
                <div id="column-middle">
					<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Home - Middle Column") ) : ?>
                    <?php endif; ?>
                </div>
                
                <div id="column-right">
					<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Home - Right Column") ) : ?>
                    <?php endif; ?>
                </div>
            </div>
	</div>
	<?php get_footer(); ?>
</div>