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
					<svg class="header_nav_menu_icon open"
						><g fill="none" fill-rule="evenodd"><path fill="#FFF" stroke="#2C2830" stroke-width="1.5" d="M.75.75h30.5v30.5H.75z"/><g fill="#2C2830"><path d="M8 10h16v1.5H8zM8 15h16v1.5H8zM8 20h16v1.5H8z"/></g></g></svg>
					<ul 
						class="ul header_nav_ul">

						<li class="list header_nav_list">
							<a href="link header_nav_link">
								HOW WE WORK
							</a>
						</li>
						<li class="list header_nav_list">
							<a href="link header_nav_link">
								BLOG
							</a>
						</li>
						<li class="list header_nav_list">
							<a href="link header_nav_link">
								ACCOUNT
							</a>
						</li>

						<a href="link header_nav_btn_link">
							<button class="header_nav_btn">
								View Plans
							</button>
						</a>
						
					</ul>

				</div>
			</div>

			<!-- Mobile NAV-->
			<div class="nav_hover_wrapper">
				<div class="nav_top">
					
					<div class="header_logo_div">
						<a 
							class="anchor_link"
							href="<?php echo site_url('/'); ?>">
								<img src="<?php echo get_template_directory_uri().'/assets/images/logo.svg';  ?>" class="logo">
							</a>
					</div>

					<svg class="header_nav_menu_icon close"><g fill="none" fill-rule="evenodd"><path fill="#FFF" stroke="#2C2830" stroke-width="1.5" d="M.75.75h30.5v30.5H.75z"/><g fill="#2C2830"><path d="M10.873 9.563l11.314 11.314-1.06 1.06L9.813 10.623z"/><path d="M9.813 20.877L21.127 9.563l1.06 1.06-11.314 11.314z"/></g></g></svg>

				</div>

				<div class="nav_hover_header_nav_ul_wrapper">
						
					<ul 
						class="ul nav_hover_header_nav_ul">

						<li class="list header_nav_list">
							<a href="link header_nav_link">
								HOW WE WORK
							</a>
						</li>
						<li class="list header_nav_list">
							<a href="link header_nav_link">
								BLOG
							</a>
						</li>
						<li class="list header_nav_list">
							<a href="link header_nav_link">
								ACCOUNT
							</a>
						</li>

						<a href="link header_nav_btn_link">
							<button class="header_nav_btn">
								View Plans
							</button>
						</a>
					</ul>

					
					<!-- Background Mobile Pattern -->
					<img src="<?php echo get_template_directory_uri().'/assets/images/bg-pattern-mobile-nav.svg';  ?>" class="nav_pattern">
					
				</div>

			</div>
		</header>


