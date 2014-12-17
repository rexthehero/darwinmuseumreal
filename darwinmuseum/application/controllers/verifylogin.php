<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class VerifyLogin extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->model('darwin','',TRUE);
                        $this->load->helper('date');
		}
		
		function index()
		{
			//This method will have the credentials validation
			$this->load->library('form_validation');
			
			$this->form_validation->set_rules('emailadres', 'emailadres', 'trim|required|xss_clean');
			$this->form_validation->set_rules('wachtwoord', 'wachtwoord', 'trim|required|xss_clean|callback_check_database');
			
			if($this->form_validation->run() == FALSE)
			{
                            $this->load->helper(array('form'));
				//Field validation failed.&nbsp; User redirected to login page
				$this->load->view('login_view');
			}
			else
			{
                            
				//Go to private area
				redirect('home', 'refresh');
			}
		}
		function check_database($wachtwoord)
		{
			//Field validation succeeded.&nbsp; Validate against database
			$emailadres = $this->input->post('emailadres');
			
			//query the database
			$result = $this->darwin->login($emailadres, $wachtwoord);
			
			//date - time
			$datestring = "Year: %Y Month: %m Day: %d";
			$timestring = "%h:%i %a";
			$time = time();
			
			//log
			$filename = '/log.txt';
			$file = 'log.txt';
			if (!file_exists($filename))
			{
				$content = "log file";
				$fp = fopen("/log.txt","wb");
				fwrite($fp, $content);
				fclose($fp);
			}
			
			if($result > 0)
			{
				$sess_array = array();
				foreach($result as $row)
				{
					$sess_array = array(
						'id' => $row->id, 
						'emailadres' => $row->emailadres, 
						'gebruikersrol' => $row->gebruikersrol
					);
					$this->session->set_userdata('logged_in', $sess_array);
				}
				
				//log
				// The new person to add to the file + next line
				foreach($result as $row)
				{
					$person = "voornaam = ".$row->voornaam." ".
								"tussenvoegsel = ".$row->tussenvoegsel." ".
								"achternaam = ".$row->achternaam." ".
								"emailadres = ".$row->emailadres." ".								
								"datum = ".mdate($datestring, $time)." ".
								"tijd = ".mdate($timestring, $time)." ".PHP_EOL;
								
					$data = array(
						'id' => $row->id, 
						'voornaam' => $row->voornaam, 
						'tussenvoegsel' => $row->tussenvoegsel, 
						'achternaam' => $row->achternaam, 
						'emailadres' => $row->emailadres, 
						'wachtwoord' => $row->wachtwoord, 
						'gebruikersrol' => $row->gebruikersrol, 
						'blocked' => 0, 
						
					);
					
					//query the database
					$this->darwin->update_login($data);
				}
				// Write the contents to the file, 
				// using the FILE_APPEND flag to append the content to the end of the file
				// and the LOCK_EX flag to prevent anyone else writing to the file at the same time
				file_put_contents($file, $person, FILE_APPEND | LOCK_EX);
				
				return TRUE;
			}
			else
			{
				//query the database
				$result_email = $this->darwin->check_e_mailadres_login($emailadres);
				if($result_email)
				{
					$result_wachtwoord = $this->darwin->check_wachtwoord($emailadres, $wachtwoord);
					if($result_wachtwoord)
					{
						$this->form_validation->set_message('check_database', "Dit account is geblokeerd");
						
						//query the database
						$result_user_blocked = $this->darwin->get_user_blocked($emailadres);
						
						//log
						// The new person to add to the file + next line
						foreach($result_user_blocked as $row)
						{
							$person = "voornaam = ".$row->voornaam." ".
										"tussenvoegsel = ".$row->tussenvoegsel." ".
										"achternaam = ".$row->achternaam." ".
										"emailadres = ".$row->emailadres." ".										
										"datum = ".mdate($datestring, $time)." ".
										"tijd = ".mdate($timestring, $time)." ";
										
						}
						// Write the contents to the file, 
						// using the FILE_APPEND flag to append the content to the end of the file
						// and the LOCK_EX flag to prevent anyone else writing to the file at the same time
						file_put_contents($file, $person, FILE_APPEND | LOCK_EX);
						
						return false;
					}
					else
					{
						//query the database
						$result_user = $this->darwin->get_user($emailadres);
						if($result_user)
						{
							$this->form_validation->set_message('check_database', "Dit wachtwoord = ".$wachtwoord." is ongeldig");
							
							//log
							// The new person to add to the file + next line
							foreach($result_user as $row)
							{
								$person = "voornaam = ".$row->voornaam." ".
											"tussenvoegsel = ".$row->tussenvoegsel." ".
											"achternaam = ".$row->achternaam." ".
											"emailadres = ".$row->emailadres." ".
											"wachtwoord = ".$wachtwoord." ".
											"datum = ".mdate($datestring, $time)." ".
											"tijd = ".mdate($timestring, $time)." ".PHP_EOL;
											
								$blocked = (int)$row->blocked + 1;
							
								
								$data = array(
									'id' => $row->id, 
									'voornaam' => $row->voornaam, 
									'tussenvoegsel' => $row->tussenvoegsel, 
									'achternaam' => $row->achternaam, 
									'emailadres' => $row->emailadres, 
									'wachtwoord' => $row->wachtwoord, 
									'gebruikersrol' => $row->gebruikersrol, 
									'blocked' => $blocked
									
								);
								
								//query the database
								$this->darwin->update_login($data);
							}
							// Write the contents to the file, 
							// using the FILE_APPEND flag to append the content to the end of the file
							// and the LOCK_EX flag to prevent anyone else writing to the file at the same time
							file_put_contents($file, $person, FILE_APPEND | LOCK_EX);
							
							return false;
						}
						else
						{
							$this->form_validation->set_message('check_database', "Dit account is geblokeerd");
							
							//query the database
							$result_user_blocked = $this->darwin->get_user_blocked($e_mailadres);
							
							//log
							// The new person to add to the file + next line
							foreach($result_user_blocked as $row)
							{
								$person = "voornaam = ".$row->voornaam." ".
											"tussenvoegsel = ".$row->tussenvoegsel." ".
											"achternaam = ".$row->achternaam." ".
											"emailadres = ".$row->emailadres." ".											
											"datum = ".mdate($datestring, $time)." ".
											"tijd = ".mdate($timestring, $time)." ".PHP_EOL;
										
							}
							// Write the contents to the file, 
							// using the FILE_APPEND flag to append the content to the end of the file
							// and the LOCK_EX flag to prevent anyone else writing to the file at the same time
							file_put_contents($file, $person, FILE_APPEND | LOCK_EX);
							
							return false;
						}
					}
				}
				else
				{
					$this->form_validation->set_message('check_database', "Dit e-mailadres = ".$emailadres." is ongeldig");
					
					//log
					// The new person to add to the file + next line
					$person = "voornaam = onbekend tussenvoegsel = onbekend achternaam = onbekend emailadres = ".$emailadres." gebruikersrol = onbekend ".
								"datum = ".mdate($datestring, $time)." ".
								"tijd = ".mdate($timestring, $time).PHP_EOL;
					// Write the contents to the file, 
					// using the FILE_APPEND flag to append the content to the end of the file
					// and the LOCK_EX flag to prevent anyone else writing to the file at the same time
					file_put_contents($file, $person, FILE_APPEND | LOCK_EX);
					
					return false;
				}
				$this->form_validation->set_message('check_database', "Dit is een ongebruikenlijke error contact de admin zo snell als mogenlijk");
				return false;
			}
		}
	}
?>