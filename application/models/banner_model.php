<?php
defined('BASEPATH') || exit('No direct script access allowed');

class banner_model extends CI_Model
{
    var $table = 'banner';

    public function __construct()
    {
        parent::__construct();
    }

    public function add($data)
    {
        $this->db->insert($this->table, $data);
        redirect(base_url('index.php/banner/'));
    }

    public function delete($id)
    {
        $this->db->where('iBannerId', $id);
        $this->db->delete($this->table);
        redirect(base_url('index.php/banner'));
    }

    public function view()
    {
    	$this->db->from($this->table);
        $query=$this->db->get();
        return $query->result();
    }
    
    public function count_banner()
    {
        $this->db->from($this->table);
        $query = $this->db->get();
        return $query->num_rows();
    }
}
