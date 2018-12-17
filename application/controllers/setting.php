<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class setting extends CI_Controller 
{
	public function __construct() 
	{
        parent::__construct();
        $this->load->model('setting_model');
    }
	public function index()
	{
		
	}
	public function company()
	{
		$data['company'] = $this->setting_model->company();
		$this->load->view('view_company', $data);	
	}
	public function add_company()
	{
		$data['vCompany'] = $this->input->post('vCompany');			
		$data['tDescription'] = $this->input->post('tDescription');			
		$data['vAddress'] = $this->input->post('vAddress');			
		$data['vCity'] = $this->input->post('vCity');
		$data['vZipcode'] = $this->input->post('vZipcode');
		$data['vMobilePhone'] = $this->input->post('vMobilePhone');		
		$data['vOfficePhone'] = $this->input->post('vOfficePhone');
		$data['vFax'] = $this->input->post('vFax');
		$data['vEmail'] = $this->input->post('vEmail');
		$data['vWebsite'] = $this->input->post('vWebsite');

		if($_FILES['vImage']['name'] != "")
		{
			if($_FILES['vImage']['type'] == 'image/gif')
			{
				$ext = ".gif";
			} 
			else if($_FILES['vImage']['type'] == 'image/jpeg')
			{
				$ext = ".jpeg";
			} 
			else if($_FILES['vImage']['type'] == 'image/png')
			{
				$ext = ".png";
			}
			$image = time().$ext; 
			$config = array(
				'file_name' => $image,
				'upload_path' => "../assets/upload/company",
				'allowed_types' => "gif|jpg|png|jpeg",
			);			
			$this->load->library('upload', $config);
			$this->upload->do_upload('vImage');			
			$data['vImage'] = $image;
			$this->setting_model->add($data);
			redirect(base_url('setting/company'));
		}
	}
	public function edit_company()
	{
		
		$data['company'] = $this->setting_model->company();
		$this->load->view('add_company', $data);		
	}
	public function social()
	{
		$this->load->view('social', null);
	}

	public function profile()
	{
		$this->load->view('profile',null);
	}

	public function add_social()
	{
		
	}
}
