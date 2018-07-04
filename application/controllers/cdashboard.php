<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cdashboard extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct()
	{
		parent::__construct();
		$this->load->Model('Mdata');
		$this->load->Model('Mpenjualan');
		$this->load->Model('Mkaryawan');
	}
	public function index()
	{
		$sess = $this->session->userdata('status');
		if (isset($sess)) {
		$data['total_barang'] = $this->Mdata->total_barang();
		$data['total_penjualan'] = $this->Mpenjualan->total_penjualan();
		$data['total_barang_kosong'] = $this->Mdata->total_barang_kosong();
		$data['barang_habis'] = $this->Mdata->barang_habis()->result();
		$data['total_untung'] = $this->Mpenjualan->jumlah_untung();
		$data['data_karyawan'] = $this->Mkaryawan->get_all()->result();
		
		$this->load->view('head');
		$this->load->view('top_bar');
		$this->load->view('menu');
		$this->load->view('home',$data);
		$this->load->view('foot');
		}else{
			$this->load->view('404');
		}
	

	}
}
