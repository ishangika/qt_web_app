<?php

class Userservices extends CI_Model
{

    function __construct()
    {
        parent::__construct();
    }

    public function check_user_login($usermodel){
    	$this->db->select('*');
    	$this->db->from('user');
    	$this->db->where('user.email',$usermodel->getEmail());
    	$this->db->where('user.password',MD5($usermodel->getPassword()));
        $this->db->where('user.password',MD5($usermodel->getPassword()));
        $this->db->where('user.delete_index',$usermodel->getDelete_index());
    	$query = $this->db->get();
    	return $query->row();	
    }

    public function get_user_details_by_id($usermodel){
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('user.id',$usermodel->getId());
        $query = $this->db->get();
        return $query->row();   
    }
}