<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cdata_barang_habis extends CI_Controller {

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
		// $this->template->load('template','dashboard');
		$data['barang_habis'] = $this->Mdata->barang_habis()->result();
		$this->load->view('head');
		$this->load->view('top_bar');
		$this->load->view('menu');
		$this->load->view('data_barang_habis',$data);
		// $this->load->view('foot');
		// $this->load->view('coba');

	}
}
