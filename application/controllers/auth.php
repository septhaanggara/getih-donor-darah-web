<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
	}
	public function index(){

		$this->form_validation->set_rules('email','Email','trim|required|valid_email');
		$this->form_validation->set_rules('password','Password','trim|required');
		if($this->form_validation->run() == false){
		$data['judul']='Login';
		$this->load->view('templates/header',$data);
		$this->load->view('auth/login');
		$this->load->view('templates/footer');
		}else{
			$this->_login();
		}

	}

	private function _login(){
		$email=$this->input->post('email');
		$password=$this->input->post('password');
		$user=$this->db->get_where('user',['email'=> $email])->row_array();
		if($user){
			//jika user aktif
			if($user['is_active']==1){
				//pasword valid
				if(password_verify($password, $user['password'])){
					$data=[
						'email'=> $user['email'],
						'role_id'=>$user['role_id']
					];
					$this->session->set_userdata($data);
					if($user['role_id']==1){
						redirect('admin');
					}else{
						redirect('user');	
					}
					

				}else{
					$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">
					password yang anda masukan salah</div>');
					redirect('auth'); 
				}
			}else{
				$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">
				Email ini tidak aktif</div>');
			redirect('auth'); 
			}

		}else{
			$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">
				Email tidak terdaftar</div>');
			redirect('auth'); 
		}
	}

	public function registration(){

		$this->form_validation->set_rules('name','Name','required|trim');
		$this->form_validation->set_rules('email','Email','required|trim|valid_email|is_unique[user.email]',[
			'is_unique'=> 'Email ini telah terdaftar'
		]);
		$this->form_validation->set_rules('password1','Password','required|trim|min_length[3]|matches[password2]',[
			'matches' => 'Password tidak sama!',
			'min_length' => 'Password terlalu pendek'
		]);
		$this->form_validation->set_rules('password2','Password','required|trim|matches[password1]');

		if ($this->form_validation->run() == false){
		$data['judul']='user registration';
		$this->load->view('templates/header',$data);
		$this->load->view('auth/registration');
		$this->load->view('templates/footer');	
		}
		else{
			$data=[
				'name'=> htmlspecialchars($this->input->post('name',true)),
				'email'=> htmlspecialchars($this->input->post('email',true)),
				'image'=>'default.jpg',
				'password'=>password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
				'role_id'=>2,
				'is_active'=>0,
				'date_created'=> time()
			];

			// $this->db->insert('user',$data);

			$this->_sendEmail();
			$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Akun telah berhasil dibuat. Silahkan konfirmasi ke email</div>');
			redirect('auth'); 
		}
	}

	private function _sendEmail(){
		$config=[
			'protocol'=>'smtp',
			'smtp_host'=>'ssl://smtp.googlemail.com',
			'smtp_user'=>'septhaanggaradeputra@gmail.com',
			'smptp_pass'=>'1234567890',
			'smtp_port'=>465,
			'mail_type'=>'html',
			'charset'=>'utf-8',
			'newline'=>"\r\n"
		];

		$this->load->library('email',$config);
		  
$this->email->initialize($config);
		$this->email->from('septhaanggaradeputra@gmail.com','aku');
		$this->email->to('septha.anggara14@gmail.com');
		$this->email->subject('test');
		$this->email->message('hello');

		if($this->email->send()){
			return true;
		}else{
			echo $this->email->print_debugger();
			die;
		}
	}


	public function logout(){
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('role_id');

		$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Anda telah keluar dari akun</div>');
			redirect('auth'); 
	}
}