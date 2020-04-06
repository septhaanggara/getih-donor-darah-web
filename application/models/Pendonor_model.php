<?php

class Pendonor_model extends CI_model
{
	public function getAllPendonor()
	{
		//use query builder to get data table "mahasiswa"
		return $this->db->get('pendonor')->result_array();

	}

	public function tambahDataMahasiswa()
	{
		$data = [
			"nama" => $this->input->post('nama', true),
			"golongandarah" => $this->input->post('golongandarah', true),
			"email" => $this->input->post('email', true),
			"tempat" => $this->input->post('tempat', true),
		];

		//use query builder to insert $data to table "mahasiswa"
		$this->db->insert('pendonor', $data);
	}

	public function hapusDataPendonor($id)
	{
		//use query builder to delete data based on id
		$this->db->delete('pendonor', ['id' => $id]); 
	}

	public function getPendonorById($id)
	{
		//get data mahasiswa based on id 
		return $this->db->get_where('pendonor', ['id' => $id])->row_array();
	}

	public function ubahDataPendonor()
	{
		$data = [
			"nama" => $this->input->post('nama', true),
			"golongandarah" => $this->input->post('golongandarah', true),
			"email" => $this->input->post('email', true),
			"tempat" => $this->input->post('tempat', true),
		];
		//use query builder class to update data mahasiswa based on id
		$this->db->where('id', $this->input->post('id'));
        $this->db->update('pendonor', $data);
	}

	public function cariDataPendonor()
	{
		$keyword = $this->input->post('keyword', true);
		//use query builder class to search data mahasiswa based on keyword "nama" or "jurusan" or "nim" or "email"
		$this->db->like('nama', $keyword);
        $this->db->or_like('tempat', $keyword);
        $this->db->or_like('golongandarah', $keyword);
        $this->db->or_like('email', $keyword);

		//return data mahasiswa that has been searched
		return $this->db->get('pendonor')->result_array();
	}
}
