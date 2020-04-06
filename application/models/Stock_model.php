<?php

class Stock_model extends CI_model
{
	public function getAllStock()
	{
		//use query builder to get data table "mahasiswa"
		return $this->db->get('Stockdarah')->result_array();

	}

	public function tambahDataStockdarah()
	{
		$data = [
			"golongandarah" => $this->input->post('golongandarah', true),
			"rhesus" => $this->input->post('email', true),
			"jumlah" => $this->input->post('tempat', true),
		];

		//use query builder to insert $data to table "mahasiswa"
		$this->db->insert('golongandarah', $data);
	}

	public function ubahDataPendonor()
	{
		$data = [
			"golongandarah" => $this->input->post('golongandarah', true),
			"rhesus" => $this->input->post('rhesus', true),
			"jumlah" => $this->input->post('jumlah', true),
		];
		//use query builder class to update data mahasiswa based on id
		$this->db->where('golongandarah', $this->input->post('id'));
        $this->db->update('stockdarah', $data);
	}

}
