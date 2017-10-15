<?php
class M_dosen extends CI_Model
{

  function __construct()
  {
    # code..
    // $table = 'users';
    $this->load->database();
  }

  public function getDosen($id=FALSE){

      if($id==FALSE){
        $query = $this->db->get('dosen');
        return $query->result_array();
      }
      else {
        $query = $this->db->get_where('dosen', array('id' => $id));
        // echo var_dump($query);
        return $query->result_array();
      }
}
public function newDosen($data)
{
  return $this->db->insert('dosen', $data);
}

public function editDosen($data)
{
  $this->db->where('id', $data['id']);
  $this->db->update('dosen', $data);
}
public function deleteDosen($id)
{
  $this->db->where('id', $id);
  $this->db->delete('dosen');
}
}
?>
