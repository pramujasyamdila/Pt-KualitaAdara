<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper" style=" background-image: linear-gradient(to top, rgb(252, 252, 252), rgb(75, 136, 250))!important;">
   <!-- Main content -->
   <div class="content">
      <div class="container">
         <section class="content pt-5">
            <nav aria-label="breadcrumb">
               <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="<?= base_url('admin') ?>">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Permintaan Cash Advance</li>
               </ol>
            </nav>
            <div class="callout callout-danger" style="background: rgb(232,147,67);background: radial-gradient(circle,rgba(232,147,67,1) 0%, rgba(251,250,101,1) 100%);">
               <h5 class="text-black solid" style="font-weight: bold;">Form Yang Di Berikan Bintang Merah Wajib Disi! <label for="">
                     <h5 class="text-danger">*</h5>
                  </label></h5>
            </div>
            <!-- form permintaan -->
            <form action="#" method="POST" id="formData">
               <input type="hidden" name="person_created" value="<?= $this->session->userdata('username'); ?>">
               <div class="row">
                  <div class="card card-outline card-orange col-md-6">
                     <div class="card-header"><i class="fas fa-list-alt"></i> Permintaan Cash Advance</div>
                     <div class="card-body">
                        <div class="row">
                           <div class="col-md-12">
                              <div class="row">
                                 <div class="col-md-6">
                                    <div class="form-group">
                                       <p>Nama <label for="" class="text-danger">*</label></p>
                                       <div class="input-group">
                                          <div class="input-group-prepend">
                                             <div class="input-group-text"><i class="fas fa-user-tag"></i></div>
                                          </div>
                                          <input type="text" class="form-control" name="nama_permintaan_cash_advance" id="inlineFormInputGroupUsername" placeholder="Nama">
                                       </div>
                                    </div>
                                    <div class="form-group">
                                       <p>Divisi <label for="" class="text-danger">*</label></p>
                                       <div class="form-group">
                                          <div class="input-group">
                                             <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="fas fa-users"></i></div>
                                             </div>
                                             <input type="text" class="form-control" name="divisi_permintaan_cash_advance" id="inlineFormInputGroupUsername" placeholder="Divisi">
                                          </div>
                                       </div>
                                    </div>
                                    <div class="form-group">
                                       <p>Jabatan <label for="" class="text-danger">*</label></p>
                                       <div class="form-group">
                                          <div class="input-group">
                                             <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="fas fa-user-tie"></i></div>
                                             </div>
                                             <input type="text" class="form-control" name="jabatan_permintaan_cash_advance" id="inlineFormInputGroupUsername" placeholder="Jabatan">
                                          </div>
                                       </div>
                                    </div>
                                    <div class="form-group">
                                       <p>total <label for="" class="text-danger">*</label></p>
                                       <div class="form-group">
                                          <div class="input-group">
                                             <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="fas fa-dollar-sign"></i></div>
                                             </div>
                                             <input type="text" class="form-control" name="total_permintaan_cash_advance" readonly id="inlineFormInputGroupUsername">
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="form-group">
                                       <p>Tanggal <label for="" class="text-danger">*</label></p>
                                       <div class="input-group">
                                          <div class="input-group-prepend">
                                             <div class="input-group-text"><i class="fas fa-calendar-day"></i></div>
                                          </div>
                                          <input type="date" class="form-control" name="tanggal_permintaan_cash_advance" id="inlineFormInputGroupUsername" placeholder="Tanggal">
                                       </div>
                                    </div>
                                    <div class="form-group">
                                       <p>Nama Site <label for="" class="text-danger">*</label></p>
                                       <div class="input-group">
                                          <div class="input-group-prepend">
                                             <div class="input-group-text"><i class="fas fa-broadcast-tower"></i></div>
                                          </div>
                                          <input type="text" class="form-control" name="nama_site_permintaan_cash_advance" id="inlineFormInputGroupUsername" placeholder="Nama Site">
                                       </div>
                                    </div>
                                    <div class="form-group">
                                       <p>Project <label for="" class="text-danger">*</label></p>
                                       <div class="input-group">
                                          <div class="input-group-prepend">
                                             <div class="input-group-text"><i class="fas fa-chalkboard-teacher"></i></div>
                                          </div>
                                          <input type="text" class="form-control" name="project_permintaan_cash_advance" id="inlineFormInputGroupUsername" placeholder="Project">
                                       </div>
                                    </div>
                                    <div class="form-group">
                                       <p>Customer <label for="" class="text-danger">*</label></p>
                                       <div class="input-group">
                                          <div class="input-group-prepend">
                                             <div class="input-group-text"><i class="fas fa-people-arrows"></i></div>
                                          </div>
                                          <input type="text" class="form-control" name="customer_permintaan_cash_advance" id="inlineFormInputGroupUsername" placeholder="Username">
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="card card-outline card-yellow col-md-6">
                     <div class="card-header"><i class="fas fa-wallet"></i> Form Pembayaran</div>
                     <div class="card-body">
                        <div class="row">
                           <div class="col-md-12">
                              <div class="row">
                                 <div class="col-md-6">
                                    <div class="form-group">
                                       <p>Jenis Pembayaran <label for="" class="text-danger">*</label></p>
                                       <div class="input-group">
                                          <div class="input-group-prepend">
                                             <div class="input-group-text"><i class="far fa-credit-card"></i></div>
                                          </div>
                                          <select type="text" class="form-control  select2bs4" name="jenis_pembayarn_permintaan_cash_advance" id="inlineFormInputGroupUsername" placeholder="Jenis Pembayaran">
                                             <option value="Transfer">Transfer</option>
                                             <option value="Tunai">Tunai</option>
                                          </select>
                                       </div>
                                    </div>
                                    <div class="form-group">
                                       <p>Nama Penerima <label for="" class="text-danger">*</label></p>
                                       <div class="form-group">
                                          <div class="input-group">
                                             <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="fas fa-user-tag"></i></div>
                                             </div>
                                             <input type="text" class="form-control" name="nama_penerima_permintaan_cash_advance" id="inlineFormInputGroupUsername" placeholder="Nama Penerima">
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="form-group">
                                       <p>Bank <label for="" class="text-danger">*</label></p>
                                       <div class="input-group">
                                          <div class="input-group-prepend">
                                             <div class="input-group-text"><i class="fas fa-university"></i></div>
                                          </div>
                                          <input type="text" class="form-control" name="bank_permintaan_cash_advance" id="inlineFormInputGroupUsername" placeholder="Bank">
                                       </div>
                                    </div>
                                    <div class="form-group">
                                       <p>No Rekening <label for="" class="text-danger">*</label></p>
                                       <div class="input-group">
                                          <div class="input-group-prepend">
                                             <div class="input-group-text"><i class="fas fa-funnel-dollar"></i></div>
                                          </div>
                                          <input type="text" class="form-control" name="nomor_rekening_permintaan_cash_advance" id="inlineFormInputGroupUsername" placeholder="No Rekeninig">
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="form-group">
                                 <p>Keterangan <label for="" class="text-danger">*</label></p>
                                 <textarea name="keterangan_permintaan_cash_advance" id="summernote"></textarea>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="card card-outline card-orange col-md-12">
                  <div class="card-header"><i class="fas fa-shopping-cart"></i> Form Deskripsi</div>
                  <div class="card-body">
                     <div class="table-responsive">
                        <table class="table table" id="dynamic_field">
                           <tr>
                              <th>Nama Deskripsi</th>
                              <th>Satuan/Unit</th>
                              <th>Harga</th>
                              <th>Total</th>
                              <th></th>
                           </tr>
                           <tr>
                              <td><input type="text" name="nama_deskripsi_permintaan_cash_advance[]" class="form-control form-control-sm"></td>
                              <td><input type="text" id="satuan" name="harga_satuan_deskripsi_permintaan_cash_advance[]" class="form-control form-control-sm"></td>
                              <td><input type="text" id="harga" name="harga_deskripsi_permintaan_cash_advance[]" class="form-control form-control-sm"></td>
                              <td><input type="text" id="jumlah" name="total_deskripsi_permintaan_cash_advance[]" class="form-control form-control-sm"></td>
                              <td><button type="button" name="add" id="add" class="btn btn-success">Add More</button></td>
                           </tr>
                        </table>
                     </div>
                  </div>
         </section>
         </form>
         <div class="row">
            <div class="col-md-6">
               <a href="<?= base_url('admin') ?>" class="btn btn-danger m-2 w-100 text-white">Batal</a>
            </div>
            <div class="col-md-6">
               <button type="button" class="btn btn-primary m-2 w-100" onclick="save()">Simpan</button>
            </div>
         </div>
      </div>
   </div>
   <!-- /.content -->
</div>