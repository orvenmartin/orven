<?php
class Home extends CI_Controller
{
    function __construct(){
        parent::__construct();
        $this->check_isvalidated();
    }
    
    public function index(){
        // If the user is validated, then this function will run
        echo 'Congratulations, you are logged in.';
    }
    
    private function check_isvalidated(){
        if(! $this->session->userdata('validated')){
            redirect('login');
        }
    }
	
	  public function do_logout(){
        $this->session->sess_destroy();
        redirect('login');
    }
 }
 ?>