	<?get_header()?>
	<body>
		<?php if(have_posts()):?>

			<?php while(have_posts()): the_post(); ?>
				<h1><?php the_title(); ?></h1>
				<?php if(get_post_meta(get_the_ID(), SponsoMetaBox::META_KEY, true ) ==='1'):?>
					<div class="alert alert-info">Cet article est sponsoris√© ! </div>
				<?php endif ?>
				<p>
					<img src="<?php the_post_thumbnail_url();?>" alt="" style="width: 100%;height: auto;">
				</p>
				<?php the_content(); ?>
			<?php endwhile; endif;?>
		<?php require('parts/taxonomy.php');?>
	<?get_footer()?>
