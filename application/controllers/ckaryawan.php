<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ckaryawan extends CI_Controller {

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
		// $sess = $this->session->userdata('status');
		// if (isset($sess)) {
		$data['data_karyawan'] = $this->Mkaryawan->get_all()->result();
		// $data['data_barang_kosong'] = $this->Mdata->
		$this->load->view('head');
		$this->load->view('top_bar');
		$this->load->view('menu');
		$this->load->view('karyawan',$data);
		// }else{
		// 	$this->load->view('404');
		// }
	

	}
	public function input_karyawan(){
	
		$id_karyawan = $this->Mkaryawan->getkodeunik();
		$nama = $this->input->post('nama');
		$jbt = $this->input->post('jbt');
		$status = $this->input->post('status');
		$gaji = $this->input->post('gaji');
		$data = array(
							'id' => $id_karyawan,
							'nama_karyawan' => $nama,
	 						'jabatan' => $jbt,
	 						'status' => $status,
	 						'gaji' => $gaji
	 			);
	 	$this->Mkaryawan->input_data($data);
	 	redirect('Ckaryawan');
	}
	public function hapus($id)
	{
		$this->Mkaryawan->delete($id);
		redirect('ckaryawan');
	}
	public function update_karyawan(){

		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$jbt = $this->input->post('jbt');
		$status = $this->input->post('status');
		$gaji = $this->input->post('gaji');

		$data = array(

							'nama_karyawan' => $nama,
	 						'jabatan' => $jbt,
	 						'status' => $status,
	 						'gaji' => $gaji
				);
		$this->Mkaryawan->update($id,$data);
		redirect('Ckaryawan');
	}
}
