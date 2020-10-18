<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once("application/core/AUTH_Controller.php");
class Petugas extends AUTH_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct() {
		parent::__construct();
		$this->load->model('M_petugas');
		$this->load->model('M_fakultas');
		
		
		$this->load->helper(array('url'));
	}

	public function index()
	{
		$data['userdata'] 		= $this->userdata;
		$data['page']="Petugas";

		
		$data['data_petugas'] = $this->M_petugas->select_by_fakultas($this->userdata->id_fakultas);
		$data['data_fakultas'] = $this->M_fakultas->select_by_id($this->userdata->id_fakultas);
		

		$this->load->view('layout/header.php');
		$this->load->view('layout/navbar.php');
		$this->load->view('petugas.php', $data);
		$this->load->view('layout/sidebar.php', $data);
		$this->load->view('layout/footer.php');	


	}

	
	public function delete($id_petugas) {

		if($id_petugas != $this->userdata->id_petugas){
			$result = $this->M_petugas->delete($id_petugas);
					
			if ($result > 0) {
				$this->session->set_flashdata('flash_data', 'Data Petugas Berhasil dihapus');
				redirect('Petugas');
			} else {
				$this->session->set_flashdata('flash_data', 'Data Petugas Berhasil dihapus');
				redirect('Petugas');
			}
		}else{
			$this->session->set_flashdata('flash_data', 'Anda Tidak Dapat Menghapus Akun Anda Sendiri');
				redirect('Petugas');
		}
		
		
	}
}
