<?php
class Dashboard_admin extends CI_Controller
{
    public function index()
    {
        $this->load->view('layouts_admin/header');
        $this->load->view('layouts_admin/sidebar');
        $this->load->view('admin/dashboard');
        $this->load->view('layouts_admin/footer');
        
    }
}
