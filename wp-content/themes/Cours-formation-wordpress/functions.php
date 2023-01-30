<?php 


function cours_wordpress_1(){
	add_theme_support('title-tag');
	add_theme_support('post-thumbnails');
	add_theme_support('menus');
	register_nav_menu('header','menu-cours-wordpress');
	add_image_size('post-thumbnails',350,215,true);
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

function cours_wordpress_menu_class($classes) {
	$classes[] = 'nav-item';
	return $classes;
}

function cours_wordpress_menu_link($attrs) {
	$attrs['class'] = 'nav-link';
	return $attrs;
}

function cours_wordpress_pagination(){
	$pages = paginate_links(['type' =>'array']);
	if($page === null){
		return;
	}
	echo '<nav aria-label="Pagination" class="my-4">';
	echo '<ul class="pagination">';
	foreach($pages as $page){
		$active = strpos($page,'current') !== false;
		$class ='page_item';
		if($active){
			$class .= ' active';
		}
		echo'<li class="'. $class. '">';
		echo str_replace('page-numbers','page-link',$page);
		echo '</li>';
	}
	echo '</nav>';
}

function cours_wordpress_add_custom_box(){
	add_meta_box('cours_sponso','Sponsoring','cours_wordpress_render_sponso_box','post','side');
}

function cours_wordpress_render_sponso_box(){
	?>
	<input type="hidden" value="0" name="cours_sponso">
	<input type="checkbox" value="1" name="cours_sponso">
	<label for="cours-sponso">Cet article est sponsorisé ! </label>
	<?php
}

function cours_wordpress_save_sponso($post_id){
	if(array_key_exists('cours_sponso', $_POST)){
		if($_POST['cours_sponso']==='0'){
			delete_post_meta($post_id,'cours_sponso');
		}
		else{
			update_post_meta($post_id,'cours_sponso', 1);
		}
	}

}


add_action('after_setup_theme','cours_wordpress_1');
add_action('wp_enqueue_scripts','cours_wordpress_register_assets');
add_filter('document_title_separator','cours_wordpress_title_separator');
add_filter('nav_menu_css_class','cours_wordpress_menu_class');
add_filter('nav_menu_link_attributes','cours_wordpress_menu_link');
add_action('add_meta_boxes','cours_wordpress_add_custom_box');
add_action('save_post','cours_wordpress_save_sponso');
