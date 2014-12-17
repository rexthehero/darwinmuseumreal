<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Log_overzicht_verkoper extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->model('darwin','',TRUE);
		}
		
		function index()
		{
                    $session_data = $this->session->userdata('logged_in');
				
				$data['gebruikersrol'] = $session_data['gebruikersrol'];
				if ($data['gebruikersrol'] != 'admin')
				{
                                    redirect('home', 'refresh');
					
				}
			//log
			$filename = '/verkoper.txt';
			$file = 'verkoper.txt';
			// Open the file to get existing content
			$current = file_get_contents($file);
			$data['log'] = $current;
			$this->load->view('log_overzicht_verkoper_view', $data);
		}
	}
?>