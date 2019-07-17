<?php

class Mahasiswa extends CI_Controller
{

   public function __construct()
   {
      parent::__construct();
      $this->load->model('Mahasiswa_model');
      $this->load->library('form_validation');
   }
   public function index()
   {
      //di dalam CI jangan lupa untuk load model sebelum digunakan!

      $data['judul'] = 'Data Mahasiswa';
      $data['mahasiswa'] =  $this->Mahasiswa_model->getAllMahasiswa();
      $this->load->view('templates/header', $data);
      $this->load->view('mahasiswa/index');
      $this->load->view('templates/footer');
      $this->load->library('form_validation');
   }

   public function tambah()
   {
      $this->load->model('Mahasiswa_model');
      $data['judul'] = 'Data Mahasiswa';
      $data['mahasiswa'] =  $this->Mahasiswa_model->getAllMahasiswa();

      $this->form_validation->set_rules('nama', 'Nama', 'required');
      $this->form_validation->set_rules('nim', 'NIM', 'required|numeric');
      $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
      if ($this->form_validation->run() == FALSE) {
         $this->load->view('templates/header', $data);
         $this->load->view('mahasiswa/index');
         $this->load->view('templates/footer');
      } else {
         echo "berhasil";
      }
   }
}
