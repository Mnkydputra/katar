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
        $data['judul'] = "BUKIT DURI";
        $this->load->view('template/header',$data);
        $this->load->view('admin/posting');
        $this->load->view('template/footer');
    }


}

?>