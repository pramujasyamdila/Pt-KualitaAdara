<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Permintaan_cash_advance extends CI_Controller
{
   public function __construct()
   {
      parent::__construct();
      $this->load->model('M_pegawai');
      $this->load->model('M_bank');
      $this->load->model('M_jabatan');
      $this->load->model('M_divisi');
      $this->load->model('M_cash_advance');
   }
   public function index()
   {
      $this->load->view('template/header');
      $this->load->view('template/navbar');
      $this->load->view('permintaan_cash_advance/index');
      $this->load->view('template/footer');
      $this->load->view('permintaan_cash_advance/ajax');
   }

   public function print_laporan($id_permintaan_cash_advance)
   {

      $data['laporanw']  = $this->M_cash_advance->getAllById($id_permintaan_cash_advance);
      $data['deskripsi']  = $this->M_cash_advance->getAllByIddeskripsi($id_permintaan_cash_advance);
      $data['total_deskripsi']  = $this->M_cash_advance->totaldeskripsi($id_permintaan_cash_advance);
      $this->load->view('template/header');
      $this->load->view('template/navbar');
      $this->load->view('permintaan_cash_advance/print_laporan', $data);
      $this->load->view('template/footer');
      $this->load->view('permintaan_cash_advance/ajax');
   }

   public function data_laporan_advance()
   {
      $data['bank'] = $this->M_bank->getAllBank();
      $data['jabatan'] = $this->M_jabatan->getAllJabatan();
      $data['divisi'] = $this->M_divisi->getAllDivisi();
      $this->load->view('template/header');
      $this->load->view('template/navbar');
      $this->load->view('permintaan_cash_advance/data_laporan', $data);
      $this->load->view('template/footer');
      $this->load->view('permintaan_cash_advance/ajax');
   }


   public function getdata()
   {
      $resultss = $this->M_cash_advance->getdatatable();
      $data = [];
      $no = $_POST['start'];
      foreach ($resultss as $angga) {
         $row = array();
         $row[] = ++$no;
         $row[] = $angga->nama_permintaan_cash_advance;
         $row[] = $angga->divisi_permintaan_cash_advance;
         $row[] = $angga->jabatan_permintaan_cash_advance;
         $row[] = $angga->nama_site_permintaan_cash_advance;
         $row[] = $angga->project_permintaan_cash_advance;
         $row[] = $angga->customer_permintaan_cash_advance;
         $row[] = $angga->tanggal_permintaan_cash_advance;
         $row[] = '<div class="form-inline"><a href="#" class="mb-2 btn btn-outline-info btn-block btn-sm" onClick="byid(' . "'" . $angga->id_permintaan_cash_advance  . "','print'" . ')"><i class="fas fa-print"></i> Print</a><a href="#" class="mb-2 btn btn-outline-success btn-block btn-sm" onClick="byid(' . "'" . $angga->id_permintaan_cash_advance  . "','edit'" . ')"><i class="fas fa-edit"></i> Edit</a> <a href="#" class="btn-block btn btn-outline-danger btn-sm" onClick="byid(' . "'" . $angga->id_permintaan_cash_advance . "','hapus'" . ')">  <i class="fas fa-trash"></i> Hapus</a></div>';
         $data[] = $row;
      }
      $output = array(
         "draw" => $_POST['draw'],
         "recordsTotal" => $this->M_cash_advance->count_all_data(),
         "recordsFiltered" => $this->M_cash_advance->count_filtered_data(),
         "data" => $data
      );
      $this->output->set_content_type('application/json')->set_output(json_encode($output));
   }


   //CREATE
   public function save()
   {
      $nama_permintaan_cash_advance = $this->input->post('nama_permintaan_cash_advance', TRUE);
      $divisi_permintaan_cash_advance = $this->input->post('divisi_permintaan_cash_advance', TRUE);
      $jabatan_permintaan_cash_advance = $this->input->post('jabatan_permintaan_cash_advance', TRUE);
      $nama_site_permintaan_cash_advance = $this->input->post('nama_site_permintaan_cash_advance', TRUE);
      $project_permintaan_cash_advance = $this->input->post('project_permintaan_cash_advance', TRUE);
      $customer_permintaan_cash_advance = $this->input->post('customer_permintaan_cash_advance', TRUE);
      $tanggal_permintaan_cash_advance = $this->input->post('tanggal_permintaan_cash_advance', TRUE);
      $total_permintaan_cash_advance = $this->input->post('total_permintaan_cash_advance', TRUE);
      $person_created_cash_advance = $this->input->post('person_created_cash_advance', TRUE);
      // jenis pembayaran
      $nama_penerima_permintaan_cash_advance = $this->input->post('nama_penerima_permintaan_cash_advance', TRUE);
      $bank_permintaan_cash_advance = $this->input->post('bank_permintaan_cash_advance', TRUE);
      $nomor_rekening_permintaan_cash_advance = $this->input->post('nomor_rekening_permintaan_cash_advance', TRUE);
      $keterangan_permintaan_cash_advance = $this->input->post('keterangan_permintaan_cash_advance', TRUE);
      $jenis_pembayarn_permintaan_cash_advance = $this->input->post('jenis_pembayarn_permintaan_cash_advance', TRUE);
      // diajukan oleh (approve)
      // $diajukan_oleh_permintaan_dana = $this->input->post('diajukan_oleh_permintaan_dana', TRUE);
      // $disetujui_oleh_permintaan_dana = $this->input->post('disetujui_oleh_permintaan_dana', TRUE);
      // $dibayarkan_oleh_permintaan_dana = $this->input->post('dibayarkan_oleh_permintaan_dana', TRUE);
      // $diterima_oleh_permintaan_dana = $this->input->post('diterima_oleh_permintaan_dana', TRUE);
      // insert tbl deskripsinya
      $nama_deskripsi_permintaan_cash_advance = $this->input->post('nama_deskripsi_permintaan_cash_advance', TRUE);
      $harga_satuan_deskripsi_permintaan_cash_advance = $this->input->post('harga_satuan_deskripsi_permintaan_cash_advance', TRUE);
      $harga_deskripsi_permintaan_cash_advance = $this->input->post('harga_deskripsi_permintaan_cash_advance', TRUE);
      $total_deskripsi_permintaan_cash_advance = $this->input->post('total_deskripsi_permintaan_cash_advance', TRUE);
      //Insert Table Paket Biasa
      $data  = array(
         'nama_permintaan_cash_advance' => $nama_permintaan_cash_advance,
         'nama_penerima_permintaan_cash_advance' => $nama_penerima_permintaan_cash_advance,
         'bank_permintaan_cash_advance' => $bank_permintaan_cash_advance,
         'nomor_rekening_permintaan_cash_advance' => $nomor_rekening_permintaan_cash_advance,
         'keterangan_permintaan_cash_advance' => $keterangan_permintaan_cash_advance,
         'jenis_pembayarn_permintaan_cash_advance' => $jenis_pembayarn_permintaan_cash_advance,
         'divisi_permintaan_cash_advance' => $divisi_permintaan_cash_advance,
         'jabatan_permintaan_cash_advance' => $jabatan_permintaan_cash_advance,
         'nama_site_permintaan_cash_advance' => $nama_site_permintaan_cash_advance,
         'project_permintaan_cash_advance' => $project_permintaan_cash_advance,
         'customer_permintaan_cash_advance' => $customer_permintaan_cash_advance,
         'tanggal_permintaan_cash_advance' => $tanggal_permintaan_cash_advance,
         'total_permintaan_cash_advance' => $total_permintaan_cash_advance,
         'person_created_cash_advance' => $person_created_cash_advance,
         // 'diajukan_oleh_permintaan_dana' => $diajukan_oleh_permintaan_dana,
         // 'disetujui_oleh_permintaan_dana' => $disetujui_oleh_permintaan_dana,
         // 'dibayarkan_oleh_permintaan_dana' => $dibayarkan_oleh_permintaan_dana,
         // 'diterima_oleh_permintaan_dana' => $diterima_oleh_permintaan_dana,
      );

      $this->db->insert('tbl_permintaan_cash_advance', $data);
      // End Insert Batch tbl_permintaan_cash_advance

      $package_id = $this->db->insert_id(); // Ini ID table yang memberi Id Insertbatchnya

      // Insert Batch Lokasi
      $result = array();
      foreach ($nama_deskripsi_permintaan_cash_advance as $key => $val) {
         $result[] = array(
            'id_permintaan_cash_advance' => $package_id,
            'nama_deskripsi_permintaan_cash_advance' => $nama_deskripsi_permintaan_cash_advance[$key],
            'harga_satuan_deskripsi_permintaan_cash_advance' => $harga_satuan_deskripsi_permintaan_cash_advance[$key],
            'harga_deskripsi_permintaan_cash_advance' =>  $harga_deskripsi_permintaan_cash_advance[$key],
            'total_deskripsi_permintaan_cash_advance' =>  $total_deskripsi_permintaan_cash_advance[$key],
         );
      }
      $this->db->insert_batch('tbl_deskripsi_permintaan_cash_advance', $result);
      // End Insert Batch

      // Kirim Datanya Semua Ke Ajax
      $this->output->set_content_type('application/json')->set_output(json_encode('success'));
      // End Kirim Datanya Semua Ke Ajax
   }
   public function byid($id_permintaan_cash_advance)
   {
      $data = $this->M_cash_advance->getByid($id_permintaan_cash_advance);
      $this->output->set_content_type('application/json')->set_output(json_encode($data));
   }
   public function edit()
   {
      echo 'test';
   }
}
