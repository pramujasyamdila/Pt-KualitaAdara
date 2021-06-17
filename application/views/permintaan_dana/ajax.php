<script>
   $(document).ready(function() { // Ketika halaman sudah diload dan siap
      $("#btn-tambah-deskripsi").click(function() { // Ketika tombol Tambah Data deskripsi di klik
         var jumlah = parseInt($("#jumlah-deskripsi").val()); // Ambil jumlah data deskripsi pada textbox jumlah-deskripsi
         var nextdeskripsi = jumlah + 1; // Tambah 1 untuk jumlah deskripsi nya
         // Kita akan menambahkan deskripsi dengan menggunakan append
         // pada sebuah tag div yg kita beri id insert-deskripsi
         $("#insert-deskripsi").append(
            '<table class="table table table-bordered table-striped">' +
            '<thead class="text-center">' +
            '<tr>' +
            '</tr>' +
            '</thead>' +
            '<tbody class="text-center">' +
            '<tr>' +
            '<td><input type="text" name="nama_deskripsi_permintaan_dana[]" class="form-control"></td>' +
            '<td><input type="text" name="harga_satuan_deskripsi_permintaan_dana[]" class="form-control"></td>' +
            '<td><input type="text" name="harga_deskripsi_permintaan_dana[]" class="form-control"></td>' +
            '<td><input type="text" name="total_deskripsi_permintaan_dana[]" class="form-control"></td>' +
            '</tr>' +
            '</tbody>' +
            '</table>');

         $("#jumlah-deskripsi").val(nextdeskripsi); // Ubah value textbox jumlah-deskripsi dengan variabel nextdeskripsi
      });
      // Buat fungsi untuk mereset deskripsi ke semula
      $("#btn-reset-deskripsi").click(function() {
         $("#insert-deskripsi").html(""); // Kita kosongkan isi dari div insert-deskripsi
         $("#jumlah-deskripsi").val("1"); // Ubah kembali value jumlah deskripsi menjadi 1
      });

   });

   $(function() {
      // Summernote
      $('#summernote').summernote()

      // CodeMirror
      CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
         mode: "htmlmixed",
         theme: "monokai"
      });
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
         url: '<?= base_url('Permintaan_dana/save'); ?>',
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
</script>