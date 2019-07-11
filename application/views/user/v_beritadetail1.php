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
      <div class="row">
        <div class="col-md-9">
          <header class="single-post-header clearfix">
            <div class="pull-right post-comments-count"></div>
            <h2 class="post-title">Alumni Diklat Manargasi FE-UB menyelenggarakan Rapat Kerja Organisasi ILUNI DM</h2>
          </header>
          <article class="post-content"> <span class="post-meta meta-data"><span><i class="fa fa-calendar"></i> 23/02/2018</span> <span><i class="fa fa-archive"></i> Diklat Manargasi</span></span>
            <div class="featured-image"> <img src="<?php echo base_url('assets/uploads/2.jpeg')?>" alt=""> </div>
            <p><?php
            $num_char = 2000;
            $text = 'Pada 23 Juli 2017 Ikatan Alumni Diklat Manargasi FE-UB menyelenggarakan Rapat Kerja Organisasi ILUNI DM. Rapat Kerja Ikatan Alumni UPN Veteran Jakarta adalah Rapat Kerja yang dihadiri oleh anggota Dewan Pengurus dan Anggota Alumni DM, dimaksudkan untuk membuat Program Kerja Ikatan Alumni Diklat Manargasi dalam periode 2017-2020, Pengukuhan Pengurus ILUNI DM
            Ketua Umum ILUNI DM Jacky Said, dalam sambutannya menuturkan bahwa "Raker ini bertujuan untuk Mengukuhkan Kepengurusan Iluni DM dalam tiga tahun ke depan. Kegiatan ini diharapkan dapat melahirkan Program-program kerja yang bermanfaat & berkesinambungan sesuai dengan Visi misi Organisasi yakni mewujudkan ILUNI DM sebagai wadah bagi kita semua dan bermanfaat untuk Anggota & sebagai spirit Baru untuk berjuang"
            Penyusunan Program Kerja adalah sebagai bentuk komitmen bagi para alumni untuk membesarkan Wadah ini juga Almamater
            Semoga organisasi Iluni ini mampu memberikan angin segar juga membawa manfaat yang besar bagi Alumni & Almamater.
            Untuk selanjutnya, progres dari hasil Raker ILUNI DM 2017 ditampilkan dalam content yang terpisad di Website ini. Terkait dengan Program Kerja masing-masing Bidang selama 3 tahun Kepengurusan.';
            echo substr($text, 0, $num_char) . '...';
            ?>
          </p>
        </article>

        </div>
        
      <div class="col-md-3">
      <!-- Start Sidebar -->
      <div class="widget sidebar-widget">
        <div class="sidebar-widget-title">
          <h3>Post Categories</h3>
        </div>
        <ul>
          <li><a href="#">Diklat Manargasi</a> (3)</li>
        </ul>
      </div>
    </div>
    </div>
  </div>
</div>
</div>
</div>

<?php
$this->load->view('template/footer');
?>