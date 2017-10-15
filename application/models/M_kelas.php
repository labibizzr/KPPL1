<?php
class M_kelas extends CI_Model
{

  function __construct()
  {
    # code..
    // $table = 'users';
    $this->load->database();
  }

  public function getKelas($id=FALSE){

      if($id==FALSE){
        $query = $this->db->get('kelas');
        return $query->result_array();
      }
      else {
        $query = $this->db->get_where('kelas', array('id' => $id));
        // echo var_dump($query);
        return $query->result_array();
      }
}
public function newKelas($data)
{
  return $this->db->insert('kelas', $data);
}

public function editKelas($data)
{
  $this->db->where('id', $data['id']);
  $this->db->update('kelas', $data);
}
public function deleteKelas($id)
{
  $this->db->where('id', $id);
  $this->db->delete('kelas');
}
}
?>
