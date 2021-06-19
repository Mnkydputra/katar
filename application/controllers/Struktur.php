<?php

class Struktur extends CI_Controller{

    public function index()
    {
         $data['judul'] = 'BUKIT DURI';
        $this->load->view('template/header',$data);
        $this->load->view('struktur');
        $this->load->view('template/footer');
    }
}
