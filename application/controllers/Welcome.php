<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->helper('text');
		$this->load->model('Search_model');
	}
	public function index(){
		$this->load->view('index');
	}
	public function search(){
		$s_data['searchQ'] = $this->input->post('searchQ');
		$data['search'] = $this->Search_model->get_certificate($s_data);
		$data['title'] = 'search results for '. $s_data['searchQ'];

		$this->load->view('search',$data);
	}
}
