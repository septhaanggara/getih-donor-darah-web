<?php

class Pendonor_model extends CI_model
{
	public function getAllPendonor()
	{
		
		return $this->db->get('pendonor')->result_array();

	}
	

	public function tambahDataPendonor()
	{
		$data = [
			"nama" => $this->input->post('nama', true),
			"email" => $this->input->post('email', true),
			"golongandarah" => $this->input->post('goldar', true),
			"riwayat" => $this->input->post('riwayat',true),
			"tanggal" => $this->input->post('tanggal',true),
			"tempat" => $this->input->post('tempat', true),
		];

		
		$this->db->insert('pendonor', $data);
	}

	public function hapusDataPendonor($id)
	{
		
		$this->db->delete('pendonor', ['id' => $id]); 
	}

	public function getPendonorById($id)
	{
		
		return $this->db->get_where('pendonor', ['id' => $id])->row_array();
	}

	public function ubahDataPendonor()
	{
		$data = [
			"nama" => $this->input->post('nama', true),
			"golongandarah" => $this->input->post('golongandarah', true),
			"email" => $this->input->post('email', true),
			"tempat" => $this->input->post('tempat', true),
			"riwayat" => $this->input->post('riwayat',true),
		];
		$this->db->where('id', $this->input->post('id'));
        $this->db->update('pendonor', $data);
	}

	public function cariDataPendonor()
	{
		$keyword = $this->input->post('keyword', true);
		$this->db->like('nama', $keyword);
        $this->db->or_like('tempat', $keyword);
        $this->db->or_like('golongandarah', $keyword);
        $this->db->or_like('email', $keyword);


		return $this->db->get('pendonor')->result_array();
	}
}
