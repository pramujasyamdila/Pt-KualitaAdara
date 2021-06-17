<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Role_login
{
   protected $ci;

   public function __construct()
   {
      $this->ci = &get_instance();
      $this->ci->load->model('Auth_model');
   }

   public function login($username, $password)
   {
      $cek = $this->ci->Auth_model->login($username, $password);
      if ($cek) {
         $username = $cek->username;
         $no_telpon = $cek->no_telpon;
         $alamat = $cek->alamat;
         $id_role = $cek->id_role;
         $login_activity = $cek->login_activity;
         $user_create = $cek->user_create;
         $logout_activty = $cek->logout_activty;
         // buat session
         $this->ci->session->set_userdata('username', $username);
         $this->ci->session->set_userdata('no_telpon', $no_telpon);
         $this->ci->session->set_userdata('alamat', $alamat);
         $this->ci->session->set_userdata('id_role', $id_role);
         $this->ci->session->set_userdata('login_activity', $login_activity);
         $this->ci->session->set_userdata('user_create', $user_create);
         $this->ci->session->set_userdata('logout_activty', $logout_activty);
         if ($this->ci->session->userdata('id_role') == 1) {
            redirect('admin');
         } else {
            redirect('staf');
         }
      } else {
         $this->ci->session->set_flashdata('salah', 'Username Atau Password Salah');
         redirect('auth');
      }
   }
   public function cek_login()
   {
      if ($this->ci->session->userdata('username') == "") {
         $this->ci->session->set_flashdata('pesan', 'Anda Belom Login !!!');
         redirect('auth');
      }
   }
   public function logout()
   {
      $this->ci->session->unset_userdata('username');
      $this->ci->session->unset_userdata('no_telpon');
      $this->ci->session->unset_userdata('alamat');
      $this->ci->session->unset_userdata('id_role');
      $this->ci->session->unset_userdata('login_activity');
      $this->ci->session->unset_userdata('user_create');
      $this->ci->session->unset_userdata('logout_activty');
      $this->ci->session->set_flashdata('berhasil', 'Anda Berhasil Logout');
      redirect('auth');
   }
}
