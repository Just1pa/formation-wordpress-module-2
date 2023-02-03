  <!DOCTYPE html>
  <html>
  <head>
  	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<?php wp_head() ?>
  </head>
  <body>
<?php if(is_page_template('avis-client.php'))
 {

?><div class="container" style="padding-top:30px;"><?php

}
else {?>

<div class="container">
      <nav class="navbar navbar-expand-lg navbar-light bg-light mb-4">
    <a class="navbar-brand" href="/wordpress/"><img src="https://justinpageaud.alwaysdata.net/img/logo.png" alt="logo" class="logo"></a>
    <!--<p><?bloginfo( 'description' )?></p>-->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">

      <?php wp_nav_menu( array(
      'theme_location'  => 'header',
      'container'       => 'false',
      'menu_class'      => 'navbar-nav mr-auto',
    ) );?>
      <?php get_search_form() ?>
    </div>
  </nav>

<?php } 
?>

  	



