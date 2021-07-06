<script>
   $(document).ready(function() { // Ketika halaman sudah diload dan siap

      var i = 1;
      $('#add').click(function() {
         i++;

         $('#dynamic_field').append('<tr id="row' + i + '">' +
            '<td><input type="text"  name="nama_deskripsi_permintaan_cash_advance[]" class="form-control"></td>' +
            '<td><input type="text"  id="satuan' + i + '" name="harga_satuan_deskripsi_permintaan_cash_advance[]" class="form-control"></td>' +
            '<td><input type="text"  id="harga' + i + '" name="harga_deskripsi_permintaan_cash_advance[]" class="form-control"></td>' +
            '<td><input type="text"  id="jumlah' + i + '"  name="total_deskripsi_permintaan_cash_advance[]" class="form-control"></td>' +
            '<td><button type="button" name="remove" id="' + i + '" class="btn btn-danger btn_remove">X</button></td>' +
            '</tr>');

         var harga_after = $('#jumlah').val()
         $("#satuan" + i + ", #harga" + i + "").keyup(function() {
            var harga2 = $("#harga" + i + "").val();
            var satuan2 = $("#satuan" + i + "").val();
            var jumlah2 = parseInt(satuan2) * parseInt(harga2);
            $("#jumlah" + i + "").val(jumlah2);
            $('#totalnya').text(jumlah2)
         });
      });

      $(document).on('click', '.btn_remove', function() {
         var button_id = $(this).attr("id");
         $('#row' + button_id + '').remove();
      });

   });

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
   var modalDetail = $('#modalDetail');
   var tabledata = $('#serverside');
   var tabledata2 = $('#serverside2');
   var formData = $('#formData');
   var btnsave = $('#btnSave')

   // message pesan berhasil di simpanya
   function message(icon, text) {
      swal({
         title: "success!!!",
         text: text,
         icon: icon,
      });
   }

   // simpan data
   function save() {
      $.ajax({
         method: "POST",
         url: '<?= base_url('permintaan_cash_advance/save'); ?>',
         data: formData.serialize(),
         dataType: "JSON",
         success: function(response) {
            if (response == 'success') {
               formData[0].reset();
               message('success', 'Data Permintaan Dana Berhasil Di Tambah')
            }
         },
         error: function() {
            console.log(error);
         }
      })
   }

   $("#satuan, #harga").keyup(function() {
      var harga = $("#harga").val();
      var satuan = $("#satuan").val();

      var jumlah = parseInt(harga) * parseInt(satuan);
      $("#jumlah").val(jumlah);
   });
</script>


<!-- cash Adavance -->
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
            "url": "<?= base_url('permintaan_cash_advance/getdata') ?>",
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
      }
      if (type == 'print') {
         saveData = 'print';
      }
      $.ajax({
         type: "GET",
         url: "<?= base_url('permintaan_cash_advance/byid/'); ?>" + id,
         dataType: "JSON",
         success: function(response) {
            if (type == 'edit') {
               location.replace('<?= base_url('permintaan_cash_advance/edit/') ?>' + response.id_permintaan_cash_advance);
            }
            if (type == 'print') {
               location.replace('<?= base_url('permintaan_cash_advance/print_laporan/') ?>' + response.id_permintaan_cash_advance);
            } else {
               deleteQuestion(response.id_permintaan_cash_advance, response.nama_permintaan_cash_advance);
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