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

    public function add_to_cart($id_barang)
    {
        $barang = $this->model_barang->find($id_barang);

        $data = array(
            'id'      => $barang->id_barang,
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

    public function hapus_keranjang()
    {
        $this->cart->destroy();
        redirect('dashboard/index');
    }

    public function pembayaran()
    {
        $this->load->view('layouts/header');
        $this->load->view('layouts/sidebar');
        $this->load->view('pembayaran');
        $this->load->view('layouts/footer');
    }

    public function proses_pesanan()
    {
        $is_processed = $this->model_invoice->index();
        if($is_processed)
        {
            // akan menghapus keranjang belanja jika menekan tombol pesan 
            $this->cart->destroy();
    
            $this->load->view('layouts/header');
            $this->load->view('layouts/sidebar');
            $this->load->view('proses_pesanan');
            $this->load->view('layouts/footer');
        }
        else
        {
            echo "Maaf, pesanan anda gagal diproses";
        }
    }
}
