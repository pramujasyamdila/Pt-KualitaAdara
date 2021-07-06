<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_pegawai extends CI_Model
{
   var $table = 'tbl_pegawai';
   var $colum_order = array('id_pegawai', 'nama_pegawai');
   var $order = array('id_pegawai', 'nama_pegawai');

   private function _get_data_query()
   {
      $this->db->select('*');
      $this->db->from($this->table);
      $this->db->join('tbl_jabatan', 'tbl_jabatan.id_jabatan = tbl_pegawai.id_jabatan', 'left');
      $this->db->join('tbl_divisi', 'tbl_divisi.id_divisi = tbl_pegawai.id_divisi', 'left');
      $this->db->join('tbl_bank', 'tbl_bank.id_bank = tbl_pegawai.id_bank', 'left');
      if (isset($_POST['search']['value'])) {
         $this->db->like('nama_pegawai', $_POST['search']['value']);
         // $this->db->or_like('data_kerja', $_POST['search']['value']);
         // $this->db->or_like('jabatan', $_POST['search']['value']);
         // $this->db->or_like('status', $_POST['search']['value']);
      }
      if (isset($_POST['order'])) {
         $this->db->order_by($this->order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
      } else {
         $this->db->order_by('id_pegawai', 'DESC');
      }
   }

   public function getdatatable() //nam[ilin data pake ini
   {
      $this->_get_data_query(); //ambil data dari get yg di atas
      if ($_POST['length'] != -1) {
         $this->db->limit($_POST['length'], $_POST['start']);
      }
      $query = $this->db->get();
      return $query->result();
   }
   public function count_filtered_data()
   {
      $this->_get_data_query(); //ambil data dari get yg di atas
      $query = $this->db->get();
      return $query->num_rows();
   }

   public function count_all_data()
   {
      $this->db->from($this->table);
      return $this->db->count_all_results();
   }
   public function create($data)
   {
      $this->db->insert('tbl_pegawai', $data);
      return $this->db->affected_rows();
   }
   public function getByid($id_pegawai)
   {
      return $this->db->get_where($this->table, ['id_pegawai' => $id_pegawai])->row();
   }
   public function update($where, $data)
   {
      $this->db->update($this->table, $data, $where);
      return $this->db->affected_rows();
   }
   public function delete($id_pegawai)
   {
      $this->db->delete($this->table, ['id_pegawai' => $id_pegawai]);
      return $this->db->affected_rows();
   }
}
