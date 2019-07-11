<title>Kontak Kami - Iluni Dm Unbor</title>

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
          <li class="active">Kontak</li>
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
        <h1>Kontak Kami</h1>
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
          <header class="single-post-header clearfix">
            <h2 class="post-title">Peta Lokasi</h2>
          </header>
          <div class="post-content">
            <div id="gmap">
              <iframe src="https://maps.google.com/?ie=UTF8&amp;ll=-6.2439709,106.8980035&amp;spn=0.043846,0.077162&amp;t=m&amp;z=16&amp;output=embed"></iframe>
            </div>


            <div class="row">
              <form method="post" id="contactform" name="contactform" class="contact-form" action="mail/contact.php">
                <div class="col-md-6 margin-15">
                  <div class="form-group">
                    <input type="text" id="name" name="name"  class="form-control input-lg" placeholder="Name*">
                  </div>
                  <div class="form-group">
                    <input type="email" id="email" name="email"  class="form-control input-lg" placeholder="Email*">
                  </div>
                  <div class="form-group">
                    <input type="text" id="phone" name="phone" class="form-control input-lg" placeholder="Phone">
                  </div>
                  <div class="form-group">
                    <input type="text" id="company" name="company" class="form-control input-lg" placeholder="Company">
                  </div>
                  <div class="form-group">
                    <textarea cols="6" rows="7" id="comments" name="comments" class="form-control input-lg" placeholder="Message"></textarea>
                    <input id="submit" name="submit" type="submit" class="btn btn-primary btn-lg pull-right" value="Send Message">
                  </div>
                </div>
                <div class="col-md-6" style="text-align: left;">
                  <h4>
                  <p>
                    <span class="color-title">Phone numbers :</span>
                    <br>
                    083827133308
                  </p>
                  <br>
                  <p>
                    <span class="color-title">Email :</span>
                    <br>
                    kontak-ilunidm@unbor.ac.id
                  </p>
                </h4>
                </div>
              </form>
              <div class="clearfix"></div>
              <div class="col-md-12">
                <div id="message"></div>
              </div>
            </div>
          </div>
        </div>
        <!-- Start Sidebar -->
      </div>
    </div>
  </div>
</div>
<?php
$this->load->view('template/footer');
?>
