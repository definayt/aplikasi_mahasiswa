<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once("application/core/AUTH_Controller.php");
class Mahasiswa extends AUTH_Controller {

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
		$this->load->model('M_mahasiswa');
		$this->load->model('M_fakultas');
		$this->load->model('M_prodi');
		
		$this->load->helper(array('url'));
	}

	public function index()
	{
		$data['userdata'] 		= $this->userdata;
		$data['page']="Mahasiswa";

		$data['data_fakultas'] = $this->M_fakultas->select_by_id($this->userdata->id_fakultas);

		if($this->userdata->role != 'akademik'){
			$data['data_mahasiswa'] = $this->M_mahasiswa->select_by_fakultas($this->userdata->id_fakultas);
		}else{
			$data['data_mahasiswa'] = $this->M_mahasiswa->select_all();
		}

		$this->load->view('layout/header.php');
		$this->load->view('layout/navbar.php');
		$this->load->view('mahasiswa.php', $data);
		$this->load->view('layout/sidebar.php', $data);
		$this->load->view('layout/footer.php');	


	}

	public function insert()
	{
		$data['userdata'] 		= $this->userdata;
		$data['page']="Mahasiswa";

		$data['data_prodi'] = $this->M_prodi->select_all($this->userdata->id_fakultas);

		$this->load->view('layout/header.php');
		$this->load->view('layout/navbar.php');
		$this->load->view('form_tambah_mahasiswa.php', $data);
		$this->load->view('layout/sidebar.php', $data);
		$this->load->view('layout/footer.php');	
	}

	public function proses_insert() {
		$this->form_validation->set_rules('NIM', 'NIM', 'trim|required');
		$this->form_validation->set_rules('nama_mahasiswa', 'nama_mahasiswa', 'trim|required');
		$this->form_validation->set_rules('alamat', 'alamat', 'trim|required');
		
		
		$data 	= $this->input->post();
		date_default_timezone_set("Asia/Bangkok");
		$data['input_time'] = date("Y-m-d H:i:s");

		$data['tanggal_lahir'] = $data['tgl'].' '.$data['bln'].' '.$data['thn'];
		
		if ($this->form_validation->run() == TRUE) {
			
				if($this->M_mahasiswa->cek_by_NIM($data['NIM']) == NULL){
					$result = $this->M_mahasiswa->insert($data);

					if ($result > 0) {
						$this->session->set_flashdata('flash_data', 'Data Mahasiswa Berhasil ditambah');
						redirect('Mahasiswa');
					} else {
						$this->session->set_flashdata('flash_data', 'Data Mahasiswa Gagal ditambah');
						redirect('Mahasiswa');
					}
				}else{
					$this->session->set_flashdata('flash_data', 'Mahasiswa Dengan NIM '.$data['NIM'].' Sudah Ada');
						redirect('Mahasiswa');
				}
				
			
		} else {
			$this->session->set_flashdata('flash_data', 'Seluruh Form Tambah Mahasiswa Harus diisi');
			redirect('Mahasiswa/insert');
		}
	}

		public function update($NIM)
	{
		$data['userdata'] 		= $this->userdata;
		$data['page']="Mahasiswa";

		$data['data_mahasiswa'] = $this->M_mahasiswa->select_by_NIM($NIM);

		$data['data_prodi'] = $this->M_prodi->select_all($this->userdata->id_fakultas);

		$this->load->view('layout/header.php');
		$this->load->view('layout/navbar.php');
		$this->load->view('form_edit_mahasiswa.php', $data);
		$this->load->view('layout/sidebar.php', $data);
		$this->load->view('layout/footer.php');	
	}

	public function proses_update() {
		$this->form_validation->set_rules('NIM', 'NIM', 'trim|required');
		$this->form_validation->set_rules('nama_mahasiswa', 'nama_mahasiswa', 'trim|required');
		$this->form_validation->set_rules('alamat', 'alamat', 'trim|required');
		
		
		$data 	= $this->input->post();
		$data['tanggal_lahir'] = $data['tgl'].' '.$data['bln'].' '.$data['thn'];
		
		
		if ($this->form_validation->run() == TRUE) {
			

				$result = $this->M_mahasiswa->update($data);

				if ($result > 0) {
					$this->session->set_flashdata('flash_data', 'Data Mahasiswa Berhasil diubah');
					redirect('Mahasiswa');
				} else {
					$this->session->set_flashdata('flash_data', 'Data Mahasiswa Gagal diubah');
					redirect('Mahasiswa');
				}
			
		} else {
			$this->session->set_flashdata('flash_data', 'Seluruh Form Edit Mahasiswa Harus diisi');
			redirect('Mahasiswa/update/'.$data['NIM']);
		}
	}

	public function delete($NIM) {
		
		$result = $this->M_mahasiswa->delete($NIM);
		
		if ($result > 0) {
			$this->session->set_flashdata('flash_data', 'Data Mahasiswa Berhasil dihapus');
			redirect('Mahasiswa');
		} else {
			$this->session->set_flashdata('flash_data', 'Data Mahasiswa Gagal dihapus');
			redirect('Mahasiswa');
		}
	}
}
