<?php

//dengan CI, semua model harus meng-extend class CI_Model 
class Mahasiswa_model extends CI_Model
{
   public function getAllMahasiswa()
   {
      // https://www.codeigniter.com/user_guide/database/query_builder.html?highlight=query%20builder
      $query = $this->db->get('t_mahasiswa');  // Produces: SELECT * FROM t_mahasiswa
      return $query->result_array();

      //bisa juga dengan method chaining
      // return $this->db->get('t_mahasiswa')->result_array();
   }

   public function tambahDataMahasiswa()
   {
      //dengan menggunakan CI, kita tidak perlu lagi menambahkan seperti ini
      /**
       * htmlspecialchars($_POST['nama']) untuk melakukan cleaning pada data input dan mengamankan dari SQL Injection
       * kita cukup gunakan 
       * $this->input->post('nama',true)
       */
      $data = [
         "nama" => $this->input->post('nama', true),
         "nim" => $this->input->post('nim', true),
         "email" => $this->input->post('email', true),
         "jurusan" => $this->input->post('jurusan', true)
      ];

      //INSERT INTO t_mahasiswa VALUE $data
      $this->db->insert('t_mahasiswa', $data);
   }

   public function hapusDataMahasiswa($id)
   {
      // $this->db->where('id', $id);
      // $this->db->delete('t_mahasiswa');
      //DELETE FROM t_mahasiswa WHERE id='$id'
      // Bisa Juga : 
      $this->db->delete('t_mahasiswa', ['id' => $id]);
   }

   public function getDetailMahasiswaById($id)
   {
      // Produces: SELECT * FROM t_mahasiswa WHERE id = $id
      return $this->db->get_where('t_mahasiswa', ['id' => $id])->row_array(); //bisa juga dengan row(), tapi hasil returnnya nanti Object, bukan array
   }

   public function ubahDataMahasiswa()
   {
      //dengan menggunakan CI, kita tidak perlu lagi menambahkan seperti ini
      /**
       * htmlspecialchars($_POST['nama']) untuk melakukan cleaning pada data input dan mengamankan dari SQL Injection
       * kita cukup gunakan 
       * $this->input->post('nama',true)
       */
      $data = [
         "nama" => $this->input->post('nama', true),
         "nim" => $this->input->post('nim', true),
         "email" => $this->input->post('email', true),
         "jurusan" => $this->input->post('jurusan', true)
      ];

      // UPDATE t_mahasiswa
      // SET nama = '{$nama}', nim = '{$nim}', email = '{$email}', jurusan = '{$jurusan}'
      // VALUE $data WHERE id
      $this->db->where('id', $this->input->post('id'));
      $this->db->update('t_mahasiswa', $data);
   }

   public function cariDataMahasiswa()
   {
      // https://www.codeigniter.com/user_guide/database/query_builder.html?highlight=query%20builder
      $keyword = $this->input->post('keyword', true);

      $this->db->like('nim', $keyword); // nim LIKE $keyword
      $this->db->or_like('nama', $keyword); // or nama LIKE $keyword
      $this->db->or_like('jurusan', $keyword); // or jurusan LIKE $keyword
      $this->db->or_like('email', $keyword); // or email LIKE $keyword
      return $this->db->get('t_mahasiswa')->result_array();
      // Produces: SELECT * FROM t_mahasiswa WHERE nim LIKE $keyword OR nama LIKE $keyword OR jurusan LIKE $keyword or email LIKE $keyword


   }
}
