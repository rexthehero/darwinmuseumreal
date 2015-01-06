<?php
Class verkoperlogin extends CI_Model
	{
    function login($emailadres, $wachtwoord)
		{
			$this -> db -> select('id, voornaam, achternaam, emailadres, wachtwoord, gebruikersrol, geblokkeerd');
			$this -> db -> from('verkoper');
			$this -> db -> where('emailadres', $emailadres);
			$this -> db -> where('wachtwoord', $wachtwoord);
			$this -> db -> limit(1);
			
			$query = $this -> db -> get();
			
			if($query -> num_rows() == 1)
			{
                            echo $email;
				return $query->result();
			}
			else
			{
                                                     
				return false;
			}
		}
        }
  ?>
