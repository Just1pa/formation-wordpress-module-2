	<?get_header()?>
	<body>
		<?php if(have_posts()):?>
		<h1>Wordpress avec articles </h1>
		<div class="row">
			<?php while(have_posts()): the_post(); ?>
				<?php require('parts/post.php');?>
			<?php endwhile ?>
		</div>
		<div>
			<?php $projets = get_terms(['taxonomy' => 'Portfolio']); ?>
			<ul class="nav nav-pills">
				<?php foreach($projets as $projet): ?>
					<li class="nav-item">
						<a href="<?= get_term_link($projet) ?>" class="nav-link <?= is_tax( 'Portfolio', $projet -> term_id) ? 'active' : '' ?>"><?= $projet -> name ?></a>
					</li>
				<?php endforeach; ?>
			</ul>
		</div>

			<?php cours_wordpress_pagination() ?>

			
		<?php else:?>
			<h1>Pas d'articles </h1>
		<?php endif;?>

	<?get_footer()?>
