<?php


class Visi_misi extends CI_Controller
{

    public function index()
    {
        $data['judul'] = "BUKIT DURI";
        $this->load->view('template/header',$data);
        $this->load->view('visi_misi');
        $this->load->view('template/footer');
    }

}