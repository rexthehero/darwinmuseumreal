<?php
	Class Manager_model extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
		}

		function get_given_date($post) {
			$query = $this->db->query("SELECT *
										FROM booking
										LEFT JOIN visitor ON user_id = visitor.id
										WHERE booking.created_at = '".$post['created_at']."'");
			return $query->result();
		}

		function get_given_date_ticket($post) {
			$query = $this->db->query("SELECT *
										FROM booking
										WHERE created_at = '".$post['created_at']."'");
			return $query->result();
		}

		function get_reservation_dates()
		{
			$return[''] = 'Selecteer een dag';
			$query2 = $this->db->query("SELECT DISTINCT created_at AS `d` FROM booking");

			foreach($query2->result_array() as $row) {
				$return[] = $row['d'];
			}

			return $return;
		}

		function get_reservation_dates_only()
		{
			$return[''] = 'Selecteer een dag';
			$query2 = $this->db->query("SELECT DISTINCT created_at AS `d` FROM booking WHERE user_id > '0'");

			foreach($query2->result_array() as $row) {
				$return[] = $row['d'];
			}

			return $return;
		}

		function get_reservation_data()
		{
			$query = $this->db->query("SELECT *
										FROM booking
										LEFT JOIN visitor ON user_id = visitor.id
										WHERE created_at < CURRENT_DATE
										GROUP BY booking.created_at
										ORDER BY booking.created_at ASC
										");
			return $query->result();
		}

		function get_visitors_data()
		{
			$query = $this->db->query("SELECT *
										FROM booking
										WHERE created_at < CURRENT_DATE
										GROUP BY created_at
										ORDER BY created_at ASC
										");
			return $query->result();
		}
	}
?>