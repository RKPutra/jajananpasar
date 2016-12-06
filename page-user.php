<?php
	get_header(); 
?>
<div class="header-user">
	<h3><strong>SELAMAT DATANG MUKIDI</strong></h3>
</div>
<div class="container-fluid">
	<div class="row site-row">
		<div class="col-sm-2">
			<img src="<?php echo get_template_directory_uri() . '/asset/images/objek.png'; ?>" class="foto-user">
			<h4>MUKIDI</h4>
		</div>
		<div class="col-sm-5 site-info">
			<table>
				<tr>
					<td width="120px;"><p>Alamat</p></td>
					<td><p id="alamat">Jalan Raya Miring no 234 hanya mitos</p></td>
				</tr>
				<tr>
					<td><p>No Telpon</p></td>
					<td><p id="telpon">091238812731</p></td>
				</tr>
				<tr>
					<td><p>Email</p></td>
					<td><p id="email">mukidi.ganteng@gmail.com</p></td>
				</tr>
			</table>

		</div>
		
		<h5><a  href="#" class="material-icons">settings</a>Ganti</h5>
		
		<div class="col-sm-6 order">
			<h5>Riwayat Pemesanan</h5>
			<table style="width:45%; text-align: center;">
				<tr>
					<th>Order</th>
					<th>Tanggal Pemesanan</th>
				</tr>
				<tr>
					<td>#1001</td>
					<td>29 Agustus 2016</td>
				</tr>
				<tr>
					<td>#1024</td>
					<td>02 September 2016</td>
				</tr>
				<tr>
					<td>#1059</td>
					<td>08 September 2016</td>
				</tr>
			</table>
		</div>
	</div>
</div

<?php 
	get_footer();

?>