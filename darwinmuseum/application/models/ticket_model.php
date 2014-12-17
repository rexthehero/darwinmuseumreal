<?php
	Class Ticket_model extends CI_Model
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

		function find_user($id)
		{
			$query = $this->db->query("SELECT email FROM visitor
							   WHERE id = '".$id."'");

			return $query->result();
		}

		function get_ticket_data()
		{
			$query = $this->db->query("SELECT * FROM visitor, booking
									   WHERE email = '".$this->session->userdata["ticket_data"]["email"]."'
									   AND ticket_id = ".$this->db->insert_id()."");

			return $query->result();

		}
		function add_ticket($email)
		{
			$query = $this->db->query("SELECT id, email FROM visitor
							   WHERE email = ".$this->db->escape($email)." limit 1");

			$result = $query->result();

			// Collect data array
			$data = array(
				'voornaam' => $this->session->userdata["ticket_data"]["voornaam"],
				'tussenvoegsel' => $this->session->userdata["ticket_data"]["tussenvoegsel"],
				'achternaam' => $this->session->userdata["ticket_data"]["achternaam"],
				'email' => $this->session->userdata["ticket_data"]["email"],
				'geboortedatum' => $this->session->userdata["ticket_data"]["geboortedatum"],
				'postcode' => $this->session->userdata["ticket_data"]["postcode"],
				'woonplaats' => $this->session->userdata["ticket_data"]["woonplaats"]
			);

			$now = date('Y-m-d');

			if (count($result) < 1)
			{
				$this->db->insert('visitor', $data);
				$ticket = array(
					'user_id' => $this->db->insert_id(),
					'price' => $this->session->userdata["ticket_data"]["price"],
					'created_at' => $now
				);
				$this->db->insert('booking', $ticket);
			}
			else
			{
				$ticket = array(
					'user_id' => $result[0]->id,
					'price' =>$this->session->userdata["ticket_data"]["price"],
					'created_at' => $now
				);
				$this->db->insert('booking', $ticket);
			}
		}
	}
?>