<title>Galeri - Iluni Dm Unbor</title>

<?php
$this->load->view('template/header');
?>
<!-- Start Nav Backed Header -->
<div class="nav-backed-header parallax" style="background-image:url(<?php echo base_url('assets/images/slide2.png') ?>);">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<ol class="breadcrumb">
					<li><a href="<?php echo base_url().'Home' ?>">Home</a></li>
					<li class="active">Galeri</li>
				</ol>
			</div>
		</div>
	</div>
</div>
<!-- End Nav Backed Header --> 
<!-- Start Content -->
   <div class="main" role="main">
    <div id="content" class="content full">
      <div class="container">
        <div class="row">
          <ul class="isotope-grid" data-sort-id="gallery">
            <li class="col-md-4 col-sm-4 grid-item post format-image">
              <div class="grid-item-inner"> <a href="<?php echo base_url('assets/uploads/IMG-20180106-WA0007.png') ?>" data-rel="prettyPhoto" class="media-box"> <img src="<?php echo base_url('assets/uploads/IMG-20180106-WA0007.png') ?>" alt=""> </a> </div>
            </li>
            <li class="col-md-4 col-sm-4 grid-item post format-image">
              <div class="grid-item-inner"> <a href="<?php echo base_url('assets/uploads/IMG-20180106-WA0008.png') ?>" data-rel="prettyPhoto" class="media-box"> <img src="<?php echo base_url('assets/uploads/IMG-20180106-WA0008.png') ?>" alt=""> </a> </div>
            </li>
            <li class="col-md-4 col-sm-4 grid-item post format-image">
              <div class="grid-item-inner"> <a href="<?php echo base_url('assets/uploads/IMG-20180106-WA0009.png') ?>" data-rel="prettyPhoto" class="media-box"> <img src="<?php echo base_url('assets/uploads/IMG-20180106-WA0009.png') ?>" alt=""> </a> </div>
            </li>
            
          </ul>
        </div>
        <div class="text-align-center">
          <ul class="pagination">
            <li><a href="#"><i class="fa fa-chevron-left"></i></a></li>
            <li class="active"><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li><a href="#"><i class="fa fa-chevron-right"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
<?php
$this->load->view('template/footer');
?>
</div>