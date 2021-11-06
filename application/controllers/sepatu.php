<?php
defined('BASEPATH') or exit('No direct script access allowed');

class sepatu extends CI_Controller
{
    public function index()
    {
        $this->load->view('sepatu/login');
        $this->load->view('tamplates/header');
        $this->load->view('tamplates/footer');
    }


    public function registrasi()
    {
        $this->load->view('sepatu/registrasi');
        $this->load->view('tamplates/header');
        $this->load->view('tamplates/footer');
    }
}
