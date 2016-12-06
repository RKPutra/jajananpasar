<?php
	get_header(); 
?>
<div class="header-user">
	<h3><b>PILIH MINUMAN</b></h3>
	<h5>Pilih minuman yang tersedia dibawah ini atau lanjutkan ke bagian pembayaran</h5>
</div>
<div class="container-fluid">
	<div class="row site-row">
		<div class="col-sm-8 site-overflow">
			<div class="snack">
				<div class="col-sm-12">
					<h4>Air Mineral</h4>
				</div>
				<div class="col-sm-3">
					<img src="<?php echo get_template_directory_uri() . '/asset/images/lemper.jpg'; ?> " class="img-circle" width="100px" height="100px">
					<h5><b>Club Gelas</b></h5>
					<p>Rp 1.500</p>
					<input type="button" name="pilih1" value="Pilih snack" class="btn btn-primary"></input>
				</div>
				<div class="col-sm-3">
					<img src="<?php echo get_template_directory_uri() . '/asset/images/lemper.jpg'; ?> " class="img-circle" width="100px" height="100px">
					<h5><b>Aqua Gelas</b></h5>
					<p>Rp 1.500</p>
					<input type="button" name="pilih1" value="Pilih snack" class="btn btn-primary"></input>
				</div>
				<div class="col-sm-3">
					<img src="<?php echo get_template_directory_uri() . '/asset/images/lemper.jpg'; ?> " class="img-circle" width="100px" height="100px">
					<h5><b>Aquaria Gelas</b></h5>
					<p>Rp 1.500</p>
					<input type="button" name="pilih1" value="Pilih snack" class="btn btn-primary"></input>
				</div>
				
			</div>
			<div class="snack">
				<div class="col-sm-12">
					<h4>Lain-lain</h4>
				</div>
				<div class="col-sm-3">
					<img src="<?php echo get_template_directory_uri() . '/asset/images/lemper.jpg'; ?> " class="img-circle" width="100px" height="100px">
					<h5><b>The Kotak</b></h5>
					<p>Rp 1.500</p>
					<input type="button" name="pilih1" value="Pilih snack" class="btn btn-primary"></input>
				</div>
				<div class="col-sm-3">
					<img src="<?php echo get_template_directory_uri() . '/asset/images/lemper.jpg'; ?> " class="img-circle" width="100px" height="100px">
					<h5><b>The Sostro Gelas</b></h5>
					<p>Rp 1.500</p>
					<input type="button" name="pilih1" value="Pilih snack" class="btn btn-primary"></input>
				</div>
				<div class="col-sm-3">
					<img src="<?php echo get_template_directory_uri() . '/asset/images/lemper.jpg'; ?> " class="img-circle" width="100px" height="100px">
					<h5><b>Nescafe Kotak</b></h5>
					<p>Rp 1.500</p>
					<input type="button" name="pilih1" value="Pilih snack" class="btn btn-primary"></input>
				</div>
				<div class="col-sm-3">
					<img src="<?php echo get_template_directory_uri() . '/asset/images/lemper.jpg'; ?> " class="img-circle" width="100px" height="100px">
					<h5><b>Bandrek Gelas</b></h5>
					<p>Rp 1.500</p>
					<input type="button" name="pilih1" value="Pilih snack" class="btn btn-primary"></input>
				</div>
				<div class="col-sm-3">
					<img src="<?php echo get_template_directory_uri() . '/asset/images/lemper.jpg'; ?> " class="img-circle" width="100px" height="100px">
					<h5><b>Bajigur Gelas</b></h5>
					<p>Rp 1.500</p>
					<input type="button" name="pilih1" value="Pilih snack" class="btn btn-primary"></input>
				</div>
				
			</div>
						
		</div>
		<div class="col-sm-4">
			<div class="col-sm-12">
				<h4><b>Filter Harga Snack</b></h4>
			</div>
			<div class="col-sm-10">
				<div id="slider"></div>
			</div>
			<div class="col-sm-7">
				<p>Harga: Rp 1.000 - Rp 10.000</p>
			</div>
			<div class="col-sm-3">
				<input type="button" value="Filter" class="btn btn-primary filter"></input>
			</div>
			<form class="daftar-snack" method="post" action="<?php echo get_page_link( get_page_by_title( 'checkout' )->ID ); ?>">
				<div class="col-sm-12">
					<h4><b>Snack Box Anda</b></h4>
				</div>
				<div class="col-sm-9">
					<p>
						Pengiriman : 01-05-2016. 06:00 WIB<br>Jumlah box : 10
					</p>
				</div>
				<div class="col-sm-3">
					<a href="#">Edit</a>
				</div>
				<div class="col-sm-5">
					<p><b>Harga per Box</b></p>
				</div>
				<div class="col-sm-7">
					<p><b>: Rp 17.000</b></p>
				</div>
				<div class="col-sm-5">
					<p><b>Subtotal</b></p>
				</div>
				<div class="col-sm-7">
					<p><b>: Rp 170.000</b></p>
				</div>
				<div class="col-sm-12">
					<div class="col-sm-3">
						<img src="<?php echo get_template_directory_uri() . '/asset/images/lemper.jpg'; ?> " class="img-circle" width="50px" height="50px">
					</div>
					<div class="col-sm-7">
						<h5>Lemper Ayam</h5>
					</div>
					<div class="col-sm-2">
						<span class="glyphicon glyphicon-ok form-control-feedback"></span>
					</div>
				</div>
				<div class="col-sm-12">
					<div class="col-sm-3">
						<img src="<?php echo get_template_directory_uri() . '/asset/images/lemper.jpg'; ?> " class="img-circle" width="50px" height="50px">
					</div>
					<div class="col-sm-7">
						<h5>Lemper Ayam</h5>
					</div>
					<div class="col-sm-2">
						<span class="glyphicon glyphicon-ok form-control-feedback"></span>
					</div>
				</div>
				<div class="col-sm-12">
					<div class="col-sm-3">
						<img src="<?php echo get_template_directory_uri() . '/asset/images/lemper.jpg'; ?> " class="img-circle" width="50px" height="50px">
					</div>
					<div class="col-sm-7">
						<h5>Lemper Ayam</h5>
					</div>
					<div class="col-sm-2">
						<span class="glyphicon glyphicon-ok form-control-feedback"></span>
					</div>
				</div>
				<div class="col-sm-12">
					<div class="col-sm-3">
						<img src="<?php echo get_template_directory_uri() . '/asset/images/lemper.jpg'; ?> " class="img-circle" width="50px" height="50px">
					</div>
					<div class="col-sm-7">
						<h5>Aqua Gelas</h5>
					</div>
					<div class="col-sm-2">
						<input type="button" value="X"></input>
					</div>
				</div>
				
				<div class="col-sm-11">
					<button type="submit" class="btn btn-primary">Selesai Pilih Minuman</button>
				</div>
			</form>
		</div>
	</div>
</div>

<?php 
	get_footer();

?>