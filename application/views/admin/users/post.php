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
          <form class="form-horizontal" action="<?= base_url('admin/Users/save') ?>" method="POST">
            <input type="hidden" id="i-id_anggota" name="i-id_anggota">
            <?php echo validation_errors(); ?>
            <div class="form-group row form-material">
              <label class="panel-title form-control-label" for="Nama">Tambah User Untuk:</label>
              <Select class='form-control js-select2 ' data-plugin="select2" required name='i-id_user' id='i-id_user' data-placeholder='Cari Nama/Email Anggota'>
                <option value="" disabled selected></option>
                <?php
                foreach ($anggota as $key) {
                  echo "<option value='".$key['id_user']."'>".$key['nama']." || ".$key['email']."</option>";
                }
                ?>
              </Select>
            </div>
            <div class="form-group form-material" data-plugin="formMaterial">
              <label class=" form-control-label" for="inputText">Username</label>
              <input type="text" pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{1,20}$" class="form-control" id="i-username" name="i-username" placeholder="Masukan Username">
            </div>
            <div class="form-group form-material" data-plugin="formMaterial">
              <label class=" form-control-label" for="inputPassword">Password</label>
              <input required minlength="6" type="password" class="form-control" id="i-pass" name="i-pass" placeholder="Masukan Password">
            </div>
            <div class="form-group row form-material">
              <label class=" form-control-label" for="inputEmail">Status</label>
              <select class="form-control" id="i-status" name="i-status" data-plugin="select2">
                <option value="Aktif">Aktif</option>
                <option value="Tidak Aktif">Tidak Aktif</option>
              </optgroup>
            </select>
            <label class=" form-control-label" for="inputEmail">Akses</label>
            <select class="form-control" id="i-akses" name="i-akses" data-plugin="select2">
              <option value="User">User</option>
              <option value="Admin">Admin</option>
            </optgroup>
          </select>
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
