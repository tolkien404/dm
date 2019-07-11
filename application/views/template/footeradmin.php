
</div>
</div>
<?php
if ($this->session->userdata('akses') == 'Admin') {
    $c = "";
    $d = "invisible";
    $e = "hidden";
} else if ($this->session->userdata('akses') == 'User') {
    $c = "invisible";
    $d = "";
    $e = "hidden";
} else {
    $c = "invisible";
    $d = "invisible";
    $e = "";
}
?>
    <!-- Footer -->
    <footer class="site-footer <?php echo $c; ?>">
      <div class="site-footer-legal">© 2018 <a href="#">Iluni DM Unbor</a></div>
      <div class="site-footer-right">
        Crafted with <i class="red-600 icon md-favorite"></i> by <a href="#">Raihan Studio</a>
      </div>
    </footer>



    <!-- Core  -->
    <script src="<?php echo base_url('assets/global/vendor/babel-external-helpers/babel-external-helpers.js') ?>"></script>
    <script src="<?php echo base_url('assets/global/vendor/jquery/jquery.js') ?>"></script>
    <script src="<?php echo base_url('assets/global/vendor/popper-js/umd/popper.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/global/vendor/bootstrap/bootstrap.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/global/vendor/animsition/animsition.js') ?>"></script>
    <script src="<?php echo base_url('assets/global/vendor/mousewheel/jquery.mousewheel.js') ?>"></script>
    <script src="<?php echo base_url('assets/global/vendor/asscrollbar/jquery-asScrollbar.js') ?>"></script>
    <script src="<?php echo base_url('assets/global/vendor/asscrollable/jquery-asScrollable.js') ?>"></script>
    <script src="<?php echo base_url('assets/global/vendor/ashoverscroll/jquery-asHoverScroll.js') ?>"></script>
    <script src="<?php echo base_url('assets/global/vendor/waves/waves.js') ?>"></script>

    <script src="<?php echo base_url('assets/global/vendor/switchery/switchery.js') ?>"></script>
    <script src="<?php echo base_url('assets/global/vendor/intro-js/intro.js') ?>"></script>
    <script src="<?php echo base_url('assets/global/vendor/screenfull/screenfull.js') ?>"></script>
    <script src="<?php echo base_url('assets/global/vendor/slidepanel/jquery-slidePanel.js') ?>"></script>

    <!-- Scripts -->
    <script src="<?php echo base_url('assets/global/js/Component.js') ?>"></script>
    <script src="<?php echo base_url('assets/global/js/Plugin.js') ?>"></script>
    <script src="<?php echo base_url('assets/global/js/Base.js') ?>"></script>
    <script src="<?php echo base_url('assets/global/js/Config.js') ?>"></script>

    <script src="<?php echo base_url('assets/js/Section/Menubar.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/Section/Sidebar.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/Section/PageAside.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/Section/GridMenu.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/Plugin/menu.js') ?>"></script>

    <script src="<?php echo base_url('assets/global/js/config/colors.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/config/tour.js') ?>"></script>

    <script>Config.set('assets', '../assets');</script>

    <!-- Page -->
    <script src="<?php echo base_url('assets/js/Site.js') ?>"></script>
    <script src="<?php echo base_url('assets/global/js/Plugin/asscrollable.js') ?>"></script>
    <script src="<?php echo base_url('assets/global/js/Plugin/slidepanel.js') ?>"></script>
    <script src="<?php echo base_url('assets/global/js/Plugin/switchery.js') ?>"></script>
    <script src="<?php echo base_url('assets/global/vendor/sweetalert/dist/sweetalert.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/global/vendor/sweetalert/dist/sweetalert-dev.js') ?>"></script>



    <script>
      (function(document, window, $){
        'use strict';

        var Site = window.Site;
        $(document).ready(function(){
          Site.run();
        });
      })(document, window, jQuery);
    </script>
    <script type="text/javascript">
    $('.hapus').on("click", function (e) {
            e.preventDefault();
            var url = $(this).attr('href');
            swal({
              title: "Anda yakin ingin menghapus data ini?",
              text: "Data yang sudah dihapus tidak bisa dikembalikan",
              type: "warning",
              showCancelButton: true,
              confirmButtonColor: "#DD6B55",
              confirmButtonText: "Ya, hapus data",
              cancelButtonText: "Tidak, jangan dihapus",
              closeOnConfirm: false ,
              closeOnCancel: false
            },
            function(isConfirm){
              if (isConfirm) {
                //swal("Terhapus", "Data berhasil dihapus.", "success");
                swal({
                    title: "Terhapus",
                    text: "Data berhasil dihapus.",
                    type: "success"
                },
                function(ok) {
                    if(ok){
                        window.location.replace(url);
                    }
                });
              } else {
                swal("Batal", "Data batal dihapus", "error");
              }
            });
        });
      </script>
  </body>
</html>
