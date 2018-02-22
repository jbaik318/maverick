<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<link href="/maverick/bootstrap-4.0.0/css/bootstrap.min.css" rel="stylesheet">
		
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

		<!-- header -->
		<header class="header clear" role="banner">
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="site-branding">
							<a href="http://maverickcoffee.com/" class="custom-logo-link" rel="home" itemprop="url"><img width="232" height="93" src="http://maverickcoffee.com/wp-content/uploads/2017/06/maverick-logo-for-website-white.png" class="custom-logo" alt="" itemprop="logo" /></a>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="content">
							<a href="https://www.google.com/maps/place/Maverick+Coffee/@33.579699,-111.9262567,17z/data=!3m1!4b1!4m5!3m4!1s0x872b74ea40456457:0x2a32ac882aa005a3!8m2!3d33.579699!4d-111.924068"><strong>10269 N Scottsdale Rd.</br>Scottsdale, AZ 85253</br></strong></a>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="content">
							<strong>M T Th: 6:30AM - 5:30PM</br>W F: 6:30AM - 7:00pm</br>S - S: 7:00AM - 5:00PM</br></strong>
						</div>
					</div>
				</div>
			</div>
		</header>	
		<!-- /header -->
		<!-- wrapper -->
		<div class="wrapper">
