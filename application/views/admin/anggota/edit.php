<?php
$this->load->view('template/headeradmin');
?>
<?php
$this->load->view('template/base_head');
?>
<title>Anggota - Admin Control</title>

<link href="<?php echo base_url('assets/global/vendor/select2/select2.css') ?>" rel="stylesheet" type="text/css">

<div class="page">
  <div class="page-header page-header-bordered">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="../index.html">Home</a></li>
            <li class="breadcrumb-item active">Tambah Akun</li>
          </ol>
          <h1 class="page-title">Tambah Akun</h1>
          <div class="page-header-actions">
            <button type="button" onclick="location.href='<?php echo site_url('admin/Users') ?>'" class="btn btn-sm btn-outline btn-default btn-round">
              <span class="text hidden-sm-down">Data Users</span>
              <i class="icon md-chevron-right" aria-hidden="true"></i>
            </button>
          </div>
        </div>
  <div class="vertical-align-middle page-content container-fluid">
    <div class="row justify-content-md-center">
      <div class="panel">
        <div class="panel-body">
          <form class="form-horizontal" action="<?= base_url('admin/Anggota/ubah') ?>" method="POST">
            <input type="hidden" id="i-id_user" name="i-id_user">
            <div class="col-xl-4 form-group form-material" data-plugin="formMaterial">
              <label class="form-control-label" for="inputText">Nama</label>
              <input type="text" class="form-control" id="i-nama" name="i-nama" value="<?php echo $user['nama']?>" placeholder="Masukkan Nama Baru">
            </div>
            <div class="col-xl-4 form-group form-material" data-plugin="formMaterial">
              <label class="form-control-label" for="inputText">Angkatan</label>
              <input type="text" class="form-control" id="i-angkatan" name="i-angkatan" placeholder="Masukkan Angkatan Baru">
            </div>
            <div class="col-xl-4 form-group form-material" data-plugin="formMaterial">
              <label class="form-control-label" for="inputPassword">Kelamin</label>
              <input type="text" class="form-control" id="i-kelamin" name="i-kelamin" placeholder="Masukkan Kelamin Baru">
            </div>
            <div class="col-xl-12 form-group form-material" data-plugin="formMaterial">
              <label class="form-control-label" for="inputText">Domisili</label>
              <input type="text" class="form-control" id="i-prov_domisili" name="i-prov_domisili" placeholder="Masukkan Domisili Baru">
            </div>
            <div class="col-xl-6 form-group form-material" data-plugin="formMaterial">
              <label class="form-control-label" for="inputText">Alamat</label>
              <input type="text" class="form-control" id="i-alamat" name="i-alamat" placeholder="Masukkan Alamat Baru">
            </div>
            <div class="col-xl-6 form-group form-material" data-plugin="formMaterial">
              <label class="form-control-label" for="inputText">Tempat Lahir</label>
              <input type="text" class="form-control" id="i-tempat_lahir" name="i-tempat_lahir" placeholder="Masukkan Tempat Lahir">
            </div>
            <div class="col-xl-6 form-group form-material" data-plugin="formMaterial">
              <label class="form-control-label" for="inputText">Tanggal Lahir</label>
              <input type="text" class="form-control" id="i-tempat_lahir" name="i-tempat_lahir" placeholder="Masukkan Tempat Lahir">
            </div>
            <div class="col-xl-6 form-group form-material" data-plugin="formMaterial">
              <label class="form-control-label" for="inputText">Tempat Lahir</label>
              <input type="text" class="form-control" id="i-tempat_lahir" name="i-tempat_lahir" placeholder="Masukkan Tempat Lahir">
            </div>
            <div class="col-xl-6 form-group form-material" data-plugin="formMaterial">
              <label class="form-control-label" for="inputText">Tempat Lahir</label>
              <input type="text" class="form-control" id="i-tempat_lahir" name="i-tempat_lahir" placeholder="Masukkan Tempat Lahir">
            </div>
            <div class="text-right">
              <div class="wizard-buttons">
                <button class="btn btn-primary btn-outline float-left waves-effect waves-classic" type="submit" role="button">Create</button>
              </div>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>




<?php
$this->load->view('template/footeradmin');
?>

<script src="<?php echo base_url('assets/global/vendor/select2/select2.full.min.js') ?>"></script>
<script src="<?php echo base_url('assets/global/js/Plugin/select2.js') ?>"></script>
<!-- <script type="text/javascript">
$('#tambah').on('click',function(e) {
e.preventDefault();
if ($('#form_tambahusers').valid()){
dTable.add({
"id_anggota" : $('#i-id_anggota').val(),
"nama" : $('#i-nama').val(),
"username" : $('#i-username').val(),
"i-pass" : $('#i-password').val(),
"id_anggota" : $('#i-username').val(),
"id_anggota" : $('#i-username').val(),
"distributor" : $('#val-nama-distributor option:selected').html(),
"id_distributor": $('#val-nama-distributor').val(),
// "nama_distributor" : $('#val-judul').val(),
"id_buku" : $('#val-judul').val(),
"judul": $('#val-judul option:selected').html(),
// "judul" : $('#harga-jual').val(),
"jumlah": $('#val-jumlah').val()
}, function(e) {
$('.reset').val('');
});
}
});
</script> -->
