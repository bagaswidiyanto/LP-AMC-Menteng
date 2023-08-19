<?php
defined('BASEPATH') or exit('Npo direct script access allowed');

class Welcome extends MY_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_data');
		$this->load->helper('url');
		$this->load->helper('download');
	}

	public function index()
	{
		$this->data['kelebihan'] = $this->db->get('tbl_kelebihan')->result();
		$this->data['kategori'] = $this->db->get('tbl_nama_kategori')->result();
		$this->data['about'] = $this->db->get('tbl_about_us')->row();
		$this->data['popup'] = $this->db->get('tbl_popup')->row();

		$this->db->select('*');
		$this->db->from('tbl_product a');
		$this->db->order_by('a.id', 'desc');
		$s_produk = $this->db->get();
		$this->data['s_produk'] = $s_produk->result();

		$this->data['why_us'] = $this->db->get('tbl_why_choise')->result();

		$this->db->select('*');
		$this->db->from('tbl_slider_interior');
		$this->db->order_by('id', 'desc');
		$interior = $this->db->get();
		$this->data['interior'] = $interior->result();

		$this->data['dc1'] = $this->db->get_where('tbl_deskripsi_content', array('id' => 1))->row();
		$this->data['dc2'] = $this->db->get_where('tbl_deskripsi_content', array('id' => 2))->row();
		$this->data['dc3'] = $this->db->get_where('tbl_deskripsi_content', array('id' => 3))->row();

		$this->web = 'content/v_home';
		$this->layout();
	}
}
