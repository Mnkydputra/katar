<?php

class Login extends CI_Controller
{
    public function __construct()
	{
		parent::__construct();
		$id 	 = $this->session->userdata('id');

		if ($id != null || $id != "") {
			redirect('Dashboard');
		}
	}

    //tampilan awal login
    public function index()
    {
        $this->load->view('login');
    }

    //cek di table akun, apakah emailnya terdaftar
    public function Ceklogin()
    {
        date_default_timezone_set('Asia/Jakarta');
        $username = $this->input->post("email");
        $password = md5($this->input->post("password"));
        var_dump($username,$password);
    
        $cekakun = $this->admin->cari(array("email" => $username, "password" => $password), "akun");
        if ($cekakun->num_rows()>0) {
            $data = $cekakun->row();

            switch ($data->role)
            {
                case '1' :
				$this->session->set_userdata("email", $data->email);
				$this->session->set_userdata("nama", $data->nama);
				$this->session->set_userdata("id", $data->id);
                redirect('admin/Dashboard');
                break;
				case '2' :
				$this->session->set_userdata("email", $data->email);
				$this->session->set_userdata("nama", $data->nama);
				$this->session->set_userdata("id", $data->id);
				redirect('user/Dashboard');
				break;
                default:
                echo "email tidak terdaftar" . "<a href='" . base_url('home') . "'>Kembali</a>";
                break;
            }
        }else{
            $this->session->set_flashdata("nouser", "akun tidak di temukan");
			redirect("login");
        }


    }

    public function CreateAkun()
    {
        $this->load->view('create_akun');
    }

    public function Create()
	{

		$nama 		 	= $this->input->post("nama");
		$email 			= $this->input->post("email");
		$pass  			= md5($this->input->post("password"));
		$role   		= 2;
		$date_create 	= date("d-m-Y H:i");
		$data = array(
			'nama'		=> $nama,
			'email'  	=> $email,
			'password'  => $pass,
			'role' 		=> $role,
			'date_create' => $date_create,
		);
		var_dump($data);
		$cekakun =   $this->admin->cari(array("email" => $email), "akun")->num_rows();
		if ($cekakun == null) {
		$this->admin->inputData($data,'akun');
		$this->session->set_flashdata('sukses','akun sudah terdaftar');
		redirect("login");
		}else{
		$this->session->set_flashdata('message','akun sudah terdaftar');
		redirect("Login/Create_akun");
		}
	}
}