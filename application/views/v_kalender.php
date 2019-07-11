<title>Sejarah - Iluni Dm Unbor</title>

<?php
$this->load->view('template/header');
?>
<!-- End Site Header --> 
<!-- Start Nav Backed Header -->
<div class="nav-backed-header parallax" style="background-image:url(<?php echo base_url('assets/images/slide2.png') ?>);">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<ol class="breadcrumb">
					<li><a href="<?php echo base_url().'Home' ?>">Home</a></li>
					<li class="active">Kalender</li>
				</ol>
			</div>
		</div>
	</div>
</div>
<!-- End Nav Backed Header --> 
<!-- Start Page Header -->
<div class="page-header">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1>Kalender</h1>
			</div>
		</div>
	</div>
</div>
<!-- End Page Header --> 
<!-- Start Content -->
<div class="main" role="main">
	<div id="content" class="content full">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div id='calendar'></div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php
$this->load->view('template/footer');
?>
