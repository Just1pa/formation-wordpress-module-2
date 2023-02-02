<div class="card" style="width: 18rem;">
				  <div class="card-body">
				  	<?php the_post_thumbnail('post-thumbnails',['class' => 'img-thumbnail', 'alt' => ''])?>
				    <h5 class="card-title"><?php the_title()?></h5>
				    <h6 class="card-subtitle mb-2 text-muted"><?php the_category()?></h6>
				    <p class="card-text"><?php the_content('En voir plus')?></p>
				    <a href="<?php the_permalink() ?>" class="card-link">Voir plus</a>
				    <a href="#" class="card-link">Another link</a>
				  </div>
</div>