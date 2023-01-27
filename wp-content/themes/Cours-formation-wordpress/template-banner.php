<?php
/**
*Template Name: Page avec bannière 
* Template Post type: page, post 
*/
?>

	<?get_header()?>
	<body>
		<?php if(have_posts()):?>

			<?php while(have_posts()): the_post(); ?>
				<h1><?php the_title(); ?></h1>
				<p>
					<img src="<?php the_post_thumbnail_url();?>" alt="" style="width: 100%;height: auto;">
				</p>
				<?php the_content(); ?>
			<?php endwhile; endif;?>

	<?get_footer()?>
