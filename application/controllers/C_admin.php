<?php
// defined('BASEPATH') OR exit('No direct script access allowed');

class C_admin extends CI_Controller {

	function __construct()
  {
    parent::__construct();
		 $this->load->model('M_admin');
		 $this->load->model('M_mataKuliah');
		 $this->load->model('M_dosen');
		 $this->load->helper('url_helper');
  }

	public function index()
	{

		if(!isset($_SESSION['username'])){
          redirect('admin/login');
        }
				else {

        $array1 = $this->M_mataKuliah->getMataKuliah();
				$array2 = $this->M_dosen->getDosen();
				$data['title'] = 'Dashboard Admin';
        $data['matkul'] = $array1;
				$data['dosen'] = $array2;

		$this->load->view('admin/templates/header',$data);
		$this->load->view('admin/index',$data);
		$this->load->view('admin/templates/footer');
	}
	}

	public function tabelMataKuliah()
	{

		if($this->isLogin()){

			$array1 = $this->M_mataKuliah->getMataKuliah();

			$data['title'] ='Mata Kuliah';
			$data['page'] = 'Mata Kuliah';
			$data['matkul'] = $array1;
			$this->load->view('admin/templates/header',$data);
			$this->load->view('admin/tabelMataKuliah',$data);
			$this->load->view('admin/templates/footer');

		}
		else{
			redirect('admin/login');
		}

	}

	public function createMataKuliah()
	{
		if($this->isLogin())
		{
			$this->load->helper('form');
			$this->load->library('form_validation');

			$data['title'] = 'Buat record mata kuliah baru';
			$data['page'] = 'Mata kuliah / Create';
			$this->load->view('admin/templates/header',$data);
			$this->load->view('admin/form/createMataKuliah',$data);
			$this->load->view('admin/templates/footer');
		}
	}

	public function editMataKuliah()
	{
		if($this->isLogin()){

		}
	}

	private function isLogin(){
		if (isset($_SESSION['username']))
			return true;

			else

			return false;
	}

	public function logout(){
		session_destroy();
		redirect('admin/login');
	}

	public function login(){
		$this->load->helper('form');
    $this->load->library('form_validation');

		$data['title'] = "Halaman login";

		$this->form_validation->set_rules('username', 'Username', 'required');
	  $this->form_validation->set_rules('password', 'Password', 'required');

		if($this->form_validation->run() == FALSE)  {

     $this->load->view('admin/login', $data);

      }
			else {
        $isLogin = $this->M_admin->login_admin_authen();
        if (!$isLogin){
          echo "Username/Password salah";
        }
				else{
					$_SESSION['username'] = $this->input->post('username');

					 redirect('/admin');
					//  echo var_dump(isset($_SESSION['username']));
				}


	}
}
}

?>
