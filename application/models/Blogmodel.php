<?php
class Blogmodel extends CI_Model 
{ 
    public function __construct() 
		{ 
			parent::__construct(); 
			$this->load->library('session');
		} 
     
    public function get_entries() 
		{ 
		   $query = $this->db->get('entry'); 
		   return $query->result(); 
		}
	 
     
    public function insert_entry()
		{ 
		   $this->Title = $this->input->post('title'); 
		   $this->Body = $this->input->post('text'); 
				 
		   $this->db->insert('entry',$this); 
		}
	
	public function items_view() 
		{ 
		   $query = $this->db->get('entry'); 
		   return $query->result(); 
		}
	
	public function item_entries() 
		{ 
		   $query = $this->db->get('entry'); 
		   return $query->result(); 
		}
	  
	public function update_entry($id, $data)
		{
		   $this->db->where('entry_id',$id);
		   $this->db->where('entry_id', $id);
		   $this->db->update('entry',$data);
		}
	
	public function del($id)
		{
			$this->db->delete('entry',array('entry_id'=>$id));
		}
	
    public function validate()
		{
			$username = $this->security->xss_clean($this->input->post('username'));
			$password = $this->security->xss_clean($this->input->post('password'));
			
			$query = $this->db->get_where('user',array('username'=>$username,'password'=>$password));
			//print_r($this->db->last_query());
			
				if($query->num_rows()>0)
				{
					$row = $query->row();
					$session = array(
							'username' => $row->username,
							'validated' => true
									);
						$this->session->set_userdata($session);  
						redirect('index');
				}		
		}	  	
	
	public function guest_view() 
		{ 
		   $query = $this->db->get('entry'); 
		   return $query->result(); 
		}
	
	public function reg()
		{    
			$this->db->insert('user',$this); 
		}  
	

}   

?>