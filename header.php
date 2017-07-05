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
					<a href="http://www.iarc.fr" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/logo-iarc.gif"  class="img-responsive"></a>
				</div>
				
				<div id="" class="col-lg-6 col-md-5 col-sm-5 hidden-xs" style="display: inline-flex">
					<a href="/"><img src="<?php echo get_template_directory_uri(); ?>/img/survival-title.png" class="img-responsive"></a>
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

			</div><!--header-->

			<div class="page-row bg-blue clearfix">
				
				<div class="page-position landmark">
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
				</div>

				<div class="banner nocontrol">
				    
				    <!--<ul class="slides">
				        <li><img src="/public/images/banner/home1.jpg" alt="Andrei_R/Shutterstock.com"  title="Andrei_R/Shutterstock.com" /></li>
				        <li><img src="/public/images/banner/home2.jpg" alt="© Matyas Rehak/Shutterstock.com" title="© Matyas Rehak/Shutterstock.com" /></li>
				        <li><img src="/public/images/banner/home3.jpg" alt="© Chompoo Suriyo/Shutterstock.com" title="© Chompoo Suriyo/Shutterstock.com" /></li>
				        <li><img src="/public/images/banner/home4.jpg" alt="© Joseph Sohm/Shutterstock.com" title="© Joseph Sohm/Shutterstock.com" /></li>
				        <li><img src="/public/images/banner/home5.jpg" alt="© napocska/Shutterstock.com" title="© napocska/Shutterstock.com" /></li>
				        <li><img src="/public/images/banner/home6.jpg" alt="" title="" /></li>
				    </ul>-->
				    
				    <div class="section-layer"></div>
				    
				    <div class="section-position">
				        <div class="section">
				            <span class="title"><?php the_title();?></span>
				        </div>
				    </div>
				
				</div>		

			</div>

			<div class="page-position breathe-out">

			<div class="path-position">
		        <div class="path">
		            <?php echo custom_breadcrumbs(); ?>
		        </div>
		    </div>

		
