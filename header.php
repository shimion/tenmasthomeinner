<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="google-site-verification" content="y457aO7hEqyzz7oKnyv5rj0qV8JM77FBkOsHC-fry94" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Tenmast Software</title>

<link href="<?php bloginfo('template_directory'); ?>/style.css" rel="stylesheet" type="text/css" />
<link href="<?php bloginfo('template_directory'); ?>/nav2.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/fonts/stylesheet.css" type="text/css" charset="utf-8" />
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/jquery.multiselect.css" />
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/search.js"></script>

<style type="text/css">
	#content h1{
		font-family: 'frutiger_lt_std_95_ultrablaRg';
		color: #4b116f;
		font-size: 31px;
	}
</style>
       
<script type="text/javascript">
<!--
google_ad_client = "pub-6651950180071236";
/* 728x90, created 3/24/09 */
google_ad_slot = "2160454816";
google_ad_width = 700;
google_ad_height = 50;
//-->
</script>
<script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>
<script type="text/JavaScript">
<!--
function MM_preloadImages() { //v3.0
var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}
function MM_swapImgRestore() { //v3.0
var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_findObj(n, d) { //v4.01
var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
if(!x && d.getElementById) x=d.getElementById(n); return x;
}
function MM_swapImage() { //v3.0
var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
//-->
</script>
<?php wp_head(); ?>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.cycle.lite.js"></script>
<!-- jQuery to swap input color values --> 
<script type="text/javascript">
jQuery(function($) {
$('.default-value').each(function() {
    var default_value = this.value;
    $(this).css('color', '#909090');
    $(this).focus(function() {
        if(this.value == default_value) {
            this.value = '';
            $(this).css('color', '#000000');
        }
    });
    $(this).blur(function() {
        if(this.value == '') {
            $(this).css('color', '#000000');
            this.value = default_value;
        }
    });
});
});
</script>

<!----------[ START - MAKES ALL PDF LIKS OPEN IN A NEW WINDOW ]----------> 
<script type="text/javascript">
jQuery(function($) {
    $('a[href$=".pdf"]').attr('target', '_blank');
}); 
</script>
<!----------[ END - MAKES ALL PDF LIKS OPEN IN A NEW WINDOW ]---------->

<!-- Place this tag in your head or just before your close body tag -->
<script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>
<!--[if IE 7]>
<style type="text/css">
.request-options{
    padding-top:20px;
}
</style>
<![endif]-->
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.validate.min.js"></script>

<!--
<script type="text/javascript">
//jQuery(function($) {
//	$('.gfield_select').mousedown(function(e) {
//    	e.preventDefault();
//    	$(this).prop('selected', !$(this).prop('selected'));
//    	return false;
//	});
//});
</script>
-->
</head>

<body <?php body_class($class); ?> onload="MM_preloadImages('<?php bloginfo('template_directory'); ?>/images/news.gif','<?php bloginfo('template_directory'); ?>/images/softwaremo.gif','<?php bloginfo('template_directory'); ?>/images/partneraccesmo.gif','<?php bloginfo('template_directory'); ?>/images/docimagingmo.gif','<?php bloginfo('template_directory'); ?>/images/websitesmo.gif','<?php bloginfo('template_directory'); ?>/images/industrytrainingmo.gif','<?php bloginfo('template_directory'); ?>//images/producttrainingmo.gif','<?php bloginfo('template_directory'); ?>/images/networkingmo.gif')">
<div id="maincontainer">
<div id="mainwraper">
<div id="wraper">
	<a href="http://www.tenmast.com/support-portal/" class="sticky-support-button" title="Go To Support Portal" /><img src="<?php bloginfo('template_url'); ?>/images/support_button.png" /></a>
<div id="topmain">
				<div id="logo">
					<a href="<?php bloginfo('url'); ?>/"><img src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt="Tenmast Software" border="0" /></a>
				</div>
				<div id="topright">
					<div id="information">
						<a href="<?php bloginfo('url'); ?>/wp-login.php">CLIENT LOGIN</a> | <a style="color:#bfd776;" href="/support-portal">CONTACT SUPPORT</a> | <a href="http://tu.tenmast.com/">TENMAST UNIVERSITY LOGIN</a>
					</div>     
					<div id="navigation">
						<div id="menu" class="meh">
                        
                        <!-- navigation -->
                            <?php 
	                            wp_nav_menu( array('container' => div,'theme_location' => 'main','container_id' => 'nav','echo' => '1', 'walker' => new Arrow_Walker_Nav_Menu )); 
	                            ?>
                           
                           <style>
						   	.arrow > a {background: url("/wp-content/themes/tenmasthomeinner/images/arrow-grey.png") no-repeat scroll 220px center transparent !important;}
							
							.arrow > a:hover {background: url("/wp-content/themes/tenmasthomeinner/images/arrow-white.png") no-repeat scroll 220px center transparent !important;}
							
							
							.arrow:hover  {background-color: #333; }
							.arrow a:hover {background-color: #333;}
							ul.sub-menu ul.sub-menu li a {background-color: #dcdcdc !important;}
							ul.sub-menu ul.sub-menu li a:hover {color: #551A8B !important;}
							
							</style>
                	</div>
					</div>
				</div>
                <div class="clear"></div>

</div>
</div>
</div>