<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

	// Fungsi : Menampilkan seluruh data
	public function index()
	{
		// Load model+ Bikin objek
        $this->load->model('mahasiswa_model', 'mhs');

        //simpen objek kedalam array
        $list_mhs = $this->mhs->getAll();

        //siapin data untuk dikirim ke view
        $data["list_mhs"] = $list_mhs;

        //Untuk ngirim datanya + nampilinke viewnya
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('mahasiswa/index', $data);
        $this->load->view('layout/footer');

	}
}
