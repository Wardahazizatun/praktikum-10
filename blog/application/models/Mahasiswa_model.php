<?php

//Buat Class
class Mahasiswa_model extends CI_Model{
   private $table = 'mahasiswa';

   public function getAll(){
       // slect * from mahasiswa
       $query = $this->db->get($this->table);
       return $query->result();
   }
}
?>