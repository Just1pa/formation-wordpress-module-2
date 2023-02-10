<?php
/**
*Template Name: Distance Levensthein
*Template Post type: page, post 
*/
?>

	<?php get_header()?>
	<body>
		<?php if(have_posts()):?>

			<?php while(have_posts()): the_post(); ?>
				<h1 class="text-center">Calcul de la distance de Levenshtein</h1>
				<div id="formulaire">
					<textarea id="input" class="w-75" ></textarea>
				    <button id="calculate">Calculer</button>
				    <table id="result">
				      <thead>
				        <tr>
				          <th>Expression avant tiret</th>
				          <th>Expression après tiret</th>
				          <th>Distance de Levenshtein</th>
				        </tr>
				      </thead>
				      <tbody>
				      </tbody>
			    </table>
				</div>
				<?php the_content(); ?>
			<?php endwhile; endif;?>

	<?php get_footer()?>
