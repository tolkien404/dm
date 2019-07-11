<?php
$this->load->view('template/head');
?>
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?= base_url().'admin/kategori'?>">Home</a></li>
</ol>
<div class="card">
    <div class="card-header">
        <h5 class="card-title">Data Kategori </h5>
    </div>
    <br>
    <div class="col-md-12">
        <a href="<?php echo base_url().'admin/kategori/post' ?>" class="btn btn-success">Tambah Data </a>
    </div>
    <table id="dynamic-table-kategori" class="table table-striped table-hover table-sm  nowrap data">
        <thead>
            <tr>
                <th width="1%">No</th>
                <th >Nama Kategori</th>
                <th width="1%">Opsi</th>
            </tr>
        </thead>
        <tbody>
            <?php $no=1; foreach($data as $t) { ?>
            <tr>
                <td class="text-center"><?php echo $no++?></td>

                <td><?php echo $t['kategori']?></td>
                <td>
                    <a href="javascript:;"
                    data-id-kateg="<?php echo $t['id_kategori'] ?>"
                    data-kategori="<?php echo $t['kategori'] ?>"
                    class="edit btn btn-success btn-circle-small"
                    title="Edit"
                    data-toggle="modal"
                    data-target="#edit-data">
                    <i class="material-icons">edit</i>
                </a>
                <a href="<?= base_url().'admin/kategori/hapus/'.$t['id_kategori']; ?>" title="Hapus" class=" hapus delete btn btn-danger btn-circle-small">
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
<!-- Modal Edit Data -->
<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="edit-data" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                <h4 class="modal-title">Ubah Kategori</h4>
                <form class="js-validation-bootstrap form-horizontal" action="<?php echo base_url('admin/Kategori/ubah')?>" method="post" enctype="multipart/form-data" role="form">
                    <p name="i-kategori" id="i-kategori1" ></p>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label class="col-lg-2 col-sm-2 control-label">Kategori</label>
                        <div class="col-lg-10">
                            <input type="hidden" id="i-id_kategori" name="i-id_kategori">
                            <input type="text" class="form-control" id="i-kategori" name="i-kategori" placeholder="Masukkan nama kategori">
                        </div>
                    </div>
                </div>
                <br>
                <div class="modal-footer">
                    <button class="btn btn-primary" title="Save" type="submit">Save changes</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal"> Batal</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    $("#produk").addClass('active');
    //JQuery for Update Data
    $(document).ready(function () {
        $('#edit-data').on('show.bs.modal', function (event) {
            var div = $(event.relatedTarget)
            var modal = $(this)

            modal.find('#i-id_kategori').attr("value", div.data('id-kateg'));
            modal.find('#i-kategori1').html( div.data('kategori'));
            modal.find('#i-kategori').attr("value", div.data('kategori'));
        });
    });
</script>
<script type="text/javascript">
    $(document).ready(function () {
        $('.data').DataTable();
    });
</script>