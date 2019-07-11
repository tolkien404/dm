<!-- Start Footer -->
<footer class="site-footer">
	<div class="container">
		<div class="row"> 
			<!-- Start Footer Widgets -->
			<div class="col-md-4 col-sm-4 widget footer-widget">
				<h4 class="footer-widget-title">Simbol Kepemimpinan</h4>
				<img width="128px" src="<?php echo base_url('assets/images/logodm.png') ?>" alt="Logo">
				<div class="spacer-20"></div>
				<p>Golden Rule,
					What is leader?,
					A leader is one who,
					Knows the way,
					Goes the way,
					And shows the way,
					What is today?,
					To be a big challange,
					To lead or be led,
					What will you be a leader,
				What will you all be a leaders</p>
			</div>
			<div class="col-md-4 col-sm-4 widget footer-widget">
				<h4 class="footer-widget-title">Blogroll</h4>
				<ul>
					<li><a href="#">Tentang Kami</a></li>
					<li><a href="<?php echo base_url().'Kepengurusan' ?>">Pengurus</a></li>

				</ul>
			</div>
			<div class="col-md-4 col-sm-4 widget footer-widget">
				<h4 class="footer-widget-title">Contact Us</h4>
				<div class="row">
					<ul>
						<li class="clearfix">
							<div class="col-lg-2 col-xs-2 col-sm-2 col-md-2"><img width="100%" class="images" src="<?php echo base_url('assets/images/icon/contact.png') ?>"></div>
							<div class="col-lg-10 col-xs-10 col-sm-10 col-md-10" >Jacky : 081299408200<br> Reny Fauziah : 085658505002
							</div>
						</li>
						<li class="clearfix">
							<div class="col-lg-2 col-xs-2 col-sm-2 col-md-2"><img width="100%" class="images" src="<?php echo base_url('assets/images/icon/email.png') ?>"></div>
							<div class="col-lg-10 col-xs-10 col-sm-10 col-md-10" >zack.woles01@gmail.com
							</div>
						</li>
						<li class="clearfix">
							<div class="col-lg-2 col-xs-2 col-sm-2 col-md-2"><img class="images" src="<?php echo base_url('assets/images/icon/location.png') ?>"></div>
							<div class="col-lg-10 col-xs-10 col-sm-10 col-md-10" >Sekretariat Senat Mahasiswa Fakultas Ekonomi Universitas Borobudur, 
								Kampus Borobudur Gedung A, Jakarta Timur, Jakarta.
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</footer>
<footer class="site-footer-bottom">
	<div class="container">
		<div class="row">
			<div class="copyrights-col-left col-md-6 col-sm-6">
				<p>&copy; 2018 Diklat Manargasi. All Rights Reserved</p>
			</div>
			<div class="copyrights-col-right col-md-6 col-sm-6">
				<div class="social-icons"> <a href="https://www.facebook.com/ilunidmunbor/" target="_blank"><i class="fa fa-facebook"></i></a> <a href="https://twitter.com/ilunidmunbor" target="_blank"><i class="fa fa-twitter"></i></a> <a href="https://www.instagram.com/ilunidmunbor/" target="_blank"><i class="fa fa-instagram"></i></a> <a href="https://plus.google.com/" target="_blank"><i class="fa fa-google-plus"></i></a> <a href="http://www.youtube.com/" target="_blank"><i class="fa fa-youtube"></i></a> <a href="#"><i class="fa fa-rss"></i></a> </div>
			</div>
		</div>
	</div>
</footer>
<!-- End Footer --> 
<a id="back-to-top"><i class="fa fa-angle-double-up"></i></a> </div>
<script src='<?php echo base_url('assets/plugins/fullcalendar/lib/moment.min.js') ?>'></script>
<script src="<?php echo base_url('assets/js/jquery-2.0.0.min.js') ?>"></script> <!-- Jquery Library Call --> 
<script src="<?php echo base_url('assets/plugins/prettyphoto/js/prettyphoto.js') ?>"></script> <!-- PrettyPhoto Plugin --> 
<script src="<?php echo base_url('assets/js/helper-plugins.js') ?>"></script> <!-- Plugins --> 
<script src="<?php echo base_url('assets/js/bootstrap.js') ?>"></script> <!-- UI --> 
<script src="<?php echo base_url('assets/js/waypoints.js') ?>"></script> <!-- Waypoints --> 
<script src="<?php echo base_url('assets/plugins/mediaelement/mediaelement-and-player.min.js') ?>"></script> <!-- MediaElements --> 
<script src="<?php echo base_url('assets/js/init.js') ?>"></script> <!-- All Scripts --> 
<script src="<?php echo base_url('assets/plugins/flexslider/js/jquery.flexslider.js') ?>"></script> <!-- FlexSlider --> 
<script src="<?php echo base_url('assets/plugins/countdown/js/jquery.countdown.min.js') ?>"></script> <!-- Jquery Timer -->
<script src="<?php echo base_url('assets/plugins/fullcalendar/jquery-ui.custom.min.js') ?>"></script>
<script src="<?php echo base_url('assets/plugins/fullcalendar/fullcalendar.min.js') ?>"></script>
<script>

	$(document).ready(function() {
	
		$('#calendar').fullCalendar({
			defaultDate: '2018-04-07',
			editable: true,
			eventLimit: true, // allow "more" link when too many events
			events: [
				{
					title: 'Sambutan',
					start: '2018-04-07T09:00:00',
					end: '2018-04-07T09:55:00'
				},
				{
					title: 'Doa',
					start: '2018-04-07T09:55:00'
				},
				{
					title: 'Pemutaran Video',
					start: '2018-04-07T10:00:00'
				},
				{
					title: 'kesan dan pesan',
					start: '2018-04-07T10:30:00'
				},
				{
					title: 'Isoma',
					start: '2018-04-07T12:00:00'
				},
				{
					title: 'Talkshow',
					start: '2018-04-07T13:00:00'
				},
				{
					title: 'Games',
					start: '2018-04-07T14:30:00'
				},
				{
					title: 'Coffe Break',
					start: '2018-04-07T15:30:00'
				},
				{
					title: 'Doorprize',
					start: '2018-04-07T16:00:00'
				},
				{
					title: 'Penutupan',
					start: '2018-04-07T16:30:00'
				},
				{
					title: 'Jalan Jalan Yey',
					url: 'http://google.com/',
					start: '2018-04-13'
				}
			]
		});
		
	});

</script>
</body>
</html>
