<?php
	get_header(); 
?>
<div class="header-user">
	<h3><strong>KONFIRMASI PEMBAYARAN</strong></h3>
	<h5>Isi data berikut untuk bukti pembayaran</h5>
</div>
<div class="container-fluid site-form-pembayaran">
	<form method="post">
		<div class="row input-pembayaran">
			<div class="col-sm-2">
				<label>Nama</label>
			</div>
			<div class="col-sm-8">
				<input type="text" class="form-control"></input>
			</div>
		</div>
		<div class="row input-pembayaran">
			<div class="col-sm-2">
				<label>No. Rekening</label>
			</div>
			<div class="col-sm-8">
				<input type="text" class="form-control"></input>
			</div>
		</div>
		<div class="row input-pembayaran">
			<div class="col-sm-2">
				<label>Nama Bank</label>
			</div>
			<div class="col-sm-8">
				<input type="text" class="form-control"></input>
			</div>
		</div>
		
		<div class="row input-pembayaran">
			<div class="col-sm-2">
				<label>Tgl. Kirim</label>
			</div>
			<div class="col-sm-8 ">
				<input type="text" class="input-group date form_date form-control" data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">				
			</div>
			
		</div>
		<div class="row input-pembayaran">
			<div class="col-sm-2">
				<label>Jam Kirim</label>
			</div>
			<div class="col-sm-5">
				<input type="text" class="input-group date form_time form-control" data-date="" data-date-format="hh:ii" data-link-field="dtp_input3" data-link-format="hh:ii"></input>
			</div>
			<div class="col-sm-2 wib">
				<label class="control-label">WIB</label>
			</div>
			
				
			
		</div>
		
		
		<input type="button" value="Proses Sekarang" class="btn btn-primary form-control button-pembayaran"></input>
	</form>
</div>

<?php 
	get_footer();

?>