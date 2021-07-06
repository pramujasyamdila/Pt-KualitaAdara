<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
   <div class="content">
      <div class="container">
         <br>
         <ol class="breadcrumb" style=" background-image: linear-gradient(to top,rgb(35, 32, 223),rgba(11, 76, 255, 0.63)) !important;">
            <li><a style="text-decoration: none; color:white;" href="#">Data Pegawai</a></li>

         </ol>
         <div class="card card-outline card-primary">
            <div class="card-header">
               <button type="button" class="btn btn-outline-primary mt-3 mb-2" onclick="add()">
                  Tambah Data
               </button>
            </div>
            <div class="card-body">
               <?= $this->session->flashdata('message'); ?>
               <!-- <div class="float-right mb-2"><a href="#" class="btn btn-sm btn-success" data-toggle="modal" data-target="#Add"><span class="fa fa-plus"></span> Tambah Pegawai</a></div> -->
               <table id="serverside" class="table table-striped table-bordered">
                  <thead>
                     <tr class="bg-primary text-center">
                        <th>No</th>
                        <th>Nama Pegawai</th>
                        <th>Divisi</th>
                        <th>Jabatan</th>
                        <th>No Telpon</th>
                        <th>Alamat</th>
                        <th>Jenis Kelamin</th>
                        <th>Foto</th>
                        <th>Mulai Kerja</th>
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

<!-- Modal -->
<div class="modal fade" id="modalData" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">

         <div class="modal-header bg-primary">
            <h5 class="modal-title" id="modalTitle"></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body">
            <form action="#" enctype="multipart/form-data" id="formData">
               <div class="float-right custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                  <input type="checkbox" name="status_pegawai" class="custom-control-input" id="customSwitch3">
                  <label class="custom-control-label" for="customSwitch3">Status</label>
               </div>
               <div class="row">
                  <div class="col-md-6">
                     <div class="form-group">
                        <input type="hidden" name="id_pegawai" id="id_pegawai">
                        <label for="nama_pegawai">Nama Pegawai</label>
                        <input type="text" class="form-control" name="nama_pegawai" id="nama_pegawai" placeholder="Nama Pegawai">
                        <p class="nama_pegawai-error text-danger"></p>
                        <label for="no_telpon">Nomor Telpon</label>
                        <input type="text" class="form-control" name="no_telpon" id="no_telpon" placeholder="No Telpon">
                        <p class="no_telpon-error text-danger"></p>
                        <label for="jenis_kelamin">Jenis Kelamin</label>
                        <select name="jenis_kelamin" class="form-control select2bs4">
                           <option value="Laki-Laki">Laki-Laki</option>
                           <option value="Prempuan">Prempuan</option>
                        </select>
                        <p></p>
                        <label for="foto_pegawai">Foto</label>
                        <input type="file" class="form-control foto_aja" name="foto_pegawai" id="foto_pegawai" placeholder="Foto">
                        <img id="preview_gambar" width="120px" height="70px" alt="User Gambar">
                        <p></p>
                        <label for="id_bank">Pilih Bank</label>
                        <select name="id_bank" class="form-control select2bs4">
                           <?php foreach ($bank as $key => $value) { ?>
                              <option value="<?= $value['id_bank'] ?>"><?= $value['nama_bank'] ?></option>
                           <?php } ?>
                        </select>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="form-group">
                        <label for="alamat_pegawai">Alamat</label>
                        <textarea type="text" class="form-control" name="alamat_pegawai" id="alamat_pegawai"></textarea>
                        <p></p>
                        <label for="mulai_berkerja">Mulai Kerja</label>
                        <input type="date" class="form-control" name="mulai_berkerja" id="mulai_berkerja" placeholder="Status">
                        <p class="mulai_berkerja-error text-danger"></p>
                        <label for="id_divisi">Divisi</label>
                        <select name="id_divisi" class="form-control select2bs4">
                           <?php foreach ($divisi as $key => $value) { ?>
                              <option value="<?= $value['id_divisi'] ?>"><?= $value['nama_divisi'] ?></option>
                           <?php } ?>
                        </select>
                        <p></p>
                        <label for="nomor_rekening">Nomor Rekening</label>
                        <input type="text" class="form-control" name="nomor_rekening" id="nomor_rekening" placeholder="No Rek .">
                        <p class="nomor_rekening-error text-danger"></p>
                        <label for="id_jabatan">Jabatan</label>
                        <select name="id_jabatan" class="form-control select2bs4">
                           <?php foreach ($jabatan as $key => $value) { ?>
                              <option value="<?= $value['id_jabatan'] ?>"><?= $value['nama_jabatan'] ?></option>
                           <?php } ?>
                        </select>
                        </select>
                     </div>
                  </div>
               </div>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Batal</button>
            <input type="submit" class="btn btn-outline-success" name="upload" id="upload" value="Simpan">
         </div>
         </form>
      </div>
   </div>
</div>