<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Blocked_overzicht extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->model('darwin','',TRUE);
                        $this->load->model('verkoper_model','',TRUE);
		}
		
		function index()
		{
                    	$session_data = $this->session->userdata('logged_in');
				
				$data['gebruikersrol'] = $session_data['gebruikersrol'];
				if ($data['gebruikersrol'] != 'admin')
				{
                                    redirect('home', 'refresh');
					
				}
			$data['table'] = $this->blocked_table();
			$this->load->view('blocked_overzicht_view', $data);
		}
		
		function blocked_table()
		{
			$result = $this->darwin->all_blocked();
                                $table = "";
                        if($result)
			{
				
				foreach($result as $row)
				{
					$table .= "<tr>
						<td>".$row->id."</td>
						<td>".$row->voornaam."</td>
						<td>".$row->tussenvoegsel."</td>
						<td>".$row->achternaam."</td>
						<td>".$row->emailadres."</td>
						<td>".$row->wachtwoord."</td>
						<td>".$row->gebruikersrol."</td>
						<td>".$row->blocked."</td>
						<td>
							<a href='blocked_overzicht/update_database/".$row->id."'>
								<img src='../assets/images/drop.png' alt='drop' />
							</a>
						</td>
					</tr>";
				}
			}
			$result1 = $this->verkoper_model->all_blocked_verkoper();
			if($result1)
			{
			
				foreach($result1 as $row)
				{
					$table .= "<tr>
						<td>".$row->id."</td>
						<td>".$row->voornaam."</td>
						<td>".$row->tussenvoegsel."</td>
						<td>".$row->achternaam."</td>
						<td>".$row->emailadres."</td>
						<td>".$row->wachtwoord."</td>
						<td>".$row->gebruikersrol."</td>
						<td>".$row->blocked."</td>
						<td>
							<a href='blocked_overzicht/update_database_verkoper/".$row->id."'>
								<img src='../assets/images/drop.png' alt='drop' />
							</a>
						</td>
					</tr>";
				}
			
                                
			}
			else 
                         
			{
                            
				return "er staat niks in de table";
			}
                           return $table;
		}
		
		function update_database($id)
		{
			$user = $this->darwin->get_user_blocked_overzicht($id);
			//Field validation succeeded.&nbsp; Validate against database
			foreach($user as $row)
			{
				$data = array(
				   'id' => $row->id, 
				   'voornaam' => $row->voornaam, 
				   'tussenvoegsel' => $row->tussenvoegsel, 
				   'achternaam' => $row->achternaam, 
				   'emailadres' => $row->emailadres, 
				   'wachtwoord' => $row->wachtwoord, 
				   'gebruikersrol' => $row->gebruikersrol, 
				   'blocked' => 0
				   
				);
				//query the database
				$this->darwin->update_login($data);
			}
			redirect('blocked_overzicht', 'refresh');
		}
                	function update_database_verkoper($id)
		{
			$user = $this->verkoper_model->get_user_blocked_overzicht_verkoper($id);
			//Field validation succeeded.&nbsp; Validate against database
			foreach($user as $row)
			{
				$data = array(
				   'id' => $row->id, 
				   'voornaam' => $row->voornaam, 
				   'tussenvoegsel' => $row->tussenvoegsel, 
				   'achternaam' => $row->achternaam, 
				   'emailadres' => $row->emailadres, 
				   'wachtwoord' => $row->wachtwoord, 
				   'gebruikersrol' => $row->gebruikersrol, 
				   'blocked' => 0
				   
				);
				//query the database
				$this->verkoper_model->update_login_verkoper($data);
			}
			redirect('blocked_overzicht', 'refresh');
		}
	}
?>