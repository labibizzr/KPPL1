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
      
        $query = $this->db->select('*, A.nama as nama matkul, C.nama as nama kelas, B.nama as nama dosen, C.id as kelasId')
                  ->from('mata_kuliah AS A')
                  ->join('kelas as C', 'A.id = C.mata_kuliahId', 'INNER')
                  ->join('dosen as B', 'B.id = C.dosenId','INNER');
                  $result = $this->db->get();
        return $result->result_array();
      }
      else {
       $query = $this->db->get_where('kelas', array('id' => $id));
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
