<?php
get_header();?>

<header class="container-fluid site-header">
		
	<div class="jumbotron" style="background-image: url('<?php header_image(); ?>');">
		<div class="row">
			<div class="col-sm-8">
				<h2>PESAN SNACK 5 MENIT SAJA</h2>
			</div>
			<div class="col-sm-3 form-home">
				<div class="col-sm-12 ">
					<h3>Pesan Snack Box</h3>
				</div>
				<div class="col-sm-10">
					<form method="post" action="<?php echo get_page_link( get_page_by_title( 'snack' )->ID ); ?>">
						<label><h4>Tanggal Pengiriman</h4></label>
						<input type="text" class="input-group date form_date form-control" data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd" placeholder="tanggal">  
						<label><h4>Jam Pengiriman</h4></label>
						<input type="text" class="input-group date form_time form-control" data-date="" data-date-format="hh:ii" data-link-field="dtp_input3" data-link-format="hh:ii" placeholder="jam"></input>
						<label><h4>Jumlah Box</h4></label>
						<input type="number" class="form-control" placeholder="jumlah" min="1"></input>
						<button type="submit" class="btn btn-primary">PILIH SNACK</button>
					</form>
				</div>
			</div>
		</div>
	</div>
		
</header>

<div class="container-fluid">
	<div class="row apa">
		<div class="col-sm-12">
			<h4>APASIH JAJANANPASAR.ID ITU?</h4>
		</div>
		<div class="col-sm-4 thumbnail-home">
			<img src="<?php echo get_template_directory_uri() . '/asset/images/objek.png'; ?>" width="350px" height="250px">
		</div>
		<div class="col-sm-5">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</div>
	</div>
</div>
<div class="container-fluid mengapa">
	<div class="row">
		<div class="col-sm-12">
			<h4>MENGAPA MEMESAN SNACK BOX DARI KAMI</h4>
		</div>
		<div class="col-sm-3">
			<div class="col-sm-12">
				<img src="<?php echo get_template_directory_uri() . '/asset/images/objek.png'; ?>" width="100%" height="100%">
			</div>
			<div class="col-sm-12">
				<h5>SUGGESTION SYSTEM</h5>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat.</p>
			</div>
		</div>
		<div class="col-sm-3">
			<div class="col-sm-12">
				<img src="<?php echo get_template_directory_uri() . '/asset/images/objek.png'; ?>" width="100%" height="100%">
			</div>
			<div class="col-sm-12">
				<h5>HALAL</h5>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat.</p>
			</div>
		</div>
		<div class="col-sm-3">
			<div class="col-sm-12">
				<img src="<?php echo get_template_directory_uri() . '/asset/images/objek.png'; ?>" width="100%" height="100%">
			</div>
			<div class="col-sm-12">
				<h5>HELP COMMUNITY</h5>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat.</p>
			</div>
		</div>
		<div class="col-sm-3">
			<div class="col-sm-12">
				<img src="<?php echo get_template_directory_uri() . '/asset/images/objek.png'; ?>" width="100%" height="100%">
			</div>
			<div class="col-sm-12">
				<h5>FRESH FOOD</h5>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat.</p>
			</div>
		</div>
	</div>
</div>


<?php
get_footer();

?>