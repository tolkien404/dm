<?php
$this->load->view('template/headeradmin');
?>
<?php
$this->load->view('template/base_head');
?>
<title>Berita - Admin Control</title>

    <link href="<?php echo base_url('assets/global/vendor/select2/select2.css') ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('assets/global/vendor/blueimp-file-upload/jquery.fileupload.css') ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('assets/global/vendor/dropify/dropify.css') ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('assets/global/vendor/bootstrap-markdown/bootstrap-markdown.css') ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('assets/global/vendor/summernote/summernote.css') ?>" rel="stylesheet" type="text/css">

<div class="page">
 <div class="page-header">
        <h1 class="page-title">Input Berita</h1>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item"><a href="#">Data Berita</a></li>
          <li class="breadcrumb-item active">Input</li>
        </ol>
 </div>
  <div class="page-content container-fluid">
    <div class="panel">
        <div class="panel-body container-fluid">
        <base href="<?php echo base_url(); ?>" />
          <?php echo form_open_multipart('admin/Berita/save',array('class' => ' form-horizontal'))?>
                  <input type="hidden" id="i-id_berita" name="i-id-berita">      
                <div class="form-group form-material" data-plugin="formMaterial">
                  <label class="form-control-label" for="inputText">Judul</label>
                  <input type="text" class="form-control" id="i-judul" name="i-judul" placeholder="Masukan Judul Berita">
                </div>
                <div class="form-group form-material" data-plugin="formMaterial">
                  <label class="form-control-label" for="inputText">Cover</label>
                    <input class="form-control" data-plugin="dropify" type="file" id="input-file-now-custom-1" name="filefoto" >
                </div>
                <div class="form-group form-material" data-plugin="formMaterial">
                  <label class="form-control-label" for="inputDeskripsi">Deskripsi</label>
                  <div id="summernote" data-plugin="summernote">
                    <textarea data-provide="markdown" data-iconlibrary="fa" rows="11" name="i-deskripsi" placeholder="Masukan Deskripsi"></textarea>
                  </div>
                </div>
                <div class="form-group form-material" data-plugin="formMaterial">
                  <label class="form-control-label" for="inputKategori">Kategori</label>
                  <input type="text" class="form-control" id="i-kategori" name="i-kategori" placeholder="Kategori">
                </div>
                <div class="wizard-buttons">
                  <button class="btn btn-primary btn-outline float-left waves-effect waves-classic" type="submit" role="button">Submit</button>
                </div>
          <?php echo form_close(); ?>
        </div>
    </div>
  </div>
</div>
<?php
$this->load->view('template/footeradmin');
?>
<script src="<?php echo base_url('assets/global/vendor/select2/select2.full.min.js')?>"></script>
<script src="<?php echo base_url('assets/global/js/Plugin/select2.js')?>"></script>
<script src="<?php echo base_url('assets/global/js/Plugin/summernote.js')?>"></script>
<script src="<?php echo base_url('assets/global/vendor/jquery-ui/jquery-ui.js')?>"></script>
<script src="<?php echo base_url('assets/global/vendor/asprogress/jquery-asProgress.js')?>"></script>
<script src="<?php echo base_url('assets/global/vendor/blueimp-tmpl/tmpl.js')?>"></script>
<script src="<?php echo base_url('assets/global/vendor/blueimp-load-image/load-image.all.min.js')?>"></script>
<script src="<?php echo base_url('assets/global/vendor/blueimp-canvas-to-blob/canvas-to-blob.js')?>"></script>
<script src="<?php echo base_url('assets/global/vendor/blueimp-file-upload/jquery.fileupload-process.js')?>"></script>
<script src="<?php echo base_url('assets/global/vendor/blueimp-file-upload/jquery.fileupload-image.js')?>"></script>
<script src="<?php echo base_url('assets/global/vendor/blueimp-file-upload/jquery.fileupload-audio.js')?>"></script>
<script src="<?php echo base_url('assets/global/vendor/blueimp-file-upload/jquery.fileupload-video.js')?>"></script>
<script src="<?php echo base_url('assets/global/vendor/blueimp-file-upload/jquery.fileupload-validate.js')?>"></script>
<script src="<?php echo base_url('assets/global/vendor/blueimp-file-upload/jquery.fileupload-ui.js')?>"></script>
<script src="<?php echo base_url('assets/global/vendor/bootstrap-markdown/bootstrap-markdown.js')?>"></script>
<script src="<?php echo base_url('assets/global/vendor/marked/marked.js')?>"></script>
<script src="<?php echo base_url('assets/global/vendor/to-markdown/to-markdown.js')?>"></script>
<script src="<?php echo base_url('assets/global/js/Plugin/summernote.js')?>"></script>
<script src="<?php echo base_url('assets/global/vendor/dropify/dropify.min.js')?>"></script>

<script>
      (function(document, window, $){
        'use strict';
    
        var Site = window.Site;
        $(document).ready(function(){
          Site.run();
        });
      })(document, window, jQuery);
    </script>
