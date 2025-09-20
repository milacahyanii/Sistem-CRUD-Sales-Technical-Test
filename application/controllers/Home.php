<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        // Kalau butuh session bisa load library
        // $this->load->library('session');
    }

    public function index()
    {
        // Halaman dashboard utama
        $this->load->view('home');
    }

    public function logout()
    {
        // Hapus session kalau ada
        $this->session->sess_destroy();
        redirect(site_url('home'));
    }
}
