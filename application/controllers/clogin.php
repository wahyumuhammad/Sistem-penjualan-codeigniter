<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class clogin extends CI_Controller {

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
		$this->load->view('sign-in');
	}
	public function login_validation()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$where = array(
			'username' => $username,
			'password' => $password
			);
		$cek = $this->Muser->cek_login($where);
		
		if (($cek->num_rows()) > 0) {

			foreach ($cek->result() as $sess) {
				$sess_data['logged_in'] = 'Sudah Loggin';
				$sess_data['id'] = $sess->data_user;
				$sess_data['username'] = $sess->username;
				$sess_data['status'] = $sess->status;
				$sess_data['first'] = $sess->first_name;
				$sess_data['last'] = $sess->last_name;

				$this->session->set_userdata($sess_data);
			}
			
				redirect('cdashboard');
			
		}
		else{
			redirect('clogin');
		}
	}
	public function logout(){
		$this->session->sess_destroy();
		redirect('clogin');
	}

}
