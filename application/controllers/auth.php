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
			$email= $this->input->post('email',true);
			$data=[
				'name'=> htmlspecialchars($this->input->post('name',true)),
				'email'=> htmlspecialchars($email),
				'image'=>'default.jpg',
				'password'=>password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
				'role_id'=>2,
				'is_active'=>0,
				'date_created'=> time()
			];

			//token aktivasi
			$token=base64_encode(random_bytes(32));
			$user_token= [
				'email'=>$email,
				'token'=>$token,
				'date_created' => time()
			];



			$this->db->insert('user',$data);
			$this->db->insert('user_token',$user_token);



			$this->_sendEmail($token, 'verify');

			$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Akun telah berhasil dibuat. Silahkan aktifasi ke email</div>');
			redirect('auth'); 
		}
	}

	private function _sendEmail($token, $type){
		$this->load->library('email');

        $config = array();
        $config['protocol'] = 'smtp';
        $config['smtp_host'] = 'ssl://smtp.googlemail.com';
        $config['smtp_user'] = 'getih.donordarah@gmail.com';
        $config['smtp_pass'] = 'getih12345';
        $config['smtp_port'] = 465;
        $config['mailtype'] = 'html';
        $config['charset'] = 'utf-8';
        $this->email->initialize($config);

        $this->email->set_newline("\r\n");

	
		$this->email->from('getih.donordarah@gmail.com','Getih');
		$this->email->to($this->input->post('email'));

		if($type == 'verify'){
			$this->email->subject('Verifikasi Akun');
			$this->email->message('
<head>
	<title>VERIFYING EMAIL</title>
</head>
<style>
div {padding:10px;}
</style>
<center>
<div style="background-color:red">
  <h1 style="color:white">PLEASE, VERIFYING YOUR EMAIL </h1>
</div>
</center>
<h4> GETIH wants to verifying your email..</h4>
<body>
<p> Untuk menyelesaikan pengaktifan account GETIH Anda, kita hanya membutuhkan untuk memastikan bahwa email ini adalah email Anda sendiri </p>

<p> Untuk mem-verifikasi alamat email anda, klik link dibawah ini....</p>
 <a href="' . base_url() . 'auth/verify?email=' . $this->input->post('email'). '&token=' .urlencode($token) . '">KLIK LINK INI<a/>


<p> Jika Anda tidak berhasil melakukan verifikasi silahkan cek email Anda kembali dan pastikan benar </p>

<p>Thanks. Sicerly yours,</p>');



		}else if($type == 'forgot'){
			$this->email->subject('Mengatur ulang password');
			$this->email->message('<head>
	<title>FORGET PASSWORD</title>
</head>
<style>
div {padding:10px;}
</style>
<center>
<div style="background-color:red">
  <h1 style="color:white">PLEASE, VERIFYING YOUR ACCOUNT </h1>
</div>
</center>
<h4> GETIH wants to verifying your account..</h4>
<p> Sepertinya Anda mengalami kesulitan untuk mengakses web kami </p>

<p> Untuk mem-verifikasi akun Anda, klik link dibawah ini....</p>
 <a href="' . base_url() . 'auth/resetpassword?email=' . $this->input->post('email'). '&token=' .urlencode($token) . '">KLIK LINK INI<a/>


<p> Jika Anda tidak berhasil melakukan verifikasi silahkan hubungi kami. </p>

<p>Thanks. Sicerly yours,</p>
<p> The GETIH team</p>');

		}
		

		if($this->email->send()){
			return true;
		}else{
			echo $this->email->print_debugger();
			die;
		}
	}

	public function verify(){
		$email=$this->input->get('email');
		$token=$this->input->get('token');

		$user=$this->db->get_where('user',['email'=> $email])->row_array();

		if ($user){
			$user_token=$this->db->get_where('user_token',['token'=> $token])->row_array();

			if ($user_token) {
				if(time()-$user_token['date_created']< (60*60*24)){

						$this->db->set('is_active',1);
						$this->db->where('email',$email);
						$this->db->update('user');
						$this->db->delete('user_token',['email'=> $email]);
						$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">'. $email.' sudah diaktivasi! Silahkan login</div>');
					redirect('auth');
				}else{

					$this->db->delete('user',['email'=>$email]);
					$this->db->delete('user_token',['email'=> $email]);


					$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">Token sudah tidak berlaku</div>');
					redirect('auth');
				}
			}else{
				$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">Aktifasi akun gagal,Token invalid</div>');
					redirect('auth'); 
			}
		}else{
			$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">Aktifasi akun gagal,Email salah</div>');
			redirect('auth'); 
		}
	}



	public function logout(){
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('role_id');

		$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Anda telah keluar dari akun</div>');
			redirect('auth'); 
	}


	public function forgotPassword(){


		$this->form_validation->set_rules('email','Email','trim|required|valid_email');
		if ($this->form_validation->run() == false){
		$data['judul']='forgot password';
		$this->load->view('templates/header',$data);
		$this->load->view('auth/forgot-password');
		$this->load->view('templates/footer');
	
		}else{
			$email = $this->input->post('email');
			$user = $this->db->get_where('user',['email'=> $email, 'is_active'=>1])->row_array();

			if($user){
				$token=base64_encode(random_bytes(32));
			$user_token= [
				'email'=>$email,
				'token'=>$token,
				'date_created' => time()
			];

			$this->db->insert('user_token',$user_token);
			$this->_sendEmail($token,'forgot');
			$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Silahkan cek email anda untuk mengatur ulang password</div>');
			redirect('auth/forgotpassword');
			}else{
				$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">Email tidak terdaftar atau email belum aktif</div>');
			redirect('auth/forgotpassword');
			}
		}
		
	}

	public function resetpassword(){
		$email=$this->input->get('email');
		$token=$this->input->get('token');

		$user=$this->db->get_where('user',['email'=>$email])->row_array();
		if ($user) {
			$user_token=$this->db->get_where('user_token',['token'=> $token])->row_array();
			if($user_token){
				$this->session->set_userdata('reset_email',$email);
				$this->changePassword();
			}else{
				$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">Mengatur ulang password gagal, token salah</div>');
			redirect('auth');
			}
		}else{
			$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">Mengatur ulang password gagal, email salah</div>');
			redirect('auth');
		}
	}

	public function changePassword(){
		if(!$this->session->userdata('reset_email')){
			redirect('auth');
		}
		

		$this->form_validation->set_rules('password1', 'Password','trim|required|min_length[3]|matches[password2]');
		$this->form_validation->set_rules('password2', 'Repeat Password','trim|required|min_length[3]|matches[password1]');
		if ($this->form_validation->run() == false){
		$data['judul']='Change password';
		$this->load->view('templates/header',$data);
		$this->load->view('auth/change-password');
		$this->load->view('templates/footer');	
		}else{
			$password=password_hash($this->input->post('password1'), PASSWORD_DEFAULT);
			$email=$this->session->userdata('reset_email');
			$this->db->set('password', $password);
			$this->db->where('email',$email);
			$this->db->update('user');

			$this->session->unset_userdata('reset_email');
			$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Password telah diubah! Silahkan Login</div>');
			redirect('auth');
		}
		
}


}