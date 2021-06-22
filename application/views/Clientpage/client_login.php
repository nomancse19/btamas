<!--
	 * Program Concept By Md. Jahidul Islam Noman
     * Lead Programmer (Web,Codigniter Framwork)
     * Cell-01521451354,01772068908
     * Web- https://noman-it.com
-->
<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Cholo Transport | Client Login</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/backend/plugins/fontawesome-free/css/all.min.css">

  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/backend/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/backend/dist/css/adminlte.min.css">

</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href=""><b>Cholo</b>Transport</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg" style="font-size:20px;font-weight:bold;">Client Login</p>
      <p style="color:red;font-weight:bold;text-align:center">
        <?php echo $this->session->flashdata('error_message');
         ?>
     </p>
      <p style="color:blue;font-weight:bold;text-align:center">
        <?php echo $this->session->flashdata('success_message');
         ?>
     </p>

      <form action="<?php echo base_url();?>Cholotransport/Client/login_check" method="post">
      <input type="hidden" name="<?=ClientLoginController::csrf_name();?>" value="<?=ClientLoginController::csrf_token();?>" />
      <div class="input-group mb-3">
          <select name="user_type" class="form-control" id="">
            <option value="">Select User Type</option>
            <option value="cnf">CNF User</option>
            <option value="importer">Importer User</option>
            <option value="exporter">Exporter User</option>
           <!-- <option value="vehicles_owner">Vehicles Owner User</option> -->
          </select>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
      <div class="input-group mb-3">
          <input type="text" class="form-control" name="user_email_or_phone" placeholder="User Mobile Number Or Email Address....">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-phone"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="user_password" placeholder="User Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
      
        <div class="row">

          <!-- /.col -->
          <div class="col-8">
            <a href="<?php echo base_url();?>RequestNewVehicles" class="btn btn-warning">New Account Request</a>
          </div>
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="<?php echo base_url();?>assets/backend/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url();?>assets/backend/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url();?>assets/backend/dist/js/adminlte.min.js"></script>
</body>
</html>
