<title>Berita - Iluni Dm Unbor</title>
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
					<li><a href="<?php echo base_url() . 'Home' ?>">Home</a></li>
					<li class="active">Berita</li>
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
				<h1>Berita</h1>
			</div>
		</div>
	</div>
</div>
<!-- End Page Header -->
<!-- Start Content -->
<div class="main" role="main">
	<div id="content" class="content full">
		<div class="container">
			<?php foreach ($results as $t) : ?>
				<div class="row">
					<div class="col-md-12 posts-archive">
						<article class="post">
							<div class="row">
								<div class="col-md-4 col-sm-4"><img class="img-thumbnail" src="<?php echo base_url('assets/uploads/berita/'.$t['gambar']);?>"/></div>
								<div class="col-md-8 col-sm-8">
									<h3><a href="<?php echo base_url();?>Berita/detail/<?php echo $t['id_berita']."/".$t['judul']; ?>"><?php echo $t['judul'] ?></a></h3><span class="post-meta meta-data"><span><i class="fa fa-calendar"></i>
										<?php echo $t['tanggal'] ?></span><span><i class="fa fa-archive"></i><?php echo $t['kategori'] ?></span></span>
									<p><?php echo $t['deskripsi'] ?>...</p>
									<p><a href="<?php echo base_url();?>Berita/detail/<?php echo $t['id_berita']."/".$t['judul']; ?>" class="btn btn-primary">Selengkapnya <i class="fa fa-long-arrow-right"></i></a></p>
								</div>
							</div>
						</article>
					</div>
				</div>
			<?php endforeach; ?>
			<?= $this->pagination->create_links() ?>
		</div>
	</div>
</div>
<?php
$this->load->view('template/footer');
?>
