<?php

class Profile extends CI_Controller{

    public function index()
    {
        $data['judul'] = 'BUKIT DURI';
        $this->load->view('template/header',$data);
        $this->load->view('profile');
        $this->load->view('template/footer');
    }
}