<?php
$this->load->view('template/head');
?>
<link href="<?php echo base_url() ?>/assets/vendor/select2/select2-bootstrap.min.css" rel="stylesheet" />
<link href="<?php echo base_url() ?>/assets/vendor/select2/select2.css" rel="stylesheet" />
<link href="<?php echo base_url() ?>/assets/vendor/select2/select2.min.css" rel="stylesheet" />

<ol class="breadcrumb">
  <li class="breadcrumb-item"><a href="<?= base_url().'admin/pasok'?>">Pasok</a></li>
  <li class="breadcrumb-item active">Post</li>
</ol>

<div class="col-md-12">
  <div class="card">
    <div class="card-block">
      <h5>Tambah Data Pasok</h5>
      <br>
      <form action="<?=base_url()?>admin/pasok/tambah" id="formInput" method="post" enctype="multipart/form-data">
        <div class="form-group row">
          <label for="inputEmail3" class="col-sm-3 col-form-label">Nama Distributor</label>
          <div class="col-sm-9">
            <select class='js-select2 form-control' name='i-nama_distributor' id='i-nama_distributor' style='width: 100%;' data-placeholder='Pilih Distributor'>
              <option value='' disabled selected></option>
              <?php
              foreach ($distributor as $key) {
                echo "<option value='".$key['id_distributor']."'>".$key['nama_distributor']."</option>";
              }
              ?>
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label for="inputPassword3" class="col-sm-3 col-form-label">Judul Buku</label>
          <div class="col-sm-9">
            <select class='js-select2 form-control' name='i-judul' id='i-judul' style='width: 100%;' data-placeholder='Pilih Judul Buku'>
              <option value='' disabled selected></option>
              <?php
              foreach ($buku as $key) {
                echo "<option value='".$key['id_buku']."'>".$key['judul']."</option>";
              }
              ?>
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label for="inputPassword3" class="col-sm-3 col-form-label">Jumlah Pasok</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" id="i-qty" name="i-qty" placeholder="Jumlah Buku">
          </div>
        </div>
        <div class="form-group row mb-0">
          <div class="offset-sm-3 col-sm-9">
            <button type="submit" name="submit" class="btn btn-success">Tambah Data</button>
            <?php echo anchor('admin/pasok','Kembali',array('class'=>'btn btn-danger'))?>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

<?php
$this->load->view('template/menu');
?>
<script src="<?php echo base_url() ?>/assets/vendor/select2/select2.full.min.js"></script>
<script src="<?php echo base_url() ?>/assets/vendor/select2/select2.min.js"></script>
<script type="text/javascript">
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
                      url: "http://194.168.2.80:8080/ukom2017/ukom2017_141510303/admin/pasok/tambah",
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
                              window.location="http://194.168.2.80:8080/ukom2017/ukom2017_141510303/admin/pasok/";
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
  $('.js-select2').select2();
</script>