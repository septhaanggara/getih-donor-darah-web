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
		$data['judul'] = 'Stock Darah Saat Ini';
		$data['stock'] = $this->Stock_model->getAllStock();
		if ($this->input->post('keyword')) {
			$data['stock'] = $this->Stock_model->cariDataStock();
		}
		$this->load->view('templates/header', $data);
		$this->load->view('stock/index', $data);
		$this->load->view('templates/footer');
	}

	public function tambah()
	{
		$data['judul'] = 'Form Tambah Stock Darah';

		//from library form_validation, set rules for nama, nim, email = required
        $this->form_validation->set_rules('golongandarah', 'Golongan darah', 'required');
        $this->form_validation->set_rules('rhesus', 'Rhesus', 'required');
        $this->form_validation->set_rules('jumlah', 'Jumlah', 'required');
		//conditon in form_validation, if user input form = false, then load page "tambah" again
        if($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('stock/tambah');
            $this->load->view('templates/footer');
        } else {
            $this->Stock_model->tambahDataStock();
            $this->session->set_flashdata('flash', 'Added Success');
            redirect('stock');
        }
	}


	public function hapus($id)
	{
		$this->Stock_model->hapusDataStock($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('stock');
	}

}

