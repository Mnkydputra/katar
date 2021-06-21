<?php

class Agenda extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        // $this->load->library('encryption');
        $id      = $this->session->userdata('id');

        if ($id == null || $id == "") {
            $this->session->set_flashdata('info', 'sessi berakhir silahkan login kembali');
            redirect('Login');
        }
    }

    public function index()
    {
        $data = array(
            'judul'      => "BUKIT DURI",
            'agenda'    => $this->admin->getData("tbl_agenda")->result()
        );
        $this->load->view('template/header', $data);
        $this->load->view('user/agenda', $data);
        $this->load->view('template/footer');
    }
}
