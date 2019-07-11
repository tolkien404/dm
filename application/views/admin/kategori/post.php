<?php
$this->load->view('template/head');
?>
<link href="<?php echo base_url() ?>/assets/vendor/select2/select2-bootstrap.min.css" rel="stylesheet" />
<link href="<?php echo base_url() ?>/assets/vendor/select2/select2.css" rel="stylesheet" />
<link href="<?php echo base_url() ?>/assets/vendor/select2/select2.min.css" rel="stylesheet" />
<ol class="breadcrumb">
  <li class="breadcrumb-item"><a href="<?= base_url().'admin/Ketgori'?>">Kategori</a></li>
  <li class="breadcrumb-item active">Post</li>
</ol>
<div class="col-md-12">
    <div class="card">
      <div class="card-block">
        <h5>Tambah Data Kategori</h5>
        <br>
        <form action="<?=base_url()?>admin/kategori/tambah" id="formInput" method="post" enctype="multipart/form-data">
          <fieldset class="form-group">
            <input type="hidden" class="form-control" name="i-id_kategori" id="i-id_kategori">
            <input type="text" class="form-control" name="i-kategori" id="i-kategori" placeholder="Nama Kategori">
            <small class="text-help">Pastikan tidak salah</small>
          </fieldset>
              <button type="submit" name="submit" class="btn btn-success">Tambah Data</button>
              <?php echo anchor('admin/pasok','Kembali',array('class'=>'btn btn-danger'))?>
        </form>
      </div>
    </div>
  </div>

   <script src="<?php echo base_url() ?>/assets/vendor/select2/select2.full.min.js"></script>
   <script src="<?php echo base_url() ?>/assets/vendor/select2/select2.min.js"></script>

<?php
$this->load->view('template/menu');
?>
<script>
$("#produk").addClass('active');
$('#formInput').submit(function(e){
      e.preventDefault();
      var valid=true;
      $(this).find('.textbox').each(function(){
        if (! $(this).val()){
          get_error_text(this);
          valid = false;
          $('html,body').animate({scrollTop: 0},"slow");
        }
        if ($(this).hasClass('no-valid')){
          valid = false;
          $('html,body').animate({scrollTop: 0},"slow");
        }
      });
      if (valid){
        swal({
          title: "Konfirmasi Simpan Data",
          text: "Data Akan di Simpan Ke Database",
          type: "info",
          showCancelButton: true,
          confirmButtonColor: "#1da1f2",
          confirmButtonText: "Yakin!",
          closeOnConfirm: false,
          showLoaderOnConfirm: true,
                  }, function () { //apabila sweet alert d confirm maka akan mengirim data ke simpan.php melalui proses ajax
                    $.ajax({
                      url: "http://194.168.2.80:8080/ukom2017/ukom2017_141510303/admin/kategori/tambah",
                      type: "POST",
                        data: $('#formInput').serialize(), //serialize() untuk mengambil semua data di dalam form
                        dataType: "html",
                        success: function(){
                          setTimeout(function(){
                            swal({
                              title:"Data Berhasil Disimpan",
                              text: "Terimakasih",
                              type: "success"
                            }, function(){
                              window.location="http://194.168.2.80:8080/ukom2017/ukom2017_141510303/admin/kategori/";
                            });
                          }, 2000);
                        },
                        error: function (xhr, ajaxOptions, thrownError) {
                          setTimeout(function(){
                            swal("Error", "Tolong Cek Koneksi Lalu Ulangi", "error");
                          }, 2000);}
                        });
                  });
      }
    });
</script>