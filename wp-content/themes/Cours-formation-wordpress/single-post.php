	<?get_header()?>
	<body>
		<?php if(have_posts()):?>

			<?php while(have_posts()): the_post(); ?>
				<h1><?php the_title(); ?></h1>
				<?php if(get_post_meta(get_the_ID(), SponsoMetaBox::META_KEY, true ) ==='1'):?>
					<div class="alert alert-info">Cet article est sponsorisé ! </div>
				<?php endif ?>
				<p>
					<img src="<?php the_post_thumbnail_url();?>" alt="" style="width: 100%;height: auto;">
				</p>
				<?php the_content(); ?>
			<?php endwhile; endif;?>
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
	<?get_footer()?>
