<?php
Class Cart extends CI_Controller
{
	public function __construct()
	{
	parent:: __construct();
	$this->load->model('cart_model');
	}
	
	public function index()
	{
		$data['products'] = $this->cart_model->retrieve_products();
		
		$data['content']  = 'products';
		$this->load->view('index_view',$data);
		//print_r($data['products']);
	}

	public function add_cart_item()
	{
	if($this->cart_model->validate_add_cart_item() == TRUE)
		{
			if($this->input->post('ajax') !== '1')
				{
					redirect('cart');
				}
			else
				{
				echo true;
				}
		}
	}

}
?>