<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Outlet extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Outlet_model', 'outlet');
    }

    public function index()
    {
        $data['outlet'] = $this->outlet->get_all();
        $this->load->view('outlet/index', $data);
    }

    public function create()
    {
        if ($this->input->post()) {
            $this->outlet->insert($this->input->post());
            redirect('outlet');
        }
        $this->load->view('outlet/create');
    }

    public function edit($id)
    {
        if ($this->input->post()) {
            $this->outlet->update($id, $this->input->post());
            redirect('outlet');
        }
        $data['outlet'] = $this->outlet->get_by_id($id);
        $this->load->view('outlet/edit', $data);
    }

    public function delete($id)
    {
        $this->outlet->delete($id);
        redirect('outlet');
    }
}
