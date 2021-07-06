<script>
   $(function() {
      // Summernote
      $('#summernote').summernote()
   })

   $(function() {
      //Initialize Select2 Elements
      $('.select2').select2()

      //Initialize Select2 Elements
      $('.select2bs4').select2({
         theme: 'bootstrap4'
      })
   })

   var saveData;
   var modal = $('#modalData');
   var tabledata = $('#serverside');
   var formData = $('#formData');
   var modaltitle = $('#modalTitle');
   var btnsave = $('#btnSave')
   $(document).ready(function() {
      tabledata.DataTable({
         "responsive": true,
         "autoWidth": false,
         "processing": true,
         "serverSide": true,
         "order": [],
         "ajax": {
            "url": "<?= base_url('pegawai/getdata') ?>",
            "type": "POST"
         },
         "columnDefs": [{
            "target": [-1],
            "orderable": false
         }],
         "oLanguage": {
            "sSearch": "Pencarian : ",
            "sEmptyTable": "Data Tidak Tersedia",
            "sLoadingRecords": "Silahkan Tunggu - loading...",
            "sLengthMenu": "Menampilkan &nbsp;  _MENU_  &nbsp;   Data",
            "sZeroRecords": "Tidak Ada Data pegawai Yang Di Cari",
            "sProcessing": "Memuat Data...."
         }
      });
   });

   function relodTable() {
      tabledata.DataTable().ajax.reload();
   }

   function message(icon, text) {
      swal({
         title: "Mantaps!!!",
         text: text,
         icon: icon,
      });
   }

   function deleteQuestion(id_pegawai, nama_pegawai) {
      swal({
            title: "Apakah Anda Yakin!! ?",
            text: "Ingin Menghapus Data   " + nama_pegawai + "?",
            icon: "warning",
            buttons: true,
            dangerMode: true,
         })
         .then((willDelete) => {
            if (willDelete) {
               deleteData(id_pegawai);
            } else {
               message('success', 'Data Tidak Jadi Di Hapus, Data Kamu Aman!!')
            }
         });
   }

   function add() {
      saveData = 'tambah';
      formData[0].reset();
      modal.modal('show');
      modaltitle.text('Tambah Data');
   }


   function byid(id, type) {
      if (type == 'edit') {
         saveData = 'edit';
         formData[0].reset();
      }
      $.ajax({
         type: "GET",
         url: "<?= base_url('unit_kerja/byid/'); ?>" + id,
         dataType: "JSON",
         success: function(response) {
            if (type == 'edit') {
               modaltitle.text('Ubah Data');
               $('[name="id_pegawai"]').val(response.id_pegawai);
               $('[name="nama_pegawai"]').val(response.nama_pegawai);
               $('[name="kode_unit_kerja"]').val(response.kode_unit_kerja);
               modal.modal('show');
            } else {
               deleteQuestion(response.id_pegawai, response.nama_pegawai, response.kode_unit_kerja);
            }
         }
      })
   }

   function deleteData(id) {
      $.ajax({
         type: "POST",
         url: "<?= base_url('unit_kerja/delete/') ?>" + id,
         dataType: "JSON",
         success: function(response) {
            if (response == 'success') {
               relodTable();
               message('success', 'Data Berhasil Di Hapus')
            }
         }
      })
   }
</script>

<script>
   $(document).ready(function() {
      $('#formData').on('submit', function(e) {
         e.preventDefault();
         if ($('#foto_pegawai').val() == '') {
            alert("Please Select the File");
         } else {

            $.ajax({
               url: "<?php echo base_url(); ?>pegawai/add",
               //base_url() = http://localhost/tutorial/codeigniter
               method: "POST",
               data: new FormData(this),
               contentType: false,
               cache: false,
               processData: false,
               success: function(data) {
                  modal.modal('hide');
                  relodTable();
                  if (saveData == 'tambah') {
                     message('success', 'Data Berhasil Di Tambah')
                  } else {
                     modal.modal('hide');
                     relodTable();
                     message('success', 'Data Berhasil Di Ubah');
                  }
               }
            });
         }
      });
   });
</script>
<script>
   function bacaGambar(input) {
      if (input.files && input.files[0]) {
         var reader = new FileReader();
         reader.onload = function(e) {
            $('#preview_gambar').attr('src', e.target.result)
         }
         reader.readAsDataURL(input.files[0]);
      }
   }
   $('#foto_pegawai').change(function() {
      bacaGambar(this);
   });
</script>