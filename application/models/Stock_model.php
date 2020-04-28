<?php

class Stock_model extends CI_model
{
	public function getAllStock()
	{
		
		return $this->db->get('stockdarah')->result_array();
	}
	public function hapusDataStock($golongandarah)
	{
		
		$this->db->delete('stockdarah', ['golongandarah' => $golongandarah]); 
	}
}