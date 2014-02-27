<?php 

Class Query extends CI_Model 
{
	function __construct()
	{
		parent:: __construct();
		$this->load->helper('url');
	}

	function entry_insert()
	{
		$data=array('first_name'=>$this->input->post('firstname'),
					'last_name'=>$this->input->post('lastname'),
					'school'=>$this->input->post('school'));

		$this->db->insert('users',$data);

	}

	function entry_update()
	{
	$this->load->database();

			$data=array('first_name'=>$this->input->post('firstname'),
						'last_name'=>$this->input->post('lastname'),
						'school'=>$this->input->post('school'));
         
    	  $this->db->where('id',$this->input->post('id'));
		  $this->db->update('users',$data);
		  
	}

	function delete($id)
	{
		$this->load->database();
		$this->db->delete('users',array('id'=>$id));
	}

	function get_all()
	{
		$this->load->database();

		$this->load->library('table');
		$query= $this->db->query('SELECT * from users');
		$table=$this->table->generate($query);
		return $table;
	}

	function users_getall()
	{
		$this->load->database();
		$query=$this->db->get('users');
		return $query->result();

	}

	function get($id)
	{
		$this->load->database();

		$query= $this->db->get_where('users',array('id'=>$id));
		return $query->row_array();
	}

	function general()
	{
		$data['fid']['value'] = 0;
		
		$data['firstname']    = 'Firstname';
		$data['lastname']     = 'Lastname';
		$data['school']   	  = 'School';                    
		$data['forminput']	  = 'Form Input';
		
		$data['fname']		= array('name'=>'firstname','size'=>30);
		$data['flast']	 	= array('name'=>'lastname', 'size'=>30);
		$data['fschool']	= array('name'=>'school', 'size'=>30);
		
		return $data;   
	}
}
?>