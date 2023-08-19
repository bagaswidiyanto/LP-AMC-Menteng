<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Detailproduk extends MY_Controller
{
    // Anime
    public function index()
    {
        $this->data['dc1'] = $this->db->get_where('tbl_deskripsi_content', array('id' => 1))->row();
        $this->data['dc2'] = $this->db->get_where('tbl_deskripsi_content', array('id' => 2))->row();
        $this->data['dc3'] = $this->db->get_where('tbl_deskripsi_content', array('id' => 3))->row();

        $this->db->select('*');
        $this->db->from('tbl_slider_interior');
        $this->db->order_by('id', 'desc');
        $interior = $this->db->get();
        $this->data['interior'] = $interior->result();

        $this->data['kategori'] = $this->db->get('tbl_nama_kategori')->result();

        $this->web = 'content/v_detail_produk';
        $this->layout();
    }
}
