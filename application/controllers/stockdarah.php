<?php

class Stock extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		//load model "Mahasiswa_model"
		$this->load->model('Stock_model');
		//load library form validation
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['judul'] = 'Stock darah saat ini';
		$data['pendonor'] = $this->Stock_model->getAllStock();
		$this->load->view('templates/header', $data);
		$this->load->view('stock/index', $data);
		$this->load->view('templates/footer');
	}

}

