<?php
defined('BASEPATH') or exit('No direct script access allowed');

class tampilan_dashbord extends CI_Controller
{
    public function index()
    {
        $this->load->view('tampilan/header');
        $this->load->view('tampilan/dashbord');
        $this->load->view('tampilan/footer');
    }
}
