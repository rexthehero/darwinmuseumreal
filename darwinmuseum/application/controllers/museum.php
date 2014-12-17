<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Museum extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
		}
		
		function index()
		{
			$data['links'] ="<li><a href='homepage'>home</a></li>";
                        $data['links'] .= "<li><a href='contact'>contact</a></li>";
			
			$this->load->view('museum_view', $data);
		}
	}
?>