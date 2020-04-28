<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Pendonor_model');
		$this->load->model('Stock_model');
		
	}

	public function index(){
	
	$data['judul']='Home';
	$data['user']=$this->db->get_where('user',['email'=>
	$this->session->userdata('email')])->row_array();
	$this->load->view('user/header',$data);
	$this->load->view('user/topbar',$data);
	$this->load->view('user/index',$data);
	$this->load->view('user/footer');
}
	public function edit(){
	$data['judul']='Edit Profile';
	$data['user']=$this->db->get_where('user',['email'=>
	$this->session->userdata('email')])->row_array();

	$this->form_validation->set_rules('name','Full Name','required|trim');
	if ($this->form_validation->run() == false) {
		$this->load->view('user/header',$data);
		$this->load->view('user/topbar',$data);
		$this->load->view('user/edit',$data);
		$this->load->view('user/footer');
	}else{
		$name=$this->input->post('name');
		$email=$this->input->post('email');


		//gambarnya
		$upload_image = $_FILES['image'];
		if($upload_image){
		$config['upload_path'] = './assets/img/profile/';
		$config['allowed_types'] = 'gif|jpg|png';
		$this->load->library('upload', $config);

	if($this->upload->do_upload('image')){
		$new_image = $this->upload->data('file_name');
		$this->db->set('image',$new_image);
	}else{
		echo $this->upload->display_errors();
	}

		}

		$this->db->set('name',$name);
		$this->db->where('email',$email);
		$this->db->update('user');
		$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Profile berhasil diubah</div>');
			redirect('user'); 

	}
			
		
	
	}



public function changepass(){
	
	$data['judul']='Ubah Password';
	$data['user']=$this->db->get_where('user',['email'=>
	$this->session->userdata('email')])->row_array();

	$this->form_validation->set_rules('current_password','Password Saat Ini','required|trim');
	$this->form_validation->set_rules('new_password1','Password Baru','required|trim|min_length[3]|matches[new_password2]');
	$this->form_validation->set_rules('new_password2','Konfirmasi Password','required|trim|min_length[3]|matches[new_password1]');
	if($this->form_validation->run()==false){
		$this->load->view('user/header',$data);
	$this->load->view('user/topbar',$data);
	$this->load->view('user/changepass',$data);
	$this->load->view('user/footer');	
	}else{
		$current_password=$this->input->post('current_password');
		$new_password=$this->input->post('new_password1');
		if(!password_verify($current_password, $data['user']['password'])){
			$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">Password saat ini salah</div>');
			redirect('user/changepass'); 
		}else{
			if($current_password == $new_password){
				$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">Password lama dan baru tidak boleh sama</div>');
			redirect('user/changepass'); 
			}else{
				
				$password_hash=password_hash($new_password, PASSWORD_DEFAULT);
				$this->db->set('password',$password_hash);
				$this->db->where('email',$this->session->userdata('email'));
				$this->db->update('user');
				$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Password berhasil diganti</div>');
			redirect('user/changepass'); 
			}
		}
	}
	
}

public function stock(){
	$data['stock']=$this->Stock_model->getAllStock();
	$data['judul']='Daftar Stock Darah';
	$data['user']=$this->db->get_where('user',['email'=>
	$this->session->userdata('email')])->row_array();
	$this->load->view('user/header',$data);
	$this->load->view('user/topbar',$data);
	$this->load->view('user/card',$data);
	$this->load->view('user/footer');
}
public function daftar(){
	$this->form_validation->set_rules('goldar', 'Golongan Darah', 'required');
    $this->form_validation->set_rules('riwayat', 'Riwayat', 'required');
    $this->form_validation->set_rules('tanggal', 'Tanggal', 'required');
    $this->form_validation->set_rules('tempat', 'Tempat', 'required');
    $this->form_validation->set_rules('email','Email','required|trim|valid_email|is_unique[pendonor.email]',[ 'is_unique'=> 'Email ini telah terdaftar']);
    if ($this->form_validation->run()== false){
    	$data['judul']='Daftar Menjadi Pendonor';
		$data['user']=$this->db->get_where('user',['email'=>
		$this->session->userdata('email')])->row_array();
		$this->load->view('user/header',$data);
		$this->load->view('user/topbar',$data);
		$this->load->view('user/form',$data);
		$this->load->view('user/footer');	
    }else{
    	 $this->Pendonor_model->tambahDataPendonor();
         $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Selamat anda telah mendaftar silahkan tunggu konfirmasi dari kami</div>');
         redirect('user/daftarpendonor');
    }
	
}
public function daftarpendonor(){
	$data['daftarpendonor']=$this->Pendonor_model->getAllPendonor();
	$data['judul']='Daftar Pendonor';
	$data['user']=$this->db->get_where('user',['email'=>
	$this->session->userdata('email')])->row_array();
	$this->load->view('user/header',$data);
	$this->load->view('user/topbar',$data);
	$this->load->view('user/pendonor',$data);
	$this->load->view('user/footer');
}
public function update(){
	$this->form_validation->set_rules('email', 'Email', 'required');
	$this->form_validation->set_rules('name', 'Nama', 'required');
	$this->form_validation->set_rules('goldar', 'Golongan Darah', 'required');
    $this->form_validation->set_rules('riwayat', 'Riwayat', 'required');
    $this->form_validation->set_rules('tanggal', 'Tanggal', 'required');
    $this->form_validation->set_rules('tempat', 'Tempat', 'required');
    $data['pendonor']=$this->db->get('pendonor')->row_array();
    if($this->form_validation->run() == false){
	$data['judul']='Ubah data pendonor';
	$data['user']=$this->db->get_where('user',['email'=>
	$this->session->userdata('email')])->row_array();
	$this->load->view('user/header',$data);
	$this->load->view('user/topbar',$data);
	$this->load->view('user/update',$data);
	$this->load->view('user/footer');
    }else{
    	$golongandarah=$this->input->post('goldar');
		$name=$this->input->post('name');
		$tempat=$this->input->post('tempat');
		$riwayat=$this->input->post('riwayat');
		$tanggal=$this->input->post('tanggal');
		$email=$this->input->post('email');
		$this->db->set('golongandarah',$golongandarah);
		$this->db->set('riwayat',$riwayat);
		$this->db->set('tanggal',$tanggal);
		$this->db->where('email',$email);
		$this->db->update('pendonor');
		$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Data telah berhasil diubah</div>');
		redirect('user/daftarpendonor'); 
    }
	
}
public function batal(){
	$data['judul']='Batal menjadi pendonor';
	$data['pendonor']=$this->db->get('pendonor')->row_array();
	$data['user']=$this->db->get_where('user',['email'=>
	$this->session->userdata('email')])->row_array();
	$this->load->view('user/header',$data);
	$this->load->view('user/topbar',$data);
	$this->load->view('user/hapus',$data);
	$this->load->view('user/footer');
}
	public function hapus($id)
	{
		$this->Pendonor_model->hapusDataPendonor($id);
  		$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Data telah berhasil dihapus</div>');
        redirect('user/daftarpendonor');
	}
	}



