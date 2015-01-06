<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class addgebruiker extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->model('quiz_model','',TRUE);
		}
		
		function index()
		{
			$this->load->helper(array('form'));
			$this->load->view('gebruiker_add_view');
		}
	}
?>
