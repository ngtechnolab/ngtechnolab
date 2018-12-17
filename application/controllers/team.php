<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class team extends CI_Controller 
{
	public function __construct() 
	{
        parent::__construct();
        $this->load->model('team_model');
    }
	public function index()
	{
		$data['data'] = $this->team_model->view();
		$this->load->view('view_team', $data);
	}
	public function add()
	{
		$this->load->view('add_team');
	}
	public function add_team()
	{
		$data['vBanner'] = $this->input->post('vBanner');			
		$data['tDescription'] = $this->input->post('tDescription');
		$data['iOrder'] = $this->input->post('iOrder');
		$data['eLocation'] = $this->input->post('eLocation');
		$data['eStatus'] = $this->input->post('eStatus');
		$data['dtBannerDate'] = date("Y-m-d h:i:s");			
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
				'upload_path' => "./assets/upload/banner",
				'allowed_types' => "gif|jpg|png|jpeg",
			);			
			$this->load->library('upload', $config);
			$this->upload->do_upload('vImage');			
			$data['vImage'] = $image;
			$this->team_model->add($data);
		}
	}
	public function delete($id)
	{
		$id = $this->uri->segment(3);
		$this->team_model->delete($id);
	}
}