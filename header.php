<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package start
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link href="http://fonts.googleapis.com/css?family=Open+Sans:300" rel="stylesheet" type="text/css" />
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	

	<!--<header id="masthead" class="site-header" role="banner">
		<div class="container">
			<div class="site-branding">
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
			</div><!-- .site-branding 

			<nav id="site-navigation" class="main-navigation" role="navigation">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'start' ); ?></button>
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
			</nav>
		</div>
	</header>-->

	<div id="container">

		<div id="contenu">

			<div id="header" class="row page-position  clearfix">
				
				<div id="logo-position" class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
					<a href="http://www.iarc.fr" target="_blank"><img src="/public/images/logo-iarc.gif"  class="img-responsive"></a>
				</div>
				
				<div id="" class="col-lg-6 col-md-5 col-sm-5 hidden-xs" style="display: inline-flex">
					<a href="/"><img src="/public/images/survival-title.png" class="img-responsive"></a>
				</div>

			<div id="links-position"  class="col-lg-1 col-md-2 col-sm-2 col-xs-3">
				
				<ul id="networks">
					<li class="firstli">
						<a href="http://www.linkedin.com/groups?mostPopular=&gid=3713610"  target="_blank" title="IARC Alumni"  alt="IARC Alumni"><img src="http://www.iarc.fr/images/pictos/linkedin.jpg"/></a>
					</li>
					<li class="">
						<a href="http://www.iarc.fr/en/feeds/index.php"  title="IARC RSS  Feeds" alt="IARC RSS  Feeds" target="_blank"><img src="http://www.iarc.fr/images/pictos/rss.jpg"/></a>
					</li>
					<li class="lastli">
						<a href="https://twitter.com/iarcwho"  title="IARC Twitter" alt="IARC Twitter" target="_blank"><img src="http://www.iarc.fr/images/pictos/twitter.jpg"/></a>
					</li>
				</ul>

			</div>

			<div class="page-position breathe-out">


		
