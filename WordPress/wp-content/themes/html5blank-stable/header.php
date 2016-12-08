<?php 
	$current_user = wp_get_current_user();
	if(is_user_logged_in()){ 
		$signedIn = true;
		$topNavLink = '<a href="'.admin_url().'"><i class="fa fa-user" aria-hidden="true"></i> <span>'.$current_user->display_name.'</span></a>';
		$signOutLink = '<a class="sign-out" href="'.wp_logout_url( home_url() ).'">Sign Out <i class="fa fa-sign-out" aria-hidden="true"></i></a>';
	}else{
		$signedIn = false;
		$topNavLink = '<a class="signin-btn" href="#">Sign In <i class="fa fa-sign-in" aria-hidden="true"></i></a>';
		$signOutLink = '<a class="signin-btn" href="#">Sign In <i class="fa fa-sign-in" aria-hidden="true"></i></a>';
	}	
?>


<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico?v=1" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Rubik:400,700" rel="stylesheet">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body <?php body_class(); ?>>


<!--
	wsl_render_auth_widget
	WordPress Social Login 2.3.0.
	http://wordpress.org/plugins/wordpress-social-login/
-->

<style type="text/css">
.wp-social-login-connect-with{}.wp-social-login-provider-list{}.wp-social-login-provider-list a{}.wp-social-login-provider-list img{}.wsl_connect_with_provider{}</style>

<div class="wp-social-login-widget">

	<div class="wp-social-login-connect-with">Connect with:</div>

	<div class="wp-social-login-provider-list">

		<a rel="nofollow" href="http://www.andrewkiproff.com/qda/wp-login.php?action=wordpress_social_authenticate&#038;mode=login&#038;provider=Facebook&#038;redirect_to=http%3A%2F%2Fwww.andrewkiproff.com%2Fqda%2F" title="Connect with Facebook" class="wp-social-login-provider wp-social-login-provider-facebook" data-provider="Facebook">
			<i class="fa fa-facebook-square" aria-hidden="true"></i>
		</a>

		<a rel="nofollow" href="http://www.andrewkiproff.com/qda/wp-login.php?action=wordpress_social_authenticate&#038;mode=login&#038;provider=Google&#038;redirect_to=http%3A%2F%2Fwww.andrewkiproff.com%2Fqda%2F" title="Connect with Google" class="wp-social-login-provider wp-social-login-provider-google" data-provider="Google">
			<i class="fa fa-google-plus-square" aria-hidden="true"></i>
		</a>

		<a rel="nofollow" href="http://www.andrewkiproff.com/qda/wp-login.php?action=wordpress_social_authenticate&#038;mode=login&#038;provider=Twitter&#038;redirect_to=http%3A%2F%2Fwww.andrewkiproff.com%2Fqda%2F" title="Connect with Twitter" class="wp-social-login-provider wp-social-login-provider-twitter" data-provider="Twitter">
			<i class="fa fa-twitter-square" aria-hidden="true"></i>
		</a>

	</div>

	<div class="wp-social-login-widget-clearing"></div>

</div>

<!-- wsl_render_auth_widget -->




		<!-- nav -->
		<nav class="nav" role="navigation">
			<ul class="menu">
				<li class="user-link"><?=$topNavLink;?></li>
				<li class="one">
					<a href="<?=get_permalink(9);?>">1 <span>Introduction to QDA</span></a>
					<ul class="sub-menu">
						<li><a href="<?=get_permalink(11);?>">1.1 - Defining Qualitative Data</a></li>
						<li><a href="<?=get_permalink(18);?>">1.2 - Recording</a></li>
						<li><a href="<?=get_permalink(15);?>">1.3 - Analyzing</a></li>
						<!--li><a href="<?=get_permalink(15);?>">1.4 - Analysing</a></li-->
					</ul>
				</li>
				<li class="two">
					<a href="<?=get_permalink(20);?>">2 <span>Overview</span></a>
					<ul class="sub-menu">
						<li><a href="<?=get_permalink(283);?>">2.1 - What can QDA software do for you?</a></li>
						<li><a href="<?=get_permalink(22);?>">2.2 - Intro to QDA Miner</a></li>
					</ul>
				</li>
				<li class="three">
					<a href="<?=get_permalink(54);?>">3 <span>Set Up</span></a>
					<ul class="sub-menu">
						<li><a href="<?=get_permalink(56);?>">3.x - Installing VM on Mac/Linux</a></li>
						<li><a href="<?=get_permalink(68);?>">3.1 - Presentation of QDA Miner</a></li>
						<li><a href="<?=get_permalink(70);?>">3.2 - Register and Activate</a></li>
						<li><a href="<?=get_permalink(73);?>">3.3 - Importing entire folders</a></li>
						<li><a href="<?=get_permalink(76);?>">3.4 - New project from .XLS</a></li>
						<li><a href="<?=get_permalink(79);?>">3.5 - Conversion Wizard</a></li>
					</ul>
				</li>
				<li class="four">
					<a href="<?=get_permalink(118);?>">4 <span>Data Management Tasks</span></a>
					<ul class="sub-menu">
						<li><a href="<?=get_permalink(120);?>">4.1 - Merging data files</a></li>
						<li><a href="<?=get_permalink(122);?>">4.2 - Recoding variables</a></li>
						<li><a href="<?=get_permalink(126);?>">4.3 - Reordering labels</a></li>
						<li><a href="<?=get_permalink(225);?>">4.4 - Reordering variables</a></li>
						<li><a href="<?=get_permalink(128);?>">4.5 - Deleting cases,variables</a></li>
						<li><a href="<?=get_permalink(339);?>">4.6 - Label, sort and group</a></li>
					</ul>
				</li>
				<li class="five">
					<a href="<?=get_permalink(133);?>">5 <span>Coding and Management</span></a>
					<ul class="sub-menu">
						<li><a href="<?=get_permalink(138);?>">5.1 - Creating and editing codes</a></li>
						<li><a href="<?=get_permalink(140);?>">5.2 - Assigning codes to text</a></li>
						<li><a href="<?=get_permalink(142);?>">5.3 - Coding of images</a></li>
						<li><a href="<?=get_permalink(144);?>">5.4 - Automatic consolidation</a></li>
						<li><a href="<?=get_permalink(146);?>">5.5 - Highlight coded data</a></li>
						<li><a href="<?=get_permalink(148);?>">5.6 - Creating compound codes</a></li>
						<!--li><a href="<?=get_permalink(150);?>">5.7 - Geo and time tagging</a></li-->
					</ul>
				</li>
				<li class="six">
					<a href="<?=get_permalink(152);?>">6 <span>Assissted Coding</span></a>
					<ul class="sub-menu">
						<li><a href="<?=get_permalink(154);?>">6.1 - Retrieving coded segments</a></li>
						<li><a href="<?=get_permalink(156);?>">6.2 - Query by Example text</a></li>
						<li><a href="<?=get_permalink(158);?>">6.3 - Cluster extraction + coding</a></li>
						<li><a href="<?=get_permalink(160);?>">6.4 - Code similarity analysis</a></li>
						<li><a href="<?=get_permalink(162);?>">6.5 - Keyword retrieval</a></li>
					</ul>
				</li>
				<li class="seven">
					<a href="<?=get_permalink(164);?>">7 <span>Analysis</span></a>
					<ul class="sub-menu">
						<li><a href="<?=get_permalink(166);?>">7.1 - Variable frequency</a></li>
						<li><a href="<?=get_permalink(168);?>">7.2 - Coding sequence analysis</a></li>
						<li><a href="<?=get_permalink(170);?>">7.3 - Bar and bubble charts</a></li>
						<li><a href="<?=get_permalink(172);?>">7.4 - Virtual grouping of codes</a></li>
					</ul>
				</li>
				<li class="eight">
					<a href="<?=get_permalink(174);?>">8 <span>Export, Report and Audit</span></a>
					<ul class="sub-menu">
						<li><a href="<?=get_permalink(176);?>">8.1 - The Report Manager feature</a></li>
						<li><a href="<?=get_permalink(178);?>">8.2 - The Command Log feature</a></li>
						<li><a href="<?=get_permalink(180);?>">8.3 - Exporting code statistics</a></li>
					</ul>
				</li>
			</ul>
		</nav>
		<!-- /nav -->

		<!-- container -->
		<div class="container on">

		<div class="logo">
			<a href="<?php echo home_url(); ?>">
				QDA <i class="fa fa-life-ring" aria-hidden="true"></i> Helpline
			</a>
			<?=$signOutLink;?>
		</div>
		<!-- wrapper -->
		<div class="wrapper">

			<!-- header -->
			<header class="header clear" role="banner">

			</header>
			<!-- /header -->
