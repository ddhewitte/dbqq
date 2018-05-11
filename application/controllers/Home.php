<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct()
	{
		parent::__construct();

		$this->load->helper('url');

		$this->_init();
	}

	private function _init()
	{
		$this->output->set_template('default');

		$this->load->js('assets/themes/default/js/jquery-1.9.1.min.js');

	}

	public function index()
	{
		//parsing login
		if($this->session->userdata('tipe') == 'admin')
		{			
			//dashboard admin
			$this->load->view('content/home');
			
		}elseif($this->session->userdata('tipe') == 'petani'){
			
			//dashboard admin
			$this->load->view('content/home_petani');
			
		}elseif($this->session->userdata('tipe') == 'distributor'){
			
			//dashboard admin
			$this->load->view('content/home_distributor');
		}else{
			redirect('login');
		}
		
	}


}
