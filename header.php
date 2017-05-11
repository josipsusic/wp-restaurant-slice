<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>La Pizzeria</title>
	<?php wp_head(); ?>
</head>
<body>
	<header class="site-header">
		<div class="logo">
			<a href="<?php echo esc_url( home_url('/') ); ?>">
				<img src="<?php echo get_template_directory_uri() ?>/app/assets/images/logo.svg" class="logoimage" alt="Logo">
			</a>
		</div>
	</header>

	<div class="main-menu">
		<div class="navigation">
			<?php 
				$args = array(
					'theme_location' => 'header-menu',
					'container' => 'nav',
					'container_class' => 'site-nav'
				);
				wp_nav_menu($args);
			?>
		</div>
	</div>
