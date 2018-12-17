<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller 
{
	public function __construct() 
	{
        parent::__construct();
        $this->load->model('admin_model');
    }
	public function index()
	{
		$data['data'] = $this->admin_model->view();
		$this->load->view('view_admin', $data);
	}
	public function add()
	{
		$this->load->view('add_admin');
	}
	public function delete($id)
	{
		$id = $this->uri->segment(3);
		$this->admin_model->delete($id);
	}
	public function profile()
	{
		$this->load->view('profile');
	}
	public function change_password()
	{
		$this->load->view('change_password');
	}
	public function add_admin()
	{
		$data['vAdmin'] = $this->input->post('vAdmin');			
		$data['vEmail'] = $this->input->post('vEmail');
		$data['vPassword'] = $this->input->post('vPassword');
		$data['vPhone'] = $this->input->post('vPhone');
		$data['eStatus'] = $this->input->post('eStatus');
		$data['dtAdminDate'] = date("Y-m-d h:i:s");			
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
				'upload_path' => "./assets/upload/category",
				'allowed_types' => "gif|jpg|png|jpeg",
			);			
			$this->load->library('upload', $config);
			$this->upload->do_upload('vImage');			
			$data['vImage'] = $image;
			$this->admin_model->add($data);
		}
		redirect(base_url('index.php/admin'));
	}
}