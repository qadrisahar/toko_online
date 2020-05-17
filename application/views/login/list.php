<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo $title; ?></title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/bower_components/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/plugins/iCheck/square/blue.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="<?php echo base_url() ?>"><b><?php echo $title; ?></b></a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Masukkan username dan password</p>

    <?php
      // Notifikasi error
      echo validation_errors( '<div class="alert alert-danger">', '</div>');

      // Notifikasi gagal Login
      if ($this->session->flashdata('warning')) {
        echo "<div class='alert alert-warning'>";
        echo $this->session->flashdata('warning');
        echo "</div>";
      }

      // Notifikasi sukses logout
      if ($this->session->flashdata('sukses')) {
        echo "<div class='alert alert-success'>";
        echo $this->session->flashdata('sukses');
        echo "</div>";
      }

      // Form open Login
      echo form_open(base_url('login'));
     ?>
      <div class="form-group has-feedback">
        <input type="text" name="username" class="form-control" placeholder="Username">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" name="password" class="form-control" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox"> Ingat password
            </label>
          </div><br>
          <div class="checkbox icheck">
            <label>
                <button type="submit" class="btn btn-primary">Login</button>
              <!-- <input type="checkbox"> Lupas password ? -->
            </label>
          </div>
        </div>
        <!-- /.col -->
        <br><br><br><br>
        <div class="col-xs-4">
          <a href="register.html" class="text-center">Buat akun</a>
        </div>
        <!-- /.col -->
      </div>
    <?php echo form_close(); ?>
    <br />
  </div>
</div>
<script src="<?php echo base_url() ?>assets/admin/bower_components/jquery/dist/jquery.min.js"></script>
<script src="<?php echo base_url() ?>assets/admin/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="<?php echo base_url() ?>assets/admin/plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>
</body>
</html>
