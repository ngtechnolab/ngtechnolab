<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dashboard extends CI_Controller 
{
	public function index()
	{
		$this->load->model('category_model');
		$data['category'] = $this->category_model->count_category();		
		
		$this->load->view('dashboard',$data);
	}
	public function view()
	{
		$this->load->view('dashboard',$data);
	}
}
