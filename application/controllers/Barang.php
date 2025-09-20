<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Barang_model', 'barang');
    }

    public function index()
    {
        $data['barang'] = $this->barang->get_all();
        $this->load->view('barang/index', $data);
    }

    public function create()
    {
        if ($this->input->post()) {
            $this->barang->insert($this->input->post());
            redirect('barang');
        }
        $this->load->view('barang/create');
    }

    public function edit($id)
    {
        if ($this->input->post()) {
            $this->barang->update($id, $this->input->post());
            redirect('barang');
        }
        $data['barang'] = $this->barang->get_by_id($id);
        $this->load->view('barang/edit', $data);
    }

    public function delete($id)
    {
        $this->barang->delete($id);
        redirect('barang');
    }
}
