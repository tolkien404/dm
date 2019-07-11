<title>Acara - Iluni Dm Unbor</title>
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
					<li class="active">Acara</li>
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
				<h1>Acara</h1>
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
            <!-- Events Listing -->
            <div class="listing events-listing">
              <header class="listing-header">
                <div class="row">
                  <div class="col-md-6 col-sm-6">
                    <h3>Semua Acara</h3>
                  </div>
                </div>
              </header>
              <section class="listing-cont">
                <ul>
                  <li class="item event-item">
                    <div class="event-date"> <span class="date">07</span> <span class="month">April</span> </div>
                    <div class="event-detail">
                      <h4><a href="<?php echo base_url().'Acara/detail' ?>">Reuni Akbar Iluni DM UNBOR</a></h4>
                      <span class="event-dayntime meta-data">Sabtu | 09:00 AM</span> </div>
                    <div class="to-event-url">
                      <div><a href="<?php echo base_url().'Acara/detail' ?>" class="btn btn-default btn-sm">Details</a></div>
                    </div>
                  </li>
                </ul>
              </section>
            </div>
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
  </div>
  <?php
$this->load->view('template/footer');
?>