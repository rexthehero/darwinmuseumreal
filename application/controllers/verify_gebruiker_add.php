<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Verify_gebruiker_add extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->model('quiz_model','',TRUE);
		}
		
		function index()
		{
			//This method will have the credentials validation
			$this->load->library('form_validation');
			
			$this->form_validation->set_rules('naam', 'naam', 'trim|required|xss_clean');
			
			$this->form_validation->set_rules('achternaam', 'achternaam', 'trim|required|xss_clean');
                        $this->form_validation->set_rules('telefoonnummer', 'telefoonnummer', 'trim|required|xss_clean');
			$this->form_validation->set_rules('email', 'email', 'trim|required|xss_cleancall|callback_check_e_mailadres_database');
		
			if($this->form_validation->run() == FALSE)
			{
				//Field validation failed.&nbsp; User redirected to register page
				$this->load->view('gebruiker_add_view');
			}
			else
			{
				//Go to home
				$this->add_database();
				
                                redirect('inloggebruiker', 'refresh');
				
			}
		}
                  function check_e_mailadres_database()
		{
			//Field validation succeeded.&nbsp; Validate against database
			$email = $this->input->post('email');
			
			//query the database
			$result = $this->quiz_model->check_email($email);
			
			if($result)
			{
				return TRUE;
			}
			else
			{
				$this->form_validation->set_message('check_email_database', 'Dit e-mailadres is al in gebruik');
				return false;
			}
		}
		
		function add_database()
		{
			//ield validation succeeded.&nbsp; Validate against database
			$data = array(
			   'id' => 'null', 
			   'naam' => $this->input->post('naam'), 
			   'tussenvoegsel' => $this->input->post('tussenvoegsel'), 
			   'achternaam' => $this->input->post('achternaam'), 
                           'telefoonnummer' => $this->input->post('telefoonnummer'), 
                           'email' => $this->input->post('email'), 
			 
			);
			
			//query the database
			$this->quiz_model->add_gebruiker($data);
		}
	}
?>