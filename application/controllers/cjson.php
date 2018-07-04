<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cjson extends CI_Controller {

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
		$this->load->Model('Mdata_json');
	}
	public function index()
	{
		// $this->template->load('template','dashboard');
		// $data['data_barang_kosong'] = $this->Mdata->
		$this->load->view('head');
		$this->load->view('top_bar');
		$this->load->view('menu');
		$this->load->view('datajson');
		$this->load->view('foot');
		// $this->load->view('coba');

	}

	public function getData()
	  {

		$data = $this->Mdata->get_all()->result();
		echo json_encode($data);
	  }

	 public function getDatapenjualan()
	 {
	 	$data = $this->Mpenjualan->get_all()->result();
	 	echo json_encode($data);
	 }
}
