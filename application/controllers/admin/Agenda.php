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
        $this->load->view('admin/agenda', $data);
        $this->load->view('template/footer');
    }

    public function add()
    {
        $data = array(
            'agenda'        => $this->input->post('agenda'),
            'jam'           => $this->input->post('jam'),
            'tanggal'        => $this->input->post('tanggal'),
        );
        $input = $this->admin->inputData($data, "tbl_agenda");
        if ($input) {
            echo "berhasil";
        } else {
            echo "gagal, ulangi";
        }
    }


    public function delete($id)
    {
        $delete = $this->admin->delete(['id' => $id], "tbl_agenda");
        if ($delete) {
            redirect('admin/Agenda');
        }
    }
}
