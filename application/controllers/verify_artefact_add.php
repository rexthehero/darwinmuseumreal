<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Verify_artefact_add extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->model('Darwin','',TRUE);
		}
		
		function index()
		{
			//This method will have the credentials validation
			$this->load->library('form_validation');
			
			$this->form_validation->set_rules('naam', 'naam', 'trim|required|xss_clean');
			$this->form_validation->set_rules('omschrijfing', 'omschrijfing', 'trim|required|xss_clean');
                        if (empty($_FILES['afbeelding']['name']))
			{
				$this->form_validation->set_rules('afbeelding', 'afbeelding', 'trim|required|xss_clean');
			}
			
		
			if($this->form_validation->run() == FALSE)
			{
				//Field validation failed.&nbsp; User redirected to register page
				$this->load->view('artefacten_add_view');
			}
			else
			{
				//Go to login
				$this->add_database();
				//redirect('artefacten_muteren', 'refresh');
                                redirect('artefactmuteren', 'refresh');
				
			}
		}
		
		function add_database()
		{
			//ield validation succeeded.&nbsp; Validate against database
			$data1 = array(
			   'id' => 'null', 
			   'naam' => $this->input->post('naam'), 
			   'omschrijfing' => $this->input->post('omschrijfing'), 
			   'afbeelding' => $_FILES['afbeelding']['name'] 
			 
			);
			//add to filesfunction do_upload()
			$dir = './assets/images/artefacten/';
			if (!file_exists($dir))
			{
				mkdir($dir, 0777, true);
				
			}
			
			$config['upload_path'] = './assets/images/artefacten/';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size']	= '100';
			$config['max_width']  = '1024';
			$config['max_height']  = '768';

			$this->load->library('upload', $config);

			if ( ! $this->upload->do_upload('afbeelding'))
			{
				$error = array('error' => $this->upload->display_errors());
				//var_dump($error);
				//exit();
			}
			else
			{
				$data = array('upload_data' => $this->upload->data());
				//var_dump($data);
				//exit();
			}
			//query the database
			$this->Darwin->add_artefacten($data1);
		}
	}
?>