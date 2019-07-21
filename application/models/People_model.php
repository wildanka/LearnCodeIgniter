<?php

class People_model extends CI_Model
{

   public function getAllPeople()
   {
      // https://www.codeigniter.com/user_guide/database/query_builder.html?highlight=query%20builder
      return $this->db->get('peoples')->result_array();
   }
}
