<?php get_header(); ?>

<?php while(have_posts()): the_post() ?>
	<h1><?php the_title(); ?></h1>

	<p><?php the_content(); ?></p>
	<a href="<?= get_post_type_archive_link('post');?>">Voir les dernières actualités </a>
<?php endwhile; ?>

		<div>
			<?php wp_list_categories(['taxonomy' => 'Portfolio','title_li' => '']); ?>
			<?php $projets = get_terms(['taxonomy' => 'Portfolio']); ?>
			<ul class="nav nav-pills">
				<?php foreach($projets as $projet): ?>
					<li class="nav-item">
						<a href="<?= get_term_link($projet) ?>" class="nav-link <?= is_tax( 'Portfolio', $projet -> term_id) ? 'active' : '' ?>"><?= $projet -> name ?></a>
					</li>
				<?php endforeach; ?>
			</ul>
		</div>

<?php get_footer(); ?>