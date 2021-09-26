<?php

class Kategori extends CI_Controller
{
    public function hp()
    {
        $data['hp'] = $this->model_kategori->data_hp()->result();
        $this->load->view('layouts/header');
        $this->load->view('layouts/sidebar');
        $this->load->view('hp', $data);
        $this->load->view('layouts/footer');
    }

    public function laptop()
    {
        $data['laptop'] = $this->model_kategori->data_laptop()->result();
        $this->load->view('layouts/header');
        $this->load->view('layouts/sidebar');
        $this->load->view('laptop', $data);
        $this->load->view('layouts/footer');
    }

    public function audio()
    {
        $data['audio'] = $this->model_kategori->data_audio()->result();
        $this->load->view('layouts/header');
        $this->load->view('layouts/sidebar');
        $this->load->view('audio', $data);
        $this->load->view('layouts/footer');
    }
}