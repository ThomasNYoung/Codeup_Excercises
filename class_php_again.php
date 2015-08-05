<?php
class User
{	
	public $username;
	public $password;
	public $isAdmin;

	public function editOtherUser()
	{
		if($this->isAdmin == true){
			// code to modify other users in db
		} else{
			return "non admins cannot edit other users";
		}
	}

	public function tryLogin()
	{

	}

	public function logout()
	{

	}
	if(!empty($_POST)) {
		if(isset($_POST['username'])) && isset($_POST['password']){

	$someUser = new User();
	$someUser->username = $_POST['username'];
	$someUser->password = $_POST['password'];
	$someUser->tryLogin();

		
		}
	}
}