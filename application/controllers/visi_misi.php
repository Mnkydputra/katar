<?php


class Visi_misi extends CI_Controller
{

    public function index()
    {
        $this->load->view('template/header');
        $this->load->view('visi_misi');
        $this->load->view('template/footer');
    }

}