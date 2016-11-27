<?php
	get_header(); 
?>
<div class="header-user">
	<h3><strong>DETAIL AKUN DAN RIWAYAT PEMESANAN</strong></h3>
</div>
<div class="container-fluid">
	<div>
		<table class="table table-history">
			<tr>
				<th class="border-kanan">Nama</th>
				<th class="border-kanan">Order</th>
				<th class="border-kanan" style="width: 15%;">Tanggal</th>
				<th class="border-kanan">Status Pembayaran</th>
				<th class="border-kanan" style="width: 20%;">Total Pembayaran</th>
				<th>Bukti Pembayaran</th>
			</tr>
			<tr>
				<td class="border-kanan">Mukidi</td>
				<td class="border-kanan">#1001</td>
				<td class="border-kanan">29 Agustus 2016</td>
				<td class="border-kanan">Lunas</td>
				<td class="border-kanan" style="text-align: justify; padding-left: 20px;">Rp. 100.000,-</td>
				<td><a href="#">Cek Disini</a></td>
			</tr>
			<tr>
				<td class="border-kanan">Megawati</td>
				<td class="border-kanan">#1002</td>
				<td class="border-kanan">29 Agustus 2016</td>
				<td class="border-kanan">Lunas</td>
				<td class="border-kanan" style="text-align: justify; padding-left: 20px;">Rp. 100.000.000,-</td>
				<td><a href="#">Cek Disini</a></td>
			</tr>
			<tr>
				<td class="border-kanan">Mukidi</td>
				<td class="border-kanan">#1003</td>
				<td class="border-kanan">30 Agustus 2016</td>
				<td class="border-kanan">Pending</td>
				<td class="border-kanan"> </td>
				<td><a href="#"></a></td>
			</tr>

		</table>
	</div>
</div

<?php 
	get_footer();

?>