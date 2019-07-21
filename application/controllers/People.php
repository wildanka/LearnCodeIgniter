<?php

class People extends CI_Controller
{
   public function __construct()
   {
      parent::__construct();
      $this->load->model('People_model');
      $this->load->library('form_validation');
   }

   public function index()
   {
      //di dalam CI jangan lupa untuk load model sebelum digunakan!
      $data['judul'] = 'List of People';
      $data['peoples'] = $this->People_model->getAllPeople();

      $this->load->view('templates/header', $data);
      $this->load->view('people/index', $data);
      $this->load->view('templates/footer');
   }
}
