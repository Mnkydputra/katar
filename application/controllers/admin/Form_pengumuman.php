<?php

class Form_pengumuman extends CI_Controller
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

	public function add()
	{
		$data = array(
			'judul'  => "BUKIT DURI",
		);
		$this->load->view('template/header', $data);
		$this->load->view('admin/form_add_pengumuman');
		$this->load->view('template/footer');
	}

	public function posting()
	{
		$file 				 = $_FILES['file']['name'];
		$filename 			 = $file;
		$judul				 = $this->input->post("judul");
		$extensi 			 = pathinfo($filename, PATHINFO_EXTENSION);
		$this->load->library('upload');
		$config['allowed_types']   = '*';
		$config['upload_path']     = './assets/upload/pengumuman/';
		$config['file_name'] 	   = $judul .  date('his') .  md5($filename) . '.' . $extensi;

		$this->upload->initialize($config);
		if (!$this->upload->do_upload('file')) {
			echo "failed";
		} else {
			$berkas          = $this->upload->data("file_name");
			$judul  		 = $this->input->post("judul");
			$sub_judul  	 = $this->input->post("sub_judul");
			$nama 		     = $this->session->userdata('nama');
			$tgl  			 = $this->input->post("tanggal");
			$keterangan		 = $this->input->post("cerita");
			$email           = $this->session->userdata('email');
			$data = array(
				"post_oleh"						=> $nama,
				"judul"							=> $judul,
				"sub_judul"						=> $sub_judul,
				"cerita"				    	=> $keterangan,
				"tahun"							=> $tgl,
				'gambar'				    	=> $berkas
			);
			// var_dump($data);
			//$info  = "Posting Pengumuman oleh " . $this->session->userdata('email') . " - " . $nama;
			$input = $this->admin->inputData($data, "posting");
			if ($input == true) {
				//	helper_log($this->session->userdata('email'), $this->session->userdata('nama'), $email, $info);
				echo "sukses";
			} else {
				echo "gagal";
			}
		}
	}
}
