<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Boilerplate
 * @since Boilerplate 1.0
 */
?><!DOCTYPE html>
<!--[if lt IE 7 ]><html <?php language_attributes(); ?> class="no-js ie ie6 lte7 lte8 lte9"><![endif]-->
<!--[if IE 7 ]><html <?php language_attributes(); ?> class="no-js ie ie7 lte7 lte8 lte9"><![endif]-->
<!--[if IE 8 ]><html <?php language_attributes(); ?> class="no-js ie ie8 lte8 lte9"><![endif]-->
<!--[if IE 9 ]><html <?php language_attributes(); ?> class="no-js ie ie9 lte9"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<title><?php
			/*
			 * Print the <title> tag based on what is being viewed.
			 * We filter the output of wp_title() a bit -- see
			 * boilerplate_filter_wp_title() in functions.php.
			 */
			wp_title( '|', true, 'right' );
		?></title>
		<link rel="profile" href="http://gmpg.org/xfn/11" />
		<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
		<link rel="stylesheet" type="text/css" href="/wp-content/themes/inhouse/css/grid.css" />
		<link rel="stylesheet" type="text/css" href="/wp-content/themes/inhouse/css/prettyPhoto.css" />
		<link rel="stylesheet" type="text/css" href="/wp-content/themes/inhouse/css/jquery-jvert-tabs-1.1.4.css" />
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php
		/* We add some JavaScript to pages with the comment form
		 * to support sites with threaded comments (when in use).
		 */
		if ( is_singular() && get_option( 'thread_comments' ) )
			wp_enqueue_script( 'comment-reply' );

		/* Always have wp_head() just before the closing </head>
		 * tag of your theme, or you will break many plugins, which
		 * generally use this hook to add elements to <head> such
		 * as styles, scripts, and meta tags.
		 */
		wp_head();
?>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-27241428-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

	</head>
	<body <?php body_class(); ?>>
	<header class="clearfix">
        <nav class="container_12">
            <div class="grid_4"><a href="/"><img src="/wp-content/themes/inhouse/images/spacer.gif" class="sprites-ShellNav sprites-ShellNav-Logo"></a></div>
            <div class="grid_6"><a href="/index.php/connexions-appraisal-management/"><img src="/wp-content/themes/inhouse/images/spacer.gif" class="sprites-ShellNav sprites-ShellNav-Connexions"></a><a href="/index.php/lenders/"><img src="/wp-content/themes/inhouse/images/spacer.gif" class="sprites-ShellNav sprites-ShellNav-Lenders"></a><a href="/index.php/partners/"><img src="/wp-content/themes/inhouse/images/spacer.gif" class="sprites-ShellNav sprites-ShellNav-Partners"></a><a href="/index.php/contact-us/"><img src="/wp-content/themes/inhouse/images/spacer.gif" class="sprites-ShellNav sprites-ShellNav-Contact"></a></div>
            <div class="grid_2"><a href="/index.php/live-chat/"><img src="/wp-content/themes/inhouse/images/spacer.gif" class="sprites-ShellNav sprites-ShellNav-Chat"></a><a href="/index.php/help-with-connexions-login/"><img src="/wp-content/themes/inhouse/images/spacer.gif" class="sprites-ShellNav sprites-ShellNav-Login"></a><div id="headerPhone">(888) 824-9885</div></div>
        </nav>
    </header>
    <? if (is_front_page()) { ?>
    <div id="homePageWrapper">
    <div id="homeSlider">
        <div align="center">
        <?php if ( function_exists( 'meteor_slideshow' ) ) { meteor_slideshow(); } ?>
        </div>
    </div>
    <div class="homeContent container_12 clearfix" role="main">
    <? } else { ?>
    <div id="insidePageWrapper">
	<div class="insideContent container_12 clearfix" role="main">
    <? } ?>