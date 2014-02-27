<?php
Class Insert extends CI_Controller
{
	public function __construct()
	{
	parent ::__construct();
	$this->load->helper('url');
	$this->load->model('Insert_model','Model');
	}

	public function front_page()
	{
	$this->load->view('insert1');
	}
	
	public function add()
	{
	if ($this->input->post('act') == 'create_post') {
			$this->Model->insert_data();
			$this->load->view('welcome');
		} else {
			$this->load->helper('form');

			$data = array(); 
			$attributes = (array('onSubmit'=>'return validate()','name'=>'form'));
            $data['form_open'] 	=   form_open('insert1',$attributes); 
            $data['form_user'] 	=  form_input(array('name' => 'username')); 
            $data['form_pass'] 	=   form_password(array('name' => 'password')); 
            $data['form_hidden']= form_hidden('act','create_post'); 
            $data['form_submit']= form_submit('submit','Register'); 
			$data['form_close']	= form_close();
            $this->load->view('insert1', $data);
        } 
	}






}
?>