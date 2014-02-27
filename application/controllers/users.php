<?php	

Class User extends CI_Controller{

// constructor class

    function __construct()

    {

        parent::Controller();

        $this->load->library('session');

    }

    function index()

    {

        $this->load->view('user/index');

    }

 

   function login()

    {

      // if user already logged in, redirect to user index

        if ($this->_is_logged_in())

        {

            redirect('user/index');

        }

        else

        {
            $this->load->view('user/login');

        }

    }

 

    function register()

    {

        // if user already logged in, redirect to user index

        if ($this->_is_logged_in())

        {

            redirect('user/index');

        }

       else

        {

            $this->load->view('user/register');

        }

    }

 
    // checking user logged user by registered session

    function _is_logged_in()

    {

        $logged = $this->session->userdata('user_id');

        if ($logged)

        {

            return TRUE;

        }

        else
        {

            return FALSE;

        }

    }
}
?>