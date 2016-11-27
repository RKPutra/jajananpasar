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
			<div class="col-sm-8 form-inline">
				<div class="form-group">
					<label>H</label>
				    <select class="form-control">
				    	<option value="1">01</option>
				    	<option value="2">02</option>
				    	<option value="3">03</option>
				    </select>
				</div>
				<div class="form-group">
				    <label>B</label>
				    <select class="form-control">
				    	<option value="1">01</option>
				    	<option value="2">02</option>
				    	<option value="3">03</option>
				    </select>
				</div>
				<div class="form-group">
				    <label>T</label>
				    <select class="form-control">
				    	<option value="2016">2016</option>
				    	<option value="2017">2017</option>
				    	<option value="2018">2018</option>
				    </select>
				</div>
			</div>
			
		</div>
		<div class="row input-pembayaran">
			<div class="col-sm-2">
				<label>Jam Kirim</label>
			</div>
			<div class="col-sm-5">
				<input type="time" id="jam" class="form-control"></input>
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