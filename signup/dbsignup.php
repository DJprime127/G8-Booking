<?php

Class dbsignup
{
	function login($POST)
	{
		$DB = new Database();
		
		$_SESSION['error'] = "";
		if(isset($POST['Email']) && isset($POST['Password']))
		{
			$arr['Email'] = $POST['Email'];
			$arr['Password'] = $POST['Password'];
			
			$query = "select * from USER where Email = :Email && Password = :limit 1";
			$data = $DB->read($query,$arr);
			if(is_array($data))
			{
				//logged in
				$_SESSION['user_id'] = $data[0]->userid;
				$_SESSION['user_name'] = $data[0]->username;
			}else{
				$SESSION['error'] = "wrong email or password";
			}
		}else{
			$_SESSION['error'] = "please enter a valid email and password";
		}
	}
	
	function signup($POST)
	{
		$DB = new Database();
		
		$_SESSION['error'] = "";
		if(isset($POST['Email']) && isset($POST['Password']))
		{
			$arr['UName'] = $POST['UName'];
			$arr['ULastName'] = $POST['ULastName'];
			$arr['Password'] = $POST['Password'];
			$arr['Email'] = $POST['Email'];
			
			$query = "insert into USER (UName,ULastName,Password,Email) values (:UName,:ULastName,:Password,:Email)";
			$data = $DB->write($query,$arr);
			if(is_array($data))
			{
				header("Location:". ROOT . "login");
				die;
				
			}else{
			$_SESSION['error'] = "please enter a valid username and password";
			}
		}
	}
	function check_logged_in()
	{
		$DB = new Database();
		if(isset($_SESSION['user_url']))
		{
			$arr['user_url'] = $POST['user_url'];
			
			$query = "select * from USER where url_address = :user_url = :limit 1";
			$data = $DB->read($query,$arr);
			if(is_array($data))
			{
				//logged in
				$_SESSION['user_id'] = $data[0]->userid;
				$_SESSION['user_name'] = $data[0]->username;
				$_SESSION['user_url'] = $data[0]->url_address;
				
				return true;
			}
		
		}
	return false;
	}
	
}