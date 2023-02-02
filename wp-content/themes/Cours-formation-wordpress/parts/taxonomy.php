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
