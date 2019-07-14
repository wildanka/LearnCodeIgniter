<?php

class Mahasiswa extends CI_Controller
{
   public function __construct()
   {
      parent::__construct();
      $this->load->database(); //jika semua method di dalam class Mahasiswa membutuhkan koneksi ke database, maka taruh di konstruktor, jika tidak letakan saja di method yang membutuhkannya.
   }

   public function index()
   {
      $data['judul'] = 'Data Mahasiswa';

      $this->load->view('templates/header', $data);
      $this->load->view('mahasiswa/index');
      $this->load->view('templates/footer');
   }
}
