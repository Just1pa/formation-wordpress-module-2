	<?php get_header()?>
	<body>
		<?php if(have_posts()):?>
		<h1>Voir tous nos biens </h1>
		<div class="row">
			<?php while(have_posts()): the_post(); ?>
				<?php require('parts/post.php');?>
			<?php endwhile ?>
		</div>
			<?php cours_wordpress_pagination() ?>
		<?php else:?>
			<h1>Pas d'articles </h1>
		<?php endif;?>

	<?get_footer()?>
