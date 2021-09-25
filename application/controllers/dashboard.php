<?php
class Dashboard extends CI_Controller
{
    public function index()
    {
        $data['barang'] = $this->model_barang->get_data()->result();
        $this->load->view('layouts/header');
        $this->load->view('layouts/sidebar');
        $this->load->view('dashboard', $data);
        $this->load->view('layouts/footer');
    }

    public function add_to_cart($id)
    {
        $barang = $this->model_barang->find($id);

        $data = array(
            'id'      => $barang->id,
            'qty'     => 1,
            'price'   => $barang->harga,
            'name'    => $barang->nama_barang,
        );

        $this->cart->insert($data);
        redirect('dashboard');
    }

    public function detail_keranjang()
    {
        $this->load->view('layouts/header');
        $this->load->view('layouts/sidebar');
        $this->load->view('keranjang');
        $this->load->view('layouts/footer');
    }
}
