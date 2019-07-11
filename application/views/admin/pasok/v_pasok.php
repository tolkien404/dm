<?php
$this->load->view('template/head');
?>
<ol class="breadcrumb">
  <li class="breadcrumb-item"><a href="#">Home</a></li>
</ol>
<div class="card">
    <div class="card-header">
        <h5 class="card-title">Data Pasok Buku </h5>
    </div>
    <br>
    <div class="col-md-12">
        <a href="<?php echo base_url().'admin/pasok/post' ?>" class="btn btn-success">Tambah Data </a>
        <a href="<?php echo base_url().'admin/pasok/pdf' ?>" class="btn btn-success">Cetak </a>
    </div>
    <table id="dynamic-table-pasok" class="table table-striped table-hover table-sm dt-responsive nowrap">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Distributor</th>
                <th>Judul Buku</th>
                <th>Jumlah Buku</th>
                <th>Tanggal</th>
                <th>Opsi</th>
            </tr>
        </thead>
        <tbody>
            <?php $no=1; foreach($data as $t) { ?>
            <tr>
                <td class="text-center"><?php echo $no++?></td>
                <td><?php echo $t['nama_distributor']?></td>
                <td><?php echo $t['judul']?></td>
                <td><?php echo $t['qty']?></td>
                <td><?php echo $t['tanggal']?></td>
                <td>
                <div class="btn-group">
                    <a href="javascript:;"
                       data-id-pasok="<?php echo $t['id_pasok'] ?>"
                       data-qty="<?php echo $t['qty'] ?>"
                       class="edit btn btn-success btn-circle-small"
                       title="Edit"
                       data-toggle="modal"
                       data-target="#edit-data">
                        <i class="material-icons">edit</i>
                    </a>
                    </div>
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
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                <h4 class="modal-title">Ubah Pasok</h4>
                <?php echo $t['nama_distributor']?>
            </div>
            <form class="js-validation-bootstrap form-horizontal" action="<?php echo base_url('admin/Pasok/ubah')?>"  method="post" enctype="multipart/form-data" role="form">
             <div class="modal-body">
                     <div class="form-group">
                         <label class="col-lg-2 col-sm-2 control-label">Pasok</label>
                         <div class="col-lg-10">
                          <input type="hidden" id="i-id_pasok" name="i-id_pasok">
                             <input type="text" class="form-control" id="i-qty" name="i-qty" placeholder="Masukkan Jumlah Pasok">
                         </div>
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

<script src="<?php echo base_url('assets/vendor/jspdf/jspdf.min.js')?>"></script>

<script type="text/javascript">
 $("#produk").addClass('active');

  $(document).ready(function() {
      $('#edit-data').on('show.bs.modal', function (event) {
          var div = $(event.relatedTarget)
          var modal = $(this)

          modal.find('#i-id_pasok').attr("value",div.data('id-pasok'));
          modal.find('#i-qty').attr("value",div.data('qty'));
      });
  });
</script>
