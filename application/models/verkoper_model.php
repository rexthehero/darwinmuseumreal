<?php
	Class Verkoper_model extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
		}
		/*
		function get_user()
		{
			$query = $this->db->query("SELECT * FROM visitor
									   WHERE id = '".$_POST['id']."'");

				return $query->result();

		}
		*/

		

		function get_ticket_data()
		{
			$query = $this->db->query("SELECT * FROM  booking
									   WHERE user_id = '0'
									   AND ticket_id = ".$this->db->insert_id()."");

			return $query->result();

		}
		function add_ticket()
		{	
			$now = date('Y-m-d');
				$ticket = array(
					'user_id' => 0,
					'price' =>$this->session->userdata["ticket_data"]["price"],
					'created_at' => $now
				);
				$this->db->insert('booking', $ticket);
			
		}
                            function login_verkoper($emailadres, $wachtwoord)
		{
			$this -> db -> select('id, voornaam, tussenvoegsel, achternaam, emailadres, wachtwoord, gebruikersrol, blocked');
			$this -> db -> from('verkoper');
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
                function check_e_mailadres_login_verkoper($emailadres)
		{
			$this -> db -> select('emailadres');
			$this -> db -> from('verkoper');
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
                function get_user_verkoper($emailadres)
		{
			$this -> db -> select('id, voornaam, tussenvoegsel, achternaam, emailadres, wachtwoord, gebruikersrol, blocked');
			$this -> db -> from('verkoper');
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
                function get_user_blocked_verkoper($emailadres)
		{
			$this -> db -> select('voornaam, tussenvoegsel, achternaam, emailadres, gebruikersrol');
			$this -> db -> from('verkoper');
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
                function all_blocked_verkoper()
		{
			$this -> db -> select('id, voornaam, tussenvoegsel, achternaam, emailadres, wachtwoord, gebruikersrol, blocked');
			$this -> db -> from('verkoper');
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
		
		function get_user_blocked_overzicht_verkoper($id)
		{
			$this -> db -> select('id, voornaam, tussenvoegsel, achternaam, emailadres, wachtwoord, gebruikersrol, blocked');
			$this -> db -> from('verkoper');
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
                function update_login_verkoper($data)
		{
			$this->db->where('emailadres', $data['emailadres']);
			$this->db->update('verkoper', $data);
		}
 function register_verkoper($data)
		{
			$this->db->insert('verkoper', $data);
		}
 function registerverkoper_verkoper($data)
		{
			$this->db->insert('verkoper', $data);
		}		

               function check_e_mailadres_verkoper($emailadres)
		{
			$this -> db -> select('emailadres');
			$this -> db -> from('verkoper');
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
       
                function check_wachtwoord_verkoper($emailadres, $wachtwoord)
		{
			$this -> db -> select('emailadres, wachtwoord');
			$this -> db -> from('verkoper');
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
                      function check_e_mailadresverkoper($emailadres)
		{
			$this -> db -> select('emailadres');
			$this -> db -> from('verkoper');
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
	
	}
?>