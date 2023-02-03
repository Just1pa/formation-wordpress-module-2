<div>
			<?php $projets = get_terms(['taxonomy' => 'Portfolio']); ?>
			<div class="d-grid gap-2 d-md-flex justify-content-md-start">
				<?php foreach($projets as $projet): ?>
					<button type="button" class="btn <?= is_tax( 'Portfolio', $projet -> term_id) ? 'btn-primary' : 'btn-outline-secondary' ?>">
						<a href="<?= get_term_link($projet) ?>"> <?= $projet -> name ?></a>
					</button>
				<?php endforeach; ?>

			</div>

