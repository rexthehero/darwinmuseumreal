<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Homepage extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
		}
		
		function index()
		{
			$data['links'] ="<li><a href='museum'>museum</a></li>";
                        $data['links'] .="<li><a href='addgebruiker'>quiz</a></li>";
                        $data['links'] .= "<li><a href='contact'>contact</a></li>";
			 $data['links'] .="<li><a href='booking/reservate'</a>betalen</li>";
			$this->load->view('homepage_view', $data);
		}
	}
?>