<?php
	get_header(); 
?>
<div class="header-user">
	<h3><strong>DETAIL AKUN DAN RIWAYAT PEMESANAN</strong></h3>
	<h5>cek ulang pesanan snack anda dan lengkapi data yang dibutuhkan untuk memproses pesanan.</h5>
</div>
<div class="container">
	<div class="row row-checkout">
		<div class="col-sm-8">
			<div class="container-fluid">
				<div class="row">
					<div class="col-sm-6">
						<h5>Sudah terdaftar? Silahkan masuk.</h5>
						<p>Data akan terisi otomatis sesuai pesanan sebelumnya.</p>
					</div>
					<div class="col-sm-1">
						<form method="post" action="<?php echo get_page_link( get_page_by_title( 'user' )->ID ); ?>">
							<button class="btn btn-primary" type="submit">Masuk</button>
						</form>
					</div>
				</div>

				<form method="post" action="<?php echo get_page_link( get_page_by_title( 'konfirmasi pembayaran' )->ID ); ?>">
				<div class="form-group">
					<h3>Data Pemesan</h3>
					<p>Isiskan data lengkap pemesan snack box secara benar</p>
				</div>
				<div class="form-group row">
			      <label for="inputNama" class="col-sm-2 col-form-label">Nama *</label>
			      <div class="col-sm-10">
			        <input type="text" class="form-control form-checkout" id="inputNama">
			      </div>
			    </div>
			    <div class="form-group row">
			      <label for="inputEmail" class="col-sm-2 col-form-label">Email *</label>
			      <div class="col-sm-10">
			        <input type="email" class="form-control form-checkout" id="inputEmail">
			      </div>
			    </div>
			    <div class="form-group row">
			      <label for="inputNoTelp" class="col-sm-2 col-form-label">No. Telp *</label>
			      <div class="col-sm-10">
			        <input type="text" class="form-control form-checkout" id="inputNoTelp">
			      </div>
			    </div>
			    
			    <div class="form-group row">
			      <div class="col-sm-10">
			        <div class="form-check">
				      <div class="col-sm-12">
				      	<label class="form-check-label">
				            <input class="form-check-input" type="checkbox"> Buat akun?
				          </label>
				      </div>
			          <div class="col-sm-9">
			          	<p>Masukkan password anda untuk mendaftar akun baru. Jika anda telah terdaftar, silahkan masuk melalui pilihan di bagian atas halaman ini.</p>
			          </div>
			        </div>
			      </div>
			    </div>

			    <div class="form-group row">
			      <label for="inputPassword3" class="col-sm-2 col-form-label">Password *</label>
			      <div class="col-sm-10">
			        <input type="password" class="form-control form-checkout" id="inputPassword">
			      </div>
			    </div>
			    <div class="form-group row">
			      <label for="inputKonfirmasiPassword" class="col-sm-2 col-form-label">Konfirmasi Password *</label>
			      <div class="col-sm-10">
			        <input type="password" class="form-control form-checkout" id="inputKonfirmasiPassword">
			      </div>
			    </div>

			    <div class="form-group">
					<h3>Data Pengiriman</h3>
					<p>Isiskan alamat pengiriman dan catatan tambahan jika ada.</p>
				</div>

			    <div class="form-group row">
			      <label for="inputAlamat" class="col-sm-2 col-form-label">Alamat *</label>
			      <div class="col-sm-10">
			        <textarea class="form-control form-checkout" id="inputAlamat"></textarea>
			      </div>
			    </div>
			    <div class="form-group row">
			      <label for="inputCatatan" class="col-sm-2 col-form-label">Catatan</label>
			      <div class="col-sm-10">
			        <textarea class="form-control form-checkout" id="inputCatatan"></textarea>
			      </div>
			    </div>

			    <div class="form-group">
					<h3>Metode Pembayaran</h3>
					<p>Silahkan pilih salah satu metode pembayaran yang tersedia di bawah ini.</p>
				</div>

			    <div class="form-group">
			    
				    <select class="form-control form-checkout" id="pembayaran">
				      <option>Transfer Bank</option>
				    </select>
			  	</div>

			  	<div class="col-sm-8 metode-pembayaran">
			  		<p>
			  			Silahkan pilih salah satu metode pembayaran yang tersedia dibawah ini:<br>
			  			<ul>
			  				<li><strong>Bank Mandiri a/n PT. Jajan Sehat Nusantara 137.00.1199888.3</strong></li>
			  				<li><strong>Bank BCA a/n Nasihun Amien 0373 468464</strong></li>
			  			</ul>
			  			Lalu kirimkan bukti transfer ke <strong>info@jajananpasar.id</strong> atau gunakan form konfirmasi pembayaran yang telah kami sediakan <a href="<?php echo get_page_link( get_page_by_title( 'konfirmasi pembayaran' )->ID ); ?>"><strong>disini</strong></a>. 
			  		</p>
			  	</div>

			    <div class="form-group row">
			      <div class="offset-sm-10 col-sm-9">
			        <button type="submit" class="btn btn-primary">Proses Sekarang</button>
			      </div>
			    </div>
			  </form>
			</div>
		</div>
		<div class="col-sm-3 pesanan">
			<div class="row">
				<div class="col-sm-12">
					<h4><strong>Detail Pesanan</strong></h4>				
				</div>
				<div class="col-sm-12">
					<div class="col-sm-9">
						<h5>Isi Snack Box</h5>
					</div>
					<div class="col-sm-3">
						<h5><a href="#">Edit</a></h5>
					</div>				
				</div>
				<div class="col-sm-12">
					<div class="col-sm-3">
						<img src="<?php echo get_template_directory_uri() . '/asset/images//lemper.jpg'; ?> " class="img-circle" width="50px" height="50px">
					</div>
					<div class="col-sm-5">
						<h5>Lemper Ayam</h5>
					</div>
					<div class="col-sm-4">
						<h5 class="biaya">Rp 20.000</h5>
					</div>
				</div>
				<div class="col-sm-12">
					<div class="col-sm-3">
						<img src="<?php echo get_template_directory_uri() . '/asset/images//lemper.jpg'; ?> " class="img-circle" width="50px" height="50px">
					</div>
					<div class="col-sm-5">
						<h5>Lemper Ayam</h5>
					</div>
					<div class="col-sm-4">
						<h5 class="biaya">Rp 2.000</h5>
					</div>
				</div>

				<div class="col-sm-12">
					<div class="col-sm-11 site-border"></div>
				</div>

				<div class="rincian-biaya">
					<div class="col-sm-12">
						<div class="col-sm-7">
							<h5>Harga Per Box</h5>
						</div>
						<div class="col-sm-5">
							<h5 class="biaya">Rp 17.000</h5>
						</div>				
					</div>
					<div class="col-sm-12">
						<div class="col-sm-7">
							<h5>Jumlah Box</h5>
						</div>
						<div class="col-sm-5">
							<h5 class="biaya">10</h5>
						</div>				
					</div>
					<div class="col-sm-12">
						<div class="col-sm-7">
							<h5>Subtotal</h5>
						</div>
						<div class="col-sm-5">
							<h5 class="biaya">Rp 170.000</h5>
						</div>				
					</div>
					<div class="col-sm-12">
						<div class="col-sm-7">
							<h5>Biaya Kirim</h5>
						</div>
						<div class="col-sm-5">
							<h5 class="biaya">Rp 0</h5>
						</div>				
					</div>
				</div>

				<div class="col-sm-12">
					<div class="col-sm-11 site-border"></div>
				</div>

				<div class="col-sm-12">
					<div class="col-sm-7">
						<h5><strong>Biaya Total</strong></h5>
					</div>
					<div class="col-sm-5">
						<h5 class="biaya"><strong>Rp 170.000</strong></h5>
					</div>				
				</div>
			</div>
		</div>
	</div>
</div>

<?php 
	get_footer();

?>