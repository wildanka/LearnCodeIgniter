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
}
