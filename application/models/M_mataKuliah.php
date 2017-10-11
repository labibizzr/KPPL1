<?php
class M_mataKuliah extends CI_Model
{

  function __construct()
  {
    # code..
    // $table = 'users';
    $this->load->database();
  }

  public function getMataKuliah($kode=FALSE){

      if($kode==FALSE){
        $query = $this->db->get('mata_kuliah');
        return $query->result_array();
      }
      else {
        $query = $this->db->get_where('mata_kuliah', array('kode' => $kode));
        // echo var_dump($query);
        return $query->result_array();
      }
}
}
?>
