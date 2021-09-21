<?php
class Dashboard extends CI_Controller{
    public function index()
    {
        $data['barang'] = $this->model_barang->get_data()->result();
        $this->load->view('layouts/header');
        $this->load->view('layouts/sidebar');
        $this->load->view('dashboard', $data);
        $this->load->view('layouts/footer');
    }
    
}
