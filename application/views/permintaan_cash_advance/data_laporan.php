<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
   <div class="content">
      <div class="container">
         <br>
         <ol class="breadcrumb" style=" background-image: linear-gradient(to top,rgb(35, 32, 223),rgba(11, 76, 255, 0.63)) !important;">
            <li><a style="text-decoration: none; color:white;" href="#">Laporan Cash Advance</a></li>

         </ol>
         <div class="card card-outline card-primary">
            <div class="card-body">
               <?= $this->session->flashdata('message'); ?>
               <!-- <div class="float-right mb-2"><a href="#" class="btn btn-sm btn-success" data-toggle="modal" data-target="#Add"><span class="fa fa-plus"></span> Tambah Pegawai</a></div> -->
               <table id="serverside" class="table table-striped table-bordered">
                  <thead>
                     <tr class="bg-primary text-center">
                        <th>No</th>
                        <th>Nama</th>
                        <th>Divisi</th>
                        <th>Jabatan</th>
                        <th>Name Site</th>
                        <th>Project</th>
                        <th>Customer</th>
                        <th>Tanggal</th>
                        <th>Action</th>
                     </tr>
                  </thead>
                  <tbody class="text-center">
                  </tbody>
               </table>
               <br>
            </div>
         </div>
      </div>
   </div>
</div>