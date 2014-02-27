<?php
Class Insert_model extends CI_Model
{
	public function __construct()
	{
	parent::__construct();
	}

	public function insert_data()
	{
	 $this->Username = $this->input->post('username'); 
     $this->Password = $this->input->post('password');   
     $this->db->insert('users',$this); 
    }
	
	
}
?>