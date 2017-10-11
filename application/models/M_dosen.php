<?php
class M_dosen extends CI_Model
{

  function __construct()
  {
    # code..
    // $table = 'users';
    $this->load->database();
  }

  public function getDosen($nip=FALSE){

      if($nip==FALSE){
        $query = $this->db->get('dosen');
        return $query->result_array();
      }
      else {
        $query = $this->db->get_where('dosen', array('nip' => $nip));
        // echo var_dump($query);
        return $query->result_array();
      }
}
}
?>
