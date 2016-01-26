<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta name="google-site-verification" content="y457aO7hEqyzz7oKnyv5rj0qV8JM77FBkOsHC-fry94" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<title><?php bloginfo('title'); ?></title>
<link href="<?php bloginfo('template_directory'); ?>/styleHome-Embed.css" rel="stylesheet" type="text/css" />
<link href="<?php bloginfo('template_directory'); ?>/nav2.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/fonts/stylesheet.css" type="text/css" charset="utf-8" />

<!--[if IE 7]>
	<link href="<?php bloginfo('template_directory'); ?>/ie7.css" rel="stylesheet" type="text/css" />
<![endif]-->

<style type="text/css">
	#content h1{
		font-family: 'frutiger_lt_std_95_ultrablaRg';
		color: #3a3a3c;
		font-size: 31px;
	}
</style>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.cycle.lite.js"></script>

<script type="text/javascript">
$(function() {
    $('#pm').cycle({
    timeout:       7000,  // milliseconds between slide transitions (0 to disable auto advance) 
    speed:         500,  // speed of the transition (any valid fx speed value)
    pause:         true,     // true to enable "pause on hover"
    });

	$('.input').each(function() {
    var default_value = this.value;
    $(this).css('color', '#909090'); // this could be in the style sheet instead
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

<script type="text/javascript">
function extractPageName(hrefString)
{
	var arr = hrefString.split('/');
	return  (arr.length < 2) ? hrefString : arr[arr.length-2].toLowerCase() + arr[arr.length-1].toLowerCase();
}
 
function setActiveMenu(arr, crtPage)
{
	for (var i=0; i < arr.length; i++)
	{
		if(extractPageName(arr[i].href) == crtPage)
		{
			if (arr[i].parentNode.tagName != "DIV")
			{
				arr[i].className = "current";
				arr[i].parentNode.className = "current";
			}
		}
	}
}
 
function setPage()
{
	hrefString = document.location.href ? document.location.href : document.location;
 
	if (document.getElementById("nav") !=null )
	setActiveMenu(document.getElementById("nav").getElementsByTagName("a"), extractPageName(hrefString));
}
</script>

<script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>
<?php wp_head(); ?>
</head>
<body class="homebody">
<div id="maincontainer">
	<div id="mainwraper">
		<div id="wraper">
			<a href="http://www.tenmast.com/support-portal/" class="sticky-support-button" title="Go To Support Portal" /><img src="<?php bloginfo('template_url'); ?>/images/support_button.png" /></a>
			<div id="topmain" style="height: 90px;">
				<div id="logo">
					<a href="<?php bloginfo('url'); ?>/"><img src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt="Tenmast Software" border="0" /></a>
				</div>
            </div>
		</div>
	</div>
</div>
