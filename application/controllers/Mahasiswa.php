<?php

class Mahasiswa extends CI_Controller
{

   public function index()
   {
      //di dalam CI jangan lupa untuk load model sebelum digunakan!
      $this->load->model('Mahasiswa_model'); 
      $data['judul'] = 'Data Mahasiswa';
      $data['mahasiswa'] =  $this->Mahasiswa_model->getAllMahasiswa();
      $this->load->view('templates/header', $data);
      $this->load->view('mahasiswa/index');
      $this->load->view('templates/footer');
   }
}
