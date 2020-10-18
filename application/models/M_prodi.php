<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_prodi extends CI_Model {
	public function select_all($id_fakultas) {
		$sql = "SELECT * FROM prodi WHERE id_fakultas=$id_fakultas";
		$data = $this->db->query($sql);

		return $data->result();
	}


	
}