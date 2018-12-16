<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class category extends CI_Controller 
{
	public function __construct() 
	{
        parent::__construct();
        $this->load->model('category_model');
    }
	public function index()
	{
		$data['data'] = $this->category_model->view();
		$this->load->view('view_category', $data);
	}
	public function add()
	{
		$this->load->view('add_category');
	}
	public function delete($id)
	{
		$id = $this->uri->segment(3);
		$this->category_model->delete($id);
	}
	public function add_category()
	{
		$data['vCategory'] = $this->input->post('vCategory');			
		$data['tDescription'] = $this->input->post('tDescription');
		$data['eStatus'] = $this->input->post('eStatus');
		$data['eFeature'] = $this->input->post('eFeature');
		$data['dtCategoryDate'] = date("Y-m-d h:i:s");			
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
				'upload_path' => FCPATH.'assets/upload/category/',
				'allowed_types' => 'gif|jpg|png|jpeg',
			);
			$this->load->library('upload', $config);
			if($this->upload->do_upload('vImage'))
				{
					echo "Success";
					exit();
				}
				else
				{
					echo "Error";
					exit();
				}			
			$data['vImage'] = $image;
			$this->category_model->add($data); 
		}
	}
}