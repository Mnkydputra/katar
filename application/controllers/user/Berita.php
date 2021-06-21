<?php

class Berita extends CI_Controller{

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
        $bert = array(
			'judul'  => "BUKIT DURI",
			'posting' =>$this->admin->getData("posting")->result()
		);
        $this->load->view('template/header',$bert);
        $this->load->view('user/berita',$bert);
        $this->load->view('template/footer');
    }

}

?>