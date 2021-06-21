<?php

 /**
  * 
  */
 class Gantipass extends CI_Controller
 {

  public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		// $this->load->library('encryption');
		$id 	 = $this->session->userdata('id');

		if ($id == null || $id == "") {
			$this->session->set_flashdata('info', 'sessi berakhir silahkan login kembali');
			redirect('Login');
		}
	}
 	
 	public function index()
 	{
        $data = array(
			'judul'  => "BUKIT DURI",
            'pass'  => $this->admin->getData('akun')
		);
 		$this->load->view('template/header',$data);
 		$this->load->view('user/gantipass',$data);
 		$this->load->view('template/footer');
 	}

 	public function update()
	{
		$password = $this->input->post("password");
		$password2 = $this->input->post("password2");

		$pass     = md5($this->input->post("password")) ;
		$pass2     = md5($this->input->post("password2")) ;

		$user 	  = $this->input->post("email");

			if($password == null || $password == ""){
				$data = array(
					'email'		=> $user 
				);

				$update = $this->admin->update($data,'akun',array('email' => $user));
				if($update){
					$this->session->set_flashdata('sukses','akun sudah terdaftar');
				}else {
					echo "gagal";
				}
			}else if($password != null || $password != ""){
				if($pass != $pass2){
					echo "password tidak sama";
				}else {
					$data = array(
					'password'		=> $pass
				);

				$update = $this->admin->update($data,'akun',array('email' => $user));
					if($update){
					$this->session->set_flashdata('sukses','Password Berhasil di Rubah');
					redirect('user/Gantipass');
					}else {
						echo "gagal";
					}
				}
			}
	}
 }