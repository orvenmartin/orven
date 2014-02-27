<?php
class Data extends CI_Controller{

	function __construct()
	{
	parent::__construct();
	}

	function main()
	{
		$this->load->library('table');
		$this->load->helper('html');
		$this->load->model('Query');
		$data= $this->Query->general();

		$data['table']= $this->Query->get_all();
		$data['query']= $this->Query->users_getall();
		$this->load->view('table_data',$data);
	}

	function input($id=0)
	{
		$this->load->helper('form');
		$this->load->helper('html');
		$this->load->model('Query');

	if($this->input->post('Submit'))
	{
	if($this->input->post('id'))
	{
		$this->Query->entry_update();
	}
	else
	{
		$this->Query->entry_insert();
	}		

	}
	

	function del($id)
	{
		$this->load->library('table');
		$this->load->helper('html');
		$this->load->model('Query');

	if((int)$id>0)
	{
		$this->load->Query->delete($id);

	}
	}	


		$data=$this->Query->general();
		$data['query']= $this->Query->users_getall();
		$this->load->view('insert_data',$data);

	if((int)$id>0)
	{
		$query= $this->Query->get($id);
		$data['fid']['value']=$query['id'];
		$data['fname']['value']=$query['firstname'];
		$data['flast']['value']=$query['lastname'];
		$data['fschool']['value']=$query['school'];

		$this->load->view('insert_data',$data);

	}

	}

}
?>