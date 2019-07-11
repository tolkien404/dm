<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Login</title>
  <link rel="apple-touch-icon" href="<?php echo base_url('assets/images/logodm.png') ?>">
    <link rel="shortcut icon" href="<?php echo base_url('assets/images/favicon.ico') ?>">
  <!-- Prevent the demo from appearing in search engines (REMOVE THIS) -->
  <meta name="robots" content="noindex">

  <!-- Material Design Icons  -->
  <!-- <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> -->

  <!-- Roboto Web Font -->
  <!-- <link href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en" rel="stylesheet"> -->
  <link href="<?php echo base_url('assets/global/css/bootstrap.min.css') ?>" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url('assets/global/css/bootstrap-extend.min.css') ?>" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url('assets/css/site.min.css') ?>" rel="stylesheet" type="text/css">

  <link href="<?php echo base_url('assets/global/vendor/animsition/animsition.css') ?>" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url('assets/global/vendor/asscrollable/asScrollable.css') ?>" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url('assets/global/vendor/switchery/switchery.css') ?>" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url('assets/global/vendor/intro-js/introjs.css') ?>" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url('assets/global/vendor/slidepanel/slidePanel.css') ?>" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url('assets/global/vendor/flag-icon-css/flag-icon.css') ?>" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url('assets/global/vendor/waves/waves.css') ?>" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url('assets/examples/css/pages/login-v3.css') ?>" rel="stylesheet" type="text/css">
  
  
  <link href="<?php echo base_url('assets/global/fonts/material-design/material-design.min.css') ?>" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url('assets/global/fonts/brand-icons/brand-icons.min.css') ?>" rel="stylesheet" type="text/css">
  <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>

</head>

<body class="animsition page-login-v3 layout-full">
  <!-- Page -->
  <div class="page vertical-align text-center" data-animsition-in="fade-in" data-animsition-out="fade-out">
    <div class="page-content vertical-align-middle">
      <div class="panel">
        <div class="panel-body">
          <div class="brand">
            <img class="brand-img" width="30%" src="<?php echo base_url('assets/images/logodm.png') ?>" alt="...">
            <h2 class="brand-text font-size-18">Iluni DM Unbor</h2>
          </div>
          <?php echo form_open('users/login', array('class' => 'form-material m-b-1')); ?>

          <!-- <form method="post" action="#" autocomplete="off"> -->
          <div class="form-group form-material floating" data-plugin="formMaterial">
            <input name="username" type="username" class="form-control" name="email" />
            <label class="floating-label">Email</label>
          </div>
          <div class="form-group form-material floating" data-plugin="formMaterial">
            <input name="password" type="password" class="form-control" name="password" />
            <label class="floating-label">Password</label>
          </div>
          <div class="form-group clearfix">
            <div class="checkbox-custom checkbox-inline checkbox-primary checkbox-lg float-left">
              <input type="checkbox" id="inputCheckbox" name="remember">
              <label for="inputCheckbox">Remember me</label>
            </div>
            <a class="float-right" href="#">Forgot password?</a>
          </div>
          <button type="submit" class="btn btn-primary btn-block btn-lg mt-40" value="Login">Sign in</button>
          <?php echo form_close(); ?>
        </div>
      </div>

      <footer class="page-copyright page-copyright-inverse">
        <p>© 2018. All RIGHT RESERVED.</p>
        <div class="social">
          <a class="btn btn-icon btn-pure" href="javascript:void(0)">
            <i class="icon bd-twitter" aria-hidden="true"></i>
          </a>
          <a class="btn btn-icon btn-pure" href="javascript:void(0)">
            <i class="icon bd-facebook" aria-hidden="true"></i>
          </a>
          <a class="btn btn-icon btn-pure" href="javascript:void(0)">
            <i class="icon bd-google-plus" aria-hidden="true"></i>
          </a>
        </div>
      </footer>
    </div>
  </div>
  <script src="<?php echo base_url('assets/global/vendor/babel-external-helpers/babel-external-helpers.js') ?>"></script>
  <script src="<?php echo base_url('assets/global/vendor/jquery/jquery.js') ?>"></script>
  <script src="<?php echo base_url('assets/global/vendor/popper-js/umd/popper.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/global/vendor/bootstrap/bootstrap.jss') ?>"></script>
  <script src="<?php echo base_url('assets/global/vendor/animsition/animsition.js') ?>"></script>
  <script src="<?php echo base_url('assets/global/vendor/mousewheel/jquery.mousewheel.js') ?>"></script>
  <script src="<?php echo base_url('assets/global/vendor/asscrollbar/jquery-asScrollbar.js') ?>"></script>
  <script src="<?php echo base_url('assets/global/vendor/asscrollable/jquery-asScrollable.js') ?>"></script>
  <script src="<?php echo base_url('assets/global/vendor/ashoverscroll/jquery-asHoverScroll.js') ?>"></script>
  <script src="<?php echo base_url('assets/global/vendor/waves/waves.js') ?>"></script>
  <script src="<?php echo base_url('assets/global/vendor/switchery/switchery.js') ?>"></script>
  <script src="<?php echo base_url('assets/global/vendor/screenfull/screenfull.js') ?>"></script>
  <script src="<?php echo base_url('assets/global/vendor/slidepanel/jquery-slidePanel.js') ?>"></script>
  <script src="<?php echo base_url('assets/global/vendor/jquery-placeholder/jquery.placeholder.js') ?>"></script>
  <script src="<?php echo base_url('assets/global/js/Component.js') ?>"></script>
  <script src="<?php echo base_url('assets/global/js/Plugin.js') ?>"></script>
  <script src="<?php echo base_url('assets/global/js/Base.js') ?>"></script>
  <script src="<?php echo base_url('assets/global/js/Config.js') ?>"></script>
  <script src="<?php echo base_url('assets/global/js/Section/Menubar.js') ?>"></script>
  <script src="<?php echo base_url('assets/global/js/Section/GridMenu.js') ?>"></script>
  <script src="<?php echo base_url('assets/global/js/Section/Sidebar.js') ?>"></script>
  <script src="<?php echo base_url('assets/global/js/Section/PageAside.js') ?>"></script>
  <script src="<?php echo base_url('assets/global/js/Plugin/menu.js') ?>"></script>
  <script src="<?php echo base_url('assets/global/js/config/colors.js') ?>"></script>
  <script src="<?php echo base_url('assets/global/js/config/tour.js') ?>"></script>

  <script src="<?php echo base_url('assets/js/Site.js') ?>"></script>
  <script src="<?php echo base_url('assets/global/js/Plugin/asscrollable.js') ?>"></script>
  <script src="<?php echo base_url('assets/global/js/Plugin/slidepanel.js') ?>"></script>
  <script src="<?php echo base_url('assets/global/js/Plugin/switchery.js') ?>"></script>
  <script src="<?php echo base_url('assets/global/js/Plugin/jquery-placeholder.js') ?>"></script>
  <script src="<?php echo base_url('assets/global/js/Plugin/material.js') ?>"></script>

  <script>
    (function(document, window, $) {
      'use strict';

      var Site = window.Site;
      $(document).ready(function() {
        Site.run();
      });
    })(document, window, jQuery);
  </script>
</body>

</html>