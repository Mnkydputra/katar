<?php

class Home extends CI_Controller {
    	
	public function index()
    {
        $data['judul'] = 'BUKIT DURI';
        $this->load->view('template/header',$data);
        $this->load->view('home');   
        $this->load->view('template/footer');
	}
}

?>