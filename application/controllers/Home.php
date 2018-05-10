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
		$this->load->view('content/home');
	}


}
