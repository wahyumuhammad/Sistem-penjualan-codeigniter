<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cinput_penjualan extends CI_Controller {

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
		$this->load->library('session');
	}

	public function input_penjualan()
	{
		$pembeli 			= $this->input->post('pembeli');
		$payment			= $this->input->post('payment');
		$nama 				= $this->input->post('nama');
		$jumlah_penjualan 	= $this->input->post('jumlah');
		$tgl 				= $this->input->post('tanggal');

		$id 				= $this->Mpenjualan->getkodeunik();
		$data_barang 		= $this->Mdata->ambil_barang($nama)->result();
		$data_karyawan		= $this->Mkaryawan->ambil_id($pembeli)->result();

		foreach ($data_barang as $row) {
			$id_barang = $row->id;
			$harga_jual = $row->harga_jual;
			$harga_beli = $row->harga_beli;
			$jumlah_barang = $row->jumlah;	
		}
		$total = $jumlah_penjualan * $harga_jual;
		$a = $jumlah_penjualan * $harga_beli;

		foreach ($data_karyawan as $row) {
	        $nama_karyawan  = $row->nama_karyawan;
	        $jabatan        = $row->jabatan;
	        $status         = $row->status;
	        $gaji           = $row->gaji;
	        $total_kredit   = $row->total_kredit;
		}

		$qty_kredit = $total_kredit + $harga_jual;
		

		$untung = $total - $a;
		$stok   = $jumlah_barang - $jumlah_penjualan;  
		
		if ($jumlah_penjualan > $jumlah_barang) {
			
			$this->session->set_flashdata('message','Maaf stok barang untuk ' . $nama . ' yang tersedia adalah ' . $jumlah_barang);
			redirect('Cdata_penjualan');


		}else{

			$data = array(		
								'id' => $id,
		 						'tanggal' => $tgl,
		 						'nama_barang' => $nama,
		 						'jumlah' => $jumlah_penjualan,
		 						'harga' => $harga_jual,
		 						'total_harga' => $total,
		 						'untung' => $untung,
		 						'id_karyawan' => $pembeli,
		 						'nama_pembeli' => $nama_karyawan,
		 						'payment_method' => $payment
		 			);
		 	$data1 = array(

		 					'jumlah' => $stok

		 			);
		 	$data2 = array(

		 					'total_kredit' => $qty_kredit

		 			);
		 	$this->Mpenjualan->input_data($data);
		 	$this->Mdata->update($nama,$data1);
		 	if ($payment == 'Kredit') {
		 	$this->Mkaryawan->update($pembeli,$data2);
		 	}
		 	redirect('Cdata_penjualan');
	 	}
	}
	
	public function search(){

		$id = $this->input->post('minmaxlength');

		$barang = $this->Mdata->viewByid($id);

		if (!empty($barang)) {
			
			$callback = array(

				'status' => 'succes',
				'nama' => $barang->nama,
				'harga' => $barang->harga,
				'jumlah' => $barang->jumlah,
				'sts' => $barang->status
				);
		}else{
			$callback = array('status' => 'failed');
		}
		echo json_encode($callback);
	}
	public function update_barang(){

		$id = $this->input->post('id');
		$tanggal = $this->input->post('tanggal');
		$nama = $this->input->post('nama');
		$harga = $this->input->post('harga');
		$jumlah = $this->input->post('jumlah');
	
		$data_barang = $this->Mdata->ambil_barang($nama)->result();

		foreach ($data_barang as $row) {
			$id_barang = $row->id;
			$harga_jual = $row->harga_jual;
			$harga_beli = $row->harga_beli;
			$jumlah_barang = $row->jumlah;	
		}

		$total_harga = $harga * $jumlah;
		$untung = $harga_jual * $jumlah;
		$total_untung = $total_harga - $untung;  
		$data = array(
							'tanggal' => $tanggal,
	 						'nama_barang' => $nama,
	 						'jumlah' => $jumlah,
	 						'harga' => $harga,
	 						'total_harga' => $total_harga,
	 						'untung' => $total_untung
				);
		$this->Mpenjualan->update1($id,$data);
		redirect('Cdata_penjualan');
	}
}
