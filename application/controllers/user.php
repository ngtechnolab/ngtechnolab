<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user extends CI_Controller 
{
	public function __construct() 
	{
        parent::__construct();
        $this->load->model('user_model');
    }
	public function index()
	{
		$data['data'] = $this->user_model->view();
		$this->load->view('view_user', $data);
	}
	public function add()
	{
		$this->load->view('add_user');
	}
	public function add_user_action()
	{
		$data['eUserType'] = $this->input->post('eUserType');			
		$data['vEmail'] = $this->input->post('vEmail');
		$data['vPassword'] = $this->input->post('vPassword');
		$data['dtAddedDate'] = date("Y-m-d h:i:s");
		$data['dtUpdatedDate'] = date("Y-m-d h:i:s");
		$data['vFirstName'] = $this->input->post('vFirstName');
		$data['vLastName'] = $this->input->post('vLastName');
		$data['eGender'] = $this->input->post('eGender');
		$data['vAddress'] = $this->input->post('vAddress');
		$data['vCity'] = $this->input->post('vCity');
		$data['iStateId'] = $this->input->post('iStateId');
		$data['iCountryId'] = $this->input->post('iCountryId');
		$data['vMobilePhone'] = $this->input->post('vMobilePhone');
		$data['vOfficePhone'] = $this->input->post('vOfficePhone');
		$data['vZipcode'] = $this->input->post('vZipcode');
		$data['eStatus'] = $this->input->post('eStatus');
		$data['vAuthCode'] = $this->input->post('vAuthCode');
		$data['eMailVerified'] = $this->input->post('eMailVerified');
		$data['eFeature'] = $this->input->post('eFeature');
		if($_FILES['vProfileImage']['name'] != "")
		{
			if($_FILES['vProfileImage']['type'] == 'image/gif')
			{
				$ext = ".gif";
			} 
			else if($_FILES['vProfileImage']['type'] == 'image/jpeg')
			{
				$ext = ".jpeg";
			} 
			else if($_FILES['vProfileImage']['type'] == 'image/png')
			{
				$ext = ".png";
			}
			$image = time().$ext; 
			$config = array(
				'file_name' => $image,
				'upload_path' => "./assets/upload/user",
				'allowed_types' => "gif|jpg|png|jpeg",
			);			
			$this->load->library('upload', $config);
			$this->upload->do_upload('vProfileImage');			
			$data['vProfileImage'] = $image;	
		}
		if($_FILES['vHeaderImage']['name'] != "")
		{
			if($_FILES['vHeaderImage']['type'] == 'image/gif')
			{
				$ext = ".gif";
			} 
			else if($_FILES['vHeaderImage']['type'] == 'image/jpeg')
			{
				$ext = ".jpeg";
			} 
			else if($_FILES['vHeaderImage']['type'] == 'image/png')
			{
				$ext = ".png";
			}
			$image = time().$ext; 
			$config = array(
				'file_name' => $image,
				'upload_path' => "./assets/upload/user",
				'allowed_types' => "gif|jpg|png|jpeg",
			);			
			$this->load->library('upload', $config);
			$this->upload->do_upload('vHeaderImage');			
			$data['vHeaderImage'] = $image;
		}
		$this->user_model->add($data);
	}
}