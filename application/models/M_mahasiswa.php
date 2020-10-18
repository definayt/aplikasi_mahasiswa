<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_mahasiswa extends CI_Model {
	public function select_all() {
		$sql = "SELECT * FROM mahasiswa JOIN fakultas JOIN prodi  WHERE fakultas.id_fakultas=mahasiswa.id_fakultas AND mahasiswa.id_prodi=prodi.id_prodi ";
		$data = $this->db->query($sql);

		return $data->result();
	}

	public function select_by_NIM($NIM) {
		$sql = "SELECT * FROM mahasiswa JOIN fakultas JOIN prodi  WHERE fakultas.id_fakultas=mahasiswa.id_fakultas AND mahasiswa.id_prodi=prodi.id_prodi AND NIM = $NIM";
		$data = $this->db->query($sql);

		return $data->row();
	}

	public function cek_by_NIM($NIM) {
		$sql = "SELECT NIM FROM mahasiswa WHERE NIM = $NIM";
		$data = $this->db->query($sql);

		return $data->row();
	}

	
	public function select_by_fakultas($id_fakultas) {
		$sql = "SELECT * FROM mahasiswa JOIN fakultas JOIN prodi  WHERE fakultas.id_fakultas=mahasiswa.id_fakultas AND mahasiswa.id_prodi=prodi.id_prodi AND fakultas.id_fakultas = '{$id_fakultas}' ORDER BY input_time DESC";

		$data = $this->db->query($sql);

		return $data->result();
	}

	public function insert($data) {
		$sql = "INSERT INTO mahasiswa VALUES('" .$data['NIM'] ."','" .$data['nama_mahasiswa'] ."','" .$data['alamat'] ."','" .$data['tanggal_lahir'] ."','" .$data['gender'] ."','" .$data['agama'] ."','" .$data['id_fakultas'] ."','" .$data['prodi'] ."','". $data['input_time']."')";

		$this->db->query($sql);

		return $this->db->affected_rows();
	}

	public function update($data) {
		$sql = "UPDATE mahasiswa SET nama_mahasiswa='" .$data['nama_mahasiswa'] ."', alamat='" .$data['alamat'] ."', tanggal_lahir='" .$data['tanggal_lahir'] ."', gender='" .$data['gender'] ."', agama='" .$data['agama'] ."', id_prodi='" .$data['prodi'] ."' WHERE NIM='" .$data['NIM'] ."'";

		$this->db->query($sql);

		return $this->db->affected_rows();
	}

	public function delete($NIM) {
		$sql = "DELETE FROM mahasiswa WHERE NIM='" .$NIM ."'";

		$this->db->query($sql);

		return $this->db->affected_rows();
		
	}
	
}