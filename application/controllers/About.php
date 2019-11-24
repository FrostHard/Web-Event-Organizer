<?php
defined('BASEPATH') or exit('No direct script access allowed');

class About extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'About OrganizePro';
        $this->load->view('home/header', $data);
        $this->load->view('about', $data);
        $this->load->view('home/footer', $data);
    }
}
