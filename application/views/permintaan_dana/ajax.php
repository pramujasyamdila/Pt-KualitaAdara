<script>
   $(document).ready(function() { // Ketika halaman sudah diload dan siap

      var i = 1;
      $('#add').click(function() {
         i++;

         $('#dynamic_field').append('<tr id="row' + i + '">' +
            '<td><input type="text"  name="nama_deskripsi_permintaan_dana[]" class="form-control"></td>' +
            '<td><input type="text"  id="satuan' + i + '" name="harga_satuan_deskripsi_permintaan_dana[]" class="form-control"></td>' +
            '<td><input type="text"  id="harga' + i + '" name="harga_deskripsi_permintaan_dana[]" class="form-control"></td>' +
            '<td><input type="text"  id="jumlah' + i + '"  name="total_deskripsi_permintaan_dana[]" class="form-control"></td>' +
            '<td><button type="button" name="remove" id="' + i + '" class="btn btn-danger btn_remove">X</button></td>' +
            '</tr>');

         var harga_after = $('#jumlah').val()
         $("#satuan" + i + ", #harga" + i + "").keyup(function() {
            var harga2 = $("#harga" + i + "").val();
            var satuan2 = $("#satuan" + i + "").val();
            var jumlah2 = parseInt(satuan2) * parseInt(harga2);
            $("#jumlah" + i + "").val(jumlah2);
            $('#totalnya').val(jumlah2 + i + i++)
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

   $("#satuan, #harga").keyup(function() {
      var harga = $("#harga").val();
      var satuan = $("#satuan").val();

      var jumlah = parseInt(harga) * parseInt(satuan);
      $("#jumlah").val(jumlah);
   });
</script>