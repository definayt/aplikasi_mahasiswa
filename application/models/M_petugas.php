<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_petugas extends CI_Model {
	public function select_all() {
		$sql = "SELECT * FROM petugas JOIN fakultas  WHERE fakultas.id_fakultas=petugas.id_fakultas";
		$data = $this->db->query($sql);

		return $data->result();
	}

	
	public function select_by_fakultas($id_fakultas) {
		$sql = "SELECT * FROM petugas JOIN fakultas  WHERE fakultas.id_fakultas=petugas.id_fakultas AND petugas.id_fakultas = '{$id_fakultas}' AND role='fakultas'";

		$data = $this->db->query($sql);

		return $data->result();
	}

	public function delete($id) {
		$sql = "DELETE FROM petugas WHERE id_petugas='" .$id ."'";

		$this->db->query($sql);

		return $this->db->affected_rows();
		
	}

	public function login($username, $password) {
		$this->db->select('*');
		$this->db->from('petugas');
		$this->db->join('fakultas','fakultas.id_fakultas=petugas.id_fakultas');
		$this->db->where('username', $username);
		$this->db->where('password', md5($password));

		$data = $this->db->get();


		if ($data->num_rows() == 1) {
			return $data->row();
		} else {
			return false;
		}
	}

	
}