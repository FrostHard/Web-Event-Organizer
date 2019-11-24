<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Contact extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Contact OrganizePro';
        $this->load->view('home/header', $data);
        $this->load->view('contact', $data);
        $this->load->view('home/footer', $data);
    }
}
