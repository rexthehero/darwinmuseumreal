<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Verify_artefact_muteren_form extends CI_Controller
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
			
			$this->form_validation->set_rules('naam', 'naam', 'trim|required|xss_clean');
			$this->form_validation->set_rules('omschrijfing', 'omschrijfing', 'trim|required|xss_clean');
			$this->form_validation->set_rules('afbeelding', 'afbeelding', 'trim|required|xss_clean');
			$this->form_validation->set_rules('stemmen', 'stemmen', 'trim|required|xss_clean');
			
			if($this->form_validation->run() == FALSE)
			{
				//Field validation failed.&nbsp; User redirected to register page
				$this->load->view('artefact_muteren_form_view');
			}
			else
			{
				//Go to login
				$this->update_database();
				redirect('artefactmuteren', 'refresh');
			}
		}
		
		function update_database()
		{
			//Field validation succeeded.&nbsp; Validate against database
			$data = array(
			   'id' => $this->input->post('id'), 
			   'naam' => $this->input->post('naam'), 
			   'omschrijfing' => $this->input->post('omschrijfing'), 
			   'afbeelding' => $this->input->post('afbeelding'), 
			   'stemmen' => $this->input->post('stemmen')
			
			);
			
			//query the database
			$this->darwin->update_database($data);
		}
	}
?>