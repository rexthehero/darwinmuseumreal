<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class gebruikersoverzicht extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->model('darwin','',TRUE);
		}
		
		function index()
		{
                    {
                        
                     $data['table'] = $this->gebruikers_table();
			$session_data = $this->session->userdata('logged_in');
			if ($session_data['gebruikersrol'] == 'quizmaster')
                        {
                            $data['links'] = "<li><a href='home/logout'>Logout</a></li>";
				
			     $this->load->view('gebruikersoverzicht_view', $data);
                        }
                        else
                    
			{
				redirect('login', 'refresh');
			}
		}
                }	
			
		
		
		function gebruikers_table()
		{
			$result = $this->darwin->all_gebruikers();
			
			if($result)
			{
				$table = "";
				foreach($result as $row)
				{
					$table .= "<tr>
                                                <td>".$row->id."</td>
                                                <td>".$row->quiz1."</td>
                                                <td>".$row->quiz2."</td>
                                                <td>".$row->quiz3."</td>
                                                           
						
                                                
					</tr>";
				}
				return $table;
			}
			else
			{
				return "table error please teport this in the faq as soon as posible";
			}
		
        }}

/*        
        <td>".$row->naam."</td>
						<td>".$row->tussenvoegsel."</td>					
                                                <td>".$row->achternaam."</td>  
                                                <td>".$row->telefoonnummer."</td>
                                                <td>".$row->email."</td>*/