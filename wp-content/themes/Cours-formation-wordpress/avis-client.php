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
				<h1 class="text-center">Simulateur: Ma note va t'elle baisser en dessous de 4 ?</h1>
				<div class="px-4 py-2 my-5 text-center">
				<p class="explication">Estimation du nombre de mois d'<span class="mois-avis">avis négatifs consécutifs </span>pour constater une note qui descend en dessous de 4, par verticale ! * </p>
				<div class="px-4 pt-4 mt-3 text-center">	
				
				<div class="px-4 py-5 my-5 text-center" id="formulaire">
				<span class="avis-client">Je suis un </span>
				<form action="" method="post" id="avis-client" >
					  <div class="form-group">
					    <select class="form-control" id="metier">
					      <option id="constructeur">constructeur</option>
					      <option id="promoteur">promoteur</option>
					      <option id="agent_immobilier">agent immobilier</option>
					      <option id="courtier">courtier</option>
					      <option id="Immo_luxe">Immo de luxe</option>
					    </select>
					  </div>
					<span class="avis-client">, j'ai une note de </span>
					  <div class="form-group">
					    <select class="form-control" id="note">
					      <option id="4.5">4,5</option>
					      <option id="5">5</option>
					    </select>
					  </div>
					<span class="avis-client">et j'ai actuellement</span>
					
					  <div class="form-group">
					    <select class="form-control" id="nombre_avis">
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
					<input type="submit" value="Simulation" name="envoyer">
					</form>
					</div>
					<p>*Si nous sélectionnons les bons partenaires et les clients les plus engagés, il y a <strong>peu de risques que quelques notes négatives pénalisent rapidement la note moyenne !</strong> *(Source: données de collectes moyennes par verticales constatées en 2022) </p>

				</div>
					<div class="px-4 py-2 my-5 text-center" id="resultat">
						
					</div>
				<?php the_content(); ?>
			<?php endwhile; endif;?>

	<?get_footer()?>
