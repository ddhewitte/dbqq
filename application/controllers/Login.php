<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct()
	{
		parent::__construct();

		$this->load->helper('url');

		$this->_init();
	}

	private function _init()
	{
		$this->output->set_template('default_login');

		$this->load->js('assets/themes/default/js/jquery-1.9.1.min.js');

	}

	public function index()
	{
		$this->load->view('content/login');
	}
	
	public function proses()
	{
		//get user and pass
		$user = $this->input->post('username');
		$pass = md5($this->input->post('password'));
		
		//get DB
		$this->db->select('*');
		$this->db->where('username', $user );
		$this->db->where('password', $pass );
		$result = $this->db->get('user');
		
		if($result->num_rows() > 0 ){
			
			$results = $result->row();
			//daftarkan session
			
			$data_sess = array(
							'id_user' => $results->id_user,
							'username' => $results->username,
							'nickname' => $results->nickname,
							'tipe' => $results->tipe
			);
			
			$this->session->set_userdata($data_sess);
			//direct ke home
			redirect('home/index');	
			
		}else{
			
			$data['err_message'] = 'Login gagal ! Username dan Password salah';
			$this->load->view('content/login', $data);
		}
		
		
	}
	
	public function logout(){
		unset(
			$_SESSION['id_user'],
			$_SESSION['username'],
			$_SESSION['username'],
			$_SESSION['nickname'],
			$_SESSION['tipe']
       );
		
		session_destroy();
		
		redirect('login');
	}


}
