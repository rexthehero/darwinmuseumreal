
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class contact extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
			
		}
		
		function index()
		{
                        $this->load->helper(array('form'));
                        $data['links'] = "<li><a href='Homepage'>Home</a></li>";
                         $data['links'] = "<li><a href='museum'>museum</a></li>";
                        $data['links'] .= "<li><a href='contact'>contact</a></li>";
			$this->load->view('contact_view', $data);
		}
        }
  ?>