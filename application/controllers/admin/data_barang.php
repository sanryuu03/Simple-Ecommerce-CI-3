<?php
class Data_barang extends CI_Controller
{
    public function index()
    {
        $data['barang'] = $this->model_barang->get_data()->result();
        $this->load->view('layouts_admin/header');
        $this->load->view('layouts_admin/sidebar');
        $this->load->view('admin/data_barang', $data);
        $this->load->view('layouts_admin/footer');
    }

    public function tambah_aksi()
    {
        $nama_barang = $this->input->post('nama_barang');
        $deskripsi   = $this->input->post('deskripsi');
        $kategori    = $this->input->post('kategori');
        $harga       = $this->input->post('harga');
        $stok        = $this->input->post('stok');
        $gambar      = $_FILES['gambar']['name'];
        if ($gambar = '') {
        } else {
            $config['upload_path'] = './uploads';
            $config['allowed_types'] = 'jpg|jpeg|png';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('gambar')) {
                echo "gambar gagal diupload";
            } else {
                $gambar = $this->upload->data('file_name');
            }
        }

        $data = array(
            'nama_barang' => $nama_barang,
            'deskripsi'   => $deskripsi,
            'harga'       => $harga,
            'stok'        => $stok,
            'gambar'      => $gambar,
        );

        $this->model_barang->tambah_barang($data, 'items');
        redirect('admin/data_barang/index');
    }

    public function edit($id)
    {
        $where = array('id' => $id);
        $data['barang'] = $this->model_barang->edit_barang($where, 'items')->result();
        $this->load->view('layouts_admin/header');
        $this->load->view('layouts_admin/sidebar');
        $this->load->view('admin/edit_barang', $data);
        $this->load->view('layouts_admin/footer');
    }

    public function update()
    {
        $id          = $this->input->post('id');
        $nama_barang = $this->input->post('nama_barang');
        $deskripsi   = $this->input->post('deskripsi');
        $kategori    = $this->input->post('kategori');
        $harga       = $this->input->post('harga');
        $stok        = $this->input->post('stok');

        $data = array (
        'nama_barang' => $nama_barang,
        'deskripsi'   => $deskripsi,
        'harga'       => $harga,
        'stok'        => $stok,
        );

        $where = array(
            'id' => $id
        );

        $this->model_barang->update_data($where, $data, 'items');
        redirect('admin/data_barang/index');
    }

    public function hapus($id)
    {
        $where = array ('id' => $id);
        $this->model_barang->hapus_data($where, 'items');
        redirect('admin/data_barang/index');
    }
}
