<?php

class Pendonor extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		//load model "Mahasiswa_model"
		$this->load->model('Pendonor_model');
		//load library form validation
	}

	public function index()
	{
		$data['judul'] = 'Daftar Pendonor';
		$data['pendonor'] = $this->Pendonor_model->getAllPendonor();
		if ($this->input->post('keyword')) {
			$data['pendonor'] = $this->Pendonor_model->cariDataPendonor();
		}
		$this->load->view('templates/header', $data);
		$this->load->view('pendonor/index', $data);
		$this->load->view('templates/footer');
	}

	public function tambah()
	{
		$data['judul'] = 'Form Tambah Data Pendonor';

		//from library form_validation, set rules for nama, nim, email = required
		$this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('nim', 'NIM', 'required|numeric');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');

		//conditon in form_validation, if user input form = false, then load page "tambah" again
        if($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('mahasiswa/tambah');
            $this->load->view('templates/footer');
        } else {
            $this->Mahasiswa_model->tambahDataMahasiswa();
            $this->session->set_flashdata('flash', 'Added Success');
            redirect('mahasiswa');
        }
	}


	public function hapus($id)
	{
		$this->Mahasiswa_model->hapusDataMahasiswa($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('mahasiswa');
	}


	public function ubah($id)
	{
		$data['judul'] = 'Form Ubah Data Mahasiswa';

		$data['mahasiswa'] = $this->Mahasiswa_model->getMahasiswaById($id);
		$data['jurusan'] = ['Teknik Informatika', 'Teknik Industri', 'Teknik Elektro', 'DKV', 'MBTI'];

		//from library form_validation, set rules for nama, nim, email = required
		$this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('nim', 'NIM', 'required|numeric');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');

		//conditon in form_validation, if user input form = false, then load page "ubah" again
		if($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('mahasiswa/ubah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Mahasiswa_model->ubahDataMahasiswa();
            $this->session->set_flashdata('flash', 'Data Changed Successfully');
            redirect('mahasiswa');
        }
	}
}

