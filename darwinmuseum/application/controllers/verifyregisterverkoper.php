<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class VerifyRegisterverkoper extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->model('darwin','',TRUE);
		}
		
		function index()
		{
			//This method will have the credentials validation
			$this->load->library('form_validation');
			
			$this->form_validation->set_rules('voornaam', 'voornaam', 'trim|required|xss_clean');                        
			$this->form_validation->set_rules('achternaam', 'achternaam', 'trim|required|xss_clean');
			$this->form_validation->set_rules('emailadres', 'emailadres', 'trim|required|xss_clean|callback_check_e_mailadres_database');
			$this->form_validation->set_rules('wachtwoord', 'wachtwoord', 'trim|required|xss_clean');
			$this->form_validation->set_rules('gebruikersrol', 'gebruikersrol', 'trim|required|xss_clean');
                        $this->form_validation->set_rules('geblokkeerd', 'geblokkeerd', 'trim|required|xss_clean');
			
			if($this->form_validation->run() == FALSE)
			{
				//Field validation failed.&nbsp; User redirected to register page
				$this->load->view('register_verkoper_view');
			}
			else
			{
				//Go to login
				$this->insert_into_database();
				redirect('home', 'refresh');
			}
		}
		
		function check_e_mailadres_database()
		{
			//Field validation succeeded.&nbsp; Validate against database
			$emailadres = $this->input->post('emailadres');
			
			//query the database
			$result = $this->darwin->check_e_mailadresverkoper($emailadres);
			
			if($result)
			{
				return TRUE;
			}
			else
			{
				$this->form_validation->set_message('check_e_mailadres_database', 'Dit e-mailadres is al in gebruik');
				return false;
			}
		}
		
		function insert_into_database()
		{
			//Field validation succeeded.&nbsp; Validate against database
			$data = array(
			   'id' => 'NULL', 
			   'voornaam' => $this->input->post('voornaam'), 
                           'tussenvoegsel' => $this->input->post('tussenvoegsel'), 
			   'achternaam' => $this->input->post('achternaam'), 
			   'emailadres' => $this->input->post('emailadres'), 
			   'wachtwoord' => $this->input->post('wachtwoord'), 
			   'gebruikersrol' => $this->input->post('gebruikersrol'),
                            'geblokkeerd' => $this->input->post('geblokkeerd')
			);
			
			//query the database
			$this->darwin->registerverkoper($data);
		}
                
               
        }
?>