<?php

class Model_kategori extends CI_Model
{
    public function data_hp()
    {
         return $this->db->get_where("items", array('kategori' => 'HP'));
    }

    public function data_laptop()
    {
         return $this->db->get_where("items", array('kategori' => 'Laptop'));
    }

    public function data_audio()
    {
         return $this->db->get_where("items", array('kategori' => 'Audio'));
    }
}