<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>LOGIN</title>

   <!-- Google Font: Source Sans Pro -->
   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
   <!-- Font Awesome -->
   <link rel="stylesheet" href="<?= base_url('assets/admin_lte/') ?>plugins/fontawesome-free/css/all.min.css">
   <!-- icheck bootstrap -->
   <link rel="stylesheet" href="<?= base_url('assets/admin_lte/') ?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">
   <!-- Theme style -->
   <link rel="stylesheet" href="<?= base_url('assets/admin_lte/') ?>dist/css/adminlte.min.css">
   <!-- select 2 -->
   <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
   <link rel="stylesheet" href="<?= base_url() ?>assets/admin_lte/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
</head>

<body class="hold-transition login-page" style="position:relatif; background-image: url(<?= base_url('assets/img/tower2.jpg') ?>);background-repeat: no-repeat;background-size: cover">

   <div class="login-box">
      <!-- /.login-logo -->
      <?php if ($this->session->flashdata('pesan')) {
         echo '  <div class="alert alert-warning alert-dismissible">
               <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
               <h5><i class="icon fas fa-exclamation-triangle"></i> Maaf!</h5>';
         echo  $this->session->flashdata('pesan');
         echo ' </div>';
      } ?>

      <?php if ($this->session->flashdata('salah')) {
         echo '  <div class="alert alert-danger alert-dismissible">
               <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
               <h5><i class="icon fas fa-exclamation-triangle"></i> Maaf !</h5>';
         echo  $this->session->flashdata('salah');
         echo ' </div>';
      } ?>

      <?php if ($this->session->flashdata('berhasil')) {
         echo '  <div class="alert alert-success alert-dismissible">
               <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
               <h5><i class="icon fas fa-exclamation-triangle"></i> Baiklah !</h5>';
         echo  $this->session->flashdata('berhasil');
         echo ' </div>';
      } ?>
      <div class="card card-outline card-info" style="border-bottom-left-radius: 20px;border-bottom-right-radius: 20px;">
         <div class="card-header text-center">
            <img src="<?= base_url('assets/') ?>img/adara.jpg" width="100px" alt="AdminLTE Logo" class="brand-image">
         </div>
         <div class="card-body" style="border-radius: 20px;">
            <div class="tab-content" id="pills-tabContent">
               <?php if ($this->session->flashdata('notif')) {
                  echo $this->session->flashdata('notif');
               } ?>
               <div class="card p-2" style="max-width: 20rem;">
                  <?= form_open('auth'); ?>
                  <div class="p-3">
                     <div class=" form-group">
                        <input type="text" class="form-control" placeholder="Username" name="username" />
                     </div>
                     <div class="form-group">
                        <input type="password" class="form-control" placeholder="Password" name="password" />
                     </div>
                  </div>
                  <center>
                     <?php echo $widget; ?>
                     <?php echo $script; ?>
                  </center>
                  <br>
                  <input class="btn btn-block btn-md btn-primary" type="submit" value="Login" />
                  <!-- <button type="submit">Login</button> -->
                  <?= form_close(); ?>
               </div>
            </div>
         </div>
         <!-- /.card-body -->
      </div>
      <!-- /.card -->
   </div>
   <!-- /.login-box -->

   <!-- jQuery -->
   <script src="<?= base_url('assets/admin_lte/') ?>plugins/jquery/jquery.min.js"></script>
   <!-- Bootstrap 4 -->
   <script src="<?= base_url('assets/admin_lte/') ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
   <!-- AdminLTE App -->
   <script src="<?= base_url('assets/admin_lte/') ?>dist/js/adminlte.min.js"></script>
   <!-- select2 -->
   <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
</body>

</html>