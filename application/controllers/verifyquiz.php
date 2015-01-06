<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Verifyquiz extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->model('quiz_model','',TRUE);
		}
		
		function index()
		{
			//This method will have the credentials validation
		
				//Go to login
                            $this->update_database();
			
				//redirect('artefacten_muteren', 'refresh');
                                redirect("homepage", 'refresh');
				
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
			$this->quiz_model->updatelogin($data);
                         $this->quiz_model->updateartefacten($data);
  //Whatever happens when there's none checked.
                }
         } 
	
?>