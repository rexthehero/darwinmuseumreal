<?php
Class Quiz_model extends CI_Model
	{
    function login($email)
		{
			$this -> db -> select('id, email, naam, achternaam , tussenvoegsel, quiz1, quiz2, quiz3, telefoonnummer');
			$this -> db -> from('bezoekers');
			$this -> db -> where('email', $email);
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
        
        function check_email($email)
		{
			$this -> db -> select('email');
			$this -> db -> from('bezoekers');
			$this -> db -> where('email', $email);
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
                 function add_gebruiker($data)
		{
			$query = $this->db->insert('bezoekers', $data);
		}
              
                function all_artefact()
		{
			$this -> db -> select('id, naam, omschrijfing, afbeelding, stemmen');
			$this -> db -> from('artefacten');
                        $this-> db ->  order_by('stemmen desc');
                         $this-> db ->  order_by('naam asc');
                        
			
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
           
                   function updateartefacten($data)
                {
                  $this->db->where('id', $data['id']);
	          $this->db->update('artefacten', $data);
                }
                 function updatelogin($data)
                {
                $this->db->where('id', $data['id']);
                $this->db->update('bezoekers', $data);
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
                   function getuser($id)
		{
			$this -> db -> select('id, email, naam,tussenvoegsel, achternaam ,telefoonnummer , quiz1, quiz2, quiz3');
			$this -> db -> from('bezoekers');
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
        }   
     ?>