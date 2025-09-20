<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penjualan extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Penjualan_model', 'penjualan');
        $this->load->model('Outlet_model', 'outlet');
        $this->load->model('Barang_model', 'barang');
    }

    public function index()
    {
        $data['penjualan'] = $this->penjualan->get_all();
        $this->load->view('penjualan/index', $data);
    }

    public function create()
    {
        if ($this->input->post()) {
            $this->penjualan->insert($this->input->post());
            redirect('penjualan');
        }
        $data['outlet'] = $this->outlet->get_all();
        $data['barang'] = $this->barang->get_all();
        $this->load->view('penjualan/create', $data);
    }

    public function detail($nofaktur)
    {
        $data['header'] = $this->penjualan->get_header($nofaktur);
        $data['detail'] = $this->penjualan->get_detail($nofaktur);
        $this->load->view('penjualan/detail', $data);
    }

    public function delete($nofaktur)
    {
        $this->penjualan->delete($nofaktur);
        redirect('penjualan');
    }
}
