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

			$this->form_validation->set_rules('kode', 'kode', 'required');
      $this->form_validation->set_rules('nama', 'nama', 'required');
      $this->form_validation->set_rules('semester', 'semester', 'required');
			$this->form_validation->set_rules('sks', 'sks', 'required');

			$data['title'] = 'Buat record mata kuliah baru';
			$data['page'] = 'Mata kuliah / Create';

			if ($this->form_validation->run() == FALSE)
        {
					$this->load->view('admin/templates/header',$data);
					$this->load->view('admin/form/createMataKuliah',$data);
					$this->load->view('admin/templates/footer');
        }
				else{
					$data = array(
						'kode' => $this->input->post('kode'),
						'nama' => $this->input->post('nama'),
						'semester' => $this->input->post('semester'),
						'sks' => $this->input->post('sks')
					);
					$this->M_mataKuliah->newMataKuliah($data);
					redirect(site_url('admin/tabel/matakuliah'));
				}
		}
	}


	public function editMataKuliah($id)
	{
		if($this->isLogin())
		{
			$this->load->helper('form');
			$this->load->library('form_validation');

			$this->form_validation->set_rules('kode', 'kode', 'required');
      $this->form_validation->set_rules('nama', 'nama', 'required');
      $this->form_validation->set_rules('semester', 'semester', 'required');
			$this->form_validation->set_rules('sks', 'sks', 'required');

			$data['title'] = 'Buat record mata kuliah baru';
			$data['page'] = 'Mata kuliah / Create';
			$idUpdate = $id;
			$data['matkul'] = $this->M_mataKuliah->getMataKuliah($id);
			if ($this->form_validation->run() == FALSE)
        {
					$this->load->view('admin/templates/header',$data);
					$this->load->view('admin/form/editMataKuliah',$data);
					$this->load->view('admin/templates/footer');
        }
				else{
					$data = array(
						'id' => $idUpdate,
						'kode' => $this->input->post('kode'),
						'nama' => $this->input->post('nama'),
						'semester' => $this->input->post('semester'),
						'sks' => $this->input->post('sks')
					);
					$this->M_mataKuliah->editMataKuliah($data);
					redirect(site_url('admin/tabel/matakuliah'));
				}
		}
	}

	public function deleteMataKuliah($id){
		$this->M_mataKuliah->deleteMataKuliah($id);
		redirect(site_url('admin/tabel/matakuliah'));
	}

	public function tabelDosen(){
		if($this->isLogin()){

			$array1 = $this->M_dosen->getDosen();

			$data['title'] ='Dosen';
			$data['page'] = 'Dosen';
			$data['dosen'] = $array1;
			$this->load->view('admin/templates/header',$data);
			$this->load->view('admin/tabelDosen',$data);
			$this->load->view('admin/templates/footer');

		}
		else{
			redirect('admin/login');
		}
	}
	public function deleteDosen($id){
		$this->M_dosen->deleteDosen($id);
		redirect(site_url('admin/tabel/dosen'));
	}

	public function createDosen()
	{
		if($this->isLogin())
		{
			$this->load->helper('form');
			$this->load->library('form_validation');

			$this->form_validation->set_rules('nip', 'kode', 'required');
      $this->form_validation->set_rules('nama', 'nama', 'required');

			$data['title'] = 'Memasukan dosen baru';
			$data['page'] = 'Mata kuliah / Create';

			if ($this->form_validation->run() == FALSE)
        {
					$this->load->view('admin/templates/header',$data);
					$this->load->view('admin/form/createDosen',$data);
					$this->load->view('admin/templates/footer');
        }
				else{
					$data = array(
						'nip' => $this->input->post('nip'),
						'nama' => $this->input->post('nama'),
					);
					$this->M_dosen->newDosen($data);
					redirect(site_url('admin/tabel/dosen'));
				}
		}
	}

	public function editDosen($id)
	{
		if($this->isLogin())
		{
			$this->load->helper('form');
			$this->load->library('form_validation');

			$this->form_validation->set_rules('nip', 'kode', 'required');
      $this->form_validation->set_rules('nama', 'nama', 'required');


			$data['title'] = 'Buat dosen baru';
			$data['page'] = 'Mata kuliah / Create';
			$idUpdate = $id;
			$data['dosen'] = $this->M_dosen->getDosen($id);
			if ($this->form_validation->run() == FALSE)
        {
					$this->load->view('admin/templates/header',$data);
					$this->load->view('admin/form/editDosen',$data);
					$this->load->view('admin/templates/footer');
        }
				else{
					$data = array(
						'id' => $idUpdate,
						'nip' => $this->input->post('nip'),
						'nama' => $this->input->post('nama')
					);
					$this->M_dosen->editDosen($data);
					redirect(site_url('admin/tabel/dosen'));
				}
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
