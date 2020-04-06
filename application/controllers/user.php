<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function index(){
	
	$data['judul']='MyProfile';
	$data['user']=$this->db->get_where('user',['email'=>
	$this->session->userdata('email')])->row_array();
	$this->load->view('user/header',$data);
	$this->load->view('user/sidebar',$data);
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
		$this->load->view('user/sidebar',$data);
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
$config['max_size']     = '2018'; 
$this->load->library('upload', $config);

	if($this->upload->do_upload('image')){
		$old_image= $data['user']['image'];
		if($old_image != 'default.jpg'){
			unlink(FCPATH. 'assets/img/profile/'. $old_image);}
		$new_image = $this->upload->data('file_name');
		$this->db->set('image',$new_image);
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
	
	$data['judul']='MyProfile';
	$data['user']=$this->db->get_where('user',['email'=>
	$this->session->userdata('email')])->row_array();

	$this->form_validation->set_rules('current_password','Password Saat Ini','required|trim');
	$this->form_validation->set_rules('new_password1','Password Baru','required|trim|min_length[3]|matches[new_password2]');
	$this->form_validation->set_rules('new_password2','Konfirmasi Password','required|trim|min_length[3]|matches[new_password1]');
	if($this->form_validation->run()==false){
		$this->load->view('user/header',$data);
	$this->load->view('user/sidebar',$data);
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



	}



