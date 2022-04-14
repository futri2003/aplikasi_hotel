<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Konsumen extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->model('Admin_model','am');

        if($_SESSION['hak_akses'] == '' or $_SESSION['hak_akses'] != 'admin') 
        {
            redirect('/');
        }  
    }
    public function index()
    {
        $data['konsumen'] = $this->am->konsumen();
        $this->load->view('admin/header');
		$this->load->view('admin/navigasi');
		$this->load->view('admin/konsumen/index', $data);
		$this->load->view('admin/footer');
    }
    public function tambah_konsumen()
    {
        $this->load->view('admin/header');
		$this->load->view('admin/navigasi');
		$this->load->view('admin/konsumen/tambah_konsumen');
		$this->load->view('admin/footer');
    }
    public function simpan_konsumen()
    {
        $this->am->simpan_konsumen();
        redirect(base_url("index.php/konsumen"));
    }
    public function edit_konsumen($id)
    {
        $data['edit_konsumen'] = $this->am->edit_konsumen($id);

        $this->load->view('admin/header');
		$this->load->view('admin/navigasi');
        $this->load->view('admin/konsumen/edit_konsumen', $data);
        $this->load->view('admin/footer');
    }
    function simpan_edit_konsumen()
    {
        $this->am->simpan_edit_konsumen();
        redirect(base_url("index.php/konsumen"));
    }
    function hapus_konsumen($id)
    {
        $this->am->hapus_konsumen($id);
        redirect(base_url("index.php/konsumen"));
    }
}