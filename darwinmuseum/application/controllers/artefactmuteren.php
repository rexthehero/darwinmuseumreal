<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class artefactmuteren extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->model('darwin','',TRUE);
		}
		
		function index()
		{
                    {
                        
                     $data['table'] = $this->artefact_table();
			$session_data = $this->session->userdata('logged_in');
			if ($session_data['gebruikersrol'] == 'admin')
			{
				$data['links'] = "<li><a href='home/logout'>Logout</a></li>";
				
			     $this->load->view('artefactmuteren_view', $data);
			}
			elseif ($session_data['gebruikersrol'] == 'quizmaster')
                        {
                            $data['links'] = "<li><a href='home/logout'>Logout</a></li>";
				
			     $this->load->view('artefactmuteren_view', $data);
                        }
                        else
                    
			{
				redirect('login', 'refresh');
			}
		}
                }	
			
		
		
		function artefact_table()
		{
			$result = $this->darwin->all_artefactvier();
			
			if($result)
			{
				$table = "";
				foreach($result as $row)
				{
					$table .= "<tr>
						<td>".$row->naam."</td>
						<td>".$row->omschrijfing."</td>
						 <td><img src='../assets/images/artefacten/".$row->afbeelding."' alt='edit'id='afbeelding' /></td>
                                                 <td>".$row->stemmen."</td>  
						<td>
							<a href='artefact_muteren_form/index/".$row->id."'>
								<img src='../assets/images/edit.png' alt='edit' />
							</a>
						</td>
						<td>
							<a href='artefact_muteren_form/remove/".$row->id."'>
								<img src='../assets/images/drop.png' alt='drop' />
							</a>
						</td>
                                                
					</tr>";
				}
				return $table;
			}
			else
			{
				return "table error please teport this in the faq as soon as posible";
			}
		
        }}
?>