<?php
/**
*Template Name: Avis clients
* Template Post type: page, post 
*/
?>

	<?get_header()?>
	<body>
		<?php if(have_posts()):?>

			<?php while(have_posts()): the_post(); ?>
				<h1><?php the_title(); ?></h1>
				<p class="avis-client">Je suis un 
					<form>
					  <div class="form-group">
					    <select class="form-control" id="exampleFormControlSelect1">
					      <option id="constructeur">constructeur</option>
					      <option id="promoteur">promoteur</option>
					      <option id="agent_immobilier">agent immobilier</option>
					      <option id="courtier">courtier</option>
					      <option id="Immo_luxe">Immo de luxe</option>
					    </select>
					  </div>
					</form>, j'ai une note de 
					<form>
					  <div class="form-group">
					    <select class="form-control" id="exampleFormControlSelect1">
					      <option id="note4">4,5</option>
					      <option id="note5">5</option>
					    </select>
					  </div>
					</form>
					et j'ai actuellement
					<form>
					  <div class="form-group">
					    <select class="form-control" id="exampleFormControlSelect1">
					      <option id="10">10 avis </option>
					      <option id="20">20 avis </option>
					      <option id="30">30 avis </option>
					      <option id="40">40 avis </option>
					      <option id="50">50 avis </option>
						  <option id="60">60 avis</option>
						  <option id="70">70 avis</option>
						  <option id="80">80 avis</option>
						  <option id="90">90 avis</option>
						  <option id="100">100 avis</option>
						  <option id="110">110 avis</option>
					      <option id="120">120 avis</option>
					   	  <option id="130">130 avis</option>
						  <option id="140">140 avis</option>
						  <option id="150">150 avis</option>
						  <option id="160">160 avis</option>
						  <option id="170">170 avis</option>
					    </select>
					  </div>
					</form>



				</p>	
				<?php the_content(); ?>
			<?php endwhile; endif;?>

	<?get_footer()?>
