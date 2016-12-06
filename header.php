<!DOCTYPE html>
<html>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width">

	<!-- Le styles -->
	<link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">
	<title><?php bloginfo('name'); ?></title>
	<?php wp_enqueue_script("jquery"); ?>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<nav class="navbar navbar-light bg-faded">
	  <ul class="nav navbar-nav">
	    <li class="nav-item active">
	      <a class="nav-link" href="<?php echo home_url(); ?>">LOGO JAJANANPASAR.id</span></a>
	    </li>
	    <li class="nav-item">
	      <a class="nav-link" href="#">KUALITAS SNACK</a>
	    </li>
	    <li class="nav-item">
	      <a class="nav-link" href="#">PROMO</a>
	    </li>
	    <li class="nav-item">
	      <a class="nav-link" href="#">BERITA</a>
	    </li>
	    <li class="nav-item">
	      <a class="nav-link" href="#">HUBUNGI</a>
	    </li>
	    <li class="nav-item tombol-login">
	    	<form method="post" action="<?php echo get_page_link( get_page_by_title( 'user' )->ID ); ?>">
				<button class="btn btn-primary" type="submit">Masuk</button>
			</form>
	    </li>
	  </ul>
	</nav>
	
</body>
