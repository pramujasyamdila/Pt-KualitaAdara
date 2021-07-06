<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pegawai extends CI_Controller
{
   public function __construct()
   {
      parent::__construct();
      $this->load->model('M_pegawai');
      $this->load->model('M_bank');
      $this->load->model('M_jabatan');
      $this->load->model('M_divisi');
   }
   public function index()
   {
      $data['bank'] = $this->M_bank->getAllBank();
      $data['jabatan'] = $this->M_jabatan->getAllJabatan();
      $data['divisi'] = $this->M_divisi->getAllDivisi();
      $this->load->view('template/header');
      $this->load->view('template/navbar');
      $this->load->view('pegawai/index', $data);
      $this->load->view('template/footer');
      $this->load->view('pegawai/ajax');
   }


   public function getdata()
   {
      $resultss = $this->M_pegawai->getdatatable();
      $data = [];
      $no = $_POST['start'];
      foreach ($resultss as $angga) {
         $row = array();
         $row[] = ++$no;
         $row[] = $angga->nama_pegawai;
         $row[] = $angga->nama_divisi;
         $row[] = $angga->nama_jabatan;
         $row[] = $angga->no_telpon;
         $row[] = $angga->alamat_pegawai;
         $row[] = $angga->jenis_kelamin;
         $row[] = '<a href=' . base_url('/gambar_pegawai' . '/' . $angga->foto_pegawai) . '>' . '<img width="40px" src=' . base_url('/gambar_pegawai' . '/' . $angga->foto_pegawai) . ' >' . '</a>';
         $row[] = $angga->mulai_berkerja;
         $row[] = '<div class="form-inline"><a href="#" class="mb-2 btn btn-outline-success btn-block btn-sm" onClick="byid(' . "'" . $angga->id_pegawai . "','edit'" . ')"><i class="fas fa-edit"></i> Edit</a> <a href="#" class="btn-block btn btn-outline-danger btn-sm" onClick="byid(' . "'" . $angga->id_pegawai . "','hapus'" . ')">  <i class="fas fa-trash"></i> Hapus</a></div>';
         $data[] = $row;
      }
      $output = array(
         "draw" => $_POST['draw'],
         "recordsTotal" => $this->M_pegawai->count_all_data(),
         "recordsFiltered" => $this->M_pegawai->count_filtered_data(),
         "data" => $data
      );
      $this->output->set_content_type('application/json')->set_output(json_encode($output));
   }

   public function add()
   {
      if (isset($_FILES["foto_pegawai"]["name"])) {
         $config['upload_path'] = './gambar_pegawai/';
         $config['allowed_types'] = 'jpg|jpeg|png|pdf';
         $this->load->library('upload', $config);
         if (!$this->upload->do_upload('foto_pegawai')) {
            echo $this->upload->display_errors();
         } else {
            $fileData = $this->upload->data();
            $data = [
               'id_divisi' => $this->input->post('id_divisi'),
               'id_jabatan' => $this->input->post('id_jabatan'),
               'id_bank' => $this->input->post('id_bank'),
               'nama_pegawai' => $this->input->post('nama_pegawai'),
               'no_telpon' => $this->input->post('no_telpon'),
               'jenis_kelamin' => $this->input->post('jenis_kelamin'),
               'alamat_pegawai' => $this->input->post('alamat_pegawai'),
               'status_pegawai' => $this->input->post('status_pegawai'),
               'foto_pegawai' => $fileData['file_name'],
            ];
            $this->M_pegawai->create($data);
            $this->output->set_content_type('application/json')->set_output(json_encode($data));
         }
      }
   }

   public function byid($id_pegawai)
   {
      $data = $this->M_pegawai->getByid($id_pegawai);
      $this->output->set_content_type('application/json')->set_output(json_encode($data));
   }

   public function update()
   {
      $this->form_validation->set_rules('nama_pegawai', 'Nama Pegawai', 'required|trim', ['required' => 'Nama Pegawai Wajib Diisi!']);
      $this->form_validation->set_rules('no_telpon', 'Kode Pegawai', 'required|trim', ['required' => 'Kode Wajib Diisi!']);
      if ($this->form_validation->run() == false) {
         $data = [
            'nama_pegawai' => form_error('nama_pegawai'),
            'no_telpon' => form_error('no_telpon'),
         ];
         $this->output->set_content_type('application/json')->set_output(json_encode($data));
      } else {
         $data = [
            'nama_pegawai' => htmlspecialchars($this->input->post('nama_pegawai')),
            'no_telpon' => htmlspecialchars($this->input->post('no_telpon')),
         ];
         $this->M_pegawai->update(array('id_pegawai' => $this->input->post('id_pegawai')), $data);
         $this->output->set_content_type('application/json')->set_output(json_encode('success'));
      }
   }
   public function delete($id_pegawai)
   {
      $this->M_pegawai->delete($id_pegawai);
      $this->output->set_content_type('application/json')->set_output(json_encode('success'));
   }
}
