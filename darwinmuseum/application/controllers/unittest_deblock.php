<?php
require_once(APPPATH . '/controllers/test/Toast.php');
require_once(APPPATH . '/controllers/blocked_overzicht.php'); //Require the tested class's file
 
class Unittest_deblock extends Toast
{
	private $blocked_overzicht;
	
	function __construct()
	{
		parent::__construct(__FILE__);
		$this->blocked_overzicht = new Blocked_overzicht(true);    //Instantiate class
	}
	
	function _pre()
	{
		//Prepare unit test user database entry
		$data = array(
		   'id' => 21, 
		   'voornaam' => 'z', 
		   'tussenvoegsel' => 'z', 
		   'achternaam' => 'z', 
		   'emailadres' => 'admin0@gmail.com', 
		   'wachtwoord' => ('admin'), 
		   'gebruikersrol' => 'admin', 
		   'blocked' => 2
	
		);
		
		$this->db->insert('gebruikers', $data);
	}
	
	function test_get_block()
	{
		$this->_assert_true($this->blocked_overzicht->darwin->get_user_blocked_overzicht('21'));
	}
	
	function test_block_login()
	{
		$this->_assert_true($this->blocked_overzicht->darwin->login('admin0@gmail.com', 'admin'));
	}
	
	function test_deblock()
	{
		$data = array(
		   'id' => 21, 
		   'voornaam' => 'z', 
		   'tussenvoegsel' => 'z', 
		   'achternaam' => 'z', 
		   'emailadres' => 'admin0@gmail.com', 
		   'wachtwoord' => MD5('admin'), 
		   'gebruikersrol' => 'admin', 
		   'blocked' => 3, 
		);
		//var_dump($data);
		//var_dump($this->blocked_overzicht->darwin->update_login($data));
		$this->_assert_true($this->blocked_overzicht->darwin->update_login($data));
	}
	
	function test_block_login_block()
	{
		$this->_assert_true($this->blocked_overzicht->darwin->login('admin0@gmail.com', 'admin'));
	}
	
	function _post()
	{
		//Remove unit test office from database
		$this->db->delete('gebruikers', array('id' => '21'));
	}
}