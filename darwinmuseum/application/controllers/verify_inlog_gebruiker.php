<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Verify_inlog_gebruiker extends CI_Controller
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
			$this->form_validation->set_rules('email', 'email', 'trim|required|xss_clean|callback_check_database');
                 
			
			if($this->form_validation->run() == FALSE)
			{
				//Field validation failed.&nbsp; User redirected to login page
				$this->load->view('inloggebruiker_view');
			}
			else
			{
				//Go to private area
				redirect('quiz', 'refresh');
			}
		}
		function check_database($email)
		{
			//Field validation succeeded.&nbsp; Validate against database
			$email = $this->input->post('email');
			
			//query the database
			$result = $this->quiz_model->login($email);
                    
			if($result)
			{
				$sess_array = array();
				foreach($result as $row)
				{
					$sess_array = array(
						'id' => $row->id, 
						'email' => $row->email, 
                                            	'naam' => $row->naam,	
                                                'tussenvoegsel' => $row->tussenvoegsel,
                                            'achternaam' => $row->achternaam,
                                            'telefoonnummer' => $row->telefoonnummer,
                                            'quiz1' => $row->quiz1,
                                            'quiz2' => $row->quiz2,
                                            'quiz3' => $row->quiz3
                                                
						
					);
					$this->session->set_userdata('logged_in', $sess_array);
                                        
				}
                       
				return TRUE;
			}
			else
			{
				$this->form_validation->set_message('check_database', 'Ongeldig emailadres');
				return false;
			}
		}
	}
?>