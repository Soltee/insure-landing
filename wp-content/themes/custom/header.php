<?php 

?>

<html class="no-js" <?php language_attributes(); ?>>

	<head>

		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >

		<link rel="profile" href="https://gmpg.org/xfn/11">

		<meta charset="utf-8">
	    <title>Insure</title>
	    <link rel="icon" href="<?php echo get_template_directory_uri() . 
	    '/assets/images/favicon.png' ?>">

	    <!-- Fonts -->
	    <!-- <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet"> -->

	    <!-- Progressive Image Loading -->
	    <!-- <script src="https://cdn.jsdelivr.net/npm/lozad/dist/lozad.min.js"></script> -->

		<?php wp_head(); ?>

	</head>

	<body <?php body_class(); ?>>

		<?php
		wp_body_open();
		?>

		<header>
			<div class="header_wrapper">
				<div class="header_logo_div">
					<a 
						class="anchor_link"
						href="<?php echo site_url('/'); ?>">
							<img src="<?php echo get_template_directory_uri().'/assets/images/logo.svg';  ?>" class="logo">
						</a>
				</div>

				<div class="header_nav_wrapper">
					<svg class="header_nav_menu_icon"
						width="32" height="32"><g fill="none" fill-rule="evenodd"><path fill="#FFF" stroke="#2C2830" stroke-width="1.5" d="M.75.75h30.5v30.5H.75z"/><g fill="#2C2830"><path d="M8 10h16v1.5H8zM8 15h16v1.5H8zM8 20h16v1.5H8z"/></g></g></svg>
					<ul 
						class="header_nav_ul">

						<li class="header_nav_list">
							<a href="header_nav_link">
								HOW WE WORK
							</a>
						</li>
						<li class="header_nav_list">
							<a href="header_nav_link">
								BLOG
							</a>
						</li>
						<li class="header_nav_list">
							<a href="header_nav_link">
								ACCOUNT
							</a>
						</li>
						<li class="header_nav_list">
							<a href="header_nav_button">
								View Plans
							</a>
						</li>
						
					</ul>
				</div>
			</div>
		</header>


