<?php
$this->load->view('template/headeradmin');
?>
<?php
$this->load->view('template/base_head');
?>
<title>Berita - Admin Control</title>
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

<link href="<?php echo base_url('assets/global/vendor/bootstrap-markdown/bootstrap-markdown.css') ?>" rel="stylesheet" type="text/css">
<div class="page">
  <div class="page-header">
    <h1 class="page-title">Berita</h1>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="#">Home</a></li>
      <li class="breadcrumb-item active">Berita</li>
    </ol>
  </div>
  <div class="page-content container-fluid">
    <div class="panel" id="projects">
      <header class="panel-heading">
        <h3 class="panel-title">Data</h3>
      </header>
      <div class="panel-body">
        <div class="row">
          <div class="col-md-6">
            <div class="mb-15">
              <a href="<?php echo base_url() . 'admin/berita/post' ?>" class="btn btn-success"><i class="icon md-plus" aria-hidden="true"></i>Tambah Data </a>
            </div>
          </div>
        </div>
        <div class="table-responsive">
          <table class="table table-hover dataTable table-striped display" data-plugin="dataTable">
            <thead>
              <tr>
                <td>No</td>
                <td>Tanggal</td>
                <td>Gambar</td>
                <td>Judul</td>
                <td>Deskripsi</td>
                <td>Actions</td>
              </tr>
            </thead>
            <tbody>
              <?php $no = 1;
              foreach ($data as $t) { ?>
                <tr>
                  <td class="text-left"><?php echo $no++ ?></td>
                  <td><?php echo $t['tanggal'] ?></td>
                  <td><img width="80%" src="<?php base_url() ?>../assets/uploads/berita/<?php echo $t['gambar']; ?>"></td>
                  <td><span class="small12"><?php echo $t['judul'] ?></span></td>
                  <td><span class="small12" data-provide="markdown"><?php echo $t['deskripsi'] ?></span></td>
                  <td>
                  <a href="javascript:;" data-id_berita="<?php echo $t['id_berita'] ?>"
                  data-judul="<?php echo $t['judul'] ?>"
                  data-gambar="<?php echo $t['gambar'] ?>"
                  data-deskripsi="<?php echo $t['deskripsi'] ?>"
                  data-alamat="<?php echo $t['alamat'] ?>"
                  data-telepon="<?php echo $t['telepon'] ?>"
                  data-email="<?php echo $t['email'] ?>"
                  data-password="<?php echo $t['password'] ?>"
                  data-status="<?php echo $t['status'] ?>"
                  data-akses="<?php echo $t['akses'] ?>"
                  data-toggle="modal" data-target="#edit-data">
                    <button data-original-title="Edit" type="button" class="btn btn-sm btn-icon btn-pure btn-default waves-effect waves-classic" data-toggle="tooltip">
                      <i class="icon md-wrench" aria-hidden="true"></i>
                    </button>
                  </a>
                    <button type="button" onclick="location.href='<?= base_url() . 'admin/Berita/remove/' . $t['id_berita']; ?>'" class=" hapus btn btn-sm btn-icon btn-pure btn-default waves-effect waves-classic" data-toggle="tooltip" data-original-title="Delete">
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
        <h4 class="modal-title">Edit Berita <span class="badge badge-warning"> <?php echo $t['tanggal'] ?></span> </h4>
      </div>
      <div class="modal-body">
        <form class="modal-content js-validation-bootstrap form-horizontal" action="<?php echo base_url('admin/Users/ubah') ?>" method="post" enctype="multipart/form-data" role="form">
          <div class="row">
            <input type="hidden" id="i-id_berita" name="i-id_berita">
            <div class="col-xl-4 form-group form-material" data-plugin="formMaterial">
              <label class="form-control-label" for="inputText">Judul</label>
              <input type="text" class="form-control" id="i-judul" name="i-judul" placeholder="Masukkan Judul Baru">
            </div>
            <div class="col-xl-4 form-group form-material" data-plugin="formMaterial">
              <label class="form-control-label" for="inputText">Gambar</label>
              <input type="text" class="form-control" id="i-gambar" name="i-gambar" placeholder="Masukkan Gambar Baru">
            </div>
            <div class="col-xl-4 form-group form-material" data-plugin="formMaterial">
              <label class="form-control-label" for="inputPassword">Password</label>
              <input type="password" class="form-control" id="i-password" name="i-password" placeholder="Masukkan Nama Baru">
            </div>
            <div class="col-xl-12 form-group form-material" data-plugin="formMaterial">
              <label class="form-control-label" for="inputText">Alamat</label>
              <input type="text" class="form-control" id="i-alamat" name="i-alamat" placeholder="Masukkan Alamat Baru">
            </div>
            <div class="col-xl-6 form-group form-material" data-plugin="formMaterial">
              <label class="form-control-label" for="inputText">Telepon</label>
              <input type="text" class="form-control" id="i-telepon" name="i-telepon" placeholder="Masukkan Telepon Baru">
            </div>
            <div class="col-xl-6 form-group form-material" data-plugin="formMaterial">
              <label class="form-control-label" for="inputText">Email</label>
              <input type="text" class="form-control" id="i-email" name="i-email" placeholder="Masukkan Email">
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
<script src="<?php echo base_url('assets/global/vendor/to-markdown/to-markdown.js') ?>"></script>
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

<script type="text/javascript">
  $(".small12").each(function() {
    text = $(this).text();
    if (text.length > 200) {
      $(this).html(text.substr(0, 186) + '<span class="elipsis"' + text.substr(186) + '</span>...');
    }
  });
  $(".small12 > a.elipsis").click(function(e) {
    e.preventDefault();
    $(this).prev('span.elipsis').fadeToggle(500);
  });
</script>
