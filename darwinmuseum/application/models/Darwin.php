<?php
Class Darwin extends CI_Model
	{
                function login($emailadres, $wachtwoord)
		{
			$this -> db -> select('id, voornaam, tussenvoegsel, achternaam, emailadres, wachtwoord, gebruikersrol, blocked');
			$this -> db -> from('gebruikers');
			$this -> db -> where('emailadres', $emailadres);
			$this -> db -> where('wachtwoord', $wachtwoord);
			$this -> db -> where('blocked <', 3);
			$this -> db -> limit(1);
			
			$query = $this -> db -> get();
			
			if($query -> num_rows() == 1)
			{
				return $query->result();
			}
			else
			{
				return false;
			}
		}
                function check_e_mailadres_login($emailadres)
		{
			$this -> db -> select('emailadres');
			$this -> db -> from('gebruikers');
			$this -> db -> where('emailadres', $emailadres);
			$this -> db -> limit(1);
			
			$query = $this -> db -> get();
			
			if($query -> num_rows() == 1)
			{
				return true;
			}
			else
			{
				return false;
			}
		}
                function get_user($emailadres)
		{
			$this -> db -> select('id, voornaam, tussenvoegsel, achternaam, emailadres, wachtwoord, gebruikersrol, blocked');
			$this -> db -> from('gebruikers');
			$this -> db -> where('emailadres', $emailadres);
			$this -> db -> where('blocked <', 3);
			$this -> db -> limit(1);
			
			$query = $this -> db -> get();
			
			if($query -> num_rows() == 1)
			{
				return $query->result();
			}
			else
			{
				return false;
			}
		}
                function get_user_blocked($emailadres)
		{
			$this -> db -> select('voornaam, tussenvoegsel, achternaam, emailadres, gebruikersrol');
			$this -> db -> from('gebruikers');
			$this -> db -> where('emailadres', $emailadres);
			$this -> db -> limit(1);
			
			$query = $this -> db -> get();
			
			if($query -> num_rows() == 1)
			{
				return $query->result();
			}
			else
			{
				return false;
			}
		}
                function all_blocked()
		{
			$this -> db -> select('id, voornaam, tussenvoegsel, achternaam, emailadres, wachtwoord, gebruikersrol, blocked');
			$this -> db -> from('gebruikers');
			$this -> db -> where('blocked', 3);
			
			$query = $this -> db -> get();
			
			if($query -> num_rows() > 0)
			{
				return $query->result();
			}
			else
			{
				return false;
			}
		}
		
		function get_user_blocked_overzicht($id)
		{
			$this -> db -> select('id, voornaam, tussenvoegsel, achternaam, emailadres, wachtwoord, gebruikersrol, blocked');
			$this -> db -> from('gebruikers');
			$this -> db -> where('id', $id);
			$this -> db -> limit(1);
			
			$query = $this -> db -> get();
			
			if($query -> num_rows() == 1)
			{
				return $query->result();
			}
			else
			{
				return false;
			}
		}
                function update_login($data)
		{
			$this->db->where('emailadres', $data['emailadres']);
			$this->db->update('gebruikers', $data);
		}
 function register($data)
		{
			$this->db->insert('gebruikers', $data);
		}
 function registerverkoper($data)
		{
			$this->db->insert('verkoper', $data);
		}
function all_artefact()
		{
			$this -> db -> select('id, naam, omschrijfing, afbeelding');
                        $this -> db -> Where ('id < 11');
			$this -> db -> from('artefacten');
                        
			
			$query = $this -> db -> get();
			
			if($query -> num_rows() > 0)
			{
				return $query->result();
			}
			else
			{
				return false;
			}
		}
                function all_gebruikers()
		{
			$this -> db -> select('id, naam, tussenvoegsel, achternaam, telefoonnummer, email, quiz1, quiz2, quiz3');
			$this -> db -> from('bezoekers');
                        
			
			$query = $this -> db -> get();
			
			if($query -> num_rows() > 0)
			{
				return $query->result();
			}
			else
			{
				return false;
			}
		}
        
        function all_artefacttwee()
		{
			$this -> db -> select('id, naam, omschrijfing, afbeelding');
                        $this -> db -> Where ('id < 21 and id > 10 ');
			$this -> db -> from('artefacten');
                        
			
			$query = $this -> db -> get();
			
			if($query -> num_rows() > 0)
			{
				return $query->result();
			}
			else
			{
				return false;
			}
		}
               function all_artefactdrie()
		{
			$this -> db -> select('id, naam, omschrijfing, afbeelding');
                        $this -> db -> Where ('id > 20 ');
			$this -> db -> from('artefacten');
                        
			
			$query = $this -> db -> get();
			
			if($query -> num_rows() > 0)
			{
				return $query->result();
			}
			else
			{
				return false;
			}
		}
                          
		function all_artefactvier()
		{
			$this -> db -> select('id, naam, omschrijfing, afbeelding,stemmen');
			$this -> db -> from('artefacten');
			
			$query = $this -> db -> get();
			
			if($query -> num_rows() > 0)
			{
				return $query->result();
			}
			else
			{
				return false;
			}
		}
                function getartefact($id)
		{
			$this -> db -> select('id, naam, omschrijfing, afbeelding, stemmen');
			$this -> db -> from('artefacten');
			$this -> db -> where('id', $id);
			$this -> db -> limit(1);
			
			$query = $this -> db -> get();
			
			if($query -> num_rows() == 1)
			{
				return $query->result();
			}
			else
			{
				return false;
			}
		}
		
		function update_database($data)//remove_auto($auto_id)
		{
			$this->db->where('id', $data['id']);
			$this->db->update('artefacten', $data);
		}
		
		function remove_artefact($id)
		{
			$this->db->where('id', $id);
                       
			$query = $this->db->delete('artefacten'); 
			
			if($query)
			{
				return true;
			}
			else
			{
				return false;
			}
		}
                	function add_artefacten($data)
		{
			$query = $this->db->insert('artefacten', $data);
		}
               function check_e_mailadres($emailadres)
		{
			$this -> db -> select('emailadres');
			$this -> db -> from('gebruikers');
			$this -> db -> where('emailadres', $emailadres);
			$this -> db -> limit(1);
			
			$query = $this -> db -> get();
			
			if($query -> num_rows() == 0)
			{
				return true;
			}
			else
			{
				return false;
			}
		}
            
                function check_wachtwoord($emailadres, $wachtwoord)
		{
			$this -> db -> select('emailadres, wachtwoord');
			$this -> db -> from('gebruikers');
			$this -> db -> where('emailadres', $emailadres);
			$this -> db -> where('wachtwoord',$wachtwoord);
			$this -> db -> limit(1);
			
			$query = $this -> db -> get();
			
			if($query -> num_rows() == 1)
			{
				return true;
			}
			else
			{
				return false;
			}
		}
           
        }
 ?>
