<?php
class Model_invoice extends CI_Model
{
    public function index()
    {
        // karna menggunakan datetime jadi harus mengatur terlebih dahulu timezone kita
        date_default_timezone_set('Asia/jakarta');

        // ini memasukkan ke table invoice
        $nama = $this->input->post('nama');
        $alamat = $this->input->post('alamat');

        $invoice = array
        (
            'nama'        => $nama,
            'alamat'      => $alamat,
            'tgl_pesan'   => date('Y-m-d H:i:s'),
            'batas_bayar' => date('Y-m-d H:i:s',
                             mktime( date('H'),
                             date('i'), date('s'), date('m'), date('d') + 1, date('Y'))
                                 ),
        );
        $this->db->insert('invoice', $invoice);
        $id_invoice = $this->db->insert_id();

        // ini memasukkan ke table pesanan
        foreach ($this->cart->contents() as $item)
        {
            $data = array
            (
                'id_invoice'  => $id_invoice,
                'id_barang'   => $item['id'],
                'nama_barang' => $item['name'],
                'jumlah'      => $item['qty'],
                'harga'       => $item['price'],
            );
            $this->db->insert('pesanan', $data);
        }
        return TRUE;
    }

    public function get_data()
    {
        $result = $this->db->get('invoice');
        if($result->num_rows() >= 0)
        {
            return $result->result();
        }
        else
        {
            return false;
        }
    }
}