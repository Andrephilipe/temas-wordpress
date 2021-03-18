<html>
	<?php
		wp_head();
	?>
<head>
	<title></title>
</head>
<body <?php body_class();?>>
	<header>
		<?php
		if(has_custom_logo()) {
			
			the_custom_logo();
		}
		?>
	<H1><a href="<?php echo home_url('/'); ?>"><?php bloginfo('name'); ?></a></H1>
	<?php
	if( has_nav_menu('primary')){
		wp_nav_menu(array(
			'theme_location' => 'primary',
			'container' => 'nav',
			'container_class' => '.navbar-custom',
			'fallback_cb' => false
		));
	}
	?>
</header>