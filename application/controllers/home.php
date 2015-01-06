<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	session_start(); //we need to call PHP's session object to access it through CI
	class Home extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
		}
		 
		function index()
		{
			if($this->session->userdata('logged_in'))
			{
				$session_data = $this->session->userdata('logged_in');
				$data['emailadres'] = $session_data['emailadres'];
				$data['gebruikersrol'] = $session_data['gebruikersrol'];
				if ($data['gebruikersrol'] == 'manager')
				{
                                $data['links'] = "<li><a href='manager/get_visitors'>visitor</a></li>";
                                  $data['links'] .= "<li><a href='manager/get_reservations'>reservation</a></li>"; 
					
				}
				else if ($data['gebruikersrol'] == 'verkoper')
				{
				$data['links'] = "<li><a href='verkoperbooking/sell'>betalen</a></li>";
				}
                                else if ($data['gebruikersrol'] == 'quizmaster')
				{
					$data['links'] = "<li><a href='artefactmuteren'>artefact muteren</a></li>";
                                        $data['links'] = "<li><a href='gebruikersoverzicht'>quizoverzicht</a></li>";
                                                $data['links'] .= "<li><a href='usergebruiker2'>gebruikeroverzicht</a></li>";
				}
                                  else if ($data['gebruikersrol'] == 'admin')
				{
					$data['links'] = "<li><a href='artefactmuteren'>artefact muteren</a></li>";
                                        $data['links'] .= "<li><a href='register'>registeren</a></li>"; 
                                         $data['links'] .= "<li><a href='blocked_overzicht'>blocked</a></li>"; 
                                         $data['links'].= "<li><a href='verkoperregister'>registerenverkoper</a></li>";
                                          $data['links'].= "<li><a href='log_overzicht'>overzicht</a></li>";
                                           $data['links'].= "<li><a href='log_overzicht_verkoper'>overzicht</a></li>";
                                        $data['links'] .= "<li><a href='addartefact'>artefact toevoegen</a></li>";
                                        
				}
				else
				{
					$data['links'] = "";
				}
				$data['links'] .= "<li><a href='home/logout'>Logout</a></li>";
				$this->load->view('home_view', $data);
			}
			else
			{
				//If no session, redirect to login page
				redirect('login', 'refresh');
			}
		}
		 
		function logout()
		{
			$this->session->unset_userdata('logged_in');
			session_destroy();
			redirect('home', 'refresh');
		}
	}
?>