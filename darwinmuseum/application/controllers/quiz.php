<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class quiz extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
                        $this->load->model('quiz_model','',TRUE);
		}
		
		function index()
		{
			
                         $data['table'] = $this->artefact_table();
                         $this->load->helper(array('form'));
		
			$this->load->view('quiz_view', $data);
                       
               
                        
		}
                function artefact_table()
		{
			$result = $this->quiz_model->all_artefact();
			
			if($result)
			{
				$table = "";
				foreach($result as $row)
				{
					$table .= "<tr>
						<td>".$row->naam."</td>
						<td>".$row->omschrijfing."</td>
					        <td><img src='../assets/images/artefacten/".$row->afbeelding."' alt='edit'id='afbeelding' /></td>
                                                <td><a href='quiz_stemmen/index/".$row->id."/1'>
							3
							</a>
                                                <td><a href='quiz_stemmen/index/".$row->id."/2'>
						        2 
							</a></td>
                                                <td><a href='quiz_stemmen/index/".$row->id."/3'>
							1
							</a></td>
                                                    
					</tr>";
				}
                               
				return $table;
			}
			else
			{
				return "table error please teport this in the faq as soon as posible";
			}
		}
          
                    
                    
                    
               
	}
?>