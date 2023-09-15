<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>
		Школа 38 в движении первых
	</title>

	<!-- <link rel="stylesheet" href="./style.css"> -->

	<!-- <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet"> -->

	<link rel="apple-touch-icon" sizes="180x180" href="./favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="./favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="./favicon/favicon-16x16.png">
	<link rel="manifest" href="./favicon/site.webmanifest">
	<link rel="mask-icon" href="./favicon/safari-pinned-tab.svg" color="#5584c6">
	<meta name="msapplication-TileColor" content="#5584c6">
	<meta name="theme-color" content="#5584c6">
	<link rel="icon" href="./favicon/favicon.ico">

	<?php
	wp_register_style('fonts', 'https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap', false, null);
	wp_enqueue_style('fonts');
	?>


	<?php
	wp_head();
	?>


</head>

<body>
	<div class="wrapper">
		<!-- HEADER BLOCK -->
		<header class="header" <?php if (is_admin_bar_showing()) { ?> style="padding-top: 45px" <?php } ?>>
			<div class="container">
				<div class="header__content">
					<div class="logo">
						<a href=" <?php echo home_url(); ?>"> <?php the_custom_logo(); ?> </a>
					</div>

					<?php
					// include('submenu.php');
					// $menu =  wp_nav_menu(array('menu' => '', 'menu_class' => 'subMenu', 'walker' => new subMenu));

					wp_nav_menu([

						'theme_location' => 'top',
						'menu' => '',
						'container' => 'nav',
						'container_class' => 'header__nav',
						'menu_class' => 'menu',
						'menu_id' => '',
						'li_class'  => 'menu__item ',
						'a_class' => 'menu__link',
					]);
					?>

					<div class="menu__btn">
						<img src="<?php bloginfo('template_url'); ?> /assets/img/menu-burger-new.png" alt=" burger menu">
					</div>
				</div>
			</div>
		</header>
		<!-- END HEADER BLOCK -->