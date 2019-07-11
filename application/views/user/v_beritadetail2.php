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
            <h2 class="post-title">Musyawarah Besar ketiga Ikatan Alumni Diklat Manargasi SMFE Universitas Borobudur tahun 2017</h2>
          </header>
          <article class="post-content"> <span class="post-meta meta-data"><span><i class="fa fa-calendar"></i> 23/02/2018</span> <span><i class="fa fa-archive"></i> Diklat Manargasi</span></span>
            <div class="featured-image"> <img src="<?php echo base_url('assets/uploads/3.jpg')?>" alt=""> </div>
            <p><?php
            $num_char = 2000;
            $text = 'Bertempat di gedung Badan Pengkajian dan Penerapan Teknologi (BPPT) Jl. MH. Thamrin No. 8 Jakarta Pusat telah dilaksanakan Musyawarah Besar yang ketiga Ikatan Alumni Diklat Manargasi (ILUNI-DM) Fakultas Ekonomi Universitas Borobudur yang dihadiri oleh 30 orang terdiri dari para delegasi Diklat Manargasi setiap angkatan,dewan pembina dan penasehat serta pengurus ILUNI-DM periode berjalan.(23/7/2017)<br>

Acara ini merupakan kelanjutan dari Mubes sebelumnya yang terakhir dilaksanakan pada tahun 2009 di Puncak Bogor yang bertujuan untuk memilih kepengurusan ILUNI-DM periode selanjutnya.<br>

Menurut ketua pelaksana kegiatan, Firman Qodri, pertemuan ini akan dihadiri oleh para senior kami alumni Fakultas Ekonomi Universitas Borobudur mulai dari angkatan Pra DM sampai dengan angkatan terakhir yaitu DM 23, ujarnya.
<br>
Kami sebagai panitia akan memberikan yang terbaik guna kelancaran dan kesuksesan acara ini, karena selain musyawarah, kegiatan ini juga merupakan ajang silaturahmi antar alumni yang memang jarang bertemu karena kesibukan aktivitas masing-masing. Tutupnya.<br>

Sementara itu Ketua Umum ILUNI -DM periode berjalan Mufti, SE sangat mengapresiasi dan mengucapkan terima kasih kepada panitia yang telah memfasilitasi kegiatan ini, dewan pembina dan penasihat juga yang bisa hadir disini, semoga dalam musyawarah ini akan menghasilkan kader-kader yang unggul sebagai penerus kepemimpinan berikutnya, agar bisa memberikan yang terbaik untuk ILUNI-DM kedepan dan wadah ini bisa menjadi pengikat silaturahmi dan ajang diskusi di berbagai bidana, pungkas beliau.
<br>
Dalam kegiatan itu juga dilakukan pemilihan Ketua Umum ILUNI-DM periode 2017-2020 yang dimenangkan oleh Jacky SE, MM yang menjabat sekretaris umum pada kepengurusan periode sebelumnya.';
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