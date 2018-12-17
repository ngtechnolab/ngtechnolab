<?php
defined('BASEPATH') || exit('No direct script access allowed');

class setting_model extends CI_Model
{
    var $table = 'company';

    public function __construct()
    {
        parent::__construct();
    }

    public function add($data)
    {
        $this->db->insert($this->table, $data);
        redirect(base_url('index.php/admin/'));
    }

    public function company()
    {
        $this->db->from($this->table);
        $query=$this->db->get();
        return $query->result();
    }
}
