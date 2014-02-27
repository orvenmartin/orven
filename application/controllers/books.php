<?php
class Books extends CI_Controller
{

	function __construct()
	{
		parent::__construct();

	}

	
	function main()
	{
		$this->load->library('table');
		$this->load->helper('html');
		$this->load->model('books_model');
		$data= $this->books_model->general();

		$data['table']= $this->books_model->get_all();
		$data['query']= $this->books_model->books_getall();
		$this->load->view('books_main',$data);
	}

	function input($id=0)
	{
	    $this->load->helper('form');
		$this->load->helper('html');
		$this->load->model('books_model');

			if($this->input->post('mySubmit'))
			{
				if($this->input->post('id'))
				{
					$this->books_model->entry_update();
				}
			else
			{
			   $this->books_model->entry_insert();
			}
			}

	function del($id)
	{
		$this->load->library('table');
		$this->load->helper('html');
		$this->load->model('books_model');

			if((int)$id>0)
			{
			$this->load->books_model->delete($id);

			}
	}
				$data=$this->books_model->general();
				$data['query']= $this->books_model->books_getall();
				$this->load->view('books_input',$data);

				if((int)$id>0)
				{
				$query= $this->books_model->get($id);
				$data['fid']['value']=$query['id'];
				$data['ftitle']['value']=$query['title'];
				$data['fauthor']['value']=$query['author'];
				$data['fpublisher']['value']=$query['publisher'];
				$data['fyear']['value']=$query['year'];

					if($query['available']=='yes')
					{
					$data['favailable']['checked']= TRUE;
					}
						else
						{
							$data['favailable']['checked']= FALSE;
						}
								$data['fsummary']['value']= $query['summary'];
				}
				$this->load->view('books_input',$data);
	}
}
?>