<?php
$this->load->view('template/head');
?>
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
</ol>
<div class="card">
    <div class="card-header">
        <h5 class="card-title">Data Buku </h5>
    </div>
    <br>
    <div class="col-md-12">
        <a href="<?php echo base_url().'admin/buku/post' ?>" class="btn btn-success">Tambah Data </a>
    </div>
    <?=$this->session->flashdata('pesan')?>
    <table id="hidden-table-info" class="table table-striped table-hover table-sm dt-responsive nowrap data">
        <thead>
            <tr>
                <th>No</th>
                <th>No ISBN</th>
                <th>Judul</th>
                <th>Gambar</th>
                <th>Kategori</th>
                <th>Penulis</th>
                <th>Penerbit</th>
                <th>Harga Pokok</th>
                <th>Harga Jual</th>
                <th>PPN</th>
                <th>Diskon</th>
                <th>qty</th>
                <th>tahun</th>
                <th class="hidden-phone">Opsi</th>
            </tr>
        </thead>
        <tbody>
            <?php $no=1; foreach($data as $t) { ?>
            <tr>
                <td class="text-center"><?php echo $no++?></td>
                <td><?php echo $t['noisbn']?></td>
                <td><?php echo $t['judul']?></td>
                <td><img src="<?=base_url()?>assets/hasil_resize/<?php echo $t['gambar']?>"></td>
                <td><?php echo $t['kategori']?></td>
                <td><?php echo $t['penulis']?></td>
                <td><?php echo $t['penerbit']?></td>
                <td><?php echo $t['harga_pokok'] ?></td>
                <td><?php echo $t['harga_jual']?></td>
                <td><?php echo $t['ppn']?>%</td>
                <td><?php echo $t['diskon']?>%</td>
                <td><?php echo $t['qty']?></td>
                <td><?php echo $t['tahun']?></td>
                <td class="center">
                    <a href="javascript:;"
                    data-id-buku="<?php echo $t['id_buku'] ?>"
                    data-kategori="<?php echo $t['kategori'] ?>"
                    data-judul="<?php echo $t['judul'] ?>"
                    data-noisbn="<?php echo $t['noisbn'] ?>"
                    data-penulis="<?php echo $t['penulis'] ?>"
                    data-penerbit="<?php echo $t['penerbit'] ?>"
                    data-harga_pokok="<?php echo $t['harga_pokok'] ?>"
                    data-ppn="<?php echo $t['ppn'] ?>"
                    data-diskon="<?php echo $t['diskon'] ?>"
                    data-qty="<?php echo $t['qty'] ?>"
                    data-tahun="<?php echo $t['tahun'] ?>"
                    class="edit btn btn-success btn-circle-small"
                    title="Edit"
                    data-toggle="modal"
                    data-target="#edit-data">
                    <i class="material-icons">edit</i>
                </a>
                <a href="<?= base_url().'admin/buku/hapus/'.$t['id_buku']; ?>" title="Hapus" class="hapus delete btn btn-danger btn-circle-small">
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

                <form action="<?php echo base_url('admin/buku/ubah') ?>" method="post" enctype="multipart/form-data">
                    <p name="i-judul" id="i-judul1" ></p>
                </div>
                <div class="modal-body ">
                    <input type="hidden" id="i-id_buku" name="i-id_buku">
                    <div class="form-group row">
                        <label z class="col-sm-3 col-form-label">Judul</label>
                        <div class="col-sm-9">
                            <input type="text" name="i-judul" id="i-judul" class="form-control" placeholder="judul">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Kategori</label>
                        <div class="col-sm-9">
                            <select class='js-select2 form-control' name='i-kateg' id='i-kateg' data-placeholder='-pilih kategori-'>
                                <option value="" disabled selected></option>
                                <?php
                                foreach ($kategori as $key) {
                                    echo "<option value='".$key['id_kategori']."'>".$key['kategori']."</option>";
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label z class="col-sm-3 col-form-label">Penerbit</label>
                        <div class="col-sm-9">
                            <input type="text" name="i-penerbit" id="i-penerbit" class="form-control" placeholder="penerbit">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label z class="col-sm-3 col-form-label">Penulis</label>
                        <div class="col-sm-9">
                            <input type="text" name="i-penulis" id="i-penulis" class="form-control" placeholder="penerbit">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Harga pokok</label>
                        <div class="col-sm-9">
                            <input type="text" name="i-harga_pokok" id="i-harga_pokok" class="form-control" placeholder="Harga Pokok">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label z class="col-sm-3 col-form-label">PPN</label>
                        <div class="col-sm-9">
                            <input type="text" name="i-ppn" id="i-ppn" maxlength="2" class="form-control" placeholder="PPN" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label z class="col-sm-3 col-form-label">Diskon</label>
                        <div class="col-sm-9">
                            <input type="text" name="i-diskon" id="i-diskon" class="form-control" placeholder="Diskon">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label z class="col-sm-3 col-form-label">Qty</label>
                        <div class="col-sm-9">
                            <input type="text" name="i-qty" id="i-qty" class="form-control" placeholder="Qty">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label z class="col-sm-3 col-form-label">Tahun</label>
                        <div class="col-sm-9">
                            <input type="text" name="i-tahun" maxlength="4" id="i-tahun" class="form-control" placeholder="Qty">
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


    <script>
        $("#produk").addClass('active');
        $(document).ready(function () {
        // Untuk sunting
        $('#edit-data').on('show.bs.modal', function (event) {
            var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan
            var modal = $(this)
            modal.find('#i-id_buku').attr("value", div.data('id-buku'));
            modal.find('#i-judul1').html(div.data('judul'));
            modal.find('#i-judul').attr("value", div.data('judul'));
            modal.find('#i-kateg').attr("value", div.data('kategori'));
            modal.find('#i-penulis').attr("value", div.data('penulis'));
            modal.find('#i-penerbit').attr("value", div.data('penerbit'));
            modal.find('#i-harga_pokok').attr("value", div.data('harga_pokok'));
            modal.find('#i-ppn').attr("value", div.data('ppn'));
            modal.find('#i-diskon').attr("value", div.data('diskon'));
            modal.find('#i-qty').attr("value", div.data('qty'));
            modal.find('#i-tahun').attr("value", div.data('tahun'));

        });
    });
</script>


