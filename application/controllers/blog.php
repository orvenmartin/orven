<?php
class Blog extends CI_Controller{

	public function __construct()
	{
		parent:: __construct();
		
		$this->load->helper('url');
		$this->load->model('Blogmodel','Blog');
		//$this->output->enable_profiler(TRUE);
		
	}
	
	//VALIDATION
	public function is_validated()
	{
		if ( $this->session->userdata('validated') == true && $this->session->userdata('username') != null) 
		{
			return TRUE;
		} else {
			return FALSE;
		}
	}
	//end
	
	//FRONT PAGE
	public function index()
	{	
		if($this->is_validated())
		{
			$data['blogs'] = $this->Blog->get_entries();
			$this->load->view('index',$data);
		} else{
		redirect('login');
		}
	}
	//end
	
	//INSERTING DATA
	public function post()
	{
		if($this->is_validated())
		{	
		
			if ($this->input->post('act') == 'create_post') 
			{
				$this->Blog->insert_entry();
				$this->load->view('posted');
			} else {
			$this->load->view('post');
			}	 
	}
		else{
		redirect('login');
		}
	}
	//end
	
	//INSERTED DATA
	public function items()
	{
		if($this->is_validated()){
			$data['blog'] = $this->Blog->item_entries();
			$data['validated'] = $this->is_validated();
			$this->load->view('items',$data);
		}
			else{
			redirect('blog/items2');		
		}
	}
	
	//INSERTED DATA
	public function items2()
	{
		$data['view'] = $this->Blog->items_view();
		$data['validated'] = $this->is_validated();
		$this->load->view('items_view',$data);
	}
	//end
	
	//UPDATE
	public function update()
	{
		if($this->is_validated())
		{
	
			$id = $this->input->post('id');
			if ($id)
			{
				$data = array('title'=>$this->input->post('title1'), 'body'=>$this->input->post('area'));
				$this->Blog->update_entry($id, $data);
				$this->load->view('updated');
			} 
				else
				{
					$this->load->helper('form');
					$id = $this->uri->segment(3);
					$query = $this->db->get_where('entry', array('entry_id' =>$id));
					
						if ($query->num_rows()>0)
						{
							$row = $query->row(); 
		
							$title = $row->Title;
							$entry_id = $row->entry_id;
							$body = $row->Body;
							//var_dump(); exit;
							$this->load->view('update', array('entry_id'=>$entry_id, 'title'=>$title, 'body'=>$body));
						}
				}
		} else{
			redirect('login');
		}
	}
	//end
	
	//DELETE
	public function delete()
	{
		if($this->is_validated())
		{
	
			$id = $this->uri->segment(3);
			$this->Blog->del($id);
			$this->load->view('deleted');
	
		} else{
			redirect('login');
		}
	
	}
	//end

	//LOGIN
	public function login($msg = NULL)
	{
		if($this->is_validated()) 
		{
			redirect('index');
		}
			$data['msg'] = $msg;
			$this->load->view('admin', $data);
		
    }
			
			
	public function process()
	{
	$result = $this->Blog->validate();
		
		if(! $result)
			{
            $msg = '<h4><font color=red >*Invalid Username/Password</font></h4>';
			$this->login($msg);
			}		
	}
	//end
	
	 //FOR VIEWING ONLY
	public function guests()
	{
		$data['bloggg'] = $this->Blog->guest_view();
		$this->load->view('guest',$data);
	}
	//end
	
	//REGISTRATION
	public function register()
	{
		if ($this->input->post('reg') == 'register') 
		{
			$this->Blog->reg();
			$this->load->view('registered');
		} else {
			$this->firstname = $this->input->post('firstname'); 
			$this->lastname = $this->input->post('lastname');
			$this->username = $this->input->post('user'); 
			$this->password = $this->input->post('pass');
			$this->load->view('register');
		}		
	}
	//end
	
	//LOGOUT
	public function logout_view()
	{
		$this->session->sess_destroy();
		$this->load->view('logout');	
	}
	//end
}
?>