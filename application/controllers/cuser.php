<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cuser extends CI_Controller {

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
		$this->load->Model('Muser');
	}
	public function index()
	{
		// $this->template->load('template','dashboard');
	
		// $data['data_barang_kosong'] = $this->Mdata->
		$data['data_user'] = $this->Muser->get_all()->result();
		$this->load->view('head');
		$this->load->view('top_bar');
		$this->load->view('menu');
		$this->load->view('data_user',$data);
		$this->load->view('foot');
		// $this->load->view('coba');

	}
	public function input_user(){
		
		$first = $this->input->post('first');
		$last = $this->input->post('last');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$status = $this->input->post('status');

		$data = array(
							'first_name' => $first,
	 						'last_name' => $last,
	 						'username' => $username,
	 						'password' => $password,
	 						'status' => $status
	 			);
		$this->Muser->input_data($data);
		redirect('Cuser');
	}
	public function hapus_user($id){
		$this->Muser->delete($id);
		redirect('cuser');
	}
}
