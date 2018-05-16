<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

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
		//*****user manage list*****
		//get DB
		$this->db->select('*');
		$data['result'] = $this->db->get('user');
			
		$this->load->view('content/admin_user', $data);
		
	}
	
	public function user_edit($id)
	{
		//get DB
		$this->db->select('*');
		$this->db->where('id_user', $id);
		$data['result'] = $this->db->get('user')->row();
			
		$this->load->view('content/admin_user_edit', $data);
	}

	public function user_edit_process()
	{
		if($this->input->post('password') == ''){
			
			//ubah data
			$data = array( 
					'username' => $this->input->post('username'),
					'nickname' => $this->input->post('nickname'),
					'lokasi' => $this->input->post('lokasi'),
					'tipe' => $this->input->post('tipe'),
					'status' => $this->input->post('status')
				);
		}else{
			//ubah data
			$data = array( 
					'username' => $this->input->post('username'),
					'password' => md5($this->input->post('password')),
					'nickname' => $this->input->post('nickname'),
					'lokasi' => $this->input->post('lokasi'),
					'tipe' => $this->input->post('tipe'),
					'status' => $this->input->post('status')
				);
		}
		

		$this->db->where('id_user', $this->input->post('id'));
		
		$run = $this->db->update('user', $data);
		if($run)
		{
			redirect('admin');
		}
	}
	
	public function user_del($id)
	{
		$this->db->where('id_user', $id);
		
		$run = $this->db->delete('user');
		if($run)
		{
			redirect('admin');
		}
	}
	
	
	public function produk()
	{
		//*****produk manage list*****
		//get DB
		$this->db->select('*');
		$data['result'] = $this->db->get('produk');
			
		$this->load->view('content/admin_produk', $data);
		
	}

	
	public function produk_edit($id)
	{
		//get DB
		$this->db->select('*');
		$this->db->where('id_produk', $id);
		$data['result'] = $this->db->get('produk')->row();
			
		$this->load->view('content/admin_produk_edit', $data);
		
	}
	
	public function produk_edit_process()
	{
		//ubah data
			$data = array( 
					'nama' => $this->input->post('nama'),
					'keterangan' => $this->input->post('keterangan'),
					'harga' => $this->input->post('harga'),
					'stok' => $this->input->post('stok'),
					'min_pembelian' => $this->input->post('min_pembelian'),
					'dilihat' => $this->input->post('dilihat'),
					'status' => $this->input->post('status')
				);
		

		$this->db->where('id_produk', $this->input->post('id'));
		
		$run = $this->db->update('produk', $data);
		if($run)
		{
			redirect('admin/produk');
		}
	}
	
	public function produk_del($id)
	{
		$this->db->where('id_produk', $id);
		
		$run = $this->db->delete('produk');
		if($run)
		{
			redirect('admin/produk');
		}
	}
}
