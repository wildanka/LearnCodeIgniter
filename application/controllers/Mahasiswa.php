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
      $data['mahasiswa'] = $this->Mahasiswa_model->getAllMahasiswa();
      if ($this->input->post('keyword')) {
         $data['mahasiswa'] = $this->Mahasiswa_model->cariDataMahasiswa();
      }
      $this->load->view('templates/header', $data);
      $this->load->view('mahasiswa/index');
      $this->load->view('templates/footer');
      $this->load->library('form_validation');
   }

   public function tambah()
   {
      $data['judul'] = 'Data Mahasiswa';
      $this->form_validation->set_rules('nama', 'Nama', 'required');
      $this->form_validation->set_rules('nim', 'NIM', 'required|numeric');
      $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
      if ($this->form_validation->run() == FALSE) {
         $this->index();
      } else {
         $this->Mahasiswa_model->tambahDataMahasiswa();
         $this->session->set_flashdata('data_mahasiswa', 'Ditambahkan');
         redirect('mahasiswa'); //redirect dengan CI cukup memasukkan controller/method-nya
      }
   }

   public function hapus($id)
   {
      $this->Mahasiswa_model->hapusDataMahasiswa($id);
      $this->session->set_flashdata('data_mahasiswa', 'dihapus');
      redirect('mahasiswa'); //redirect dengan CI cukup memasukkan controller/method-nya
   }

   public function detail($id)
   {
      $data['judul'] = 'Data Mahasiswa - Detail';
      $data['detail_mahasiswa'] = $this->Mahasiswa_model->getDetailMahasiswaById($id);
      $this->load->view('templates/header', $data);
      $this->load->view('mahasiswa/detail', $data);
      $this->load->view('templates/footer');
   }

   public function get_detail_to_update()
   {
      echo json_encode($this->Mahasiswa_model->getDetailMahasiswaById($_POST['id']));
   }

   public function ubah()
   {
      $data['judul'] = 'Data Mahasiswa';
      $this->form_validation->set_rules('nama', 'Nama', 'required');
      $this->form_validation->set_rules('nim', 'NIM', 'required|numeric');
      $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
      if ($this->form_validation->run() == FALSE) {
         $this->load->view('templates/header', $data);
         $this->load->view('mahasiswa/index', $data);
         $this->load->view('templates/footer');
      } else {
         $this->Mahasiswa_model->ubahDataMahasiswa();
         $this->session->set_flashdata('data_mahasiswa', 'Diubah');
         redirect('mahasiswa'); //redirect dengan CI cukup memasukkan controller/method-nya
      }
   }


   public function cari()
   {
      $data['judul'] = 'Data Mahasiswa';
      $this->form_validation->set_rules('nama', 'Nama', 'required');
      $this->form_validation->set_rules('nim', 'NIM', 'required|numeric');
      $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
      if ($this->form_validation->run() == FALSE) {
         $this->load->view('templates/header', $data);
         $this->load->view('mahasiswa/index', $data);
         $this->load->view('templates/footer');
      } else {
         $this->Mahasiswa_model->cariDataMahasiswa();
         $this->session->set_flashdata('data_mahasiswa', 'Diubah');
         redirect('mahasiswa'); //redirect dengan CI cukup memasukkan controller/method-nya
      }
   }
}
