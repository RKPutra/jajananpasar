<footer>
	
</footer>
<footer class="site-footer">
	<div class="row footer-nav">
		<div class="col-sm-2">
			<ul class="ul-footer">
				<li><a class="nav-link" href="<?php echo home_url(); ?>">Beranda</a></li>
				<li><a class="nav-link" href="#">Kualitas</a></li>
				<li><a class="nav-link" href="#">Promo</a></li>
				<li><a class="nav-link" href="#">Berita</a></li>
				<li><a class="nav-link" href="#">Hubungi</a></li>
			</ul>
		</div>
		<div class="col-sm-4">
			<ul class="ul-footer">
				<li><a class="nav-link" href="#">Tentang</a></li>
				<li><a class="nav-link" href="#">Syarat & Kondisi</a></li>
				<li><a class="nav-link" href="#">Area Pengiriman</a></li>
				<li><a class="nav-link" href="#">Pembayaran</a></li>
				<li><a class="nav-link" href="#">FAQ</a></li>
			</ul>
		</div>
		<div class="col-sm-3">
			<ul class="ul-footer">
				<li>Follow Kami</li>
				<li>
					<ul class="list-inline">
						<li><a href="<?php echo esc_url('www.facebook.com'); ?>" class="font1" target="_blank">f</a></li>
						<li><a href="<?php echo esc_url('www.twitter.com'); ?>" class="font1" target="_blank">l</a></li>
						<li><a href="<?php echo esc_url('www.instagram.com'); ?>" class="font2" target="_blank">i</a></li>
					</ul>
				</li>
			</ul>
		</div>
		<div class="col-sm-3">
			<ul class="ul-footer">
				<li><strong>Info Kontak</strong></li>
				<li>BBM : 457AW89</li>
				<li>WA : +62-7871823712</li>
				<li>Telp : +62-1237823412</li>
				<li>Email : info@jajananpasar.id</li>				
		</div>
		<br>
		<div class="col-sm-12">
			<p>Copyright&copy;2016 Jajananpasar.id. All Rights Reserved.</p>
		</div>
	</div>
	
</footer>

<?php  wp_footer(); ?>
<script>
  $( function() {
    $( "#slider" ).slider({
      range: "max",
      min: 1000,
      max: 10000,
      value: 10000,
      slide: function( event, ui ) {
        $( "#amount" ).val( ui.value );
      }
    });
    $( "#amount" ).val( $( "#slider" ).slider( "value" ) );
  } );
  </script>
  <script type="text/javascript">
  $('.form_date').datetimepicker({
        weekStart: 1,
        todayBtn:  1,
		autoclose: 1,
		todayHighlight: 1,
		startView: 2,
		minView: 2,
		forceParse: 0
    });
  $('.form_time').datetimepicker({
        language:  'fr',
        weekStart: 1,
        todayBtn:  1,
		autoclose: 1,
		todayHighlight: 1,
		startView: 1,
		minView: 0,
		maxView: 1,
		forceParse: 0
    });
</script>

</body>
</html>
