<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Pendonor_model');
		$this->load->model('Stock_model');
		
	}

	public function index(){
	
	$data['judul']='Dashboard';
	$data['user']=$this->db->get_where('user',['email'=>
	$this->session->userdata('email')])->row_array();
	$this->load->view('admin/header',$data);
	$this->load->view('admin/sidebar',$data);
	$this->load->view('admin/topbar',$data);
	$this->load->view('admin/index',$data);
	$this->load->view('admin/footer');
}

	public function pendonor()
	{

	$data['judul']='Data pendonor';
	$data['pendonor'] = $this->Pendonor_model->getAllPendonor();
	$data['user']=$this->db->get_where('user',['email'=>
	$this->session->userdata('email')])->row_array();
	$this->load->view('admin/header',$data);
	$this->load->view('admin/sidebar',$data);
	$this->load->view('admin/topbar',$data);
	$this->load->view('admin/pendonor',$data);
	$this->load->view('admin/footer');
	if ($this->input->post('keyword')) {
			$data['pendonor'] = $this->Pendonor_model->cariDataPendonor();
		}
		
	}

	public function hapus($id)
	{
		$this->Pendonor_model->hapusDataPendonor($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('admin/pendonor');
	}

public function input(){
		$data['user']=$this->db->get_where('user',['email'=>
	$this->session->userdata('email')])->row_array();
	$this->form_validation->set_rules('golongandarah','Golongan Darah','required|is_unique[stockdarah.golongandarah]',[
			'is_unique'=> 'Golongan Darah ini telah terdaftar'
		]);
	$this->form_validation->set_rules('jumlah','Jumlah','required');
	if ($this->form_validation->run() == false){
		$data['judul']='Input Stock Darah';
		$this->load->view('admin/header',$data);
		$this->load->view('admin/sidebar',$data);
		$this->load->view('admin/topbar',$data);
		$this->load->view('admin/input',$data);
		$this->load->view('admin/footer');
	}else{
		$golongandarah=$this->input->post('golongandarah', true);
		$jumlah=$this->input->post('jumlah', true);
		$rhesus=$this->input->post('rhesus', true);
		$image=$_FILES['image'];
		if($image){
			$config['upload_path'] = './assets/img/goldar/';
			$config['allowed_types'] = 'gif|jpg|png';
			$this->load->library('upload', $config);
			if($this->upload->do_upload('image')){
				$new_image = $this->upload->data('file_name');
				$this->db->set('image',$new_image);}
		}
			$data = [
			"golongandarah" => $golongandarah,
			"jumlah" => $jumlah,
			"image" => $new_image,
			"rhesus" => $rhesus,
		];
		if ($data["image"]==''){
			$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">Tidak ada foto yang dimasukan</div>');
			redirect('admin/input');

		}
		$this->db->insert('stockdarah', $data);
			$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Data berhasil ditambahkan</div>');
			redirect('admin/input');
		}
	
	}
	public function stock(){
		$data['user']=$this->db->get_where('user',['email'=>
	$this->session->userdata('email')])->row_array();

	$data['stock']=$this->Stock_model->getAllStock();
	$data['judul']='Update Stock Darah';
	$this->load->view('admin/header',$data);
	$this->load->view('admin/sidebar',$data);
	$this->load->view('admin/topbar',$data);
	$this->load->view('admin/card',$data);
	$this->load->view('admin/footer');
	}
		
	public function hapusstock($golongandarah)
	{
		$this->Stock_model->hapusDataStock($golongandarah);
        $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Data berhasil dihapus</div>');
        redirect('admin/stock');
	}
public function ubah(){
	$data['judul']='Edit Stock Darah';
	$data['user']=$this->db->get_where('user',['email'=>
	$this->session->userdata('email')])->row_array();
	$data['stockdarah']=$this->db->get('stockdarah')->row_array();

	$this->form_validation->set_rules('jumlah','Jumlah','required|trim');
	$this->form_validation->set_rules('rhesus','Rhesus','required');
	if ($this->form_validation->run() == false) {
	$this->load->view('admin/header',$data);
	$this->load->view('admin/sidebar',$data);
	$this->load->view('admin/topbar',$data);
	$this->load->view('admin/ubah',$data);
	$this->load->view('admin/footer');

	}else{
		$golongandarah=$this->input->post('golongandarah');
		$jumlah=$this->input->post('jumlah');
		$rhesus=$this->input->post('rhesus');

		//gambarnya
		$upload_image = $_FILES['image'];
		if($upload_image){
			$config['upload_path'] = './assets/img/goldar';
$config['allowed_types'] = 'gif|jpg|png';
$this->load->library('upload', $config);
	if($this->upload->do_upload('image')){
		$old_image= $data['stock']['image'];
		if($old_image != $old_image){
			unlink(FCPATH. 'assets/img/goldar/'. $old_image);}
		$new_image = $this->upload->data('file_name');
		$this->db->set('image',$new_image);
	}

		}

		$this->db->set('jumlah',$jumlah);
		$this->db->set('rhesus',$rhesus);
		$this->db->where('golongandarah',$golongandarah);
		$this->db->update('stockdarah');
		$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Stock berhasil diubah</div>');
		redirect('admin/ubah'); 

	}

	}	
	}
	
	


