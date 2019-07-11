<?php
$this->load->view('template/head');
?>
<ol class="breadcrumb">
  <li class="breadcrumb-item"><a href="#">Home</a></li>
</ol>
<div class="card">
  <div class="card-header">
    <h5 class="card-title">Data Distributor</h5>
  </div>
  <br>
  <div class="col-md-12">
    <a href="<?php echo base_url().'admin/distributor/post'?>" class="btn btn-success">Tambah Data </a>
  </div>
  <table id="dynamic-table-distributor" class="table table-striped table-hover table-sm dt-responsive nowrap data">
    <thead>
      <tr>
        <th class="text-center" width="7%">No.</th>
        <th>Nama Distributor</th>
        <th>Alamat</th>
        <th>Telepon</th>
        <th class="text-center" width="7%">Opsi</th>
      </tr>
    </thead>
    <tbody>
      <?php $no=1; foreach($data as $t) { ?>
      <tr>
        <td class="text-center"><?php echo $no++?></td>
        <td><?php echo $t['nama_distributor']?></td>
        <td><?php echo $t['alamat']?></td>
        <td><?php echo $t['telepon']?></td>
        <td class="center">
          <a href="javascript:;"
          data-id_distributor="<?php echo $t['id_distributor'] ?>"
          data-nama_distributor="<?php echo $t['nama_distributor'] ?>"
          data-alamat="<?php echo $t['alamat'] ?>"
          data-telepon="<?php echo $t['telepon'] ?>"
          class="edit btn btn-success btn-circle-small"
          title="Edit"
          data-toggle="modal"
          data-target="#edit-data">
          <i class="material-icons">edit</i>
        </a>
        <a href="<?= base_url().'admin/distributor/hapus/'.$t['id_distributor']; ?>" title="Hapus" class="hapus delete btn btn-danger btn-circle-small">
          <i class="material-icons">delete</i>
        </a>
      </td>
    </tr>
    <?php } ?>
  </tbody>
</table>
<div class="clearfix"></div>
</div>

<?php
$this->load->view('template/menu');
?>

<div class="modal fade" id="edit-data" tabindex="-1" role="dialog" id="add_manufacture_popup" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h5 class="modal-title" id="myModalLabel">Edit </h5>
        <?=$this->session->flashdata('pesan')?>
        <form action="<?php echo base_url('admin/distributor/ubah') ?>" method="post" enctype="multipart/form-data">
          <p id="i-nama-distributor1" name="i-nama-distributor"></p>
        </div>
        <div class="modal-body ">
          <input type="hidden" id="i-id-distributor" name="i-id-distributor">
          <div class="form-group row">
           <label class="col-sm-3 col-form-label">Nama Distributor</label>
           <div class="col-sm-9">
             <input type="text" class="form-control" id="i-nama-distributor" name="i-nama-distributor" placeholder="nama distributor">
             <i class="form-control-feedback"></i>
             <span class="text-warning" ></span>
           </div>
         </div>
         <div class="form-group row">
           <label class="col-sm-3 col-form-label">Alamat</label>
           <div class="col-sm-9">
             <input type="text" class="form-control " id="i-alamat" name="i-alamat" placeholder="Alamat">
           </div>
         </div>
         <div class="form-group row">
           <label class="col-sm-3 col-form-label">Telepon</label>
           <div class="col-sm-9">
             <input type="text" class="form-control phone-num" id="i-telepon" name="i-telepon" placeholder="Telepon">
             <i class="form-control-feedback"></i>
             <span class="text-warning" ></span>
           </div>
         </div>
         <div class="modal-footer">
          <button type="button" title="Batal" class="btn btn-white" data-dismiss="modal">Close</button>
          <button class="btn btn-primary" title="Save" type="submit">Save changes</button>
        </div>
      </form>
    </div>
  </div>
</div>

<script type="text/javascript">

  $("#distributor").addClass('active');
  $(document).ready(function() {
    $('#edit-data').on('show.bs.modal', function (event) {
      var div = $(event.relatedTarget)
      var modal = $(this)
      modal.find('#i-id-distributor').attr("value",div.data('id_distributor'));
      modal.find('#i-nama-distributor').attr("value",div.data('nama_distributor'));
      modal.find('#i-nama-distributor1').html(div.data('nama_distributor'));
      modal.find('#i-alamat').attr("value",div.data('alamat'));
      modal.find('#i-telepon').attr("value",div.data('telepon'));
    });
  });
</script>
