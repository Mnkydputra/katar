<?php

class Dashboard extends CI_Controller
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
			'log'	 =>	$this->admin->getData("log_aktivitas")->result()
		);
		$this->load->view('template/header',$data);
        $this->load->view('admin/dashboard',$data);
        $this->load->view('template/footer');



    }

	public function pengumuman()
	{
  		$post = array(
			'judul'  => "BUKIT DURI",
			'posting' =>$this->admin->getData("posting")->result()
		);
        $this->load->view('template/header',$post);
        $this->load->view('admin/pengumuman',$post);
        $this->load->view('template/footer');	
	}


}

?>