<?php
defined('BASEPATH') || exit('No direct script access allowed');

class category_model extends CI_Model
{
    var $table = 'category';

    public function __construct()
    {
        parent::__construct();
    }

    public function add($data)
    {
        $this->db->insert($this->table, $data);
        redirect(base_url('index.php/category/'));
    }

    public function delete($id)
    {
        $this->db->where('iCategoryId', $id);
        $this->db->delete($this->table);
        redirect(base_url('index.php/category'));
    }

    public function view()
    {
    	$this->db->from($this->table);
        $query=$this->db->get();
        return $query->result();
    }
    public function get_all_category()
    {
        $this->db->from($this->table);
        $query = $this->db->get();
        return $query->result();
    }
    public function count_category()
    {
        $this->db->from($this->table);
        $query = $this->db->get();
        return $query->num_rows();
    }
}
