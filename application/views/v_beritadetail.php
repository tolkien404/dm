<title>Detail Berita - Iluni Dm Unbor</title>
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
          <li class="active">Detail Berita</li>
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
        <h1>Detail Berita</h1>
      </div>
    </div>
  </div>
</div>
<!-- End Page Header -->
<!-- Start Content -->
<div class="main" role="main">
  <div id="content" class="content full">
    <div class="container">
      <?php foreach ($data as $k){ ?>
        <div class="row">
          <div class="col-md-9">
            <header class="single-post-header clearfix">
              <div class="pull-right post-comments-count"></div>
              <h2 class="post-title"><?php echo $k->judul; ?></h2>
            </header>
            <article class="post-content"> <span class="post-meta meta-data"><span><i class="fa fa-calendar"></i> <?php echo $k->tanggal;?></span> <span><i class="fa fa-archive"></i><?php echo $k->kategori; ?></span></span>
              <div class="featured-image"> <img src="<?php echo base_url('assets/uploads/berita/'.$k->gambar);?>" alt=""> </div>
              <p><?php echo $k->deskripsi; ?>
              </p>
            </article>

          </div>

          <div class="col-md-3">
            <!-- Start Sidebar -->
            <div class="widget sidebar-widget">
              <div class="sidebar-widget-title">
                <h3>Kategori</h3>
              </div>
              <ul>
                <li><a href="#">Diklat Manargasi</a> (3)</li>
              </ul>
            </div>
          </div>
        </div>


      <?php } ?>
    </div>
  </div>
</div>
</div>

<?php
$this->load->view('template/footer');
?>
