<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
   public function __construct()
   {
      parent::__construct();
   }
   public function index()
   {
      $this->load->view('template/header');
      $this->load->view('template/navbar');
      $this->load->view('admin/index');
      $this->load->view('template/footer');
      $this->load->view('admin/ajax');
   }
}
