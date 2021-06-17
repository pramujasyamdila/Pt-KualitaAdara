<!-- Navbar -->
<nav class="main-header navbar navbar-expand-md navbar-light navbar-black" style=" background-image: linear-gradient(to top, rgb(252, 252, 252), rgb(75, 136, 250))!important;">
   <div class="container">
      <a href="<?= base_url('assets/admin_lte/') ?>index3.html" class="navbar-brand">
         <img src="<?= base_url('assets/') ?>img/adara.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
         <span class="brand-text font-weight-light"><b> Kualita Adara </b></span>
      </a>

      <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse order-3" id="navbarCollapse">
         <!-- Left navbar links -->
         <ul class="navbar-nav">
            <li class="nav-item">
               <a href="index3.html" class="nav-link">Dashboard</a>
            </li>
            <li class="nav-item">
               <a href="#" class="nav-link">Sumary Report </a>
            </li>
            <li class="nav-item">
               <a href="#" class="nav-link">Request Cuti </a>
            </li>
            <li class="nav-item dropdown">
               <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Master</a>
               <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                  <li><a href="<?= base_url('permintaan_dana') ?>" class="dropdown-item">PERMINTAAN DANA</a></li>
                  <li><a href="#" class="dropdown-item">PERMINTAAN CASH ADVANCE</a></li>
                  <li><a href="#" class="dropdown-item">LAPORAN CASH ADVANCE</a></li>
                  <li><a href="#" class="dropdown-item">FORMULIR TUGAS LUAR KOTA</a></li>
                  <li><a href="#" class="dropdown-item">PENGAJUAN CASH ADVANCE LUAR KOTA</a></li>
                  <li><a href="#" class="dropdown-item">LAPORAN CASH ADVANCE LUAR KOTA</a></li>
               </ul>
            </li>
         </ul>
         <!-- Right navbar links -->
         <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
            <!-- Messages Dropdown Menu -->
            <li class="nav-item dropdown">
               <a class="nav-link" href="#">
                  <img src="<?= base_url('assets/') ?>img/adara.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                  Wellcome <?= $this->session->userdata('username') ?>
               </a>
            </li>
            <!-- Notifications Dropdown Menu -->
            <li class="nav-item dropdown">
               <a class="nav-link" data-toggle="dropdown" href="#">
                  <i class="fas fa-user-cog"></i>
               </a>
               <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                  <span class="dropdown-header">Setting</span>
                  <div class="dropdown-divider"></div>
                  <a href="#" class="dropdown-item">
                     <i class="fas fa-user mr-2"></i> My Profile <?= $this->session->userdata('username'); ?>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a href="<?= base_url('auth/logout') ?>" class="dropdown-item">
                     <i class="fas fa-sign-out-alt  mr-2"></i> LogOut
                  </a>
            </li>
         </ul>
      </div>
</nav>
<!-- /.navbar -->