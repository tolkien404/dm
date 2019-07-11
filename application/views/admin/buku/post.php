<?php
$this->load->view('template/head');
?>
<ol class="breadcrumb">
  <li class="breadcrumb-item"><a href="<?= base_url().'admin/buku'?>">Buku</a></li>
  <li class="breadcrumb-item active">Post</li>
</ol>
<div class="col-md-12">
    <div class="card">
      <div class="card-block">
        <h5>Tambah Data Buku</h5>
        <?=$this->session->flashdata('pesan')?>
        <form action="<?=base_url()?>admin/buku/tambah" id="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="i-idbuku" class="form-control">
          <div class="form-group row">
            <label for="inputPassword3" class="col-sm-3 col-form-label">Judul Buku</label>
            <div class="col-sm-9">
              <input type="text" name="i-judul" required class="form-control textbox " id="nama" placeholder="Judul Buku">
            </div>
          </div>
          <div class="form-group row">
            <label for="inputPassword3" class="col-sm-3 col-form-label">Kategori</label>
            <div class="col-sm-9">
              <Select class='form-control js-select2 ' required name='i-kateg' id='i-kateg' data-placeholder='-pilih kategori-'>
                <option value="" disabled selected></option>
              <?php
                foreach ($kategori as $key) {
                  echo "<option value='".$key['id_kategori']."'>".$key['kategori']."</option>";
                    }
                  ?>
              </Select>
            </div>
          </div>
          <div class="form-group row">
            <label for="inputPassword3" class="col-sm-3 col-form-label">Gambar</label>
            <div class="col-sm-9">
              <div class="media-body media-middle">
              <label class="custom-file m-0">
                <input type="file" id="file" required name="filefoto">
                <span class="custom-file-control"></span>
              </label>
            </div>
            </div>
          </div>
          <div class="form-group row">
            <label for="inputPassword3" class="col-sm-3 col-form-label">NO ISBN</label>
            <div class="col-sm-9">
              <input type="text" name="i-noisbn" required class="form-control" placeholder="NO ISBN" data-mask="999-99-999-9999-9">
            </div>
          </div>
          <div class="form-group row">
            <label for="inputPassword3" class="col-sm-3 col-form-label">Penulis</label>
            <div class="col-sm-9">
              <input type="text" name="i-penulis" required class="form-control textbox" id="nama" placeholder="Penulis">
            </div>
          </div>
          <div class="form-group row">
            <label for="inputPassword3" class="col-sm-3 col-form-label">Penerbit</label>
            <div class="col-sm-9">
            <div class="form-group">
                  <input class="datepicker form-control textbox" required name="i-penerbit" type="text" id="nama" placeholder="Penerbit"/>
                  </div>
            </div>
          </div>
          <div class="form-group row">
            <label for="inputPassword3" class="col-sm-3 col-form-label">Tahun</label>
            <div class="col-sm-9">
              <input type="text" name="i-tahun" required class="form-control textbox" maxlength="4" placeholder="Tahun">
             <span class="text-warning" ></span>
            </div>
          </div>
          <div class="form-group row">
            <label  class="col-sm-3 col-form-label">Qty</label>
            <div class="col-sm-9">
              <input type="text" name="i-qty" required class="form-control textbox" placeholder="qty">
            </div>
          </div>
          <div class="form-group row">
            <label for="inputPassword3" class="col-sm-3 col-form-label">Harga Pokok</label>
            <div class="col-sm-9">
              <input type="text" id="inputEmail3" required name="i-harga_pokok" class="form-control textbox" placeholder="Harga Pokok">
            </div>
          </div>
          <div class="form-group row">
            <label for="inputPassword3" class="col-sm-3 col-form-label">PPN</label>
            <div class="col-sm-9">
              <input type="text" name="i-ppn" required maxlength="2" class="form-control" placeholder="PPN">
            </div>
          </div>
          <div class="form-group row">
            <label for="inputPassword3" class="col-sm-3 col-form-label">Diskon</label>
            <div class="col-sm-9">
              <input type="text" name="i-diskon" required class=" textbox form-control" placeholder="Diskon">
            </div>
          </div>
          <div class="form-group row mb-0">
            <div class="offset-sm-3 col-sm-9">
              <button type="submit" name="submit" class="btn btn-success">Tambah Data</button>
              <?php echo anchor('admin/buku','Kembali',array('class'=>'btn btn-danger'))?>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

<?php
$this->load->view('template/menu');
?>
<script type="text/javascript">
$("#produk").addClass('active');
  // $('#').submit(function(e){
  //     e.preventDefault();
  //     var valid=true;
  //     $(this).find('.textbox').each(function(){
  //       if (! $(this).val()){
  //         get_error_text(this);
  //         valid = false;
  //         $('html,body').animate({scrollTop: 0},"slow");
  //       }
  //       if ($(this).hasClass('no-valid')){
  //         valid = false;
  //         $('html,body').animate({scrollTop: 0},"slow");
  //       }
  //     });
  //     if (valid){
  //       swal({
  //         title: "Konfirmasi Simpan Data",
  //         text: "Data Akan di Simpan Ke Database",
  //         type: "info",
  //         showCancelButton: true,
  //         confirmButtonColor: "#1da1f2",
  //         confirmButtonText: "Yakin!",
  //         closeOnConfirm: false,
  //         showLoaderOnConfirm: true,
  //                 }, function () { //apabila sweet alert d confirm maka akan mengirim data ke simpan.php melalui proses ajax
  //                   $.ajax({
  //                     url: "http://localhost:8090/ukom2017_141510303/admin/buku/tambah",
  //                     type: "POST",
  //                       data: $('#formInput').serialize(), //serialize() untuk mengambil semua data di dalam form
  //                       dataType: "html",
  //                       success: function(){
  //                         setTimeout(function(){
  //                           swal({
  //                             title:"Data Berhasil Disimpan",
  //                             text: "Terimakasih",
  //                             type: "success"
  //                           }, function(){
  //                             window.location="http://localhost:8090/ukom2017_141510303/admin/buku/";
  //                           });
  //                         }, 2000);
  //                       },
  //                       error: function (xhr, ajaxOptions, thrownError) {
  //                         setTimeout(function(){
  //                           swal("Error", "Tolong Cek Koneksi Lalu Ulangi", "error");
  //                         }, 2000);}
  //                       });
  //                 });
  //     }
  //   });
  $('.js-select2').select2();

</script>
<?=js('bootstrap-datepicker.min.js')?>
<?=js('bootstrap-timepicker.js')?>
