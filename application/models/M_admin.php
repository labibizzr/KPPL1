<?php
class M_admin extends CI_Model
{

  function __construct()
  {
    # code..
    // $table = 'users';
    $this->load->database();
  }

  public function login_admin_authen(){
    $username = $this->input->post('username');
    $password = $this->input->post('password');

    $this->db->select('*');
    $this->db->where('username',$username);
    $this->db->from('user');
    $query = $this->db->get();
    $row = $query->row_array();
    // $password_hash = $row['password'];


    			if (strcmp($password,$row['password'])==0) {
            if($row['userlevel'] == -1){
    			       return true;
            }
    			}
    			else{
    			return false;
    			}
  }

}
?>
