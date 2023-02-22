<?php 
class YoutubeWidget extends WP_Widget{

	public function __construct()
	{
		parent::__construct('youtube_widget','Youtube Widget');
	}
	public function widget($args,$instance){
		echo 'Bonjour';
	}

	public function form($instance){
		?>
		<p>
			<label for="<?= $this->get_field_id('title')?>">Titre</label>
			<input class="widefat" type="text" name="<?= $this->get_field_name('title')?>" id="<?= $this->get_field_name('title')?>">
		</p>
		<?php

	}

	public function update($newInstance,$oldInstance){
		return $newInstance;
	}
}

 ?>