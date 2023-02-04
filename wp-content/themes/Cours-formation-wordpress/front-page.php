	<?php get_header(); ?>

	<?php while(have_posts()): the_post() ?>
		
	<div class="container col-xxl-8 px-4 py-5">
	    <div class="row flex-lg-row-reverse align-items-center g-5 py-5 pt-1">
	      <div class="col-10 col-sm-8 col-lg-6">
	        <img src="<?php the_post_thumbnail_url();?>" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
	      </div>
	      <div class="col-lg-6">
	        <h1 class="display-5 fw-bold lh-1 mb-3">Module 2 - Cours de Développement avec Wordpress</h1>
	        <p class="lead">	
		<a href="<?= get_post_type_archive_link('post');?>">Voir les dernières actualités </a></p>
		<?php require('parts/taxonomy.php');?>
	      </div>
	    </div>
	  </div>
	  <h1><?php the_title(); ?></h1>
	  <p><?php the_content(); ?></p>
	<?php endwhile; ?>

	
	</div>

	<?php get_footer(); ?>