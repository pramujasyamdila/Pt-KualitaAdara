<!-- Main Footer -->
<footer class="main-footer">
   <!-- To the right -->
   <div class="float-right d-none d-sm-inline">
      Anything you want
   </div>
   <!-- Default to the left -->
   <strong>Copyright &copy; Umar Bin Khatab</strong>
</footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="<?= base_url('assets/admin_lte/') ?>plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url('assets/admin_lte/') ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('assets/admin_lte/') ?>dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url('assets/admin_lte/') ?>dist/js/demo.js"></script>
<!-- date-range-picker -->
<script src="<?= base_url('assets/admin_lte/') ?>plugins/daterangepicker/daterangepicker.js"></script>
<!-- Summernote -->
<script src="<?= base_url('assets/admin_lte/') ?>plugins/summernote/summernote-bs4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="<?= base_url('assets/admin_lte/') ?>plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url('assets/admin_lte/') ?>plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url('assets/admin_lte/') ?>plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= base_url('assets/admin_lte/') ?>plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?= base_url('assets/admin_lte/') ?>plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?= base_url('assets/admin_lte/') ?>plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?= base_url('assets/admin_lte/') ?>plugins/jszip/jszip.min.js"></script>
<script src="<?= base_url('assets/admin_lte/') ?>plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?= base_url('assets/admin_lte/') ?>plugins/pdfmake/vfs_fonts.js"></script>
<script src="<?= base_url('assets/admin_lte/') ?>plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?= base_url('assets/admin_lte/') ?>plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?= base_url('assets/admin_lte/') ?>plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<script>
   $(document).ready(function() {
      $(".satuan2, .harga2").keyup(function() {
         var harga2 = $(".harga2").val();
         var satuan2 = $(".satuan2").val();

         var totalita2 = parseInt(harga2) + parseInt(satuan);
         $(".total2").val(totalita2);
      });
   })
</script>
</body>

</html>