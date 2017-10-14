<?php
class M_mataKuliah extends CI_Model
{

  function __construct()
  {
    # code..
    // $table = 'users';
    $this->load->database();
  }

  public function getMataKuliah($id=FALSE){

      if($id==FALSE){
        $query = $this->db->get('mata_kuliah');
        return $query->result_array();
      }
      else {
        $query = $this->db->get_where('mata_kuliah', array('id' => $id));
        // echo var_dump($query);
        return $query->result_array();
      }
}

public function newMataKuliah($data)
{
  return $this->db->insert('mata_kuliah', $data);
}

public function editMataKuliah($data)
{
  $this->db->where('id', $data['id']);
  $this->db->update('mata_kuliah', $data);
}
public function deleteMataKuliah($id)
{
  $this->db->where('id', $id);
  $this->db->delete('mata_kuliah');

}
}
?>
