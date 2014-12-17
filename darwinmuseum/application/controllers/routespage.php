<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Routespage extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
		}
		
		function index()
		{
			redirect('homepage', 'refresh');
		}
	}
?>