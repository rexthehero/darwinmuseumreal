<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Artefact_muteren_form extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->model('Darwin','',TRUE);
		}
		
		function index($id)
		{
			$this->load->helper(array('form'));
			$pre_data = $this->getartefact($id);
			$data['id'] = $id;
			$data['naam'] = $pre_data['naam'];
			$data['omschrijfing'] = $pre_data['omschrijfing'];
			$data['afbeelding'] = $pre_data['afbeelding'];
                        $data['stemmen'] = $pre_data['stemmen'];
			$this->load->view('artefact_muteren_form_view', $data);
		}
		
		function getartefact($id)
		{
                    
			$result = $this->Darwin->getartefact($id);
			
                            
			if ($result)
			{
				$artefact_array = array();
				foreach($result as $row)
				{
					$artefact_array = array(
						'naam' => $row->naam, 
						'omschrijfing' => $row->omschrijfing, 
						'afbeelding' => $row->afbeelding, 
                                                'stemmen' =>$row->stemmen
					);
				}
				return $artefact_array;
			}
			else
			{
				return "table error please teport this as soon as posible";
			}
		}
		
		function remove($id)
		{
			$result = $this->Darwin->remove_artefact($id);
			
			if($result)
			{
				redirect('artefactmuteren', 'refresh');
			}
			else
			{
				return "remove error please teport this as soon as posible";
			}
		}
	}
?>