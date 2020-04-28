<?php

class Stock extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Stock_model');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['judul'] = 'Stock Darah Saat Ini';
		$data['stock'] = $this->Stock_model->getAllStock();
		$this->load->view('templates/header', $data);
		$this->load->view('stock/index', $data);
		$this->load->view('templates/footer');
	}
	public function stock(){
		$data['user']=$this->db->get_where('user',['email'=>
	$this->session->userdata('email')])->row_array();

	$data['stock']=$this->Stock_model->getAllStock();
	$data['judul']='Stock Darah';
	$this->load->view('templates/header', $data);
	$this->load->view('stock/index', $data);
	$this->load->view('templates/footer');
	}



}

