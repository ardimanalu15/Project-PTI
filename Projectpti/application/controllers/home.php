<?php
defined('BASEPATH') or exit('No direct script access allowed');

class home extends CI_Controller
{
    public function index()
    {
        $this->load->view('home/landingpage');
    }
    public function infopendaftaran()
    {
        $this->load->view('home/infopendaftaran');
    }
}
