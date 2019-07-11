<?php
$this->load->view('template/head');
?>
<link href="<?php echo base_url() ?>/assets/vendor/select2/select2-bootstrap.min.css" rel="stylesheet" />
<link href="<?php echo base_url() ?>/assets/vendor/select2/select2.css" rel="stylesheet" />
<link href="<?php echo base_url() ?>/assets/vendor/select2/select2.min.css" rel="stylesheet" />
<ol class="breadcrumb">
  <li class="breadcrumb-item"><a href="<?= base_url().'admin/distributor'?>">Distributor</a></li>
  <li class="breadcrumb-item active">Post</li>
</ol>
<div class="col-md-12">
    <div class="card">
      <div class="card-block">
        <h5>Tambah Data Distributor</h5>
        <br>
        <form action="<?php echo base_url('admin/Distributor/tambah') ?>" id="formInput" method="post" enctype="multipart/form-data">
          <div class="form-group row">
            <label for="inputPassword3" class="col-sm-3 col-form-label">Nama</label>
            <div class="col-sm-9">
              <input type="text" required  class="form-control textbox" id="nama" name="i-nama-distributor" placeholder="Nama DIstributor">
              <span class="text-warning" ></span>
            </div>
          </div>
          <div class="form-group row has-feedback">
            <label for="inputPassword3" class="col-sm-3 col-form-label">Alamat Distributor</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="alamat" name="i-alamat" placeholder="Alamat">
            </div>
          </div>
         <div class="form-group row ">
            <label for="inputPassword3" class="col-sm-3 col-form-label">Nomer Telepon</label>
            <div class="col-sm-9 has-feedback">
              <input type="text" class="form-control textbox phone-num" id="hp" name="i-telepon" placeholder="Telepon">
              <i class="form-control-feedback"></i>
              <span class="text-warning" ></span>
            </div>
          </div>
          <div class="form-group row mb-0">
            <div class="offset-sm-3 col-sm-9">
              <button type="submit" name="submit" class="btn btn-success ">Tambah Data</button>
              <?php echo anchor('distributor/distributor','Kembali',array('class'=>'btn btn-danger'))?>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

<?php
$this->load->view('template/menu');
?>
<script>
$("#distributor").addClass('active');
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
                      url: "http://194.168.2.80:8080/ukom2017/ukom2017_141510303/admin/distributor/tambah",
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
                              window.location="http://194.168.2.80:8080/ukom2017/ukom2017_141510303/admin/distributor/";
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
   <script src="<?php echo base_url() ?>/assets/vendor/select2/select2.full.min.js"></script>
   <script src="<?php echo base_url() ?>/assets/vendor/select2/select2.min.js"></script>