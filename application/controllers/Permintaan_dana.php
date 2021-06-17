<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Permintaan_dana extends CI_Controller
{
   public function __construct()
   {
      parent::__construct();
   }
   public function index()
   {
      $this->load->view('template/header');
      $this->load->view('template/navbar');
      $this->load->view('permintaan_dana/index');
      $this->load->view('template/footer');
      $this->load->view('permintaan_dana/ajax');
   }
   //CREATE
   public function save()
   {
      $nama_permintaan_dana = $this->input->post('nama_permintaan_dana', TRUE);
      $divisi_permintaan_dana = $this->input->post('divisi_permintaan_dana', TRUE);
      $jabatan_permintaan_dana = $this->input->post('jabatan_permintaan_dana', TRUE);
      $nama_site_permintaan_dana = $this->input->post('nama_site_permintaan_dana', TRUE);
      $project_permintaan_dana = $this->input->post('project_permintaan_dana', TRUE);
      $cutomer_permintaan_dana = $this->input->post('cutomer_permintaan_dana', TRUE);
      $tanggal_permintaan_dana = $this->input->post('tanggal_permintaan_dana', TRUE);
      $total_permintaan_dana = $this->input->post('total_permintaan_dana', TRUE);
      $person_created = $this->input->post('person_created', TRUE);
      // jenis pembayaran
      $nama_penerima_permintaan_dana = $this->input->post('nama_penerima_permintaan_dana', TRUE);
      $bank_penerima_permintaan_dana = $this->input->post('bank_penerima_permintaan_dana', TRUE);
      $no_rekening_penerima_permintaan_dana = $this->input->post('no_rekening_penerima_permintaan_dana', TRUE);
      $keterangan_penerima_permintaan_dana = $this->input->post('keterangan_penerima_permintaan_dana', TRUE);
      $jenis_pembayaran_permintaan_dana = $this->input->post('jenis_pembayaran_permintaan_dana', TRUE);
      // diajukan oleh (approve)
      // $diajukan_oleh_permintaan_dana = $this->input->post('diajukan_oleh_permintaan_dana', TRUE);
      // $disetujui_oleh_permintaan_dana = $this->input->post('disetujui_oleh_permintaan_dana', TRUE);
      // $dibayarkan_oleh_permintaan_dana = $this->input->post('dibayarkan_oleh_permintaan_dana', TRUE);
      // $diterima_oleh_permintaan_dana = $this->input->post('diterima_oleh_permintaan_dana', TRUE);
      // insert tbl deskripsinya
      $nama_deskripsi_permintaan_dana = $this->input->post('nama_deskripsi_permintaan_dana', TRUE);
      $harga_satuan_deskripsi_permintaan_dana = $this->input->post('harga_satuan_deskripsi_permintaan_dana', TRUE);
      $harga_deskripsi_permintaan_dana = $this->input->post('harga_deskripsi_permintaan_dana', TRUE);
      $total_deskripsi_permintaan_dana = $this->input->post('total_deskripsi_permintaan_dana', TRUE);
      //Insert Table Paket Biasa
      $data  = array(
         'nama_permintaan_dana' => $nama_permintaan_dana,
         'nama_penerima_permintaan_dana' => $nama_penerima_permintaan_dana,
         'bank_penerima_permintaan_dana' => $bank_penerima_permintaan_dana,
         'no_rekening_penerima_permintaan_dana' => $no_rekening_penerima_permintaan_dana,
         'keterangan_penerima_permintaan_dana' => $keterangan_penerima_permintaan_dana,
         'jenis_pembayaran_permintaan_dana' => $jenis_pembayaran_permintaan_dana,
         'divisi_permintaan_dana' => $divisi_permintaan_dana,
         'jabatan_permintaan_dana' => $jabatan_permintaan_dana,
         'nama_site_permintaan_dana' => $nama_site_permintaan_dana,
         'project_permintaan_dana' => $project_permintaan_dana,
         'cutomer_permintaan_dana' => $cutomer_permintaan_dana,
         'tanggal_permintaan_dana' => $tanggal_permintaan_dana,
         'total_permintaan_dana' => $total_permintaan_dana,
         'person_created' => $person_created,
         // 'diajukan_oleh_permintaan_dana' => $diajukan_oleh_permintaan_dana,
         // 'disetujui_oleh_permintaan_dana' => $disetujui_oleh_permintaan_dana,
         // 'dibayarkan_oleh_permintaan_dana' => $dibayarkan_oleh_permintaan_dana,
         // 'diterima_oleh_permintaan_dana' => $diterima_oleh_permintaan_dana,
      );

      $this->db->insert('tbl_permintaan_dana', $data);
      // End Insert Batch tbl_permintaan_dana

      $package_id = $this->db->insert_id(); // Ini ID table yang memberi Id Insertbatchnya

      // Insert Batch Lokasi
      $result = array();
      foreach ($nama_deskripsi_permintaan_dana as $key => $val) {
         $result[] = array(
            'id_permintaan_dana' => $package_id,
            'nama_deskripsi_permintaan_dana' => $nama_deskripsi_permintaan_dana[$key],
            'harga_satuan_deskripsi_permintaan_dana' => $harga_satuan_deskripsi_permintaan_dana[$key],
            'harga_deskripsi_permintaan_dana' =>  $harga_deskripsi_permintaan_dana[$key],
            'total_deskripsi_permintaan_dana' =>  $total_deskripsi_permintaan_dana[$key],
         );
      }
      $this->db->insert_batch('tbl_deskripsi_permintaan_dana', $result);
      // End Insert Batch

      // Kirim Datanya Semua Ke Ajax
      $this->output->set_content_type('application/json')->set_output(json_encode('success'));
      // End Kirim Datanya Semua Ke Ajax
   }
}
