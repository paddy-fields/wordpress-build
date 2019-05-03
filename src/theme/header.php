<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-110577987-1"></script>
	<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());

	gtag('config', 'UA-110577987-1');
	</script>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<?php wp_head(); ?>
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.ico" type="image/x-icon">
</head>

<body class="<?php body_class() ?>">
<header>
	<nav>
		<div class="container">
			<div class="nav--wrapper">
				<img class="nav--logo" src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Logo">
				<ul class="nav--links">
					<li><a href="#">item1</a></li>
					<li><a href="#">item2</a></li>
					<li><a href="#">item3</a></li>
				</ul>
			</div>
		</div>
	</nav>
</header>