<!DOCTYPE HTML>
<html class="no-js">
<head>
<!-- Basic Page Needs
	================================================== -->
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="">
<!-- Mobile Specific Metas
	================================================== -->
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
	<meta name="format-detection" content="telephone=no">
	<link rel="shortcut icon" href="<?php echo base_url('assets/images/favicon.ico') ?>">
<!-- CSS
	================================================== -->
	<link href="<?php echo base_url('assets/css/bootstrap.css') ?>" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url('assets/plugins/mediaelement/mediaelementplayer.css') ?>" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url('assets/css/style.css') ?>" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url('assets/plugins/prettyphoto/css/prettyPhoto.css') ?>" rel="stylesheet" type="text/css">

	<link href="<?php echo base_url('assets/plugins/fullcalendar/fullcalendar.css') ?>" rel="stylesheet">
	<link href="<?php echo base_url('assets/plugins/fullcalendar/fullcalendar.print.css') ?>" rel="stylesheet" media="print">
	<!--[if lte IE 8]><link rel="stylesheet" type="text/css" href="css/ie8.css" media="screen" /><![endif]-->
	<!-- Color Style -->
	<link href="<?php echo base_url('assets/colors/color1.css') ?>" rel="stylesheet" type="text/css"> 
	<link href="<?php echo base_url('assets/css/custom.css') ?>" rel="stylesheet" type="text/css">
<!-- SCRIPTS
	================================================== -->
	<script src="<?php echo base_url('assets/js/modernizr.js') ?>"></script><!-- Modernizr -->
</head>
<body>
<!--[if lt IE 7]>
	<p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
<![endif]-->
<div class="body"> 
	<!-- Start Site Header -->
	<header class="site-header">
		<div class="topbar">
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-sm-6 col-xs-8">
						<h1 class="logo"> <a href="<?php echo base_url().'Home' ?>"><img src="<?php echo base_url('assets/images/logo.png') ?>" alt="Logo"></a> </h1>
					</div>
					<div class="col-md-8 col-sm-6 col-xs-4">
						<ul class="top-navigation hidden-sm hidden-xs">
							<li><a href="#">Tentang Kami</a></li>
							<li><a href="<?php echo base_url().'Kalender' ?>">Kalender</a></li>
							<li><a href="<?php echo base_url().'Users/login' ?>">Login</a></li>
						</ul>
						<a href="#" class="visible-sm visible-xs menu-toggle"><i class="fa fa-bars"></i></a></div>
					</div>
				</div>
			</div>
			<div class="main-menu-wrapper">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<nav class="navigation">
								<ul class="sf-menu">
									<li><a href="<?php echo base_url().'Home' ?>">Home</a>
									</li>
									<li><a href="#">Profil</a>
										<ul class="dropdown">
											<li><a href="<?php echo base_url().'Profil/sejarah' ?>">Sejarah</a></li>
											<li><a href="<?php echo base_url().'Profil/visimisi' ?>">Visi Dan Misi</a></li>
											<li><a href="<?php echo base_url().'Profil/adart' ?>">AD & ART</a></li>
											<li><a href="<?php echo base_url().'Profil/peraturan' ?>">Peraturan Organisasi</a></li>
											<li><a href="<?php echo base_url().'Profil/programkerja' ?>">Program Kerja</a></li>
											<li><a href="<?php echo base_url().'Profil/kepengurusan' ?>">Kepengurusan</a></li>
											<li><a href="#">Laporan Keuangan Organisasi</a></li>
										</ul>
									</li>
									<li class="megamenu"><a href="#">Agenda</a>
										<ul class="dropdown">
											<li>
												<div class="megamenu-container container">
													<div class="row">
														<div class="col-md-3 hidden-sm hidden-xs"> <span class="megamenu-sub-title"><i class="fa fa-bell"></i> Kami</span>
															<iframe width="200" height="150" src="http://player.vimeo.com/video/250596065?title=0&amp;byline=0&amp;color=007F7B"></iframe>
														</div>
														<div class="col-md-3 hidden-sm hidden-xs"> <span class="megamenu-sub-title"><i class=""></i> &nbsp</span>
															<iframe width="200" height="150" src="http://player.vimeo.com/video/250596065?title=0&amp;byline=0&amp;color=007F7B"></iframe>
														</div>
														<div class="col-md-3 hidden-sm hidden-xs"> <span class="megamenu-sub-title"><i class=""></i> &nbsp</span>
															<iframe width="200" height="150" src="http://player.vimeo.com/video/250596065?title=0&amp;byline=0&amp;color=007F7B"></iframe>
														</div>
														
														<div class="col-md-3"> <span class="megamenu-sub-title"><i class="fa fa-clock-o"></i> Acara Akan Datang</span>
															<ul class="sub-menu">
																<li><a href="#">Reuni Akbar Iluni</a> <span class="meta-data">Sabtu | 07:00 AM</span> </li>
															</ul>
														</div>
													</div>
												</div>
											</li>
										</ul>
									</li>
									<li><a href="<?php echo base_url().'Berita/index' ?>">Berita</a>
									</li>
									<li><a href="<?php echo base_url().'Galeri' ?>">Galery</a>
									</li>
									<li><a href="#">Kiprah Alumni</a>
									</li>
									<li><a href="#">Tokoh Inspiratif</a>
										<ul class="dropdown">
											<li><a href="#">Berita</a></li>
											<li><a href="#">Foto</a></li>
										</ul>
									</li>
									<li><a href="<?php echo base_url().'Kontak' ?>">Kontak</a>
									</li>
								</ul>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</header>