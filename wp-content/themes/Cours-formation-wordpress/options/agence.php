<?php 

class AgenceMenuPage {

	const GROUP ='agence_options';
	/*1 on enregistre*/
	public static function register(){
		add_action('admin_menu',[self::class,'addMenu']);
		add_action('admin_init',[self::class,'registerSettings']);
		add_action('admin_enqueue_scripts',[self::class,'registerScripts']);
	}

	/*2 on créé les fonctions d'enregistrements */

	public static function registerScripts($suffix){
		if ($suffix === 'settings_page_agence_options'){
		wp_register_style('flatpickr','https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css',[],false);
		wp_register_script('flatpickr','https://cdn.jsdelivr.net/npm/flatpickr',[],false,true);
		wp_enqueue_script('cours_wordpress_2_admin',get_template_directory_uri().'/assets/admin.js',['flatpickr'],false,true);
		wp_enqueue_style('flatpickr');
		}

	}

	public static function registerSettings(){
		register_setting(self::GROUP,'agence_horaire');
		register_setting(self::GROUP,'agence_date');
		add_settings_section( 'agence_options_section', 'Paramètres', function(){
		}, self::GROUP );
		add_settings_field('agence_options_horaire',"Horaires d'ouvertures",function(){?>
			<textarea name="agence_horaire" id="" cols="30" rows="10" style="width:100;"><?= esc_html(get_option( 'agence_horaire'))?></textarea>

			<?php

		},self::GROUP, 'agence_options_section');


		add_settings_field('agence_options_date',"Dates d'ouvertures",function(){?>
			<input type="text" name="agence_date" value="<?= esc_attr(get_option( 'agence_date'))?>" class="cours_wordpress_datepicker"></input>

			<?php

		},self::GROUP, 'agence_options_section');

	}

	/*2 On ajoute les éléments soit dans le menu soit sur la page */

	public static function addMenu(){
		add_options_page( "Gestion de l'agence", "Agence", "manage_options",self::GROUP, [self::class,'render']);
	}
	
	public static function render(){
		?>
		<h1>Gestion de l'agence</h1>
		<?= get_option('agence_horaire')?>
		<form action="options.php" method="post">
			<?php 
			settings_fields(self::GROUP);
			do_settings_sections(self::GROUP);
			submit_button() ?>
		</form>
		<?php
	}
}