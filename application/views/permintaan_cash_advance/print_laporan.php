<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
   <br><br>
   <section class="content">
      <div class="container-fluid">
         <!-- Main content -->
         <div class="invoice p-3 mb-3">
            <!-- title row -->
            <div class="row">
               <div class="col-12">
                  <center>
                     <h2>
                        <img src="<?= base_url('assets/img/adara.jpg') ?>" width="100px" class="mr-3">
                        PT.KUALITA ADARA KARYA
                     </h2>
                  </center>
                  <hr style="border: 1px solid black;">
                  <hr style="border: 1px solid black;">
               </div>
               <!-- /.col -->
            </div>
            <!-- info row -->
            <div class="row invoice-info">
               <div class="col-12 table-responsive">
                  <table class="table table-striped">
                     <tr>
                        <th>Nama</th>
                        <th><?= $laporanw['nama_permintaan_cash_advance'] ?></th>
                        <!-- bates -->
                        <th>Tanggal</th>
                        <th><?= $laporanw['tanggal_permintaan_cash_advance'] ?></th>
                     </tr>

                     <tr>
                        <th>Divisi</th>
                        <th><?= $laporanw['divisi_permintaan_cash_advance'] ?></th>
                        <!-- bates -->
                        <th>Nama Site</th>
                        <th><?= $laporanw['nama_site_permintaan_cash_advance'] ?></th>
                     </tr>
                     <tr>
                        <th>Jabatan</th>
                        <th><?= $laporanw['jabatan_permintaan_cash_advance'] ?></th>
                        <!-- bates -->
                        <th>Project</th>
                        <th><?= $laporanw['project_permintaan_cash_advance'] ?></th>
                     </tr>
                     <tr>
                        <th>Total</th>

                        <th> <?= "Rp " . number_format($total_deskripsi['total_deskripsi_permintaan_cash_advance'], 2, ',', '.') ?></th>
                        <!-- bates -->
                        <th>Customer</th>
                        <th><?= $laporanw['customer_permintaan_cash_advance'] ?></th>
                     </tr>
                  </table>

               </div>
            </div>
            <!-- /.row -->

            <!-- Table row -->
            <div class="row">
               <div class="col-12 table-responsive">
                  <table class="table table-striped">
                     <thead>
                        <tr>
                           <th colspan="5">
                              <h3>Deskripsi</h3>
                           </th>
                        </tr>
                        <tr>
                           <th>No</th>
                           <th>Nama Deskripsi</th>
                           <th>Jumlah</th>
                           <th>Harga Satuan</th>
                           <th>Total</th>
                        </tr>
                     </thead>
                     <tbody>
                        <?php $no = 1;
                        foreach ($deskripsi as $key => $value) { ?>
                           <tr>
                              <td><?= $no++ ?></td>
                              <td><?= $value['nama_deskripsi_permintaan_cash_advance'] ?></td>
                              <td><?= $value['harga_satuan_deskripsi_permintaan_cash_advance'] ?></td>
                              <td><?= $value['harga_deskripsi_permintaan_cash_advance'] ?></td>
                              <td><?= $value['total_deskripsi_permintaan_cash_advance'] ?></td>
                           </tr>
                        <?php } ?>
                     </tbody>
                  </table>
                  <table class="table table-striped">
                     <tr>
                        <th>
                           <h5>Total</h5>
                        </th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th class="float-right"> <?= "Rp " . number_format($total_deskripsi['total_deskripsi_permintaan_cash_advance'], 2, ',', '.') ?></th>
                     </tr>
                  </table>
               </div>
               <!-- /.col -->
            </div>
            <!-- /.row -->

            <div class="row">

            </div>
            <!-- /.invoice -->
         </div><!-- /.col -->
      </div><!-- /.row -->
</div><!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- <script>
   window.print();
</script> -->