<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class quiz_stemmen extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->model('quiz_model','',TRUE);
		}
		
		function index($id, $quiz)
		{
			$this->update_database_stemmen($id, $quiz);
                    	$session_data0 = $this->session->userdata('logged_in');
			$this->update_database_login($id,$quiz);
			redirect('quiz', 'refresh');
		}
		
		
		function update_database_stemmen($id, $quiz)
		{
			//Field validation succeeded.&nbsp; Validate against database
                  $result =  $this->quiz_model->getartefact($id);
                  $z2 = (int)$quiz;
                  
                  foreach ($result as $row) {
                      $z1 = (int)$row->stemmen;
                      $quiz0 = $z1 + $z2;
                      $session_data = $this->session->userdata('logged_in');
                         $user = $this->quiz_model->getuser($session_data['id']);
                    
                         foreach ($user as $row1) {
                   if ($row1->quiz1 == 0 && $quiz == 1 || $row1->quiz2 == 0 && $quiz == 2 || $row1->quiz3 == 0 && $quiz == 3) 
                   {
                       
                      
                    $data = array(
			   'id' => $row->id,                            
			   'naam' => $row->naam, 
			   'omschrijfing' => $row->omschrijfing, 
			   'afbeelding' => $row->afbeelding, 
			   'stemmen' => $quiz0
			
			);
                   }
                   }
                  }
		 if ($row1->quiz1 == 0 && $quiz == 1 || $row1->quiz2 == 0 && $quiz == 2 || $row1->quiz3 == 0 && $quiz == 3) {	
			//query the database
                  
			$this->quiz_model->updateartefacten($data);
                 }
		}
		
		
		function update_database_login($id , $quiz)
		{
			//Field validation succeeded.&nbsp; Validate against database
                    	$session_data = $this->session->userdata('logged_in');
                        
                        $user = $this->quiz_model->getuser($session_data['id']);
                    
                         foreach ($user as $row) {
                             
                      
                            if ($row->quiz1 == 0 && $quiz == 1)
                            {
                                $data = array(
			 'id' =>  $row->id,
                       	   'naam' => $row->naam,
			   'tussenvoegsel' =>  $row->tussenvoegsel,
			   'achternaam' =>$row->achternaam,
			   'telefoonnummer' => $row->telefoonnummer,
                            'email' => $row->email,
                            'quiz1' => $id,
                            'quiz2' => $row->quiz2,
                            'quiz3' => $row->quiz3
			
			);
                            }
                            else if ($row->quiz2 == 0 && $quiz == 2)
                            {
                                $data = array(
			 'id' =>  $row->id,
                       	   'naam' => $row->naam,
			   'tussenvoegsel' =>  $row->tussenvoegsel,
			   'achternaam' =>$row->achternaam,
			   'telefoonnummer' => $row->telefoonnummer,
                            'email' => $row->email,
                            'quiz1' => $row->quiz1,
                            'quiz2' => $id,
                            'quiz3' => $row->quiz3
			
			);
                            }
                            else if($row->quiz3 == 0 && $quiz == 3)
                            {
                                $data = array(
			      'id' =>  $row->id,
                       	   'naam' => $row->naam,
			   'tussenvoegsel' =>  $row->tussenvoegsel,
			   'achternaam' =>$row->achternaam,
			   'telefoonnummer' => $row->telefoonnummer,
                            'email' => $row->email,
                            'quiz1' => $row->quiz1,
                            'quiz2' => $row->quiz2,
                            'quiz3' => $id
			
			);
                            }
			}
                         if ($row->quiz1 == 0 && $quiz == 1 || $row->quiz2 == 0 && $quiz == 2 || $row->quiz3 == 0 && $quiz == 3) {
			//query the database
                        
			$this->quiz_model->updatelogin($data);
                         }
		}
        }
?>