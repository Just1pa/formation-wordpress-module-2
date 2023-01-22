<?php 


function cours_wordpress_1(){
	add_theme_support('title-tag');
	add_theme_support('post-thumbnails');
}

function cours_wordpress_register_assets(){

	wp_register_style('bootstrap','https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css');
	wp_register_script('bootstrap','https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js',['popper','jquery'],false,true);
	wp_register_script('popper','https://unpkg.com/@popperjs/core@2',[],false,true);
	wp_register_script('jquery','https://code.jquery.com/jquery-3.6.3.min.js',[],false,true);
	wp_enqueue_style('bootstrap');
	wp_enqueue_script('bootstrap');
}


function cours_wordpress_title_separator (){
	return '|';
}





add_action('after_setup_theme','cours_wordpress_1');
add_action('wp_enqueue_scripts','cours_wordpress_register_assets');
add_filter('document_title_separator','cours_wordpress_title_separator');
