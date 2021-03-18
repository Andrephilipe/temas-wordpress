<?php
// incluir outros arquivos
require get_template_directory().'/include/setup.php';


//Hooks
add_action('wp_enqueue_scripts', 'dc_theme_styles');
add_action('after_setup_theme', 'dc_after_setup');
add_action('widgets_init', 'dc_widgets');

?>