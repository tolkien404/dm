<?php
$this->load->view('template/headeradmin');
?>
<?php
$this->load->view('template/base_head');
?>
<title>Anggota - Admin Control</title>
<link href="<?php echo base_url('assets/global/vendor/datatables.net-bs4/dataTables.bootstrap4.css') ?>" rel="stylesheet" type="text/css">
<link href="<?php echo base_url('assets/global/vendor/datatables.net-fixedheader-bs4/dataTables.fixedheader.bootstrap4.css') ?>" rel="stylesheet" type="text/css">
<link href="<?php echo base_url('assets/global/vendor/datatables.net-fixedcolumns-bs4/dataTables.fixedcolumns.bootstrap4.css') ?>" rel="stylesheet" type="text/css">
<link href="<?php echo base_url('assets/global/vendor/datatables.net-rowgroup-bs4/dataTables.rowgroup.bootstrap4.css') ?>" rel="stylesheet" type="text/css">
<link href="<?php echo base_url('assets/global/vendor/datatables.net-scroller-bs4/dataTables.scroller.bootstrap4.css') ?>" rel="stylesheet" type="text/css">
<link href="<?php echo base_url('assets/global/vendor/datatables.net-select-bs4/dataTables.select.bootstrap4.css') ?>" rel="stylesheet" type="text/css">
<link href="<?php echo base_url('assets/global/vendor/datatables.net-responsive-bs4/dataTables.responsive.bootstrap4.css') ?>" rel="stylesheet" type="text/css">
<link href="<?php echo base_url('assets/global/vendor/datatables.net-buttons-bs4/dataTables.buttons.bootstrap4.css') ?>" rel="stylesheet" type="text/css">
<link href="<?php echo base_url('assets/examples/css/tables/datatable.css') ?>" rel="stylesheet" type="text/css">
<link href="<?php echo base_url('assets/global/vendor/select2/select2.css') ?>" rel="stylesheet" type="text/css">

<div class="page">
  <div class="page-header">
    <h1 class="page-title">Data Anggota</h1>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="#">Home</a></li>
      <li class="breadcrumb-item active">Data Anggota</li>
    </ol>
  </div>
  <div class="page-content">
    <div class="panel">
      <header class="panel-heading">
        <h3 class="panel-title">Data</h3>
      </header>
      <div class="panel-body">
        <div class="row">
          <div class="col-md-6">
            <div class="mb-15">
              <a href="<?php echo base_url() . 'admin/Users/post' ?>" class="btn btn-success"><i class="icon md-plus" aria-hidden="true"></i>Tambah Data </a>
              <a href="<?php echo base_url() . 'admin/Users/pdf' ?>" class="btn btn-success"><i class="icon md-print" aria-hidden="true"></i>Cetak </a>
            </div>
          </div>
        </div>
        <div class="table-responsive">
          <table id="hidden-table-info" class="table table-hover dataTable table-striped display" cellspacing="0" data-plugin="dataTable">
            <thead>
              <tr>
                <td>No</td>
                <td>Angkatan DM</td>
                <td>Nama Lengkap</td>
                <td>Jenis Kelamin</td>
                <td>Domisili</td>
                <td>Alamat</td>
                <td>Tempat Lahir</td>
                <td>Tanggal Lahir</td>
                <td>Status Nikah</td>
                <td>Pendidikan Terakhir</td>
                <td>Jurusan</td>
                <td>Pengalama Organisasi (sebelum DM)</td>
                <td>Pengalama Organisasi (Sesudah DM)</td>
                <td>Telepon</td>
                <td>Email</td>
                <td>Sosmed Aktif</td>
                <td>Alamat Facebook</td>
                <td>Alamat Instagram</td>
                <td>Alamat Twitter</td>
                <td>Val Kerja</td>
                <td>Status Kerja</td>
                <td>Tempat Kerja</td>
                <td>Actions</td>
              </tr>
            </thead>
            <tbody>
              <?php $no = 1;
              foreach ($data as $t) { ?>
                <tr>
                  <td class="text-left"><?php echo $no++ ?></td>
                  <td><?php echo $t['nama'] ?></td>
                  <td><?php echo $t['angkatan'] ?></td>
                  <td><?php echo $t['kelamin'] ?></td>
                  <td><?php echo $t['prov_domisili'] ?></td>
                  <td><?php echo $t['alamat'] ?></td>
                  <td><?php echo $t['tempat_lahir'] ?></td>
                  <td><?php echo $t['tgl_lahir'] ?></td>
                  <td><?php echo $t['status_nikah'] ?></td>
                  <td><?php echo $t['pend_terakhir'] ?></td>
                  <td><?php echo $t['jurusan'] ?></td>
                  <td><?php echo $t['peng_organisasi'] ?></td>
                  <td><?php echo $t['peng_organisasil'] ?></td>
                  <td><?php echo $t['tlpn'] ?></td>
                  <td><?php echo $t['email'] ?></td>
                  <td><?php echo $t['sos_aktif'] ?></td>
                  <td><?php echo $t['facebook'] ?></td>
                  <td><?php echo $t['instagram'] ?></td>
                  <td><?php echo $t['twitter'] ?></td>
                  <td><?php echo $t['val_kerja'] ?></td>
                  <td><?php echo $t['status_kerja'] ?></td>
                  <td><?php echo $t['tempat_kerja'] ?></td>
                  <td>
                    <button onclick="location.href='<?php echo base_url().'admin/Anggota/edit/'.$t['id_user']; ?>'" class="btn btn-xs btn-icon btn-default waves-effect waves-classic" type="button" data-toggle="tooltip" title="Edit">
                      <i class="icon md-edit"></i>
                    </button>
                    <button href="<?= base_url().'admin/Anggota/remove/'.$t['id_user']; ?>" class="hapus btn btn-xs btn-icon btn-danger waves-effect waves-classic" type="button" data-toggle="tooltip" title="Hapus">
                        <i class="icon md-close" aria-hidden="true"></i>
                    </button>
                  </td>
                </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

<?php
$this->load->view('template/footeradmin');
?>
<div class="modal fade modal-fill-in" id="edit-data" tabindex="-1" role="dialog" id="add_manufacture_popup" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button aria-hidden="true" data-dismiss="modal" class="close" type="button">
          <span aria-hidden="true">×</span></button>
        <h4 class="modal-title">Edit Anggota <span class="badge badge-warning"> <?php echo $t['tanggal'] ?></span> </h4>
      </div>
      <div class="modal-body">
        <form class="modal-content js-validation-bootstrap form-horizontal" action="<?php echo base_url('admin/Users/ubah') ?>" method="post" enctype="multipart/form-data" role="form">
          <div class="row">
            <input type="hidden" id="i-id_berita" name="i-id_berita">
            <div class="col-xl-4 form-group form-material" data-plugin="formMaterial">
              <label class="form-control-label" for="inputText">Nama</label>
              <input type="text" class="form-control" id="i-nama" name="i-nama" placeholder="Masukkan Nama Baru">
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
            <div class="col-xl-4 form-group form-material" data-plugin="formMaterial">
              <label class="col-sm-3 col-form-label">Akses</label>
              <select class=" form-control" id="i-akses" name="i-akses" data-plugin="select2">
                <option value='' disabled selected></option>
                <option value="Admin">Admin</option>
                <option value="User">User</option>
                </optgroup>
              </select>
            </div>
            <div class="col-xl-4 form-group form-material" data-plugin="formMaterial">
              <label class="col-sm-3 col-form-label">Status</label>
              <select class="form-control" id="i-status" name="i-status" data-plugin="select2">
                <option value='' disabled selected></option>
                <option value="Aktif">Aktif</option>
                <option value="Tidak Aktif">Tidak Aktif</option>
              </select>
            </div>
          </div>
          <div class="modal-footer">
            <button class="btn btn-primary" type="submit"> Simpan </button>
            <button type="button" class="btn btn-danger" data-dismiss="modal"> Batal</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<script src="<?php echo base_url('assets/vendor/jspdf/jspdf.min.js') ?>"></script>


<script src="<?php echo base_url('assets/global/vendor/datatables.net/jquery.dataTables.js') ?>"></script>
<script src="<?php echo base_url('assets/global/vendor/datatables.net-bs4/dataTables.bootstrap4.js') ?>"></script>
<script src="<?php echo base_url('assets/global/vendor/datatables.net-fixedheader/dataTables.fixedHeader.js') ?>"></script>
<script src="<?php echo base_url('assets/global/vendor/datatables.net-fixedcolumns/dataTables.fixedColumns.js') ?>"></script>
<script src="<?php echo base_url('assets/global/vendor/datatables.net-rowgroup/dataTables.rowGroup.js') ?>"></script>
<script src="<?php echo base_url('assets/global/vendor/datatables.net-scroller/dataTables.scroller.js') ?>"></script>
<script src="<?php echo base_url('assets/global/vendor/datatables.net-responsive/dataTables.responsive.js') ?>"></script>
<script src="<?php echo base_url('assets/global/vendor/datatables.net-responsive-bs4/responsive.bootstrap4.js') ?>"></script>
<script src="<?php echo base_url('assets/global/vendor/datatables.net-buttons/dataTables.buttons.js') ?>"></script>
<script src="<?php echo base_url('assets/global/vendor/datatables.net-buttons/buttons.html5.js') ?>"></script>
<script src="<?php echo base_url('assets/global/vendor/datatables.net-buttons/buttons.flash.js') ?>"></script>
<script src="<?php echo base_url('assets/global/vendor/datatables.net-buttons/buttons.colVis.js') ?>"></script>
<script src="<?php echo base_url('assets/global/vendor/datatables.net-buttons-bs4/buttons.bootstrap4.js') ?>"></script>
<script src="<?php echo base_url('assets/global/vendor/asrange/jquery-asRange.min.js') ?>"></script>
<script src="<?php echo base_url('assets/global/vendor/bootbox/bootbox.js') ?>"></script>

<!-- <script src="<?php echo base_url('assets/global/js/Plugin/datatables.js') ?>"></script> -->
<!-- <script src="<?php echo base_url('assets/examples/js/tables/datatable.js') ?>"></script> -->
<!-- <script src="<?php echo base_url('assets/examples/js/uikit/icon.js') ?>"></script> -->

<script src="<?php echo base_url('assets/global/vendor/select2/select2.full.min.js') ?>"></script>
<script src="<?php echo base_url('assets/global/js/Plugin/select2.js') ?>"></script>
