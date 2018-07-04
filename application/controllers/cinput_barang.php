<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cinput_barang extends CI_Controller {

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
	}
	public function index()
	{
		$data['data_barang'] = $this->Mdata->get_all()->result();
		$this->load->view('head');
		$this->load->view('top_bar');
		$this->load->view('menu');
		$this->load->view('input_barang');
		$this->load->view('foot');
		// $this->load->view('coba');

	}
	public function input_barang(){

		$id = $this->Mdata->getkodeunik();		
		$nama = $this->input->post('nama');
		$tanggal = $this->input->post('tanggal');
		$jumlah = $this->input->post('jumlah');
		$harga_beli = $this->input->post('harga_beli');
		$harga_jual = $this->input->post('harga_jual');
		$data = array(
							'id' => $id,
							'tanggal' => $tanggal,
	 						'nama' => $nama,
	 						'harga_jual' => $harga_jual,
	 						'harga_beli' => $harga_beli,
	 						'jumlah' => $jumlah
	 			);
	 	$this->Mdata->input_data($data);
	 	redirect('Cdata_barang');

	}
	public function update_barang(){

		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$jumlah = $this->input->post('jumlah');
		$harga_beli = $this->input->post('hb');
		$harga_jual = $this->input->post('hj');

		$data = array(

							'nama' => $nama,
	 						'harga_jual' => $harga_jual,
	 						'harga_beli' => $harga_beli,
	 						'jumlah' => $jumlah
				);
		$this->Mdata->updateID($id,$data);
		redirect('Cdata_barang');
	}
}
