<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_fakultas extends CI_Model {
	public function select_all() {
		$sql = "SELECT * FROM fakultas";
		$data = $this->db->query($sql);

		return $data->result();
	}

	public function select_by_id($id) {
		$sql = "SELECT * FROM fakultas WHERE id_fakultas=$id";
		$data = $this->db->query($sql);

		return $data->row();
	}


	
}