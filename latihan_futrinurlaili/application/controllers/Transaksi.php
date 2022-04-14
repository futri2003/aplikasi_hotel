<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller {
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
        $data['transaksi'] = $this->am->transaksii();
        
        $this->load->view('admin/header');
		$this->load->view('admin/navigasi');
		$this->load->view('admin/transaksi/index', $data);
		$this->load->view('admin/footer');
    }
    function search()
    {
        $data['transaksi'] = $this->am->transaksi();

        $this->load->view('admin/header');
		$this->load->view('admin/navigasi');
		$this->load->view('admin/transaksi/transaksi', $data);
		$this->load->view('admin/footer'); 
    }
    public function tambah_transaksi()
    {
        $this->load->view('admin/header');
		$this->load->view('admin/navigasi');
		$this->load->view('admin/transaksi/tambah_transaksi');
		$this->load->view('admin/footer');
    }
    public function simpan_transaksi()
    {
        $this->am->simpan_transaksi();
        redirect(base_url("index.php/transaksi"));
    }
    public function edit_transaksi($id)
    {
        $data['edit_transaksi'] = $this->am->edit_transaksi($id);

        $this->load->view('admin/header');
		$this->load->view('admin/navigasi');
        $this->load->view('admin/transaksi/edit_transaksi', $data);
        $this->load->view('admin/footer');
    }
    function simpan_edit_transaksi()
    {
        $this->am->simpan_edit_transaksi();
        redirect(base_url("index.php/transaksi"));
    }
    function hapus_transaksi($id)
    {
        $this->am->hapus_transaksi($id);
        redirect(base_url("index.php/transaksi"));
    }
}