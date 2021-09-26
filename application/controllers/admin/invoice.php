<?php

class Invoice extends CI_Controller
{
    public function index()
    {
        $data['invoice'] = $this->model_invoice->get_data();
        $this->load->view('layouts_admin/header');
        $this->load->view('layouts_admin/sidebar');
        $this->load->view('admin/invoice', $data);
        $this->load->view('layouts_admin/footer');
    }
}